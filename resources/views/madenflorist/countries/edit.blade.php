@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-4">
                <h1 class="page-header">Edit Country</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body backgSet">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Name In English</label>
                                    <input type="text" name="name_english" class="form-control" placeholder="Saudi Arabia">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Name In Arabic</label>
                                    <input type="text" name="name_arabic" class="form-control" placeholder="Saudi Arabia">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status">
                                        <option>Allowed</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Image (jpg, png, jpeg)(size: 300*300)</label>
                                    <input type="file" name="logo" class="form-control" placeholder="file" onchange="preview()">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>&nbsp;</label>
                                    <img class="br-5" id="frame" src="{{ asset('assets/icons/file.png') }}" width="100px" height="100px"/>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer text-right" dir="ltr">
                            <a href="{{ route('countries.index') }}" class="btn btn btn-outline-dark">Cancel</a>
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
<script>
    function preview() {
        frame.src=URL.createObjectURL(event.target.files[0]);
    }
</script>
@stop