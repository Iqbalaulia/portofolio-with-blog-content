@extends('./admin/index')
@section('content-admin')

<div class="row">
    <div class="col-md-12">
        <div class="row">
            <!--  PROFILE 02 PANEL -->
            <div class="col-lg-4 col-md-4 col-sm-4 mb">
                <div class="content-panel pn">
                    <div id="profile-02">
                        <div class="user">
                            <img src="img/friends/fr-06.jpg" class="img-circle" width="80">
                            <h4>{{ $profileUser->name }}</h4>
                        </div>
                    </div>
                    <div class="pr2-social centered">
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-github"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-gitlab"></i></a>
                    </div>
                </div>
                <!-- /panel -->
            </div>

            <!--  PROFILE 02 PANEL -->
            <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="panel-profile">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-lg-6">
                                <label for="">Nama Lengkap</label>
                                <input type="text" class="form-control round-form" value="{{ $profileUser->name}}">
                            </div>
                            <div class="col-md-6 col-sm-12 col-lg-6">
                                <label for="">Email</label>
                                <input type="text" class="form-control round-form" value="{{ $profileUser->email}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-lg-6">
                                <label for="">Role</label>
                                <input readonly type="text" class="form-control round-form"
                                    value="{{ $profileUser->role}}">
                            </div>
                            <div class="col-md-6 col-sm-12 col-lg-6">
                                <label for="">Password</label>
                                <input readonly type="password" class="form-control round-form"
                                    value="{{ $profileUser->password}}">
                            </div>
                        </div>
                        <button class="btn btn-primary">Edited</button>
                    </form>

                </div>
                <!-- /panel -->
            </div>
        </div>

    </div>
</div>
@endsection
