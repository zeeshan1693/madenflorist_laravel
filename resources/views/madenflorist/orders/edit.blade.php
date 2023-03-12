@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-4">
                <h1 class="page-header">Orders Details : 1123</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <span><strong>Recipient Details</strong></span> 
                        <button type="button" class="btn btn-maden pull-right"><i class="fa fa-print"></i> Print Order</button>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Landmark</th>
                                    <th>City</th>
                                    <th>Mobile</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Zeeshan</td>
                                    <td>Riyadh, Saudi Arabia</td>
                                    <td>-</td>
                                    <td>Riyadh</td>
                                    <td>91 550354530</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><br>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <span><strong>Greeting Card</strong></span> 
                        <a href="{{ route('orders.create') }}"><button type="button" class="btn btn-maden pull-right"><i class="fa fa-print"></i> Print Card</button></a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>To Name</th>
                                    <th>Message</th>
                                    <th>From Name</th>
                                    <th>Send Anonymously?</th>
                                    <th>URL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Zeeshan</td>
                                    <td>Hello</td>
                                    <td>Rehan</td>
                                    <td>No</td>
                                    <td>https://tdadmin.madenflorist.com/adminPanel/index.php?page=products&req=index&</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><br>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="input-group" style="width: 30%">
                            <select class="custom-select" id="inputGroupSelect04">
                                <option>Accepted</option> 
                            </select>
                            <div class="input-group-append">
                              <button class="btn btn-outline-secondary btn-maden" type="button">Change Status</button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Product Code</th>
                                    <th>Description En</th>
                                    <th>Sale Price</th>
                                    <th>Quantity</th>
                                    <th>Image</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>MF102</td>
                                    <td>Box Contain Spray Roses and Hydrangea</td>
                                    <td>120.25 SAR</td>
                                    <td>1</td>
                                    <td><a href="{{ asset('assets/img/120.png') }}" target="_blank"><img src="{{ asset('assets/img/120.png') }}" class="table-image" /></a></td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Card White</th>
                                    <th>Delivery White</th>
                                    <th>Photo White</th>
                                    <th>Ribbon Green 1</th>
                                    <th>Rose Hot Pink</th>
                                    <th>Tag White</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>10</td>
                                    <td>1</td>
                                </tr>
                            </tbody>
                        </table>
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