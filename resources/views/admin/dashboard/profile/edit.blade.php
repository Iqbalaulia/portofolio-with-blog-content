@extends('./admin/index')
@section('content-admin')
<div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
    <section class="profile">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.detail-profile.update',$detailProfile->user_id) }}" method="post">
                    @csrf
                    @method('PATCH')                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-block">
                                <p>Nama Lengkap</p>
                                <fieldset>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3"><i
                                                    class="la la-user"></i></span>
                                        </div>
                                    <input type="text" value="{{$profileUser->name}}" name="name" class="form-control"
                                            placeholder="Addon to Left" aria-describedby="basic-addon3">
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-block">
                                <p>Role</p>
                                <fieldset>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3"><i
                                                    class="la la-user"></i></span>
                                        </div>
                                    <input type="text" value="{{$profileUser->role}}" name="role" class="form-control"
                                            placeholder="Addon to Left" aria-describedby="basic-addon3">
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-block">
                                <p>Tanggal Lahir</p>
                                <fieldset>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3"><i
                                                    class="la la-user"></i></span>
                                        </div>
                                    <input type="date" value="{{$detailProfile->date_birth}}" name="date_birth" class="form-control"
                                            placeholder="Addon to Left" aria-describedby="basic-addon3">
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="card-block">
                                <p>Alamat</p>
                                <fieldset>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3"><i
                                                    class="la la-map-marker"></i></span>
                                        </div>
                                        <input type="text" value="{{$detailProfile->address}}" name="address" class="form-control"
                                            placeholder="Addon to Left" aria-describedby="basic-addon3">
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-block mt-1">
                                <p>Negara</p>
                                <fieldset>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3"><i
                                                    class="la la-flag-o"></i></span>
                                        </div>
                                        <input type="text" value="{{$detailProfile->country}}" name="country" class="form-control"
                                            placeholder="Addon to Left" aria-describedby="basic-addon3">
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-block mt-1">
                                <p>Email</p>
                                <fieldset>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3"><i
                                                    class="la la-envelope"></i></span>
                                        </div>
                                        <input type="text" value="{{$profileUser->email}}"  name="email" class="form-control" placeholder="Addon to Left"
                                            aria-describedby="basic-addon3">
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-block mt-1">
                                <p>Total Project Dikerjakan</p>
                                <fieldset>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3"><i
                                                    class="la la-archive"></i></span>
                                        </div>
                                        <input type="text" value="{{$detailProfile->project_complate}}" name="project_complate" class="form-control"
                                            placeholder="Addon to Left" aria-describedby="basic-addon3">
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-block mt-1">
                                <p>Nomor Telepon</p>
                                <fieldset>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3"><i
                                                    class="la la-phone"></i></span>
                                        </div>
                                        <input type="text" value="{{$detailProfile->phone}}" name="phone" class="form-control" placeholder="Addon to Left"
                                            aria-describedby="basic-addon3">
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-block mt-1">
                                <p>Facebook</p>
                                <fieldset>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3"><i
                                                    class="la la-facebook"></i></span>
                                        </div>
                                        <input type="text" value="{{$detailProfile->facebook}}" name="facebook" class="form-control"
                                            placeholder="Addon to Left" aria-describedby="basic-addon3">
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-block mt-1">
                                <p>Github</p>
                                <fieldset>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3"><i
                                                    class="la la-github"></i></span>
                                        </div>
                                        <input type="text" value="{{$detailProfile->github}}" name="github" class="form-control"
                                            placeholder="Addon to Left" aria-describedby="basic-addon3">
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-block mt-1">
                                <p>Instagram</p>
                                <fieldset>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3"><i
                                                    class="la la-instagram"></i></span>
                                        </div>
                                        <input type="text" value="{{$detailProfile->instagram}}" name="instagram" class="form-control"
                                            placeholder="Addon to Left" aria-describedby="basic-addon3">
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-block mt-1">
                                <p>LinkedIn</p>
                                <fieldset>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3"><i
                                                    class="la la-linkedin"></i></span>
                                        </div>
                                        <input type="text" value="{{$detailProfile->linkedin}}" name="linkedin" class="form-control"
                                            placeholder="Addon to Left" aria-describedby="basic-addon3">
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card-block mt-1">
                                <p>Tentang Saya</p>
                                <fieldset>
                                    <div class="input-group">
                                        <textarea name="about_me" class="form-control" placeholder="Tentang Saya" id=""
                                            cols="30" rows="10">{{$detailProfile->about_me}}</textarea>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="col-sm-12 mt-2">
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
