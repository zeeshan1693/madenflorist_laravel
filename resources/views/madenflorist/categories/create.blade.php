@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-4">
                <h1 class="page-header">Add Category</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="panel-body backgSet">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Name in English</label>
                                        <input type="text" name="name_en" class="form-control" value="{{ old('name_en') != null ?  old('name_en') : '' }}" placeholder="Enter the name">
                                        @if ($errors->has('name_en'))
                                            <span class="text-danger">{{ $errors->first('name_en') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Name in Arabic</label>
                                        <input type="text" name="name_ar" class="form-control" value="{{ old('name_ar') != null ?  old('name_ar') : '' }}" placeholder="Enter the name">
                                        @if ($errors->has('name_ar'))
                                            <span class="text-danger">{{ $errors->first('name_ar') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Seperate</label>
                                        <select class="form-control" name="seperate">
                                            <option value="">-- Please Choose --</option>
                                            @foreach ($yes_no as $yn)
                                                <option value="{{ $yn->id }}">{{ $yn->name_en }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('seperate'))
                                            <span class="text-danger">{{ $errors->first('seperate') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status">
                                            <option value="">-- Please Choose --</option>
                                            @foreach ($allowed_banned as $ab)
                                                <option value="{{ $ab->id }}">{{ $ab->name_en }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('status'))
                                            <span class="text-danger">{{ $errors->first('status') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer text-right" dir="ltr">
                                <a href="{{ route('categories.index') }}" class="btn btn btn-outline-dark">Cancel</a>
                                <button type="Submit" class="btn btn-maden">Add Category</button>
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