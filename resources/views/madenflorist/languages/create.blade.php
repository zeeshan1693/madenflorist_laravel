@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-4">
                <h1 class="page-header">Add Language</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body backgSet">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Language Name</label>
                                    <input type="text" name="language" class="form-control" placeholder="Enter The Language">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Welcome Text</label>
                                    <input type="text" name="welcome_text" class="form-control" placeholder="Enter The Welcome Text">
                                </div>
                            </div>
                        </div>

                        <div class="card-footer text-right" dir="ltr">
                            <a href="{{ route('languages.index') }}" class="btn btn btn-outline-dark">Cancel</a>
                            <button type="Submit" class="btn btn-maden">Add Language</button>
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