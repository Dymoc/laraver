<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dump('index');
        $newsList = $this->getNews();
        $categoryes = [];


        foreach ($newsList as $news) {
            if (!in_array($news['category'], $categoryes)) {
                array_push($categoryes, $news['category']);
            }
        }

        return view('admin.category.index', [
            'categoryes' => $categoryes
        ]);
    }

    public function categoryOne($category)
    {
        view('yes');
    }

    public function one($category)
    {
        dd($category);

        $newsList = $this->getNews();
        $categoryNews = [];

        foreach ($newsList as $news){
            if($news['category'] == $category){
                array_push($categoryNews, $news);
            }
        }

        dd($categoryNews);

        return view('admin.category.one', [
            'categoryNews' => $categoryNews
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
