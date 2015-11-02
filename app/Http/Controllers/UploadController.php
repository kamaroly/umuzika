<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\File as FileModel;
use Illuminate\Contracts\Filesystem\Factory as Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Response;

class UploadController extends Controller
{
    public $file;
  public $storage;
  function __construct(FileModel $file, Storage $storage) {
    $this->file = $file;
    $this->storage = $storage;
  }

	/**
	 * Upload a file to the server
	 * @param  Request $request input
	 * @return json           
	 */
    public function upload() {

    if(Input::hasFile('file')) {

      //upload an image to the /img/tmp directory and return the filepath.
      $file = Input::file('file');

      $extension = $file->getClientOriginalExtension();

      $filename = time() . $file->getFilename();
      
      $this->storage->disk('local')->put($filename . '.' . $extension, File::get($file));

      $entry = $this->file;

      $entry->mime = $file->getClientMimeType();

      $entry->original_filename = $filename;

      $entry->filename = $filename . '.' . $extension;

      $entry->save();

      return response()->json(array('path'=> route('files.get',['filename' => $entry->filename])), 200);
    } 
    else 
    {
      return response()->json(false, 200);
    }
  }

  /**
   * Get file from the diesk
   * @param  string $filename 
   * @return file           
   */
  public function get($filename=null) {

    $entry = $this->file->where('filename', '=', $filename)->first();
    // If we don't have a file, return this dumy path
    if (is_null($entry)) {
      return redirect(url('assets/dist/img/no-image.png'));
    }

    $file = $this->storage->disk('local')->get($entry->filename);

    return (new Response($file))
      ->header('Content-Type', $entry->mime);
  }
}
