<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
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
        return view('pages.website');
        }

    public function logo(){
        return view('pages.logo');
        }

    public function wordpress(){
        return view('pages.wordpress');
        }

    public function content(){
        return view('pages.content');
        }
        
}
