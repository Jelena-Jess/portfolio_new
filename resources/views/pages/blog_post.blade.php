@extends('layouts.app')

@section('content')
<main role="main">

  <section>
    <div class="text-center bg-light pt-4">
      <a href="/blog" class="">Blog Home </a> &rarr; <a href="" class="">Blog Category</a>
    </div>
  </section>

  <section class="py-5 bg-light">
    <div class="main border-bottom">
      <div class="blog-post mx-auto d-flex flex-column align-items-center justify-content-center">
        <h1 class="align-self-start">Title of the Blog Post</h1>
        <div class="mt-3 align-self-start">
          <p class="blog-author">Author: Jelena Petkov</p>
          <p>15/05/2020</p>
        </div>
        <div class="mt-2 mb-5">
          <img src="/images/header_img.jpg" alt="" class="">
        </div>

        <div class="px-xl-5 px-lg-4 px-md-3 px-sm-3 px-3">
          <p class="p-big">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam quaerat totam perferendis! Praesentium mollitia nisi, minima reprehenderit rerum sequi cum officia minus nihil sunt saepe ipsa illum molestias dolor ratione laboriosam numquam provident quisquam ab recusandae? Quis, minus animi molestiae impedit in perspiciatis nihil voluptatibus recusandae repellendus? Vel illo reprehenderit dicta facere similique repudiandae, id unde numquam ipsam in, qui suscipit commodi a omnis consectetur, ipsum libero officiis rem tempore praesentium. Quos praesentium perspiciatis esse dolores saepe fugiat? Rerum voluptatibus quibusdam error illum nisi reprehenderit? Doloribus quasi consequuntur quisquam ducimus blanditiis? Ratione in quasi fugit quibusdam blanditiis. Fugit amet officiis asperiores facilis assumenda ut distinctio esse temporibus repudiandae numquam! Nesciunt soluta fugit quasi esse sint repellat natus pariatur debitis, rem tempore voluptate optio mollitia fugiat minima repudiandae sit vel porro quod. Suscipit ipsum sapiente a. Repellendus ex eos dignissimos magnam non ea sit ipsa repudiandae consectetur dolore odio mollitia officia quidem tempore eligendi eveniet, soluta pariatur corporis adipisci! Natus vitae impedit, voluptas velit quaerat modi fuga quasi unde eum distinctio architecto? Error libero eaque exercitationem sint alias. Quisquam odio dolorem est optio repellat vitae commodi voluptatum eius non, beatae eum numquam recusandae, minus adipisci incidunt vero, at necessitatibus. Ab, vel!</p>
        </div>

      </div>
    </div>
  </section>

  <section class="py-5 bg-light d-none d-sm-none d-md-block">
    <div class="main">
      <div class="blog-post mx-auto px-xl-5 px-lg-4 px-md-3 px-sm-3 px-3">
        <div class="related-posts">
          <h2 class="related pink-text">SOME RELATED POSTS</h2>
          <div class="d-flex justify-content-start">
            <div class="cards">
              <img src="/images/header_img.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h3 class="card-title">Card title</h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
            <div class="cards">
              <img src="/images/header_img.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h3 class="card-title">Card title</h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>           
        </div>
       
      </div>

    </div>


  </section>

</main>
    
@endsection