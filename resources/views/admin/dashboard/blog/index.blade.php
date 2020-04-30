@extends('./admin/index')
@section('content-admin')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Article</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Components</a></div>
                <div class="breadcrumb-item">Article</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Articles</h2>
            <p class="section-lead">This article component is based on card and flexbox.</p>
            <div class="button-create w-100 mb-5" align="right">
                <a href="{{route('admin.my-blog.create')}}" class="btn btn-icon icon-left btn-success px-5"><i
                        class="fas fa-plus-square"></i> Membuat Data</a>
            </div>
            <div class="row">

                @foreach ($blogContent as $content)
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <article class="article article-style-b" style="height: 300px">
                        <div class="article-header">
                            <div class="article-image"
                                style="background-image: url('{{ $content->count() ? Storage::url($content->image) : '' }}'); background-size: cover;">
                            </div>
                            <!-- Trending -->
                            <div class="article-badge">
                                <div class="article-badge-item bg-warning"><i class="fas fa-fire"></i>
                                    {{ $content->category}}</div>
                            </div>
                            <!-- Trending -->
                        </div>
                        <div class="article-details">
                            <div class="article-title" style="height:60px">
                                <h2><a href="#">{{ $content->title }}</a></h2>
                            </div>

                            @php
                            $dataTag = json_decode($content->tag);
                            @endphp
                            @foreach($dataTag as $tags)
                           <button type="button" class="btn btn-info">
                            {{$tags}}
                           </button>
                            @endforeach

                            <div class="article-cta">
                                <a href="{{ route('admin.my-blog.edit',$content->id) }}">Merubah Data <i
                                        class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </article>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
@endsection
