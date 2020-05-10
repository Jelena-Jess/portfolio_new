@extends('layouts.app')

@section('content')

  <main role="main" class="m-auto">
    
    <section class="col-12 py-5 text-justify back-light">
      <div class="main">
        <div class="d-flex flex-column align-items-center">
          <div class="center-split">
            <img src="/images/contact.png" alt="">
          </div>
          <div class="center-split px-lg-5 px-md-4">
            <h3 class="text-center text-dark">Questions? Wanna set an online meeting?</h3>
            <h4 class="text-center text-dark">CALL +381.62.964.55.99</h4>
            <h4 class="text-center text-dark">or just use the form below</h4>
          </div>
        </div>
      </div>
    </section>

    <div class="back-pink">
      <div id="triangle-down"></div>
    </div>

    <section class="col-12 py-5 text-justify back-pink">
      <div class="main">
        <div class="d-flex flex-column align-items-center justify-content-center">

          @if(Session::has("success"))
            <div class="alert alert-light">
              <h4><b>Success</b>, your email has been sent.</h4>
            </div>
          @endif
          
          <div class="contact-form p-3 m-auto">
            <form method="POST" action="{{url('send')}}">
              @csrf

              <div class="form-group">
                <div class="">
                <input name="name" type="text" class="form-control{{$errors->has('name') ? ' is-invalid' : ''}}" value="{{old('name')}}" placeholder="&#42;Name" data-parsley-required-message="Name is required" required autofocus>
                </div>
              </div>
          
              <div class="form-group">
                <div class="">
                <input name="email" type="text" class="form-control{{$errors->has('email') ? ' is-invalid' : ''}}" value="{{old('email')}}" placeholder="&#42;Email address" data-parsley-required-message="Email is required" required autofocus>
                </div>
              </div>
          
              <div class="form-group">
                <div class="">
                <input name="phone" type="text" class="form-control{{$errors->has('phone') ? ' is-invalid' : ''}}" value="{{old('phone')}}" placeholder="&#42;Phone number" data-parsley-required-message="Phone number is required" required autofocus>
                </div>
              </div>
          
              <div class="form-group">
                <label for="" class="col-form-label"><h5 class="text-dark">How can we help your business?</h5></label>
                <div class="">
                <textarea name="message" class="form-control z-depth-1 {{$errors->has('message') ? ' is-invalid' : ''}}" value="{{old('message')}}" placeholder="Tell us about your project..." data-parsley-required-message="Please write the message" required autofocus rows="7"></textarea>
                </div>
              </div>
          
              <div class="pb-3 mb-3 text-center">
                <button type="submit" class="btn" name="send">SEND</button>
              </div>
  
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>
    
@endsection