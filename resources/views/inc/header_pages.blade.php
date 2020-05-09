<header class="header">
  <div class="position-fixed container-fluid d-lg-none d-xl-none">
    <div class="row row-content d-flex justify-content-end mt-1"> 
      <button class="openbtn navbar-toggler p-3" onclick="openNav()" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
      <i class="fas fa-bars fa-lg"></i>
      </button>
    </div>
  </div>
  
  <div class="section_all bd-highlight">
    <div class="section-blur d-flex flex-column">
      <div class="pt-1">
        <div class="align-items-start">
          @include('inc.navbar')
        </div>
        <div class="logo-sm-screen align-self-start d-lg-none d-xl-none pt-2 pl-5">
          <a class="logo" href="/">FRIDAY SOLUTIONS
          </a>
        </div>
      </div>
      <div class="mt-auto">
        <h1 class="main title-pages">{{$title}}</h1> 
      </div>
    </div>
  </div>
</header>

</div>
<a class="gotop" href=""><i class="fa fa-arrow-up"></i></a>
</div>