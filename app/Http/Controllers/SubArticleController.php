<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\subarticle;

class SubArticleController extends Controller
{
    public function index()
    {
        $subArt = subarticle::join('article', 'article.art_id', '=', 'subarticle.subart_art_id')->get();
        return $subArt;
    }

    public function store(Request $request)
    {
        $subArt = new subarticle();

        $subArt->subart_desc = $request->subart_desc;
        $subArt->subart_art_id = $request->subart_art_id;

        if($subArt->save())
        {
            return $subArt;
        }

        return false;
    }

    public function update(Request $request)
    {
        $subArt = subarticle::findOrFail($request->subart_id);

        $subArt->subart_desc = $request->subart_desc;
        $subArt->subart_art_id = $request->subart_art_id;

        if($subArt->save())
        {
            return $subArt;
        }

        return false;
    }

    public function delete($id)
    {
        $subArt = subarticle::destroy($id);

        return $subArt;
    }
}
