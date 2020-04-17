<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    @include('./component/css')

    <style>
            @media only screen and (max-width: 375px) {
                 

                }
            /* Extra small devices (portrait phones, less than 576px) */
            @media (max-width: 575.98px) { 
              .ftco-section p img{
                    
                    width: 92vw !important;
                    height: 20vh !important;
                  }
              .ftco-section p {
                text-align: left;
              }
             }
            /* Small devices (landscape phones, 576px and up) */
            @media (min-width: 576px) and (max-width: 767.98px) {
              .ftco-section p img{
                    
                    width: 65vw !important;
                    height: 30vh !important;
                  }
              .ftco-section p {
                text-align: left;
              }

              }

            /* Medium devices (tablets, 768px and up) */
            @media (min-width: 768px) and (max-width: 991.98px) { 
              .ftco-section p img{
                    
                    width: 88vw !important;
                    height: 32vh !important;
                  }
              .ftco-section p {
                text-align: left;
              }
             }

            /* Large devices (desktops, 992px and up) */
            @media (min-width: 992px) and (max-width: 1199.98px) { 
              .ftco-section p img{
                    
                    width: 55vw !important;
                    height: 28vh !important;
                  }
              .ftco-section p {
                text-align: left;
              }
             }
             

            /* // Extra large devices (large desktops, 1200px and up) */
            @media (min-width: 1200px) { 
          
             }
    </style>

  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  
	  
    {{-- Header --}}
    @include('./component/header-blog')
    {{--  --}}

	  <section class="hero-wrap js-fullheight" data-stellar-background-ratio="0.5">
    
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-12 ftco-animate pb-5 mb-3 text-center">
            <h4 class="mb-3 bread">{{ $content->title }}</h4>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="blog.html">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span>{{ $content->title }} <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
            <h2 class="mb-3">{{ $content->title }}</h2>
            <p>
              {!! $content->content !!}
            </p>
          
         
         
            

            <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">{{ $content->category }}</a>
              </div>
            </div>
            
            <div class="about-author d-flex p-4 bg-dark">
              <div class="bio mr-5">
                <img src="https://ui-avatars.com/api/?name={{$content->user->name}}" alt="Image placeholder" class="rounded-circle"  height="60">
              </div>
              <div class="desc">
                <h3>{{ $content->user->name }}</h3>
                <p></p>
              </div>
            </div>


            {{-- <div class="pt-5 mt-5">
              <h3 class="mb-5">6 Comments</h3>
              <ul class="comment-list">
                <li class="comment">
                  <div class="vcard bio">
                    <img src="images/person_1.jpg" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                    <h3>John Doe</h3>
                    <div class="meta">June 20, 2019 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href="#" class="reply">Reply</a></p>
                  </div>
                </li>

                
              </ul>
              <!-- END comment-list -->
              
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Leave a comment</h3>
                <form action="#" class="p-5 bg-dark">
                  <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" class="form-control" id="name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" id="email">
                  </div>
                  <div class="form-group">
                    <label for="website">Website</label>
                    <input type="url" class="form-control" id="website">
                  </div>

                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
                  </div>

                </form>
              </div>
            </div> --}}

          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar ftco-animate">
            {{-- <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon icon-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div> --}}
            {{-- <div class="sidebar-box ftco-animate">
            	<h3 class="heading-sidebar">Categories</h3>
              <ul class="categories">
                <li><a href="#">Interior Design <span>(12)</span></a></li>
               
              </ul>
            </div> --}}

            <div class="sidebar-box ftco-animate">
              <h3 class="heading-sidebar">Recent Blog</h3>
             
              @forelse ($recentBlog as $recent)
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url('{{ $recent->count() ? Storage::url($recent->image) : '' }}');"></a>
                <div class="text">
                <h3 class="heading"><a href="{{ route('detail', $recent->slug)}}">{{$recent->title}}</a></h3>
                  <div class="meta">
                  <div><a href="{{ route('detail', $recent->slug)}}"><span class="icon-calendar"></span>   {{ $recent->created_at->format('d M yy')   }}</a></div>
                    <div><a href="{{ route('detail', $recent->slug)}}"><span class="icon-person"></span> {{ $recent->user->name }}</a></div>
                    {{-- <div><a href="#"><span class="icon-chat"></span> 19</a></div> --}}
                  </div>
                </div>
              </div>  
              @empty
                  
              @endforelse
              
              
            </div>

            {{-- <div class="sidebar-box ftco-animate">
              <h3 class="heading-sidebar">Tag Cloud</h3>
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">house</a>
                <a href="#" class="tag-cloud-link">office</a>
                <a href="#" class="tag-cloud-link">building</a>
                <a href="#" class="tag-cloud-link">land</a>
                <a href="#" class="tag-cloud-link">table</a>
                <a href="#" class="tag-cloud-link">interior</a>
                <a href="#" class="tag-cloud-link">exterior</a>
                <a href="#" class="tag-cloud-link">industrial</a>
              </div>
            </div> --}}

            {{-- <div class="sidebar-box ftco-animate">
              <h3 class="heading-sidebar">Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div> --}}
          </div>

        </div>
      </div>
    </section> <!-- .section -->
		

 {{-- Footer --}}
 @include('./component/footer')
 {{-- End Footer --}}

    
  

  <!-- loader -->


  @include('./component/js')

  </body>
</html>