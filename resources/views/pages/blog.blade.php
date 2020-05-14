@extends('layouts.app')

@section('content')
<main role="main" class="m-auto">

  <section class="col-12 py-5 text-justify back-light">
    <div class="main">
      <div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column align-items-center">
        <div class="center-split px-lg-5 px-md-4">
          <p>We have a collection of articles on websites, video, infographics and small business marketing. Please choose from any category or see all the latest articles.</p>
        </div>
        <div class="center-split">
          <img src="/images/blog.png" alt="">
        </div>
      </div>
    </div>
  </section>

  <section id="plans" class="py-5 back-dark">
    <div class="main">
     <div>
      <h2 class="text-center text-dark py-5"><a>CATEGORIES</a></h2>
        <div class="d-flex flex-wrap justify-content-center">

          <div class="card">
            <div class="card-body">
              <div class="text-center pt-2 pb-4"><i class="fas fa-palette fa-4x text-dark"></i></div>
              <h4 class="card-title text-center">CUSTOM DESIGN</h4>
              <p class="card-text"> the visual design, UX design, imagery collection, and sitemap and page structure generation.</p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="text-center"><i class="fas fa-palette fa-4x text-dark"></i></div>
              <h4 class="card-title">INFORMATION ARCHITECTURE</h4>
              <p class="card-text">We generally spend up to 30 hours in this phase. That’s onboarding, initial meetings with our clients, and our design team’s work internally on the project, including final presentation and approval.</p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="text-center"><i class="fas fa-palette fa-4x text-dark"></i></div>
              <h4 class="card-title text-dark">MOBILE FRIENDLY DESIGN</h4>
              <p class="card-text">Your new website will look great and operate correctly on all devices. From large desktop monitors down to the latest smartphones.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="col-12 py-5 text-justify bg-light">
    <div class="main py-5">
      <h1 class="text-center pb-4">LATEST POSTS</h1>
      <div class="d-flex align-items-center blog-post">
        <div class="inner">
          <a href=""><img src="/images/blog.png" alt=""></a>
        </div>
        <div class="p-3 blog-post-intro">
          <h3><a href="#">Is My Website Targeting The Best Prospects?</a></h3>
          <p>Building an effective website that targets the best prospects for your business takes time and resources.</p>
          <p class="small">Jelena Petkov</p>
          <p class="small">13/05/2020</p>
        </div>
      </div>
      <div class="d-flex align-items-center blog-post">
        <div class="inner">
          <img src="/images/blog.png" alt="">
        </div>
        <div class="p-3 blog-post-intro">
          <h3>Is My Website Targeting The Best Prospects?</h3>
          <p>Building an effective website that targets the best prospects for your business takes time and resources.</p>
          <p class="small">Jelena Petkov</p>
          <p class="small">13/05/2020</p>
        </div>
      </div>
      <div class="d-flex align-items-center blog-post">
        <div class="inner">
          <img src="/images/blog.png" alt="">
        </div>
        <div class="p-3 blog-post-intro">
          <h3>Is My Website Targeting The Best Prospects?</h3>
          <p>Building an effective website that targets the best prospects for your business takes time and resources.</p>
          <p class="small">Jelena Petkov</p>
          <p class="small">13/05/2020</p>
        </div>
      </div>
    </div>
  </section>
  
  </main>
    
@endsection