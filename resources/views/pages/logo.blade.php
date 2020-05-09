@extends('layouts.app')

@section('content')
  <main role="main" class="m-auto">

    <section class="col-12 py-5 text-justify back-light">
      <div class="main py-5">
        <div class="d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column align-items-center">
          <div class="center-split px-lg-5 px-md-4">
            <h3 class="text-center text-dark">Your personal stamp</h3>
          </div>
          <div class="center-split">
            <img src="/images/logo.png" alt="">
          </div>
        </div>
      </div>
    </section>
    

    <section class="col-12 py-5 text-justify back-pink">
      <div class="main py-5">
        <h1 class="text-center text-dark pb-4">The stages of logo creation</h1>
        <div class="d-flex flex-column align-items-center">
          <p>
            The logo design process starts with a little brainstorming, and some rough sketches you will review. Then we create the logo digitally. Using your feedback as we go, we will modify the initial idea together so that the final product will be a perfect mirror of your company.
          </p>
          <p>
            Once finalised, all logo files and formats will be supplied to you in one tidy package.
          </p>
        </div>
      </div>
    </section>

    <section class="row back-light"> 
      <div class="col-12 py-3 border-top">
        <h6 class="nav-link float-left"><i class="fas fa-angle-left"></i><a class="nav-page" href="/website">Website Design</a></h6>
        <h6 class="nav-link float-right"><a class="nav-page" href="/wordpress">WordPress</a><i class="fas fa-angle-right"></i></h6>
      </div>
    </section>

  </main>
    
@endsection