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
          <div class="breadcrumb-item">Proyek</div>
        </div>
      </div>

      <div class="section-body">
        <h2 class="section-title">Proyek</h2>
        <p class="section-lead">Proyek yang pernah saya kerjakan.</p>
        <div class="button-create w-100 mb-5" align="right">
          <a href="{{route('admin.project.create')}}" class="btn btn-icon icon-left btn-success px-5"><i class="fas fa-plus-square"></i> Membuat Data</a>            
        </div>
        <div class="row">
          @foreach ($myProject as $project)
          <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <article class="article">
              <div class="article-header">
                <div class="article-image" data-background="{{ URL::to('/') }}/admin/images/project/{{ $project->image }}">
                </div>
                <div class="article-title">
                  <h2><a href="#">{{ $project->title }}</a></h2>
                </div>
              </div>
              <div class="article-details">
                <p>{{ $project->job }}</p>
                <div class="article-cta">
                  <a href="{{ route('admin.project.edit',$project->id) }}" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Edit Proyek</a>
                  <a href="#" class="btn btn-icon icon-left btn-danger" data-toggle="modal"
                  onclick="deleteDataProject({{$project->id}})"
                  data-target="#DeleteModalUser"><i class="fas fa-times"></i> Hapus Proyek</a>
                </div>
              </div>
            </article>
          </div>
          @endforeach
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
                    <form action="" id="deleteFormProject" method="post">
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
                        onclick="formSubmitProject()">Yes, Delete</button>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    function deleteDataProject(id) {
        let idProject = id;
        let url = '{{ route("admin.project.destroy", ":id") }}';
        url = url.replace(':id', idProject);
        $("#deleteFormProject").attr('action', url);
    }

    function formSubmitProject() {
        $("#deleteFormProject").submit();
    }

</script>
@endsection
