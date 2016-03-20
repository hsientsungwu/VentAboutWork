<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Repositories\PostRepository;
use App\Http\Requests\PublishPostRequest;

class PostController extends Controller
{
    public function index() {
    	// display publish form
    	return view('form');
    }

    public function publish(PublishPostRequest $request) {
    	// handling post data
    	dd($request);
    }

    public function post() {
    	// displaying published data
    }
}
