@extends('layouts.app')

@section('content')
<main role="main" class="m-auto">

  <section class="col-12 py-5 text-justify back-light">
    <div class="main">
      <div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column align-items-center">
        <div class="center-split px-lg-5 px-md-4">
          <h3 class="text-center text-dark">All of the websites that we create have been tailor-made and coded from scratch.</h3>
        </div>
        <div class="center-split">
          <img src="/images/blog.png" alt="">
        </div>
      </div>
    </div>
  </section>

  <section class="col-12 py-5 text-justify back-dark">
    <div class="main py-5">
      <h1 class="text-center text-light pb-4">Content</h1>
      <div class="d-flex flex-column align-items-center">
        <p class="text-light">
          Should you require a copywriter, we have professional copywriters working with us. Copywriting goes hand in hand with your website’s SEO (search engine optimisation), which enables Google to find your website when potential customers search for your products or services. Our in-house copywriters have written the content for many websites. Content has been written for websites in Australia, Germany, the USA and the UK. These clients are highly satisfied, as their pages often appear in the top three positions for Google searches, leading to a flood of traffic to their websites.
        </p>
      </div>
    </div>
  </section>

  <section class="row"> 
    <div class="col-12 py-3 border-top">
      <h6 class="nav-link float-left"><i class="fas fa-angle-left"></i><a class="nav-page" href="/wordpress">WordPress</a></h6>
      <h6 class="nav-link float-right"><a class="nav-page" href="/website">Website Design</a><i class="fas fa-angle-right"></i></h6>
    </div>
  </section>
  </main>
    
@endsection