<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ProjectPlanEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $name_v;
    public $email_v;
    public $phone_v;
    public $company_name_v;
    public $web_address_v;
    public $description_v;
    public $achieve_v;
    public $goals_v;
    public $aims_v;
    public $budget_v;
    public $deadline_v;
    public $audience_v;
    public $interact_v;
    public $competitors_v;
    public $uniqueness_v;
    public $content_v;
    public $brand_v;
    public $look_v;
    public $preference_v;
    public $pages_v;
    public $features_v;
    public $domain_v;

    public function __construct($name, $email, $phone, $company_name, $web_address, $description, $achieve, $goals, $aims, $budget, $deadline, $audience, $interact, $competitors, $uniqueness, $content, $brand, $look, $preference, $pages, $features, $domain)
    {
        $this->name_v=$name;
        $this->email_v=$email;
        $this->phone_v=$phone;
        $this->company_name_v=$company_name;
        $this->web_address_v=$web_address;
        $this->description_v=$description;
        $this->achieve_v=$achieve;
        $this->goals_v=$goals;
        $this->aims_v=$aims;
        $this->budget_v=$budget;
        $this->deadline_v=$deadline;
        $this->audience_v=$audience;
        $this->interact_v=$interact;
        $this->competitors_v=$competitors;
        $this->uniqueness_v=$uniqueness;
        $this->content_v=$content;
        $this->brand_v=$brand;
        $this->look_v=$look;
        $this->preference_v=$preference;
        $this->pages_v=$pages;
        $this->features_v=$features;
        $this->domain_v=$domain;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $e_name = $this->name_v;
        $e_phone = $this->phone_v;
        $e_email = $this->email_v;
        $e_com_name = $this->company_name_v;
        $e_web_address = $this->web_address_v;
        $e_description = $this->description_v;
        $e_achieve = $this->achieve_v;
        $e_goals = $this->goals_v;
        $e_aims = $this->aims_v;
        $e_budget = $this->budget_v;
        $e_deadline = $this->deadline_v;
        $e_audience = $this->audience_v;
        $e_interact = $this->interact_v;
        $e_competitors = $this->competitors_v;
        $e_uniqueness = $this->uniqueness_v;
        $e_content = $this->content_v;
        $e_brand = $this->brand_v;
        $e_look = $this->look_v;
        $e_preference = $this->preference_v;
        $e_pages = $this->pages_v;
        $e_features = $this->features_v;
        $e_domain = $this->domain_v;


        return $this->view('pages.project_plan_email', compact("e_name", "e_email", "e_phone", "e_com_name", "e_web_address", "e_description", "e_achieve", "e_goals", "e_aims", "e_budget", "e_deadline", "e_audience", "e_interact", "e_competitors", "e_uniqueness", "e_content", "e_brand", "e_look", "e_preference", "e_pages", "e_features", "e_domain"));
    }
}
