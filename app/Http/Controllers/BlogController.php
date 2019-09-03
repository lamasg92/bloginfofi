<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\Invoice;

class BlogController extends Controller
{
    
	public function getIndex() {
		$posts = Post::paginate(10);

		return view('blog.index')->withPosts($posts);
	}

    public function getIndexTrabajo() {
        $posts = Post::orderBy('created_at', 'desc')->where('category_id','=','6')->paginate(10);
        return view('blog.index')->withPosts($posts);
    }

    public function getIndexProyecto() {
        $posts = Post::orderBy('created_at', 'desc')->where('category_id','=','7')->paginate(10);
        return view('blog.index')->withPosts($posts);
    }

    public function getIndexPropuesta() {
        $posts = Post::orderBy('created_at', 'desc')->where('category_id','=','5')->paginate(10);
        return view('blog.index')->withPosts($posts);
    }



    public function getSingle($slug) {
    	// fetch from the DB based on slug
    	$post = Post::where('slug', '=', $slug)->first();

    	// return the view and pass in the post object
    	return view('blog.single')->withPost($post);
    }

    public function getBills(){
       $invoices=Invoice::all();
       return view('blog.bills')->with('invoices',$invoices);
    }
}
