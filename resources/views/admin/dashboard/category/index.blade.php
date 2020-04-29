@extends('./admin/index')
@section('content-admin')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Table Kategori</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item"><a href="#">Components</a></div>
          <div class="breadcrumb-item">Table Kategori</div>
        </div>
      </div>

      <div class="section-body">
        <h2 class="section-title">Table Kategori</h2>
        <p class="section-lead">Kategori yang tersedia untuk konten</p>
        <div class="button-create w-100 mb-5" align="right">
          <a href="{{route('admin.category-blog.create')}}" class="btn btn-icon icon-left btn-success px-5"><i class="fas fa-plus-square"></i> Membuat Data</a>            
        </div>
        <div class="row">
          <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4>Table Kategori</h4>
                <div class="card-header-form">
                  <form>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search">
                      <div class="input-group-btn">
                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-md">
                    <tr>
                      <th>#</th>
                      <th>Kategori</th>
                      <th>Action</th>
                    </tr>
                   
                    <?php $no = 0;?>
                    @foreach ($category as $blogCategory)
                    <?php $no++ ;?>
                  <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $blogCategory->category }}</td>
                    <td>
                        <div class="row">
                            <a href="{{ route('admin.category-blog.edit',$blogCategory->id) }}"
                                class="ml-2 ">
                                <button type="button" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Edit</button>
                            </a>
                            &nbsp;&nbsp;
                            <a href="" class="" data-toggle="modal"
                                onclick="deleteDatablogCategory({{$blogCategory->id}})"
                                data-target="#DeleteModalUser">
                                <button type="button" class="btn btn-icon icon-left btn-danger"><i class="fas fa-times"></i> Delete</button>
                            </a>
                        </div>
                    </td>  
                  </tr>
                    @endforeach
                  </table>
                </div>
              </div>
              <div class="card-footer text-right">
                <nav class="d-inline-block">
                  <ul class="pagination mb-0">
                    <li class="page-item disabled">
                      <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                    <li class="page-item">
                      <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

    {{-- Modal Delete --}}
    <section>
        <div id="DeleteModalUser" class="modal fade" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">
                            Menghapus Data</h5>
                        <button type="button" class="close" data-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" id="deleteFormblogCategory" method="post">
                            <div class="">

                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <p class="text-center">Apakah kamu yakin untuk
                                    menghapus data berikut ini ?</p>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info"
                            data-dismiss="modal">Close</button>
                        <button type="submit" name=""
                            class="btn btn-danger bg-red" data-dismiss="modal"
                            onclick="formSubmitblogCategory()">Yes, Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript">
        function deleteDatablogCategory(id) {
            let idblogCategory = id;
            let url = '{{ route("admin.category-blog.destroy", ":id") }}';
            url = url.replace(':id', idblogCategory);
            $("#deleteFormblogCategory").attr('action', url);
        }

        function formSubmitblogCategory() {
            $("#deleteFormblogCategory").submit();
        }

    </script>
@endsection
