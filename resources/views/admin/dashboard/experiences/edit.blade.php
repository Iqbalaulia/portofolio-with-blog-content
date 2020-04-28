@extends('./admin/index')
@section('content-admin')


<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Merubah Data Pengalaman</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item"><a href="#">Forms</a></div>
          <div class="breadcrumb-item">Merubah Data Pengalaman</div>
        </div>
      </div>

      <div class="section-body">
        <h2 class="section-title">Merubah Data Pengalaman</h2>
        <p class="section-lead">We provide advanced input fields, such as date picker, color picker, and so on.</p>

        <div class="row">
          <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4>Data Pengalaman</h4>
              </div>
              <div class="card-body">

                <form action="{{route('admin.experiences.update',$myExperiences->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')     

                  <div class="form-group">
                    <label>Posisi</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fa fa-building" aria-hidden="true"></i>
                        </div>
                      </div>
                      <input type="text" value="{{$myExperiences->title}}" name="title" class="form-control phone-number">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Bidang Pengalaman</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-chart-pie"></i> </div>
                      </div>
                      <input type="text" value="{{$myExperiences->type_of_work}}" name="type_of_work" class="form-control">
                    </div>
                
                  </div>
                  <div class="form-group">
                    <label>Perusahaan</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="far fa-building"></i> </div>
                      </div>
                      <input type="text" class="form-control " value="{{$myExperiences->company}}" name="company">
                    </div>
                 
                  </div>
                  <div class="form-group">
                    <label>Lokasi</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-street-view"></i>
                        </div>
                      </div>
                      <input type="text" value="{{$myExperiences->location}}" name="location" class="form-control">
                    </div>
                    <div id="pwindicator" class="pwindicator">
                      <div class="bar"></div>
                      <div class="label"></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Tanggal Masuk</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="far fa-calendar-alt"></i> </div>
                      </div>
                      <input  type="month" value="{{$myExperiences->ex_start_year}}" name="ex_start_year" class="form-control">
                    </div>
                  
                  </div>
                  <div class="form-group">
                    <label>Tanggal Selesai</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-calendar"></i>
                        </div>
                      </div>
                      <input type="month" value="{{$myExperiences->ex_end_year}}" name="ex_end_year" class="form-control">
                    </div>
                   
                  </div>

                  <div class="form-group">
                    <label>Deskripsi Pengalaman</label>
                    <div class="input-group">
                      <textarea name="ex_description" class="w-100 rounded p-4" rows="20" placeholder="Tentang Saya">{{$myExperiences->ex_description}}</textarea>
                    </div>
                   
                  </div>

                  <div class="button-edit" align="right">
                    <button type="submit" class="btn btn-icon icon-left btn-success px-5 py-2 font-weight-bold"><i
                        class="fa fa-check-circle" aria-hidden="true"></i> Data Disimpan</button>
                  </div>
                </form>

              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
  </div>
@endsection
