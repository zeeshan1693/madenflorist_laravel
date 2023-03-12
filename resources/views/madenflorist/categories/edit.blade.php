@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-4">
                <h1 class="page-header">Edit Category</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body backgSet">
                        <form action="{{ route('categories.update', $categories->id) }}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            {{ csrf_field() }}
                            
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Name in English</label>
                                        <input type="text" name="name_en" class="form-control" placeholder="Flower Vases" value="{{ $categories->name_en }}">
                                        @if ($errors->has('name_en'))
                                            <span class="text-danger">{{ $errors->first('name_en') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Name in Arabic</label>
                                        <input type="text" name="name_ar" class="form-control" placeholder="Flower Vases" value="{{ $categories->name_ar }}">
                                        @if ($errors->has('name_ar'))
                                            <span class="text-danger">{{ $errors->first('name_ar') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Seperate</label>
                                        <select class="form-control" name="seperate">
                                            @foreach ($yes_no as $yesn)
                                                <option value="{{ $yesn->id }}" {{  $yesn->id == $categories->consider_as_separate ? 'selected' : ''  }}>{{ $yesn->name_en }}</option>
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
                                            @foreach ($allowed_banned as $ab)
                                                <option value="{{ $ab->id }}" {{ $ab->id == $categories->status ? 'selected' : '' }}>{{ $ab->name_en }}</option>
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
                                <button type="Submit" class="btn btn-maden">Save Changes</button>
                            </div>
                        </form>
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