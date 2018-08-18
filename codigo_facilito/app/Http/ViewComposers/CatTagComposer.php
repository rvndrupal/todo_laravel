<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;

use App\Category;
use App\Tag;

class CatTagComposer{

    public function compose(View $view)
    {
        
        $categories= Category::orderBy('name','DES')->get();
        $tags=Tag::orderBy('name','DES')->get();

        $view->with('categories',$categories)
            ->with('tags',$tags);
        //compact no funciona tiene que ser asi

    }

}