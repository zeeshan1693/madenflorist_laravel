@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-4">
                <h1 class="page-header">Edit System Page</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body backgSet">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Name In English</label>
                                    <input type="text" name="name_english" class="form-control" placeholder="About Us">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Name In Arabic</label>
                                    <input type="text" name="name_arabic" class="form-control" placeholder="About Us">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Content In English</label>
                                    <input type="text" name="content_english" class="form-control" placeholder="Content">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Content In Arabic</label>
                                    <input type="text" name="content_arabic" class="form-control" placeholder="Content">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Description In English</label>
                                    <textarea rows="2" cols="2" name="description_english" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Description In Arabic</label>
                                    <textarea rows="2" cols="2" name="description_arabic" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer text-right" dir="ltr">
                            <a href="{{ route('system-pages.index') }}" class="btn btn btn-outline-dark">Cancel</a>
                            <button type="Submit" class="btn btn-maden">Save Changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection

@section('page-styles')
@stop

@section('page-script')
@stop