<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class Form extends Controller
{
    public function callback()
    {
        return view('form/callback');
    }

    public function data()
    {
        return view('form/data');
    }

    public function inFile(Request $request)
    {
        $line = implode(' ', $request->except('_token'));

        Storage::append('callback.txt', $line);
        return redirect('/');
    }

    public function dataInfo(Request $request)
    {
        $line = implode(' ', $request->except('_token'));

        Storage::append('dataInfo.txt', $line);
        return redirect('/');
    }


}
