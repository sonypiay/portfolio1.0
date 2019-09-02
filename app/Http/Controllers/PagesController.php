<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function index()
  {
    return response()->view('welcome');
  }
  public function my_portfolio()
  {
    return response()->view('portfolio');
  }
}
