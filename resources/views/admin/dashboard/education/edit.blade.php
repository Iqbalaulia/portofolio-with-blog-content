@extends('./admin/index')
@section('content-admin')
<div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
    <section class="profile">
        <div class="card">
            <div class="card-body">
                <form action="{{route('admin.education.update',$myEducation->user_id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')                    

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-block mt-1">
                                <p>Pendidikan</p>
                                <fieldset>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3"><i
                                                    class="la la-university"></i></span>
                                        </div>
                                    <input type="text" value="{{$myEducation->university}}" name="university" class="form-control"
                                            placeholder="Addon to Left" aria-describedby="basic-addon3">
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-block mt-1">
                                <p>Gelar</p>
                                <fieldset>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3"><i
                                                    class="la la-trophy"></i></span>
                                        </div>
                                        <input type="text" value="{{$myEducation->degree}}" name="degree" class="form-control"
                                            placeholder="Addon to Left" aria-describedby="basic-addon3">
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-block mt-1">
                                <p>Bidang Pendidikan</p>
                                <fieldset>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3"><i
                                                    class="la la-graduation-cap"></i></span>
                                        </div>
                                        <input type="text" value="{{$myEducation->field_study}}" name="field_study" class="form-control"
                                            placeholder="Addon to Left" aria-describedby="basic-addon3">
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-block mt-1">
                                <p>Nilai Akhir</p>
                                <fieldset>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3"><i
                                                    class="la la-certificate"></i></span>
                                        </div>
                                        <input type="text" value="{{$myEducation->score}}" name="score" class="form-control" placeholder="Addon to Left"
                                            aria-describedby="basic-addon3">
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-block mt-1">
                                <p>Tanggal Masuk</p>
                                <fieldset>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3"><i
                                                    class="la la-clock-o"></i></span>
                                        </div>
                                        <input type="month" value="{{$myEducation->ed_start_year}}" name="ed_start_year" class="form-control"
                                            placeholder="Addon to Left" aria-describedby="basic-addon3">
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-block mt-1">
                                <p>Tanggal Selesai</p>
                                <fieldset>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3"><i
                                                    class="la la-clock-o"></i></span>
                                        </div>
                                        <input type="month" value="{{$myEducation->ed_end_year}}" name="ed_end_year" class="form-control"
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
                                        <input type="file" class="form-control" value="{{$myEducation->image}}" name="image" class="" id="inputGroupFile01">
                                        <img loading="lazy" class="card-img-top mt-0 ml-5" alt="..." style="width:50%; margin-bottom:10%;" src="{{ URL::to('/') }}/admin/images/education/{{ $myEducation->image }}"/>
                                        <input type="hidden" name="hidden_image" value="{{ URL::to('/') }}/admin/images/education/{{ $myEducation->image }}">

                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-block mt-1">
                                <p>Deskripsi</p>
                                <fieldset>
                                    <div class="input-group">
                                        <textarea name="ed_description" class="form-control" placeholder="Tentang Saya"
                                            id="" cols="30" rows="10">{{$myEducation->ed_description}}</textarea>
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
