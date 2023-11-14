<?php

namespace App\Events;

use App\Models\Post;
use App\Models\LocalSEO;
use App\Models\Project;
use App\Models\Sitemap;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;

use Illuminate\Support\Str;


class PostCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * The newly created post.
     *
     * @var \App\Models\Post
     */
    public $post;


    /**
     * Create a new event instance.
     *
     * @param  \App\Models\Post  $post
     * @return void
     */
    public function __construct()
    {
        $this->handle();
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }


    public function handle()
    {


        // Retrieve all published blog posts from the database
        $posts = Post::all();
        $projects = Project::all();
        $localSEORecords = LocalSEO::all();
        $URLs = Sitemap::all();

        // Create the initial sitemap XML string
        $sitemap = '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">';



        // Add each blog post URL to the sitemap
        foreach ($URLs as $url) {
            $lastmod = $url->updated_at->toAtomString(); // Get the last modification date
            $sitemap .= '
            <url>
            <loc>' . $url->url . '</loc> 
            <lastmod>' . $lastmod . '</lastmod>
            <priority>' . $url->priority . '</priority>
            </url>';
        }

        // Add each blog post URL to the sitemap
        foreach ($projects as $project) {
            $url = route('projects.show', ['slug' => $project->slug]); // Generate the actual link
            $lastmod = $project->updated_at->toAtomString(); // Get the last modification date
            $sitemap .= '<url><loc>' . $url . '</loc> 
            <lastmod>' . $lastmod . '</lastmod>
            <priority>0.80</priority>
            </url>';
        }
        
        // Add each blog post URL to the sitemap
        foreach ($posts as $post) {
            $url = route('posts.show', ['slug' => $post->slug]); // Generate the actual link
            $lastmod = $post->updated_at->toAtomString(); // Get the last modification date
            $sitemap .= '<url><loc>' . $url . '</loc> 
            <lastmod>' . $lastmod . '</lastmod>
            <priority>0.80</priority>
            </url>';
        }

        // Add each local SEO URL to the sitemap
        foreach ($localSEORecords as $localSEO) {
            $url = route('localSEO.show', ['slug' => $localSEO->slug]); // Generate the actual link
            $lastmod = $localSEO->updated_at->toAtomString(); // Get the last modification date
            $sitemap .= '<url><loc>' . $url . '</loc>
            <priority>0.64</priority>
        <lastmod>' . $lastmod . '</lastmod>
    </url>';
        }



        $sitemap .= '</urlset>';



        // Save the sitemap to a file
        file_put_contents(public_path('sitemap.xml'), $sitemap);
    }

}
