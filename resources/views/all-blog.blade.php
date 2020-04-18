<!DOCTYPE html>
<html lang="en">

<head>
    <title>Muhammad Iqbal Aulia Rafi Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('./component/css')

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

   {{-- Header --}}
   @include('./component/header-blog')
   {{--  --}}



    <section class="ftco-section" id="blog-section">
        <div class="container">           
            <div class="row d-flex justify-content-center">
                
                @forelse ($contentBlog as $blog)
               
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="{{ route('detail',$blog->slug) }}" class="block-20" style="background-image: url('{{ $blog->count() ? Storage::url($blog->image) : '' }}'); background-size: contain;">
                        </a>
                        <div class="text mt-3 float-right d-block">
                            <div class="d-flex align-items-center mb-3 meta">
                                <p class="mb-0">
                                    <span class="mr-2">{{\Carbon\Carbon::create($blog->date_blog)->format('d M yy')}}</span>
                                    <a href="{{ route('detail',$blog->slug) }}" class="mr-2">{{ $blog->user->name }}</a>
                                    {{-- <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a> --}}
                                </p>
                            </div>
                            <h3 class="heading"><a href="{{ route('detail',$blog->slug) }}"">{{ $blog->title }}</a>
                            </h3>
                            
                        </div>
                    </div>
                </div>
                @empty
                    
                @endforelse              
                
            </div>
        </div>
    </section>

    

    {{-- Footer --}}
    @include('./component/footer')
    {{-- End Footer --}}


    <!-- loader -->
    {{-- <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div> --}}



</body>
@include('./component/js')

</html>
