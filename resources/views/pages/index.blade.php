@extends('layouts.app')

@section('content')

  <main role="main" class="m-auto px-5 main">
  
    <section class="pt-5 pb-2 mb-3 border-bottom text-justify">
      <h3 class="text-center pb-4"><a id="bio">WHO WE ARE</a></h3>
      <p>Looking for a super-slick way to present yourself? Want to have a professional-looking website which would put your business in the spotlight? Look no more as you are in the right place.</p> 
      <p>We build websites from scratch. If you prefer WordPress, no problem, just say so.</p>
      <p>In addition, we can upgrade your old web pages, fix bugs, or add extra functionality to your current website. </p>
      <p>Ideas run the world, and only one is enough to change your business from the roots. Today, there is always a demand for going that extra mile. The quality solely is not enough anymore. Genius solutions make businesses successful and make a competitive difference.</p>
      <p>From design concept to programming, Internet marketing solutions and hosting services, all services can now be found in one place – PopArt Studio.</p>
      <p> Our web design agency has always had one goal in mind: the PERFECT PRODUCT, impeccable in all aspects, from creative design that evokes emotions to flawless code.</p>
    </section>
    
    <section id="timeline" class="pt-5 pb-4 mb-3 border-bottom text-center">
      <h3 class="text-center pb-4">WHAT WE KNOW</h3>
      <div class="d-flex justify-content-around">
        <div class="mx-2">
          <h4 class="text-center pb-4">Web Design</h4>
          <img src="images/blur.jpg" alt="">
          <p>Unique web design solutions made with love and in accordance with the newest technologies.</p>
          <p>PopArt Studio is a full-service, interactive agency offering innovative web design & branding solutions which move the boundaries. Our sophisticated approach to the development of digital experiences exceeds all expectations.</p>
        </div>
        <div class="mx-2">
          <h4 class="text-center pb-4">Web Development</h4>
          <img src="images/blur.jpg" alt="">
          <p>We devote our undivided attention to writing every line of code, which is a proof of a well-defined methodology and impeccable reasoning.</p>
          <p>Somewhere in between the Swiss watch and poetry, development is a vocation which generates quality websites, modern webshops, and unique web platforms. By using cutting-edge technologies, our programmers constantly develop their skills and follow modern web trends.<p>
          <p>We can help you to choose adequate technologies for your web projects.</p>
        </div>
        <div class="mx-2">
          <h4 class="text-center pb-4">Graphic Design</h4>
          <img src="images/blur.jpg" alt="">
          <p>We can help you shape and build your brand.

            By using appropriate and effective colors, we define your brand identity and create inspiring narratives which transmit the message and arouse emotions.
            
            Memorable logo design, outstanding corporate identity and business-changing labels are only some of the solutions we offer. Ever since 2009, we are illustrating for brands, both big and small.</p>
        </div>
        <div class="mx-2">
          <h4 class="text-center pb-4">SEO Optimisation</h4>
          <img src="images/blur.jpg" alt="">
          <p>We can help you build brand authority and visibility. You are only one click away from your target audience.

            Our clients are one step ahead of their competitors because our digital marketing services help them empower their brands.
            
            A comprehensive strategy which defines your online presence. Earn the highest positions in the SERP, bring more traffic to your website, give value to your followers and convert them into happy customers.</p>
        </div>
      </div>
  {{--<button class="accordion">FrontEnd</button>
  <div class="panel">
  <ul>
      <li class="reveal pt-3">
      <div class="skill border-bottom pb-3">
        <h3 class="skills">HTML & CSS</h3>
        <ul class="list">
          <li>Clean code architecture</li>
          <li>Positioning of elements with Flexbox and Grid</li>
          <li>Responsive web design</li>
          <li>Transforms</li>
          <li>Transitions and animations</li>
        </ul>
      </div>
    </li> 
  </ul>
  <ul>
      <li class="reveal pt-2">
      <div class="skill pb-2">
      <h3 class="skills">JavaScript</h3>
      <ul class="list">
        <li>ES6</li>
        <li>JS Libraries</li>
      </ul>
      </div>
      </li>
    </ul>
  </div>
  
  <button class="accordion">BackEnd</button>
  <div class="panel">
   <ul>
   <li class="reveal pt-3">
      <div class="skill pb-2">
        <h3 class="skills">PHP</h3>
        <ul class="list">
          <li>MVC architecture</li>
          <li>Clean code writing</li>
          <li>Object-Oriented Programming</li>
          <li>Regular expressions</li>
        </ul>
      </div>
      </li>
   </ul>
  </div>
  
  <button class="accordion">Database</button>
  <div class="panel">
   <ul>
   <li class="reveal pt-3">
      <div class="skill pb-2">
      <h3 class="skills">MySQL</h3>
      <ul class="list">
        <li>Database creation</li>
        <li>DDL and DML</li>
        <li>Complex queries</li>
        <li>Transactions</li>
        <li>Triggers and Stored procedures</li>
      </ul>
      </div>
      </li>
   </ul>
  </div>
  
  <button class="accordion acc_last">Other Technologies</button>
  <div class="panel">
   <ul>
   <li class="reveal pt-3">
      <div class="skill border-bottom pb-3">
      <h3 class="skills">Linux and Apache Server</h3>
      <ul class="list">
        <li>Configuring Apache and PHP on Linux</li>
        <li>MySQL secure installation</li>
        <li>Creating .htaccess file</li>
        <li>Understanding of php.ini file</li>
        <li>Creating virtual hosts</li>
        <li>Securing web servers</li>
      </ul>
      </div>
      </li>
   </ul>
   <ul>
   <li class="reveal pt-2">
      <div class="skill">
      <h3 class="skills">Other Skills</h3>
      <ul class="list">
        <li>Git</li>
        <li>Bootstrap</li>
        <li>Content writing</li>
        <li>Photoshop</li>
        <li>WordPress</li>
        <li>DreamWeaver</li>
      </ul>
      </div>
      </li>
   </ul>
  </div> --}}
      
    </section>
  
    <section class="pt-5 pb-4 mb-3 border-bottom">
    <h3 class="text-center pb-4"><a id="projects">ORDER A WEBSITE</a></h3>
    <div class="">
      <p>We are open to all kinds of cooperation and outsourcing/nearshoring. Our team is headquartered in Novi Sad, Serbia, and has the capacity for your project as well. That was enough about us, let us hear your story.</p>
      <div class="d-flex flex-column align-items-center">
        <div class="reveal project align-self-end my-4">
            <img class="image" src="images/diary_big.png" alt="">
            <div class="overlay hvr-sweep-to-left">
              <div class="text">
                <div class="project-title">Electronic diary for schools</div>
                <div class="mt-4"><a href="/project1" class="proposal-small">Eager to find out more?</a></div>
            </div>
          </div>
        </div>
      
        <div class="reveal project align-self-start my-4">
          <img class="image" src="images/choco_big.png" alt="">
          <div class="overlay-left hvr-sweep-to-right">
            <div class="text">
              <div class="project-title">ChocoTale</div>
              <div class="mt-4"><a href="/project2" class="proposal-small">Yum, check this out!</a></div>
            </div>
          </div>
        </div>
        
        <div class="reveal project align-self-end my-4">
          <img class="image" src="images/wp_big.png" alt="">
          <div class="overlay hvr-sweep-to-left">
            <div class="text">
              <div class="project-title">Sonya's Kitchen</div>
              <div class="mt-4"><a href="project3" class="proposal-small">In the mood for some healthy snacks?</a></div>
            </div>  
          </div>
        </div>
      </div>
    </div>
   </section>
    
    <section class="pt-5 pb-3 mb-2 text-center">
    <h3 class="text-center pb-4"><a id="help">HOW WE CAN HELP YOU</a></h3>
    <div class="help">
      <a href="/website"><div data-anijs="if: mouseover, do: swing animated">Website Design</div></a>
      <a href="/logo"><div data-anijs="if: mouseover, do: swing animated">Logo Design</div></a>
      <a href="/wordpress"><div data-anijs="if: mouseover, do: swing animated">WordPress Website Development</div></a>
      <a href="/content"><div data-anijs="if: mouseover, do: swing animated">Content Writing</div></a>
    </div>  
    </section>
  </main>
  
@endsection
