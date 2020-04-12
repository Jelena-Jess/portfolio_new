<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    //Contact page
    public function home(){
        return view('pages.contact');
    }
    public function send(Request $get)
    {
        $this->validate($get, [
            "name" => "required",
            "email" => "required|email:rfc,dns",
            "phone" => "required|digits_between:9,14",
            "message" => "required",
        ]);
        $name = $get->name;
        $email = $get->email;
        $phone = $get->phone;
        $message = $get->message;

        Mail::to('jelenapetkov2020@gmail.com')->send(new ContactEmail($name, $email, $phone, $message));
        Session::flash("success");
        return back();
        //return "hello";
    }

    //Project Plan Page
    public function project_plan(){
        return view('pages.project_plan');
    }
    public function project_plan_send(Request $get)
    {
        $this->validate($get, [
            "name" => "required",
            "email" => "required|email:rfc,dns",
            "phone" => "required|digits_between:9,14",
            "company_name" => "nullable",
            "web_address" => "nullable",
            "description" => "nullable",
            "achieve" => "nullable",
            "goals" => "nullable",
            "aims" => "nullable",
            "budget" => "nullable",
            "deadline" => "nullable",
            "audience" => "nullable",
            "interact" => "nullable",
            "competitors" => "nullable",
            "uniqueness" => "nullable",
            "content" => "nullable",
            "brand" => "nullable",
            "look" => "nullable",
            "preference" => "nullable",
            "pages" => "nullable",
            "features" => "nullable",
            "domain" => "nullable",
        ]);

        $name = $get->name;
        $email = $get->email;
        $phone = $get->phone;
        $company_name = $get->company_name;
        $web_address = $get->web_address;
        $description = $get->description;
        $achieve = $get->achieve;
        $goals = $get->goals;
        $aims = $get->aims;
        $budget = $get->budget;
        $deadline = $get->deadline;
        $audience = $get->audience;
        $interact = $get->interact;
        $competitors = $get->competitors;
        $uniqueness = $get->uniqueness;
        $content = $get->content;
        $brand = $get->brand;
        $look = $get->look;
        $preference = $get->preference;
        $pages = $get->pages;
        $features = $get->features;
        $domain = $get->domain;

        Mail::to('jelenapetkov2020@gmail.com')->send(new ProjectPlanEmail($name, $email, $phone, $company_name, $web_address, $description, $achieve, $goals, $aims, $budget, $deadline, $audience, $interact, $competitors, $uniqueness, $content, $brand, $look, $preference, $pages, $features, $domain));
        Session::flash("success");
        return back();
        //return "hello";
    }
}
