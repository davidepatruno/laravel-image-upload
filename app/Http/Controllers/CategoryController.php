<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
  public function show()
  {
    protected $fillable = ['title', 'slug'];
    $categories = Category::all();
  }

}
