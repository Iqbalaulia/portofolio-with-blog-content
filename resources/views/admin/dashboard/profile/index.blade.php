@extends('./admin/index')
@section('content-admin')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Profile {{ $profileUser->user->name }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Profile</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Hi, {{ $profileUser->user->name }}!</h2>
            <p class="section-lead">
                Change information about yourself on this page.
            </p>

            <div class="row mt-sm-4">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-center">
                        @if (empty($profileUser->user->photo))
                        <img src="{{ URL::to('/') }}/admin/images/user.png"
                            class=" profile-widget-picture w-50 pt-3 pb-3 " alt="Card image">
                        @else
                        <img src="{{ URL::to('/') }}/admin/images/{{ $profileUser->user->photo }}"
                            class=" profile-widget-picture w-100 pt-3 pb-3" alt="Card image">
                        @endif
                    </div>

                </div>
                <div class="col-12 col-md-12 col-lg-8">

                </div>


                <div class="col-12 col-md-12 col-lg-6">
                    <div class="card">
                        <form method="post" class="needs-validation" novalidate="">
                            <div class="card-header">
                                <h4>Data Profile</h4>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Nama Lengkap</label>
                                        <input type="text" value="{{ $profileUser->user->name }}" name="nama_lengkap"
                                            class="form-control" required="">
                                        <div class="invalid-feedback">
                                            Please fill in the first name
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Alamat</label>
                                        <input type="text" value="{{ $profileUser->address }}" class="form-control"
                                            value="Maman" required="">
                                        <div class="invalid-feedback">
                                            Please fill in the last name
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-7 col-12">
                                        <label>Email</label>
                                        <input type="email" class="form-control" value="{{ $profileUser->user->email }}"
                                            required="">
                                        <div class="invalid-feedback">
                                            Please fill in the email
                                        </div>
                                    </div>
                                    <div class="form-group col-md-5 col-12">
                                        <label>Phone</label>
                                        <input type="tel" class="form-control" value="{{ $profileUser->phone }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-5 col-12">
                                        <label>Negara</label>
                                        <input type="text" class="form-control" value="{{ $profileUser->country }}"
                                            required="">
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                        <label>Tanggal Lahir</label>
                                        <input type="date" class="form-control" value="{{ $profileUser->date_birth }}">
                                    </div>
                                    <div class="form-group col-md-4 col-12">
                                        <label>Total Pengerjaan Proyek</label>
                                        <input type="number" class="form-control"
                                            value="{{$profileUser->project_complate}}">
                                    </div>
                                </div>
                                <label for="" class="text-bold font-weight-bold">Sosial Media</label>
                                <hr>
                                <div class="row">
                                    <div class="form-group col-md-3 col-12">
                                        <label>Facebook</label>
                                        <input type="text" class="form-control" value="{{ $profileUser->facebook }}"
                                            required="">
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                        <label>Instagram</label>
                                        <input type="text" class="form-control" value="{{ $profileUser->instagram }}">
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                        <label>LinkedIn</label>
                                        <input type="text" class="form-control" value="{{ $profileUser->linkedin }}">
                                    </div>
                                    <div class="form-group col-md-3 col-12">
                                        <label>Github</label>
                                        <input type="text" class="form-control" value="{{ $profileUser->github }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label>Tentang Saya</label>
                                        <textarea class="form-control" cols=""
                                            rows="30">{{ $profileUser->about_me }}</textarea>
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer text-right">
                                {{-- <a href="" class="btn btn-primary">Edit Data</a> --}}
                                @if ($profileUser->user->id > 0)
                                <a href="{{url('admin/detail-profile/'.$profileUser->user_id.'/edit')}}" class="text-decoration-none">
                                    <button type="button" class="mr-1 mb-1 btn btn-outline-primary btn-min-width btn-block"><i
                                            class="la la-user"></i> Edit Detail User</button>
                                </a>

                                @else
                                <a href="{{route('admin.detail-profile.create')}}" class="text-decoration-none">
                                    <button type="button" class="mr-1 mb-1 btn btn-outline-primary btn-min-width btn-block"><i
                                            class="la la-user"></i> Detail User</button>
                                </a>

                                @endif
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="card profile-widget">
                        <div class="profile-widget-header">
                            <div class="profile-widget-items">
                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-label">Posting Blog</div>
                                    <div class="profile-widget-item-value">{{ $blogContent }}</div>
                                </div>
                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-label">Proyek Dikerjakan</div>
                                    <div class="profile-widget-item-value">{{ $profileUser->project_complate }} Client</div>
                                </div>
                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-label">Following</div>
                                    <div class="profile-widget-item-value">2,1K</div>
                                </div>
                            </div>
                        </div>
                        <div class="profile-widget-description">
                            <div class="profile-widget-name">{{ $profileUser->user->name }} <div
                                    class="text-muted d-inline font-weight-normal">
                                    <div class="slash"></div> Web Developer
                                </div>
                            </div>
                            {{ $profileUser->about_me }}
                        </div>
                        <div class="card-footer text-center">
                            <div class="font-weight-bold mb-2">Follow {{ $profileUser->user->name }} On</div>
                            <a href="" target="_blank" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook">
                                <span class="la la-facebook"></span>
                            </a>
                            <a href="" target="_blank" class="btn btn-social-icon mr-1 mb-1 btn-outline-instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="" target="_blank" class="btn btn-social-icon mb-1 mr-1 btn-outline-linkedin">
                                <span class="la la-linkedin"></span>
                            </a>
                            <a href="" target="_blank" class="btn btn-social-icon mb-1 btn-outline-github">
                                <span class="la la-github"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
