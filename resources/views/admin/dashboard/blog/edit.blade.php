@extends('./admin/index')
@section('content-admin')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Merubah Data Konten</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Forms</a></div>
                <div class="breadcrumb-item">Merubah Data Konten</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Merubah Data Konten</h2>
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
                            <form action="{{route('admin.my-blog.update', $item->id)}}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')

                                <div class="form-group">
                                    <label>Judul Konten</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-building" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                        <input type="text" value="{{$item->title}}" name="title" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Kategori Konten</label>
                                    <div class="input-group">
                                       
                                        <select name="category" id="" class="form-control">
                                            <option value="{{$item->category}}">Jika tidak mengganti tidak perlu
                                                diubah!! ({{ $item->category }})</option>
                                            @forelse ($categoryBlog as $category)

                                            <option value="{{$category->category}}">{{$category->category}}</option>

                                            @empty
                                            <option value="">Category Kosong</option>
                                            @endforelse
                                        </select>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label>Tag Konten</label>
                                    <div class="input-group">
                                      
                                        <table id="dynamic_field" class="w-100">
                                            @php
                                            $dataTag = json_decode($item->tag);
                                            @endphp
                                            @foreach($dataTag as $tags)
                                            <tr>
                                              
                                                <td> 
                                                   <div class="row">
                                                       <div class="col-md-11">
                                                        <input type="text" name="tag[]" value="{{$tags}}" class="select2 form-control
                                                        select2bs4 tag_list">
                                                        
                                                       </div>
                                                       <div class="col-md-1">
                                                        <button type="button" name="add" id="add" class="btn btn-primary">+</button>
                                                       </div>
                                                   </div>
                                                </td>
                                            
                                                {{-- <td align="right">

                                                </td> --}}
                                            </tr>
                                            @endforeach
                                        </table>
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
                                    <textarea name="content" id="content" cols="30" rows="10">{{ $item->content }} </textarea>
                                </div>
                                <div class="button-edit" align="right">
                                    <button type="submit"
                                        class="btn btn-icon icon-left btn-success px-5 py-2 font-weight-bold"><i
                                            class="fa fa-check-circle" aria-hidden="true"></i> Data Disimpan</button>
                                    <a href="" class="" data-toggle="modal" onclick="deleteDatacontent({{$item->id}})"
                                        data-target="#DeleteModalUser">
                                        <button type="button"
                                            class="btn btn-icon icon-left btn-danger px-5 py-2 font-weight-bold"><i
                                                class="fa fa-times" aria-hidden="true"></i> Data Dihapus</button>
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<section>
    <div id="DeleteModalUser" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">
                        Menghapus Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" id="deleteFormcontent" method="post">
                        <div class="">

                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <p class="text-center">Apakah kamu yakin untuk
                                menghapus data berikut ini ?</p>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                    <button type="submit" name="" class="btn btn-danger bg-red" data-dismiss="modal"
                        onclick="formSubmitcontent()">Yes,
                        Delete</button>
                </div>
            </div>
        </div>
    </div>
</section>
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

<script type="text/javascript">
    function deleteDatacontent(id) {
        let idcontent = id;
        let url = '{{ route("admin.my-blog.destroy", ":id") }}';
        url = url.replace(':id', idcontent);
        $("#deleteFormcontent").attr('action', url);
    }

    function formSubmitcontent() {
        $("#deleteFormcontent").submit();
    }

</script>
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

@endsection
