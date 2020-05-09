<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
        }

     public function projects(){
        return view('pages.projects');
        }

    public function project1(){
        $title='Electronic diary for schools';
        return view('pages.project1')->with('title', $title);
        }

    public function project2(){
        $title='ChocoTale';
        return view('pages.project2')->with('title', $title);
        }

    public function project3(){
        $title="Sonya's Kitchen";
        return view('pages.project3')->with('title', $title);
        }
    
    public function website(){
        $title='Web design & dev';
        return view('pages.website')->with('title', $title);
        }

    public function logo(){
        $title='Logo Design';
        return view('pages.logo')->with('title', $title);
        }

    public function content(){
        $title='Content creation';
        return view('pages.content')->with('title', $title);
        }
        
}
