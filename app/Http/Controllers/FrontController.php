<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Comment;
use App\Section;
use App\SlideImage;

class FrontController extends Controller
{
    public function index(){
      $sections = Section::where('active', 1)->get();
      $slideImages = SlideImage::all();
      return view('front.index', compact('sections', 'slideImages'));
    }

    public function about(){
      $sections = Section::where('active', 1)->get();
      $comments = Comment::all();
      $about = Section::find(99);
      return view('front.about', compact('sections', 'comments', 'about'));
    }

    public function sections(){
      $sections = Section::where('active', 1)->get();
      return view('front.sections', compact('sections'));
    }

    public function section(Section $section){
      $sections = Section::where('active', 1)->get();
      $slideImages = $section->images;
      return view('front.section', compact('section', 'sections', 'slideImages'));
    }

    public function news(){
      $sections = Section::where('active', 1)->get();
      $products = Product::where('new', 1)->get();
      return view('front.news', compact('sections', 'products'));
    }

    public function contact(){
      $sections = Section::where('active', 1)->get();
      return view('front.contact', compact('section', 'sections'));
    }
}
