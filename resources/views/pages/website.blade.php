@extends('layouts.app')

@section('content')
<main id="main" role="main" class="m-auto">

  <section class="col-12 py-5 text-justify back-light">
    <div class="main py-5">
      <h3 class="text-center pb-4">Website Design — Your Picture Perfect</h3>
      <p> We believe in simplicity. Whether your audience is reading content, watching a video or purchasing an item, every action should be clear throughout the website. Our goal is to create a website that highlights your company’s brand while ensuring ease of use and simplicity for your audience.</p>
      <p>The website design process starts with a sketch. First, we discuss wireframes, page layouts, and menu structures. Digital design concepts are then created. You will be presented with a variety of website design concepts to review. Feedback on the design concepts is essential to give you the opportunity to express your thoughts on the design and make alterations where desired before the final sign-off.</p>
      <p>Once the design has been finalised, the creation of the website can begin. The website development process starts by taking the graphical elements (colours, fonts, layout, images) defined in the design process and coding them using web industry standards (PHP, HTML5, CSS3, JS, jQuery). This is typically done by first coding the home page, followed by templates for the interior pages. When the website is ready for review you will be supplied with login details to view the website before it is launched to the public. You will also be supplied with instructions on how to update your website.</p>
      <p>All of the websites that we create have been tailor-made and coded from scratch.</p>
    </div>
  </section>

  <section id="tech" class="py-5 back-light">
    <div class="main py-5 container-fluid">
      <div class="row">
        <div class="pl-5 ml-5 col-sm col-sm-12 col-md-6 pb-sm-5 m-auto">
          <h4 class="text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis dolores magnam voluptates minus aliquam eos, perspiciatis, pariatur repudiandae ea quidem molestias omnis vitae iure fugiat beatae. Possimus deleniti accusantium molestias ducimus</h4>
        </div>
        <div class="col col-sm col-sm-12 col-md-6 pl-4">
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
              <span>Photoshop</span>
            </div>
          </div>
        </div>
      </div> 
    </div>
