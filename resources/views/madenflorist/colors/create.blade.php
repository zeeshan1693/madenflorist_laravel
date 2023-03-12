@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-4">
                <h1 class="page-header">Add Color</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <form action="{{ route('colors.store') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="panel-body backgSet">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Name in English</label>
                                        <input type="text" name="name_en" class="form-control" value="{{ old('name_en') != null ? old('name_en') : '' }}" placeholder="Enter the name">
                                        @if ($errors->has('name_en'))
                                            <span class="text-danger">{{ $errors->first('name_en') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Name in Arabic</label>
                                        <input type="text" name="name_ar" class="form-control" value="{{ old('name_ar') != null ? old('name_ar') : '' }}" placeholder="Enter the name">
                                        @if ($errors->has('name_ar'))
                                            <span class="text-danger">{{ $errors->first('name_ar') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Hex Color</label>
                                        <input class="form-control" type="color" name="hex_color" value="{{ old('hex_color') != null ? old('hex_color') : '#e66465' }}">
                                        @if ($errors->has('hex_color'))
                                            <span class="text-danger">{{ $errors->first('hex_color') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer text-right" dir="ltr">
                                <a href="{{ route('colors.index') }}" class="btn btn btn-outline-dark">Cancel</a>
                                <button type="Submit" class="btn btn-maden">Add Color</button>
                            </div>
                        </div>
                    </form>
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