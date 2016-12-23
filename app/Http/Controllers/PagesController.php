<?php

namespace App\Http\Controllers;


class PagesController extends Controller
{
    public function home()
    {
      $people = ['Taylor', 'Matt', 'Jeffery'];
      return view('welcome', compact(people));
    }

    public function about()
    {
      return 'About Page.';
    }
}
