<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image as ImageFacade;
use App\Models\Image as ImageModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Post;
use App\Events\PostCreated;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('images')->get();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the form data
        $validatedData = $request->validate(
            [
                'title' => 'required|max:255',
                'keywords' => 'required|max:255',
                'page_description' => 'required|max:255',
                'blog-content' => 'required',
                'images.*' => 'image|mimes:jpeg,png,jpg,gif',
                'category' => 'required',
                'main_image_description' => 'required|max:255',
            ],
            [
                'title.required' => 'The title field is required.',
                'title.max' => 'The title may not be greater than :max characters.',
                'keywords.required' => 'The keywords field is required.',
                'keywords.max' => 'The keywords may not be greater than :max characters.',
                'page_description.required' => 'The description field is required.',
                'content.required' => 'The content field is required.',
                'images.*.image' => 'The file must be an image.',
                'images.*.mimes' => 'Only JPEG, PNG, JPG, and GIF files are allowed.',
                'category.required' => 'The category field is required.',
                'main_image_description.required' => 'The Main Image Description field is required.',
            ]

        );

        // Generate the initial slug
        $slug = Str::slug($validatedData['title']);

        $existingPost = Post::where('slug', $slug)->first();

        if ($existingPost) {
            return redirect()->back()->withErrors('The title already exists. Please choose another title.')->withInput();
        }

        // create a new Post instance
        $post = new Post();
        $post->title = $validatedData['title'];
        $post->content = $validatedData['blog-content'];
        $post->keywords = $validatedData['keywords'];
        $post->description = $validatedData['page_description'];
        $post->category = $validatedData['category'];
        $post->slug = $slug;
        $post->published = true;

        // save the post
        $post->save();
        event(new PostCreated());

        // handle the main image upload
        if ($request->hasFile('main-image')) {
            $mainImage = $request->file('main-image');

            // Generate a unique name for the main image
            $mainImageFilename = uniqid() . '.' . $mainImage->getClientOriginalExtension();

            // Resize and optimize the main image (if necessary)
            // the code is working correctly with ImageFacade
            $resizedMainImage = ImageFacade::make($mainImage)->resize(800, null, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->encode('jpg', 80);

            // Save the resized main image to the public/images folder
            $resizedMainImagePath = public_path('/assets/img/blog-posts/main-image/' . $mainImageFilename);
            File::put($resizedMainImagePath, $resizedMainImage);

            // Update the post with the main image filename or URL
            $post->main_image = $mainImageFilename;
            // Save the image description to the post
            $post->main_image_description = $validatedData['main_image_description'];
            $post->save();
        }

        //handle image uploads
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $uploadedImage) {

                // Generate a unique name for the image
                $filename = uniqid() . '.' . $uploadedImage->getClientOriginalExtension();

                // Resize and optimize the image
                // the code is working correctly ImageFacade it's good, itellesense its not good. dont worry about the red line under ImageFacade
                $resizedImage = ImageFacade::make($uploadedImage)->resize(800, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->encode('jpg', 80);

                // Save the resized image to the public/images folder
                $resizedImagePath = public_path('assets/img/blog-posts/images' . $filename);
                File::put($resizedImagePath, $resizedImage);

                //create an image instance 
                $imageData = new ImageModel();
                $imageData->post_id = $post->id;
                $imageData->image_URL = $filename;

                $imageData->save();
            }
        }


        // redirect to the posts.index page if there are no validation errors
        return redirect()->route('posts.index')->with('success', 'Post created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $randomPosts =  Post::inRandomOrder()->take(4)->get();

        return view("posts.show", compact('post', 'randomPosts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        // find the post by the slug
        $post = Post::where('slug', $slug)->firstOrFail();

        // validate the input field
        $validatedData = $request->validate(
            [
                'title' => 'required|max:255',
                'keywords' => 'required|max:255',
                'page_description' => 'required|max:255',
                'blog-content' => 'required',
            ],
            [
                'title.required' => 'The title field is required.',
                'title.max' => 'The title may not be greater than :max characters.',
                'keywords.required' => 'The keywords field is required.',
                'keywords.max' => 'The keywords may not be greater than :max characters.',
                'page_description.required' => 'The description field is required.',
                'content.required' => 'The content field is required.',
            ]
        );

        // Generate the initial slug
        $slug = Str::slug($validatedData['title']);

        $existingPost = Post::where('slug', $slug)->first();

        if ($existingPost) {
            return redirect()->back()->withErrors('The title already exists. Please choose another title.')->withInput();
        }


        // update post attribured
        $post->title = $validatedData['title'];
        $post->content = $validatedData['blog-content'];
        $post->keywords = $validatedData['keywords'];
        $post->description = $validatedData['page_description'];
        $post->slug = $slug;
        // save the post
        $post->save();

        event(new PostCreated());

        return redirect()->route('posts.index')->with('success', 'Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        // Store the post data before deletion for the event
        $postData = $post->toArray();
        $deletedPost = new Post($postData);

        // Delete the associated image from the server
        if ($post->image_URL) {
            $imagePath = public_path('images/' . $post->image_URL);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
        }

        $post->delete();

        // Fire the event with the stored post data
        event(new PostCreated());

        return redirect()->route('posts.index')->with('success', 'Post deleted successfully');
    }
}
