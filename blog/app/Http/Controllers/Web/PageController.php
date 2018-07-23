<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Post;
use App\Category;

class PageController extends Controller
{
    public function blog(){
        $posts=Post::orderBy('id','DESC')->where('status','PUBLISHED')->paginate(3);
        return view('web.posts',compact('posts'));
    }

    public function category($slug)
    {
        //obtenemos la categoria
        $category=Category::where('slug',$slug)->pluck('id')->first();//con pluck obtienes solo el id

        //ahora obtenemos los post
        $posts=Post::where('category_id',$category)
        ->orderBy('id','DESC')->where('status','PUBLISHED')->paginate(3);

        return view('web.posts',compact('posts'));
    }

    public function tag($slug)
    {
      
        //ahora obtenemos los post
        $posts=Post::whereHas('tags',function($query)use($slug){
            $query->where('slug',$slug);
            //consigue los post que tengan etiquetas siempre y cuando estas etiquetas tengan el slug que estoy utilizando
        })
        ->orderBy('id','DESC')->where('status','PUBLISHED')->paginate(3);

        return view('web.posts',compact('posts'));
    }

    public function post($slug)
    {
        $post=Post::where('slug', $slug)->first();

        return view('web.post', compact('post'));
    }

    
}
