@extends('./admin/index')
@section('content-admin')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Membuat Data Konten</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Forms</a></div>
                <div class="breadcrumb-item">Membuat Data Konten</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Membuat Data Konten</h2>
            <p class="section-lead">We provide advanced input fields, such as date picker, color picker, and so on.</p>

            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Konten</h4>
                        </div>
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
                            <form action="{{route('admin.my-blog.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label>Judul Konten</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-building" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <input type="text" name="title" class="form-control phone-number">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Kategori Konten</label>
                                    <div class="input-group">
                                        <Select class="select2 form-control" name="category"
                                            style="width: 100%; color:black;">
                                            <option value="" disabled>Category Blog</option>
                                            @forelse ($categoryBlog as $category)

                                            <option value="{{$category->category}}">{{$category->category}}</option>

                                            @empty
                                            <option value="">Category Kosong</option>
                                            @endforelse

                                        </Select>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label>Tag Konten</label>
                                    <div class="input-group" >
                                      
                                            <table id="dynamic_field" class="w-100">
                                                <tr>
                                                    <td> 
                                                       <div class="row">
                                                           <div class="col-md-11">
                                                            <input type="text" name="tag[]" class="select2 form-control
                                                            select2bs4 tag_list" multiple="multiple">
                                                            
                                                           </div>
                                                           <div class="col-md-1">
                                                            <button type="button" name="add" id="add" class="btn btn-primary">+</button>
                                                           </div>
                                                       </div>
                                                    </td>
                                                    {{-- <td align="right">
                                                       

                                                    </td> --}}
                                                </tr>
                                            </table>
                                           
                                       
                                        {{-- @for ($i=0; $i <= 1 + 1; $i++)
                                        <select class="select2 form-control select2bs4" name="tag[{{ $i }}][value]"
                                        multiple="multiple"
                                        data-placeholder="Select a State" style="width: 100%; color:black;">

                                        @forelse ($tagBlog as $tagB)
                                        <option value="{{$tagB->tag}}">{{$tagB->tag}}</option>

                                        @empty
                                        <option value="">Tag Kosong</option>
                                        @endforelse

                                        </select>
                                        @endfor --}}
                                        {{-- <input type="text" name="tag[{{ $i }}][value]" class="select2 form-control
                                        select2bs4" multiple="multiple"> --}}

                                    </div>

                                </div>
                                <div class="form-group">
                                    <label>Thumbnail</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="far fa-images"></i> </div>
                                        </div>
                                        <input type="file" name="image" class="form-control">
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea name="content" id="content" cols="30" rows="10"></textarea>
                                </div>
                                <div class="button-edit" align="right">
                                    <button type="submit"
                                        class="btn btn-icon icon-left btn-success px-5 py-2 font-weight-bold"><i
                                            class="fa fa-check-circle" aria-hidden="true"></i> Data Disimpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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
    CKEDITOR.replace('content', options);

</script>

<!-- bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<!-- select2 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script>
    $(function () {
        $('select').each(function () {
            $(this).select2({
                theme: 'bootstrap4',
                width: 'style',
                placeholder: $(this).attr('placeholder'),
                allowClear: Boolean($(this).data('allow-clear')),
            });
        });
    });
    
</script>
<script type="text/javascript">
    $(document).ready(function(){      
      var postURL = "<?php echo url('addmore'); ?>";
      var i=1;  


      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><div class="row"><div class="col-md-11"><input type="text" name="tag[]" class="form-control name_list" /></div><div class="col-md-1"><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></div></div></td></tr>');  
      });  


      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
    });  
</script>
@endpush
