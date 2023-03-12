@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-4">
                <h1 class="page-header">Edit Role</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body backgSet">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Role Name</label>
                                    <input type="text" name="role_name" class="form-control" placeholder="Enter The name">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Dashboard</label>
                                    <select class="form-control" name="status">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Login</label>
                                    <select class="form-control" name="status">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Admin Permission</label>
                                    <select class="form-control" name="status">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Admin Users</label>
                                    <select class="form-control" name="status">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>City</label>
                                    <select class="form-control" name="status">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Country</label>
                                    <select class="form-control" name="status">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Logout</label>
                                    <select class="form-control" name="status">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Currency</label>
                                    <select class="form-control" name="status">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Category</label>
                                    <select class="form-control" name="status">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Sub Category</label>
                                    <select class="form-control" name="status">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Products</label>
                                    <select class="form-control" name="status">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Colors</label>
                                    <select class="form-control" name="status">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Types</label>
                                    <select class="form-control" name="status">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Banners</label>
                                    <select class="form-control" name="status">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Api Errors</label>
                                    <select class="form-control" name="status">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Language</label>
                                    <select class="form-control" name="status">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Occasions</label>
                                    <select class="form-control" name="status">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Subscriptions</label>
                                    <select class="form-control" name="status">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Designers</label>
                                    <select class="form-control" name="status">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Brands</label>
                                    <select class="form-control" name="status">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Users</label>
                                    <select class="form-control" name="status">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Warehouse</label>
                                    <select class="form-control" name="status">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Timeslots</label>
                                    <select class="form-control" name="status">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Dateslots</label>
                                    <select class="form-control" name="status">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>TemplateSlots</label>
                                    <select class="form-control" name="status">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>System Pages</label>
                                    <select class="form-control" name="status">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Orders</label>
                                    <select class="form-control" name="status">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Batlaat Program</label>
                                    <select class="form-control" name="status">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Template SMS</label>
                                    <select class="form-control" name="status">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Template Email</label>
                                    <select class="form-control" name="status">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Terms & Conditions</label>
                                    <select class="form-control" name="status">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Discount Codes</label>
                                    <select class="form-control" name="status">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Occassion Tab</label>
                                    <select class="form-control" name="status">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Delivery Cost</label>
                                    <select class="form-control" name="status">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Payment Method</label>
                                    <select class="form-control" name="status">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Time Slots Gap</label>
                                    <select class="form-control" name="status">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Second Types</label>
                                    <select class="form-control" name="status">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Sub Type Labels</label>
                                    <select class="form-control" name="status">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Redeem Amounts</label>
                                    <select class="form-control" name="status">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Wallet Amounts</label>
                                    <select class="form-control" name="status">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Batlaat Info</label>
                                    <select class="form-control" name="status">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Products Addon</label>
                                    <select class="form-control" name="status">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Account Deletion</label>
                                    <select class="form-control" name="status">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Faq's</label>
                                    <select class="form-control" name="status">
                                        <option>Select</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer text-right" dir="ltr">
                            <a href="{{ route('admin-roles.index') }}" class="btn btn btn-outline-dark">Cancel</a>
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