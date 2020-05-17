@extends('layouts.app')

@section('content')
<main role="main" class="m-auto">

  <section>
    <div class="text-center back-light pt-4">
      <a href="/blog" class="">Blog Home</a> &rarr; <a href="" class="">Inspiration
    </div>
  </section>

  <section class="py-5 text-justify bg-light-pink">
    <div class="main my-5">
      <div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column align-items-center">
        <div class="center-split px-lg-5 px-md-4">
          <p>Check out our articles covering all facets of websites. We write about topics that business owners often ask us about and hope you find them helpful too.</p>
          <p class="mt-5">If you’re interested in web maintenance, here’s a link to our managed plans.</p>
          <div class="text-center">
            <a href="" class="btn">GET IN TOUCH</a>
          </div>
        </div>
        <div class="center-split">
          <img src="/images/blog.png" alt="">
        </div>
      </div>
    </div>
  </section>

  <section class="bg-light">
    <div class="py-5">

      <div class="pt-4 d-flex flex-wrap text-align-center justify-content-center"> 
        <div class="blog">
          <div class="blog-image inner">
            <a href="/blog/post"><img src="/images/choco_big.png" alt=""></a>
          </div>
          <div class="blog-text p-3">
            <h3 class="pt-3"><a href="/blog/post">Is My Website Targeting The Best Prospects?</a></h3>
            <p>Building an effective website that targets the best prospects for your business takes time and resources.</p>
            <p class="small">Jelena Petkov</p>
            <p class="small">13/05/2020</p>
          </div>
        </div>
        <div class="blog">
          <div class="blog-image inner">
            <a href="/blog/post"><img src="/images/choco_big.png" alt=""></a>
          </div>
          <div class="blog-text p-3">
            <h3 class="pt-3"><a href="/blog/post">Is My Website Targeting The Best Prospects?</a></h3>
            <p>Building an effective website that targets the best prospects for your business takes time and resources.</p>
            <p class="small">Jelena Petkov</p>
            <p class="small">13/05/2020</p>
          </div>
        </div>
        <div class="blog">
          <div class="blog-image inner">
            <a href="/blog/post"><img src="/images/choco_big.png" alt=""></a>
          </div>
          <div class="blog-text p-3">
            <h3 class="pt-3"><a href="/blog/post">Is My Website Targeting The Best Prospects?</a></h3>
            <p>Building an effective website that targets the best prospects for your business takes time and resources.</p>
            <p class="small">Jelena Petkov</p>
            <p class="small">13/05/2020</p>
          </div>
        </div>
        <div class="blog">
          <div class="blog-image inner">
            <a href="/blog/post"><img src="/images/choco_big.png" alt=""></a>
          </div>
          <div class="blog-text p-3">
            <h3 class="pt-3"><a href="/blog/post">Is My Website Targeting The Best Prospects?</a></h3>
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