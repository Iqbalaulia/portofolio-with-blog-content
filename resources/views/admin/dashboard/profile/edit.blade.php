@extends('./admin/index')
@section('content-admin')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Profile {{ $detailProfile->user->name }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Profile </div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Hi,{{ $detailProfile->user->name }}!</h2>
            <p class="section-lead">
                Change information about yourself on this page.
            </p>

            <div class="row mt-sm-4">

                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <form action="{{ route('admin.detail-profile.update',$detailProfile->user_id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH') 

                            <div class="card-header">
                                <h4>Data Profile</h4>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Nama Lengkap</label>
                                        <input type="text" value="{{ $detailProfile->user->name }}" name="name"
                                            class="form-control" required="">
                                        <div class="invalid-feedback">
                                            Please fill in the first name
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Alamat</label>
                                        <input type="text" value="{{ $detailProfile->address }}" class="form-control"
                                              name="address" required="">
                                        <div class="invalid-feedback">
                                            Please fill in the last name
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-7 col-12">
                                        <label>Email</label>
                                        <input type="email" class="form-control" value="{{ $detailProfile->user->email }}"
                                            name="email"
                                            required="">
                                        <div class="invalid-feedback">
                                            Please fill in the email
                                        </div>
                                    </div>
                                    <div class="form-group col-md-5 col-12">
                                        <label>Phone</label>
                                        <input type="tel" class="form-control" 
                                        name="phone"value="{{ $detailProfile->phone }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-5 col-12">
                                        <label>Negara</label>
                                        <input type="text" class="form-control" 
                                        name="country"    
                                        value="{{ $detailProfile->country }}"
                                            required="">
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" class="form-control" 
                                        name="date_birth"
                                        value="{{ $detailProfile->date_birth }}">
                                    </div>
                                    <div class="form-group col-md-4 col-12">
                                        <label>Total Pengerjaan Proyek</label>
                                        <input type="number" class="form-control"
                                        name="project_complate"
                                        value="{{ $detailProfile->project_complate }}">
                                    </div>
                                </div>
                                <label for="" class="text-bold font-weight-bold">Sosial Media</label>
                                <hr>
                                <div class="row">
                                    <div class="form-group col-md-3 col-12">
                                        <label>Facebook</label>
                                        <input type="text" class="form-control"
                                            name="facebook" 
                                            value="{{ $detailProfile->facebook }}"
                                            required="">
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                        <label>Instagram</label>
                                        <input type="text" class="form-control"
                                        name="instagram" 
                                        value="{{ $detailProfile->instagram }}">
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                        <label>LinkedIn</label>
                                        <input type="text" class="form-control"
                                        name="linkedin" 
                                        value="{{ $detailProfile->linkedin }}">
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                        <label>Github</label>
                                        <input type="text" class="form-control"
                                        name="github" 
                                        value="{{ $detailProfile->github }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label>Tentang Saya</label>
                                        <textarea class="form-control" cols=""
                                            name="about_me"
                                            rows="30">{{ $detailProfile->about_me }}</textarea>
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
                                    class="la la-user"></i> Simpan Perubahan</button>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
</div>
@endsection
