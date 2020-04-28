@extends('./admin/index')
@section('content-admin')
{{-- <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
    <section class="profile">
        <div class="card">
            <div class="card-body">
                <form action="{{route('admin.detail-profile.store')}}" method="post">
                    @csrf
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-block">
                                <p>Tanggal Lahir</p>
                                <fieldset>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3"><i
                                                    class="la la-user"></i></span>
                                        </div>
                                        <input type="date" name="date_birth" class="form-control"
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
                                        <input type="text" name="address" class="form-control"
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
                                        <input type="text" name="country" class="form-control"
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
                                        <input type="text" name="email" class="form-control" placeholder="Addon to Left"
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
                                        <input type="text" name="project_complate" class="form-control"
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
                                        <input type="text" name="phone" class="form-control" placeholder="Addon to Left"
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
                                        <input type="text" name="facebook" class="form-control"
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
                                        <input type="text" name="github" class="form-control"
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
                                        <input type="text" name="instagram" class="form-control"
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
                                        <input type="text" name="linkedin" class="form-control"
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
                                            cols="30" rows="10"></textarea>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="col-sm-12 mt-2">
                            <div class="buton-add w-100" align="right">
                                    <button type="submit" class="mr-1 mb-1 btn btn-outline-success btn-min-width"><i
                                            class="la la-user"></i> Save Detail</button>

                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </section>
</div> --}}

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Profile </div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Hi !</h2>
            <p class="section-lead">
                Create information about yourself on this page.
            </p>

            <div class="row mt-sm-4">

                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <form action="{{route('admin.detail-profile.store')}}" method="post">
                            @csr

                            <div class="card-header">
                                <h4>Data Profile</h4>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Nama Lengkap</label>
                                        <input type="text" name="name"
                                            class="form-control" required="">
                                        <div class="invalid-feedback">
                                            Please fill in the first name
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Alamat</label>
                                        <input type="text"  class="form-control"
                                              name="address" required="">
                                        <div class="invalid-feedback">
                                            Please fill in the last name
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-7 col-12">
                                        <label>Email</label>
                                        <input type="email" class="form-control"
                                            name="email"
                                            required="">
                                        <div class="invalid-feedback">
                                            Please fill in the email
                                        </div>
                                    </div>
                                    <div class="form-group col-md-5 col-12">
                                        <label>Phone</label>
                                        <input type="tel" class="form-control" 
                                        name="phone">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-5 col-12">
                                        <label>Negara</label>
                                        <input type="text" class="form-control" 
                                        name="country"    
                                        required="">
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" class="form-control" 
                                        name="date_birth"
                                        >
                                    </div>
                                    <div class="form-group col-md-4 col-12">
                                        <label>Total Pengerjaan Proyek</label>
                                        <input type="number" class="form-control"
                                        name="project_complate"
                                       >
                                    </div>
                                </div>
                                <label for="" class="text-bold font-weight-bold">Sosial Media</label>
                                <hr>
                                <div class="row">
                                    <div class="form-group col-md-3 col-12">
                                        <label>Facebook</label>
                                        <input type="text" class="form-control"
                                            name="facebook" 
                                            
                                            required="">
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                        <label>Instagram</label>
                                        <input type="text" class="form-control"
                                        name="instagram" 
                                       >
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                        <label>LinkedIn</label>
                                        <input type="text" class="form-control"
                                        name="linkedin" 
                                       >
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                        <label>Github</label>
                                        <input type="text" class="form-control"
                                        name="github" 
                                        >
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label>Tentang Saya</label>
                                        <textarea class="form-control" cols=""
                                            name="about_me"
                                            rows="30"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label>Foto</label>
                                        <input type="file" name="photo" class="form-control" id="inputGroupFile01">
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" class="mr-1 mb-1 btn btn-outline-primary btn-min-width btn-block"><i
                                    class="la la-user"></i> Simpan Data</button>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
</div>
@endsection
