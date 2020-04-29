@extends('./admin/index')
@section('content-admin')

 <!-- Main Content -->
 <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Table Tag</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item"><a href="#">Components</a></div>
          <div class="breadcrumb-item">Table Tag</div>
        </div>
      </div>

      <div class="section-body">
        <h2 class="section-title">Table Tag</h2>
        <p class="section-lead">Kategori yang tersedia untuk konten</p>
        <div class="button-create w-100 mb-5" align="right">
          <a href="{{route('admin.tag.create')}}" class="btn btn-icon icon-left btn-success px-5"><i class="fas fa-plus-square"></i> Membuat Data</a>            
        </div>
        <div class="row">
          <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4>Table Tag</h4>
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
                      <th>Tag</th>
                      <th>Action</th>
                    </tr>
                    {{-- <tr>
                      <td>1</td>
                      <td>Irwansyah Saputra</td>
                      <td>
                        <a href="edit-tag.html" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Edit</a>
                        <a href="#" class="btn btn-icon icon-left btn-danger"><i class="fas fa-times"></i> Delete</a>
                      </td>
                    </tr> --}}
                    <?php $no = 0;?>
                    @forelse ($tag as $blogTag)                                       
                    <?php $no++ ;?>
                  <tr>
                    <td>{{ $no }}</td>
                    <td>{{ $blogTag->tag }}</td>
                    <td>
                        <div class="row">
                            <a href="{{ route('admin.tag.edit',$blogTag->id) }}"
                                class="ml-2 ">
                                <button type="button" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Edit</button>
                            </a>

                            &nbsp;&nbsp;
                            <a href="" class="" data-toggle="modal"
                                onclick="deleteDatablogTag({{$blogTag->id}})"
                                data-target="#DeleteModalUser">
                                <button type="button" class="btn btn-icon icon-left btn-danger"><i class="fas fa-times"></i>Dekete</button>
                            </a>
                        </div>
                    </td>
                  
                
                  
                  </tr>
                  @empty
                  <tr>
                      <td>Data Kosong</td>
                      <td>Data Kosong</td>
                      <td>Data Kosong</td>
                  </tr>
                  @endforelse
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
  </div
   <section></section>
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
                    <form action="" id="deleteFormblogTag" method="post">
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
                        onclick="formSubmitblogTag()">Yes, Delete</button>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    function deleteDatablogTag(id) {
        let idblogTag = id;
        let url = '{{ route("admin.tag.destroy", ":id") }}';
        url = url.replace(':id', idblogTag);
        $("#deleteFormblogTag").attr('action', url);
    }

    function formSubmitblogTag() {
        $("#deleteFormblogTag").submit();
    }

</script>
@endsection
