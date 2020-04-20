@extends('./admin/index')
@section('content-admin')
<div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
    <section class="profile">
        <div class="card">
            <div class="card-body">
                
              @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{route('admin.tag.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-block mt-1">
                                <p>Tag Blog</p>
                                <fieldset>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3"><i
                                                    class="la la-university"></i></span>
                                        </div>
                                        <input type="text" name="tag" class="form-control"
                                            placeholder="Create Tag" aria-describedby="basic-addon3">
                                    </div>
                                </fieldset>
                            </div>
                        </div>

                        <div class="col-sm-12 mt-1">
                            <div class="buton-add w-100" align="right">
                                <button type="submit"
                                    class="mr-1 mb-1 btn btn-outline-success btn-min-width btn-block"><i
                                        class="la la-user"></i> Save Tag</button>

                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </section>
</div>
@endsection
