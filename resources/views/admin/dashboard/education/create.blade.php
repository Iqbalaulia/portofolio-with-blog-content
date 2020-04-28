@extends('./admin/index')
@section('content-admin')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Membuat Data Pendidikan</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item"><a href="#">Forms</a></div>
          <div class="breadcrumb-item">Membuat Data Pendidikan</div>
        </div>
      </div>

      <div class="section-body">
        <h2 class="section-title">Membuat Data Pendidikan</h2>
        <p class="section-lead">We provide advanced input fields, such as date picker, color picker, and so on.</p>

        <div class="row">
          <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4>Data Pendidikan</h4>
              </div>
              <div class="card-body">

                <form action="{{route('admin.education.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                  <div class="form-group">
                    <label>Pendidikan</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fa fa-building" aria-hidden="true"></i>
                        </div>
                      </div>
                      <input type="text" name="university" placeholder="Nama Instansi Pendidikan" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Gelar</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-award"></i>                    
                        </div>
                      </div>
                      <input type="text" name="degree" placeholder="Gelar yang Didapat" class="form-control">
                    </div>
                 
                  </div>
                  <div class="form-group">
                    <label>Bidang Pendidikan</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-user-graduate"></i>
                         </div>
                      </div>
                      <input type="text"  name="field_study" placeholder="Bidang Pendidikan" class="form-control">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Nilai Akhir</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="fas fa-chart-line"></i>
                                                    </div>
                      </div>
                      <input type="text"  name="score" placeholder="Nilai Akhir" class="form-control">
                    </div>
                 
                  </div>
                  <div class="form-group">
                    <label>Tanggal Masuk</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <i class="far fa-calendar-alt"></i> </div>
                      </div>
                      <input type="month" name="ed_start_year" class="form-control ">
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
                      <input type="month" name="ed_end_year" class="form-control">
                    </div>
                 
                  </div>

                  <div class="form-group">
                    <label>Deskripsi Pendidikan</label>
                    <div class="input-group">
                      <textarea name="ed_description" id="" placeholder="Deskripsi Tentang Pendidikan" class="w-100 rounded p-4" rows="20"></textarea>
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
