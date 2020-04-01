@extends('./admin/index')
@section('content-admin')
<div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
    <section class="profile">
        <div class="card">
            <div class="card-body">
                <form action="{{route('admin.my-blog.store')}}" method="post" enctype="multipart/form-data">
                    @csrf

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
                                        <input type="text" name="title" class="form-control"
                                            placeholder="Addon to Left" aria-describedby="basic-addon3">
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-block mt-1">
                                <p>Bidang Pengalaman</p>
                                <fieldset>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3"><i
                                                    class="la la-graduation-cap"></i></span>
                                        </div>
                                        <input type="text" name="type_of_work" class="form-control"
                                            placeholder="Addon to Left" aria-describedby="basic-addon3">
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-block mt-1">
                                <p>Perusahaan</p>
                                <fieldset>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3"><i
                                                    class="la la-industry"></i></span>
                                        </div>
                                        <input type="text" name="company" class="form-control" placeholder="Addon to Left"
                                            aria-describedby="basic-addon3">
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        
                      
                        <div class="col-md-12">
                            <div class="card-block mt-1">
                                <p>Deskripsi</p>
                                
                                <textarea name="content" id="content" cols="30" rows="10"></textarea>
                               
                            </div>
                        </div>
                        <div class="col-sm-12 mt-1">
                            <div class="buton-add w-100" align="right">
                                <button type="submit" class="mr-1 mb-1 btn btn-outline-success btn-min-width"><i
                                        class="la la-user"></i> Save Detail</button>

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
