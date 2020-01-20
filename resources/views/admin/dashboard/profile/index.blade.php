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
             <div class="col-lg-8 col-md-8 col-sm-8 mb">
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
        </div>
        <div class="row">
             <!--  PROFILE 02 PANEL -->
             <div class="col-lg-4 col-md-4 col-sm-4 mb">
                <div class="content-panel">
                    <img src="img/friends/fr-06.jpg" class="" style="width:100%; height:40em">
                </div>
                <!-- /panel -->
            </div>
        </div>
    </div>
</div>
@endsection
