@extends('./admin/index')
@section('content-admin')


<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Table Pengalaman</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item"><a href="#">Components</a></div>
          <div class="breadcrumb-item">Table Pengalaman</div>
        </div>
      </div>

      <div class="section-body">
        <h2 class="section-title">Table Pengalaman</h2>
        <p class="section-lead">Pengalaman saya dalam mengerjakan proyek</p>

        <div class="button-create w-100 mb-5" align="right">
          <a href="{{route('admin.experiences.create')}}" class="btn btn-icon icon-left btn-success px-5"><i class="fas fa-plus-square"></i> Membuat Data</a>            
        </div>

        <div class="row">
          <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4>Table Pengalaman</h4>
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
                      <th>Posisi</th>
                      <th>Bidang Kerja</th>
                      <th>Perusahaan</th>
                      <th>Tahun Memulai</th>
                      <th>Tahun Selesai</th>
                      <th>Action</th>
                    </tr>
                    <?php $no = 0;?>
                    @foreach ($myExperiences as $experiences)
                    <?php $no++ ;?>
                    <tr>
                     
                        <td>{{ $no }}</td>
                        <td>{{ $experiences->title }}</td>
                        <td>{{ $experiences->type_of_work }}</td>
                        <td>{{ $experiences->company }}</td>
                        <td>{{ $experiences->ex_start_year }}</td>
                        <td>{{ $experiences->ex_end_year }}</td>
                        <td>
                            <div class="row">
                                <a href="{{ route('admin.experiences.edit',$experiences->id) }}"
                                    class="ml-2 mr-2">
                                    <button type="button"  class="btn btn-icon icon-left btn-primary"> <i class="far fa-edit"></i>Edit</button>
                                </a>                               
                                <a href="" class="" data-toggle="modal"
                                    onclick="deleteDataExperiences({{$experiences->id}})"
                                    data-target="#DeleteModalUser"  class="ml-2 ">
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
                        <form action="" id="deleteFormExperiences" method="post">
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
                            onclick="formSubmitExperiences()">Yes, Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('addon-script')
    <script type="text/javascript">
        function deleteDataExperiences(id) {
            let idEducation = id;
            let url = '{{ route("admin.experiences.destroy", ":id") }}';
            url = url.replace(':id', idEducation);
            $("#deleteFormExperiences").attr('action', url);
        }
    
            function formSubmitExperiences() {
            $("#deleteFormExperiences").submit();
        }
        </script>
    @endpush()

   
    
@endsection
