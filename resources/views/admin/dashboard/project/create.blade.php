@extends('./admin/index')
@section('content-admin')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Membuat Data Proyek</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item"><a href="#">Forms</a></div>
          <div class="breadcrumb-item">Membuat Data Proyek</div>
        </div>
      </div>

      <div class="section-body">
        <h2 class="section-title">Membuat Data Proyek</h2>
        <p class="section-lead">We provide advanced input fields, such as date picker, color picker, and so on.</p>

        <div class="row">
          <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4>Data Proyek</h4>
              </div>
              <div class="card-body">

                <form action="{{route('admin.project.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                  <div class="form-group">
                    <label>Posisi</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fa fa-building" aria-hidden="true"></i>
                        </div>
                      </div>
                      <input type="text" placeholder="Posisi Job Perusahaan" name="title" class="form-control">
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
                      <input type="text" placeholder="Nama Perusahaan" name="job" class="form-control">
                    </div>
                  
                  </div>
                  <div class="form-group">
                    <label>Foto Proyek</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="far fa-images"></i> </div>
                      </div>
                      <input type="file" name="image" class="form-control">
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
