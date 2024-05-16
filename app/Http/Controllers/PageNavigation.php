<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageNavigation extends Controller
{
    function index()
    {
        return view('listpage');
    }

    function create()
    {
        return view('create');
    }

    function detail($id)
    {
        return view('detail', ['id' => $id]);
    }

    function modify()
    {
        return view('modify');
    }

    function delete()
    {
        return view('delete');
    }
}
