@extends('./admin/index')
@section('content-admin')
<div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
    <section class="profile">
        <div class="card">
            <div class="card-body">
                <form action="{{route('admin.tag.update',$tag->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')                    

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card-block mt-1">
                                <p>tag Blog</p>
                                <fieldset>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon3"><i
                                                    class="la la-university"></i></span>
                                        </div>
                                    <input type="text" value="{{$tag->tag}}" name="tag" class="form-control"
                                            placeholder="Addon to Left" aria-describedby="basic-addon3">
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                       
                        <div class="col-sm-12 mt-1">
                            <div class="buton-add w-100" align="right">
                                <button type="submit" class="btn-block mr-1 mb-1 btn btn-outline-success btn-min-width"><i
                                        class="la la-user"></i> Save Change</button>

                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </section>
</div>
@endsection
