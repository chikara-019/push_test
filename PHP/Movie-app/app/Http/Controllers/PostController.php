<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Services\PostService;


class PostController extends Controller
{
    public function __construct(
        PostService $post_service
    ) {

        $this->post_service = $post_service;
    }

    public function searchMovieList(Request $request)
    {
        $keyword = $request->input('q');
        $response = $this->post_service->searchMovieList($keyword);

        return response('', 200);
    }
}
