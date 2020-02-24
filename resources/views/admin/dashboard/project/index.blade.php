@extends('./admin/index')
@section('content-admin')
<div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
    <div class="content-body">
        <section id="configuration">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Data Project</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body card-dashboard">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="buton-add w-100" align="right">
                                            <a href="{{route('admin.project.create')}}">
                                                <button type="button"
                                                    class="mr-1 mb-1 btn btn-outline-info btn-min-width"><i
                                                        class="la la-user"></i> Add Project</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Bidang Kerja</th>
                                            <th>Foto</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 0;?>
                                        @foreach ($myProject as $project)
                                        <?php $no++ ;?>
                                        <tr>
                                           
                                            <td>{{ $no }}</td>
                                            <td style="width:20%;">{{ $project->title }}</td>
                                            <td style="width:20%;">{{ $project->job }}</td>
                                            <td>
                                            <img loading="lazy" class="card-img-top mt-0 ml-0 mr-0 auto" alt="..."  style="width:20%;"  src="{{ URL::to('/') }}/admin/images/project/{{ $project->image }}"/>
                                        </td>
                                        
                                            <td  style="width:20%;">

                                                <div class="row">
                                                    <a href="{{ route('admin.project.edit',$project->id) }}"
                                                        class="ml-2 ">
                                                        <button type="button" class="btn btn-primary"> <i
                                                                class="la la-edit"></i></button>
                                                    </a>

                                                    &nbsp;&nbsp;
                                                    <a href="" class="" data-toggle="modal"
                                                        onclick="deleteDataProject({{$project->id}})"
                                                        data-target="#DeleteModalUser">
                                                        <button type="button" class="btn btn-danger"><i
                                                                class="la la-trash"></i></button>
                                                    </a>
                                                </div>

                                            </td>

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
                                          


                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Bidang Kerja</th>
                                            <th>Foto</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
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
        <!--/ Zero configuration table -->
    </div>
</div>

@endsection
