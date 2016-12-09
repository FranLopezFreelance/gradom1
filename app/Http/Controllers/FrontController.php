<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Section;
use App\SlideImage;

class FrontController extends Controller
{
    public function index(){
      $sections = Section::all();
      $slideImages = SlideImage::all();
      return view('front.index', compact('sections', 'slideImages'));
    }

    public function about(){
      $sections = Section::all();
      return view('front.about', compact('sections'));
    }

    public function sections(){
      $sections = Section::all();
      return view('front.sections', compact('sections'));
    }

    public function section(Section $section){
      $sections = Section::all();
      return view('front.section', compact('section', 'sections'));
    }

    public function news(){
      $sections = Section::all();
      return view('front.news', compact('section', 'sections'));
    }

    public function contact(){
      $sections = Section::all();
      return view('front.contact', compact('section', 'sections'));
    }
}
