<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
	public function home() 
	{
    	return view('home');
    }

    public function blog() 
    {
    	// consulta en base de datos
	    $posts = [
	        ['id' => 1, 'title' => 'PHP',     'slug' => 'php'],
	        ['id' => 2, 'title' => 'Laravel', 'slug' => 'laravel']
	    ];

	    return view('blog', ['posts' => $posts]);
    }

    public function post($slug) 
    {
    	// consulta en base de datos con el slug
	    $post = $slug;

	    return view('post', ['post' => $post]);
    }
}
