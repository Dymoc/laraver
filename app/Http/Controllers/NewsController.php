<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{

    public function index()
    {
        $newsList = DB::table('news')->get();
        return view('news.index', [
            'newsList' => $newsList
        ]);
    }

    public function show(int $id)
    {
        $news = DB::table('news')->find($id);
        return view('news.show', [
            'id' => $id,
            'news' => $news
        ]);
    }

    public function category()
    {
        $categoryes = DB::table('category')->get();

        return view('news.category.index', [
            'categoryes' => $categoryes
        ]);
    }

    public function categoryOne($category_id)
    {
        $categoryNews = DB::table('news')
            ->join('category', 'category.id', '=', 'news.category_id')
            ->select('news.*', 'category.title as category')
            ->where('category_id', '=', $category_id)
            ->get();

        return view('news.category.one', [
            'categoryNews' => $categoryNews
        ]);
    }
}
