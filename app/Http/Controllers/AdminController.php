<?php

namespace App\Http\Controllers;

use App\Models\AdminBorrow;
use App\Models\Article;
use App\Models\Book;
use App\Models\Lastevent;
use App\Models\Magazine;
use App\Models\News;
use App\Models\Question;
use App\Models\Youtube;
use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function index() {
        return view('pages.admin.index',[
         'books' => Book::count(),
         'borrows' => AdminBorrow::count(),
        ]);
   }

}
