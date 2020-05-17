@extends('layouts.app')

@section('content')
<main role="main" class="m-auto">

  <section>
    <div class="text-center back-light pt-4">
      <a href="" class="">Blog Home</a>
    </div>
  </section>

  <section class="py-5 text-justify back-light">
    <div class="main">
      <div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column align-items-center">
        <div class="animate-left center-split px-lg-5 px-md-4">
          <p>We have a collection of articles on websites, video, infographics and small business marketing. Please choose from any category or see all the latest articles.</p>
        </div>
        <div class="animate-right center-split">
          <img src="/images/blog.png" alt="">
        </div>
      </div>
    </div>
  </section>

  <section id="plans" class="py-5 back-dark">
    <div class="main my-5">
      <div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column text-align-center justify-content-center">

        <div class="blog-card m-3 mx-auto bg-very-light-pink">
          <a href="/blog/coding"><img src="/images/blog.png" alt=""></a>
        </div>
        <div class="blog-card m-3 mx-auto bg-pink">
          <a href="/blog/design"><img src="/images/blog.png" alt=""></a>
        </div>
        <div class="blog-card m-3 mx-auto bg-light-pink">
          <a href="/blog/inspiration"><img src="/images/blog.png" alt=""></a>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-light">
    <div class="py-5">
      <h1 class="text-center">LATEST POSTS</h1>
      
      <div class="separator">
        <div class="line line-left"></div>
        <div class="asterisk"><i class="fas fa-circle"></i></div>
        <div class="line line-right"></div>
      </div>

      <div class="mx-5 pt-4 d-flex flex-wrap flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column text-align-center justify-content-center"> 
        <div class="blog d-flex flex-xl-row flex-lg-column flex-md-column flex-sm-column flex-column align-items-center bg-grey m-4 mx-auto">
          <div class="inner">
            <a href="/blog/post"><img src="/images/blog.png" alt=""></a>
          </div>
          <div class="p-3">
            <h3><a href="/blog/post">Is My Website Targeting The Best Prospects?</a></h3>
            <p>Building an effective website that targets the best prospects for your business takes time and resources.</p>
            <p class="small">Jelena Petkov</p>
            <p class="small">13/05/2020</p>
          </div>
        </div>
        <div class="blog d-flex flex-xl-row flex-lg-column flex-md-column flex-sm-column flex-column align-items-center bg-grey m-4 mx-auto">
          <div class="inner">
            <img src="/images/blog.png" alt="">
          </div>
          <div class="p-3">
            <h3>Is My Website Targeting The Best Prospects?</h3>
            <p>Building an effective website that targets the best prospects for your business takes time and resources.</p>
            <p class="small">Jelena Petkov</p>
            <p class="small">13/05/2020</p>
          </div>
        </div>
        <div class="blog d-flex flex-xl-row flex-lg-column flex-md-column flex-sm-column flex-column align-items-center bg-grey m-4 mx-auto">
          <div class="inner">
            <img src="/images/blog.png" alt="">
          </div>
          <div class="p-3">
            <h3>Is My Website Targeting The Best Prospects?</h3>
            <p>Building an effective website that targets the best prospects for your business takes time and resources.</p>
            <p class="small">Jelena Petkov</p>
            <p class="small">13/05/2020</p>
          </div>
        </div>
        <div class="blog d-flex flex-xl-row flex-lg-column flex-md-column flex-sm-column flex-column align-items-center bg-grey m-4 mx-auto">
          <div class="inner">
            <img src="/images/blog.png" alt="">
          </div>
          <div class="p-3">
            <h3>Is My Website Targeting The Best Prospects?</h3>
            <p>Building an effective website that targets the best prospects for your business takes time and resources.</p>
            <p class="small">Jelena Petkov</p>
            <p class="small">13/05/2020</p>
          </div>
        </div>
      </div>

    </div>
  </section>
  
  </main>
    
@endsection