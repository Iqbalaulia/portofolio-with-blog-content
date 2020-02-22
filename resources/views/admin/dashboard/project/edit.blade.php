@extends('./admin/index')
@section('content-admin')
<div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
    <section class="profile">
        <div class="card">
            <div class="card-body">
                <form action="{{route('admin.project.update',$myProject->user_id)}}" method="post" enctype="multipart/form-data">
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
                                                    class="la la-map-marker"></i></span>
                                        </div>
                                    <input type="text" value="{{$myProject->title}}" name="title" class="form-control"
                                            placeholder="Addon to Left" aria-describedby="basic-addon3">
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-block mt-1">
                                <p>Job</p>
                                <fieldset>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3"><i
                                                    class="la la-map-marker"></i></span>
                                        </div>
                                    <input type="text" value="{{$myProject->job}}" name="job" class="form-control"
                                            placeholder="Addon to Left" aria-describedby="basic-addon3">
                                         
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-block mt-1">
                                <p>Photo</p>
                                <fieldset>
                                    <div class="input-group">
                                        <input type="file" name="image" class="" id="inputGroupFile01">
                                        <img loading="lazy" class="card-img-top mt-0 ml-5" alt="..." style="width:50%; margin-bottom:10%;" src="{{ URL::to('/') }}/admin/images/project/{{ $myProject->image }}"/>
                                        <input type="hidden" name="hidden_image" value="{{ URL::to('/') }}/admin/images/project/{{ $myProject->image }}">
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="col-sm-12 mt-1">
                            <div class="buton-add w-100" align="right">
                                <button type="submit" class="mr-1 mb-1 btn btn-outline-success btn-min-width"><i
                                        class="la la-user"></i> Save Change</button>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
