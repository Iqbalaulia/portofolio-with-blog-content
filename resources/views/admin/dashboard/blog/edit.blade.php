@extends('./admin/index')
@section('content-admin')
<div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
    <section class="profile">
        <div class="card">
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{route('admin.my-blog.update', $item->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')  

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-block mt-1">
                                <p>Judul</p>
                                <fieldset>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3"><i
                                                    class="la la-header"></i></span>
                                        </div>
                                      <input type="text" value="{{$item->title}}" name="title" class="form-control"
                                            placeholder="Addon to Left" aria-describedby="basic-addon3">
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-block mt-1">
                                <p>Category Blog</p>
                                <fieldset>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3"><i
                                                    class="la la-graduation-cap"></i></span>
                                        </div>
                                        <select name="category" id="" class="form-control">
                                        <option value="{{$item->category}}">Jika tidak mengganti tidak perlu diubah!! ({{ $item->category }})</option>
                                            @forelse ($categoryBlog as $category)
                                                
                                                <option value="{{$category->category}}">{{$category->category}}</option>

                                            @empty
                                                <option value="">Category Kosong</option>
                                            @endforelse
                                        </select>
                                        
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card-block mt-1">
                                <p>Thumbnail</p>
                                <fieldset>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3"><i
                                                    class="la la-industry"></i></span>
                                        </div>
                                        <input type="file" name="image" class="form-control" placeholder="Addon to Left"
                                            aria-describedby="basic-addon3">
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        
                      
                        <div class="col-md-12">
                            <div class="card-block mt-1">
                                <p>Deskripsi</p>
                                
                                <textarea name="content" id="content" cols="30" rows="10">
                                  {{ $item->content }}
                                </textarea>
                               
                            </div>
                        </div>
                        <div class="col-sm-12 mt-1">
                            <div class="buton-add w-100" align="right">
                                <button type="submit" class="btn-block mr-1 mb-1 btn btn-outline-success btn-min-width"><i
                                        class="la la-user"></i> Save Edited</button>

                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </section>
</div>
@endsection

@push('addon-script')
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
    var options = {
      filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
      filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
      filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
      filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    };
  </script>
<script>
    CKEDITOR.replace( 'content', options );
</script>

@endpush
