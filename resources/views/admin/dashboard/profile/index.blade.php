@extends('./admin/index')
@section('content-admin')

<div class="row">
    <div class="col-md-4 col-sm-4 col-lg-4 col-xl-4">
        <section class="card-profile">
            <div class="card">
                <div class="text-center">
                    <div class="card-body">
                        <img src="{{ URL::to('/') }}/admin/images/{{ $profileUser->photo }}"
                            class="height-150" alt="Card image">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">{{ $profileUser->name }}</h4>
                        <h6 class="card-subtitle text-muted">Managing Director</h6>
                    </div>
                    <div class="text-center">
                    <a href="{{$detailProfile['facebook']}}" target="_blank" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook">
                            <span class="la la-facebook"></span>
                        </a>
                        <a href="{{$detailProfile['instagram']}}" target="_blank" class="btn btn-social-icon mr-1 mb-1 btn-outline-instagram">
                            <span class="la la-instagram"></span>
                        </a>
                        <a href="{{$detailProfile['linkedin']}}" target="_blank" class="btn btn-social-icon mb-1 mr-1 btn-outline-linkedin">
                            <span class="la la-linkedin"></span>
                        </a>
                        <a href="{{$detailProfile['github']}}" target="_blank" class="btn btn-social-icon mb-1 btn-outline-github">
                          <span class="la la-github"></span>
                      </a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="col-md-8 col-sm-8 col-lg-8 col-xl-8">
        <section class="profile">
            <div class="card">
                <div class="card-body">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-block">
                                    <p>Nama Lengkap</p>
                                    <fieldset>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon3"><i class="la la-user"></i></span>
                                        </div>
                                        <input type="text" value="{{$profileUser->name}}" class="form-control" placeholder="Addon to Left" aria-describedby="basic-addon3">
                                      </div>
                                    </fieldset>
                                  </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-block">
                                    <p>Email</p>
                                    <fieldset>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon3"><i class="la la-envelope"></i></span>
                                        </div>
                                        <input type="email" value="{{$profileUser->email}}" class="form-control" placeholder="Addon to Left" aria-describedby="basic-addon3">
                                      </div>
                                    </fieldset>
                                  </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-block mt-1">
                                    <p>Role</p>
                                    <fieldset>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon3"><i class="la la-envelope"></i></span>
                                        </div>
                                        <input type="text" value="{{$profileUser->role}}" class="form-control" placeholder="Addon to Left" aria-describedby="basic-addon3">
                                      </div>
                                    </fieldset>
                                  </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-block mt-1">
                                    <p>Password</p>
                                    <fieldset>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon3"><i class="la la-lock"></i></span>
                                        </div>
                                        <input type="password" value="{{$profileUser->password}}" class="form-control" placeholder="Addon to Left" aria-describedby="basic-addon3">
                                      </div>
                                    </fieldset>
                                  </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                    </form>
                </div>
            </div>
        </section>
       
    </div>
    
    <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
        <section class="profile-detail">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="buton-add w-100" align="right" >
                                @if ($detailProfile['id'] > 0)
                                <a href="{{url('admin/detail-profile/'.$detailProfile['user_id'].'/edit')}}">
                                    <button type="button" class="mr-1 mb-1 btn btn-outline-primary btn-min-width" ><i class="la la-user"></i> Edit Detail User</button>
                                </a> 
    
                                @else
                                <a href="{{route('admin.detail-profile.create')}}">
                                    <button type="button" class="mr-1 mb-1 btn btn-outline-primary btn-min-width" ><i class="la la-user"></i> Detail User</button>
                                    </a> 
    
                                @endif
                          
                            </div>
                        </div>
                    </div>
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-block">
                                    <p>Tanggal Lahir</p>
                                    <fieldset>
                                      <div class="input-group">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="basic-addon3"><i class="la la-user"></i></span>
                                        </div>
                                    <input type="date" value="{{$detailProfile['date_birth']}}" name="date_birth" class="form-control" placeholder="Addon to Left" aria-describedby="basic-addon3">
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
                                          <span class="input-group-text" id="basic-addon3"><i class="la la-map-marker"></i></span>
                                        </div>
                                        <input type="text" value="{{$detailProfile['address']}}" name="address" class="form-control" placeholder="Addon to Left" aria-describedby="basic-addon3">
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
                                          <span class="input-group-text" id="basic-addon3"><i class="la la-flag-o"></i></span>
                                        </div>
                                        <input type="text" value="{{$detailProfile['country']}}" name="country" class="form-control" placeholder="Addon to Left" aria-describedby="basic-addon3">
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
                                          <span class="input-group-text" id="basic-addon3"><i class="la la-envelope"></i></span>
                                        </div>
                                        <input type="text" value="{{$detailProfile['email']}}" name="email" class="form-control" placeholder="Addon to Left" aria-describedby="basic-addon3">
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
                                          <span class="input-group-text" id="basic-addon3"><i class="la la-archive"></i></span>
                                        </div>
                                        <input type="text" value="{{$detailProfile['project_complate']}}" name="project_complate" class="form-control" placeholder="Addon to Left" aria-describedby="basic-addon3">
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
                                          <span class="input-group-text" id="basic-addon3"><i class="la la-phone"></i></span>
                                        </div>
                                        <input type="text" value="{{$detailProfile['phone']}}" name="phone" class="form-control" placeholder="Addon to Left" aria-describedby="basic-addon3">
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
                                          <span class="input-group-text" id="basic-addon3"><i class="la la-facebook"></i></span>
                                        </div>
                                        <input type="text" value="{{$detailProfile['facebook']}}" name="facebook" class="form-control" placeholder="Addon to Left" aria-describedby="basic-addon3">
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
                                          <span class="input-group-text" id="basic-addon3"><i class="la la-github"></i></span>
                                        </div>
                                        <input type="text" value="{{$detailProfile['github']}}" name="github" class="form-control" placeholder="Addon to Left" aria-describedby="basic-addon3">
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
                                          <span class="input-group-text" id="basic-addon3"><i class="la la-instagram"></i></span>
                                        </div>
                                        <input type="text" value="{{$detailProfile['instagram']}}" name="instagram" class="form-control" placeholder="Addon to Left" aria-describedby="basic-addon3">
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
                                          <span class="input-group-text" id="basic-addon3"><i class="la la-linkedin"></i></span>
                                        </div>
                                        <input type="text" value="{{$detailProfile['linkedin']}}" name="linkedin" class="form-control" placeholder="Addon to Left" aria-describedby="basic-addon3">
                                      </div>
                                    </fieldset>
                                  </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-block mt-1">
                                    <p>Tentang Saya</p>
                                    <fieldset>
                                      <div class="input-group">
                                        <textarea name="about_me"  class="form-control" placeholder="Tentang Saya" id="" cols="30" rows="10">{{$detailProfile['about_me']}}</textarea>
                                      </div>
                                    </fieldset>
                                  </div>
                            </div>
                        </div>
                       
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
