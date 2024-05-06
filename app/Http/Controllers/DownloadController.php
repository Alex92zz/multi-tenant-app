<?php

namespace App\Http\Controllers;

use Filament\Notifications\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class DownloadController extends Controller
{
    public function download ($filename)
    {

        Log::info('Downloading function started: ' . $filename);
        
        $filepath = storage_path('app/conversion-outputs/' . $filename);

        Log::info('Filepath: ' . $filepath);

        if (file_exists($filepath)) {

            Log::info('File found. Downloading...');

            Notification::make()
            ->success()
            ->title(__('Conversion successful, download initiated'))
            ->send();

            return response()->download($filepath, $filename);
        }

        Log::info('File not found. Aborting...');

        abort(404);
    }
}