</section>

  <section id="plans" class="py-5 back-dark">
    <div class="main pb-5">
      <h2 class="text-center text-light"><a id="plans">MONTHLY PLANS</a></h2>
      <h4 class="text-center text-light px-4 pb-5">With these budget friendly plans you'll never have to worry about your website again. </h4>
      <div class="p-lg-4 p-md-2 py-4 pb-md-0 pb-sm-0 pb-0 d-flex flex-xl-row flex-lg-row flex-md-row flex-sm-column flex-column justify-content-center">
        <div class="bg bg1 p-4">
          <div class="text-center">
            <h2 class="text-light pb-5">Basic</h2>
            <p class="pt-5 pb-1">Custom design / Information architecture</p>
            <p class="pb-1">Mobile friendly design</p>
            <p class="pb-1">Logo design</p>
            <p class="pb-1">Service and product pages</p>
            <p class="pb-1">Contact form</p>
          </div>

        </div>
        <div class="bg bg2 p-4">
          <div class="text-center">
            <h2 class="text-light pb-5">Standard</h2>
            <p class="pt-5 pb-1">Custom design / Information architecture</p>
            <p class="pb-1">Mobile friendly design</p>
            <p class="pb-1">Logo design</p>
            <p class="pb-1">Website content creation</p>
            <p class="pb-1">Service and product pages</p>
            <p class="pb-1">Contact form</p>
            <p class="pb-1">Gallery</p>
            <p class="pb-1">Blog setup</p>
          </div>
        </div>

        <div class="bg bg3 p-4">
          <div class="text-center">
            <h2 class="text-light pb-5">Premium</h2>
            <p class="pt-5 pb-1">Custom design / Information architecture</p>
            <p class="pb-1">Mobile friendly design</p>
            <p class="pb-1">Logo design</p>
            <p class="pb-1">Website content creation</p>
            <p class="pb-1">Service and product pages</p>
            <p class="pb-1">Contact form</p>
            <p class="pb-1">Gallery</p>
            <p class="pb-1">Blog setup</p>
            <p class="pb-1">Shopping cart integration and programming</p>  
            <p class="pb-1">Digital marketing setup (SEO)</p>
          </div>
        </div>
      </div>
      <div>
        <p class="text-center text-light px-5 pt-5">All plans also include website hosting and monthly traffic reports. The best way to get all the info is by contacting us for a quick online meeting.</p>
      </div>
       
      <div>
        <a class="button mt-5" href="/project_plan">Tell us about your dream website</a>
      </div>
    </div>
    </div>
  </section>

  

  <section id="plans" class="py-5 back-light">
    <div class="main">
     <div>
      <h2 class="text-center text-dark py-5"><a id="plans">PACKAGE TERMINOLOGY</a></h2>
        <div class="d-flex flex-wrap flex-xl-row flex-lg-row flex-md-row flex-sm-row flex-column justify-content-center">

          <div class="card">
            <div class="card-body">
              <div class="text-center"><i class="fas fa-palette fa-4x text-dark"></i></div>
              <h4 class="card-title">CUSTOM DESIGN</h4>
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
          <div class="card">
            <div class="card-body">
              <div class="text-center"><i class="fas fa-palette fa-4x text-dark"></i></div>
              <h4 class="card-title text-dark">LOGO DESIGN</h4>
              <p class="card-text">Your new website will look great and operate correctly on all devices. From large desktop monitors down to the latest smartphones.</p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="text-center"><i class="fas fa-palette fa-4x text-dark"></i></div>
              <h4 class="card-title text-dark">WEBSITE CONTENT CREATION</h4>
              <p class="card-text">Most business owners are too busy running their companies so our expert copy writers do the writing and you just need to review it.</p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="text-center"><i class="fas fa-palette fa-4x text-dark"></i></div>
              <h4 class="card-title">SERVICE AND PRODUCT PAGES</h4>
              <p class="card-text">Draw attention to your most popular products and services with ‘must know’ information. We’ll organize the details for quick navigation and easy reading.</p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="text-center"><i class="fas fa-palette fa-4x text-dark"></i></div>
              <h4 class="card-title">CONTACT FORM</h4>
              <p class="card-text">The whole point of your website is to get prospects to contact you and we make it easy. A short form with vital contact info will be emailed directly to you.</p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="text-center"><i class="fas fa-palette fa-4x text-dark"></i></div>
              <h4 class="card-title">GALLERY</h4>
              <p class="card-text">Stunning photos of completed projects are the best way to showcase your work. Pictures really are worth a thousand words.</p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="text-center"><i class="fas fa-palette fa-4x text-dark"></i></div>
              <h4 class="card-title">BLOG SETUP</h4>
              <p class="card-text">Blog posts are the best way to educate customers about your products and services. We do the writing while you reap all the benefits.</p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="text-center"><i class="fas fa-palette fa-4x text-dark"></i></div>
              <h4 class="card-title">SHOPPING CART INTEGRATION</h4>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="text-center"><i class="fas fa-palette fa-4x text-dark"></i></div>
              <h4 class="card-title">PROGRAMMING</h4>
              <p class="card-text">Custom feature development can cost extra, but the benefits of a fully customized and unique website can outweigh the costs.</p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <div class="text-center"><i class="fas fa-palette fa-4x text-dark"></i></div>
              <h4 class="card-title">DIGITAL MARKETING SETUP (SEO)</h4>
              <p class="card-text">SEO is vital to your website's success. For every project we work on, we have a 40+ step process to ensure the final site is SEO friendly and communicating to the search engines properly.</p>
            </div>
          </div>
         
        </div>
      </div>
  </section>

 


  <section id="plans" class="py-5 back-light">
    <div class="main pb-5">
      <div class="col-12 py-3 border-top">
        <h5 class="nav-link float-left"><i class="fas fa-angle-left"></i><a class="nav-page" href="/content">Content Writing</a></h5>
        <h5 class="nav-link float-right"><a class="nav-page" href="/logo">Logo Design</a><i class="fas fa-angle-right"></i></h5>
      </div>
    </div>
  </section>
  </main>
    
@endsection
  