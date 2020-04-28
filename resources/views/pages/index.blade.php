@extends('layouts.app')

@section('content')

  <main role="main" class="m-auto">
  
    <section id="bio" class="py-5 text-justify back-light">
      <div class="main bio d-flex justify-content-around">
        <div class="align-self-center">
          <img src="/images/who.png" alt="">
        </div>
        <div class="align-self-center">
          <h3 class="text-center pb-4"><a>WHO WE ARE</a></h3>
          <p>Looking for a super-slick way to present yourself? Want to have a professional-looking website which would put your business in the spotlight? You have come to a place where we turn your ideas into reality.</p>
          <p>We build websites from scratch. If you prefer WordPress, no problem whatsoever. In addition, we can upgrade your old web pages, fix bugs, or add extra functionality to your current website.</p>
          <p> Our final goal is two things: the PERFECT PRODUCT and a HAPPY CUSTOMER. We strive to be impeccable in all aspects, from creative design that evokes emotions to flawless code.</p>
        </div>
      </div>
    </section>
    
    <section id="services" class="pt-5 pb-5 px-3 text-left back-dark">
      <div class="main">
         <h3 class="text-center pb-4 text-light">SERVICES</h3>
         <div class="main d-flex flex-lg-row flex-md-row flex-sm-column flex-column justify-content-center">
          <div class="project">
            <div class="front">
              <h4 class="text-center text-light pb-3">Web Design</h4>
              <p class="text-center"><i class="fas fa-palette fa-5x text-light pb-4"></i></p>
            </div>
            <div class="back">
              <h5 class="font-italic pb-2">One of a kind web design solutions.</h5>
              <p>J&F Studio offers cutting-edge web design and branding solutions which move the boundaries. We strive to go an extra mile in order to provide our clients with a perfect digital experiences.</p>
            </div>
          </div>

          <div class="project">
            <div class="front">
              <h4 class="text-center text-light pb-3">Web Development</h4>
              <p class="text-center"><i class="fas fa-laptop-code fa-5x text-light pb-4"></i></p>
            </div>
            <div class="back">
              <h5 class="font-italic pb-2">Each line of code is not just pure code, but art.</h5>
              <p >We can help you to choose adequate technologies for your web projects. We can help you to choose adequate technologies for your web projects.</p>
            </div>
          </div>
        </div>
         <div class="main d-flex flex-lg-row flex-md-row flex-sm-column flex-column justify-content-center">
          <div class="project">
            <div class="front">
              <h4 class="text-center pb-3">Logo Design</h4>
              <p class="text-center"><i class="text-center fab fa-pied-piper fa-5x text-light pb-4"></i></p>
            </div>
            <div class="back">
              <h5 class="font-italic pb-2">We see logo as your personal stamp.</h5>
              <p>By using appropriate and effective colors, we define your brand identity and create inspiring narratives which transmit the message and arouse emotions.</p>
            </div>
          </div>

          <div class="project">
            <div class="front">
              <h4 class="text-center pb-3">Content Writing</h4>
              <p class="text-center"><i class="fas fa-pencil-alt fa-5x text-light pb-4"></i></p>
            </div>
            <div class="back">
              <h5 class="font-italic pb-2">A good story is the beginning of everything.</h5>
              <p>Copywriting goes hand in hand with your website’s SEO (search engine optimisation), which enables Google to find your website when potential customers search for your products or services. </p>
            </div>
          </div>
        </div>
      </div>
     
    </section>

    <section id="tech" class="p-4 back-light">
      <div>
        <div class="bio container-fluid">
          <div class="row my-5">
            <div class="col-sm col-sm-12 col-md-6 px-4 pb-sm-5 m-auto">
              <h3 class="pb-5">TECHNOLOGIES</h3> 
              <h4 class="text-dark">Over the years, we’ve developed over 50 products. PHP, Drupal and Symfony together with MySQL are our main allies when it comes to web development. We are constantly improving ourselves and adding new knowledge to our toolbox.</h4>
            </div>
            <div class="col col-sm col-sm-12 col-md-6 px-4">
              <div class="d-flex justify-content-center help">
                <div data-anijs="if: mouseover, do: swing animated">
                  <span>HTML</span>
                </div>
                <div data-anijs="if: mouseover, do: swing animated">
                  <span>SCSS</span>
                </div>
                <div data-anijs="if: mouseover, do: swing animated">
                  <span>PHP</span>
                </div>
              </div>
              <div class="d-flex justify-content-center help">
                <div data-anijs="if: mouseover, do: swing animated">
                  <span>MySQL</span>
                </div>
                <div data-anijs="if: mouseover, do: swing animated">
                  <span>Laravel</span>
                </div>
                <div data-anijs="if: mouseover, do: swing animated">
                  <span>JavaScript</span>
                </div>
              </div>
              <div class="d-flex justify-content-center help">
                <div data-anijs="if: mouseover, do: swing animated">
                  <span>Git</span>
                </div>
                <div data-anijs="if: mouseover, do: swing animated">
                  <span>Bootstrap</span>
                </div>
                <div data-anijs="if: mouseover, do: swing animated">
                  <span>Bootstrap</span>
                </div>
              </div>
            </div>
          </div> 
        </div>
         
      </div>
       
    </section>
  
    <section id="projects" class="pt-5 pb-4 back-dark">
      <h3 class="text-center text-light pb-4"><a id="projects">PROJECTS</a></h3>
      <div class="main p-lg-4 p-md-4 py-4 pb-sm-0 d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column  justify-content-xl-around justify-content-lg-around justify-content-md-around justify-content-sm-center justify-content-center">

        <div class="reveal projects m-2 py-4">
          <div class="text pr-3">
            <div class="project-title">Electronic diary for schools</div>
          </div>
          <div class="projects-img">
            <img class="" src="images/diary_big.png" alt="">
          </div>
        </div>
        
        <div class="reveal projects m-2 py-4">
          <div class="text pr-3">
            <div class="project-title">Electronic diary for schools</div>
          </div>
          <div class="projects-img">
            <img class="" src="images/diary_big.png" alt="">
          </div>
        </div>
      </div>

      <div class="main p-lg-4 p-md-4 py-4 py-sm-0 d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column  justify-content-xl-around justify-content-lg-around justify-content-md-around justify-content-sm-center justify-content-center">

        <div class="reveal projects m-2 py-4">
          <div class="text pr-3">
            <div class="project-title">Electronic diary for schools</div>
          </div>
          <div class="projects-img">
            <img class="" src="images/diary_big.png" alt="">
          </div>
        </div>

        <div class="reveal projects m-2 py-4">
          <div class="text pr-3">
            <div class="project-title">Electronic diary for schools</div>
          </div>
          <div class="projects-img">
            <img class="" src="images/diary_big.png" alt="">
          </div>
        </div>
      </div>
      
    </section>

  </main>
  
@endsection
