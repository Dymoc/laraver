<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index()
    {
        return view('news.index', [
            'newsList' => $this->getNews()
        ]);
    }

    public function show(int $id)
    {
        $newsList = $this->getNews();
//        dd($newsList);
        $news =  $newsList[$id];


        return view('news.show', [
            'id' => $id,
            'news' => $news
        ]);
    }

    public function category()
    {
        $newsList = $this->getNews();
        $categoryes = [];

        foreach ($newsList as $news){
            if(!in_array($news['category'], $categoryes)){
                array_push($categoryes, $news['category']);
            }
        }
//        dump($categoryes);

        return view('news.category.index', [
            'categoryes' => $categoryes
        ]);
    }

    public function categoryOne($category)
    {
        $newsList = $this->getNews();
        $categoryNews = [];

        foreach ($newsList as $news){
            if($news['category'] == $category){
                array_push($categoryNews, $news);
            }
        }

//        dump($categoryNews);

        return view('news.category.one', [
            'categoryNews' => $categoryNews
        ]);
    }
}
