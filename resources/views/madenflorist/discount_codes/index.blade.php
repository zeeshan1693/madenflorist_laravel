@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-4">
                <h1 class="page-header">Discount Codes</h1>
            </div>
            <div class="col-lg-4 offset-lg-4">
                <div class="text-right">
                    <a href="{{ route('discount-codes.create') }}"><button type="button" class="btn btn-maden">Add New Discount Code</button></a>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body backgSet">
                        <table id="example" class="table table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nick Name</th>
                                    <th>Voucher Code</th>
                                    <th>Max Usage</th>
                                    <th>From Date</th>
                                    <th>To Date</th>
                                    <th>Type</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01</td>
                                    <td>NGIT 123</td>
                                    <td>HELLOABC</td>
                                    <td>100</td>
                                    <td>2022-06-17 22:53:00</td>
                                    <td>2022-06-17 22:53:00</td>
                                    <td>Perc</td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                            <a href="{{ route('discount-codes.edit',1) }}">
                                                <svg id="Component_50_1" data-name="Component 50 – 1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <path id="u_edit-alt" d="M5,18H9.24a1,1,0,0,0,.71-.29l6.92-6.93L19.71,8a1,1,0,0,0,0-1.42L15.47,2.29a1,1,0,0,0-1.42,0L11.23,5.12,4.29,12.05a1,1,0,0,0-.29.71V17a1,1,0,0,0,1,1ZM14.76,4.41l2.83,2.83L16.17,8.66,13.34,5.83ZM6,13.17l5.93-5.93,2.83,2.83L8.83,16H6ZM21,20H3a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Z" transform="translate(0 0.006)" fill="#224442"/>
                                                    <rect id="Rectangle_529" data-name="Rectangle 529" width="24" height="24" fill="none"/>
                                                </svg>
                                            </a>&nbsp;&nbsp;&nbsp;
                                            <a href="#">
                                                <svg id="Component_51_1" data-name="Component 51 – 1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <path id="u_trash-alt" d="M10,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6a1,1,0,0,0,1,1ZM20,6H16V5a3,3,0,0,0-3-3H11A3,3,0,0,0,8,5V6H4A1,1,0,1,0,4,8H5V19a3,3,0,0,0,3,3h8a3,3,0,0,0,3-3V8h1a1,1,0,0,0,0-2ZM10,5a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1V6H10Zm7,14a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V8H17Zm-3-1a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6a1,1,0,0,0,1,1Z" fill="#ce2828"/>
                                                    <rect id="Rectangle_530" data-name="Rectangle 530" width="24" height="24" fill="none"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>02</td>
                                    <td>NGIT 1236</td>
                                    <td>HELLO</td>
                                    <td>100</td>
                                    <td>2022-06-17 22:53:00</td>
                                    <td>2022-06-17 22:53:00</td>
                                    <td>Amount</td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                            <a href="{{ route('discount-codes.edit',1) }}">
                                                <svg id="Component_50_1" data-name="Component 50 – 1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <path id="u_edit-alt" d="M5,18H9.24a1,1,0,0,0,.71-.29l6.92-6.93L19.71,8a1,1,0,0,0,0-1.42L15.47,2.29a1,1,0,0,0-1.42,0L11.23,5.12,4.29,12.05a1,1,0,0,0-.29.71V17a1,1,0,0,0,1,1ZM14.76,4.41l2.83,2.83L16.17,8.66,13.34,5.83ZM6,13.17l5.93-5.93,2.83,2.83L8.83,16H6ZM21,20H3a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Z" transform="translate(0 0.006)" fill="#224442"/>
                                                    <rect id="Rectangle_529" data-name="Rectangle 529" width="24" height="24" fill="none"/>
                                                </svg>
                                            </a>&nbsp;&nbsp;&nbsp;
                                            <a href="#">
                                                <svg id="Component_51_1" data-name="Component 51 – 1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <path id="u_trash-alt" d="M10,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6a1,1,0,0,0,1,1ZM20,6H16V5a3,3,0,0,0-3-3H11A3,3,0,0,0,8,5V6H4A1,1,0,1,0,4,8H5V19a3,3,0,0,0,3,3h8a3,3,0,0,0,3-3V8h1a1,1,0,0,0,0-2ZM10,5a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1V6H10Zm7,14a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V8H17Zm-3-1a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6a1,1,0,0,0,1,1Z" fill="#ce2828"/>
                                                    <rect id="Rectangle_530" data-name="Rectangle 530" width="24" height="24" fill="none"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>02</td>
                                    <td>NGIT 1232</td>
                                    <td>FREE</td>
                                    <td>100</td>
                                    <td>2022-06-17 22:53:00</td>
                                    <td>2022-06-17 22:53:00</td>
                                    <td>Perc</td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                            <a href="{{ route('discount-codes.edit',1) }}">
                                                <svg id="Component_50_1" data-name="Component 50 – 1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <path id="u_edit-alt" d="M5,18H9.24a1,1,0,0,0,.71-.29l6.92-6.93L19.71,8a1,1,0,0,0,0-1.42L15.47,2.29a1,1,0,0,0-1.42,0L11.23,5.12,4.29,12.05a1,1,0,0,0-.29.71V17a1,1,0,0,0,1,1ZM14.76,4.41l2.83,2.83L16.17,8.66,13.34,5.83ZM6,13.17l5.93-5.93,2.83,2.83L8.83,16H6ZM21,20H3a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Z" transform="translate(0 0.006)" fill="#224442"/>
                                                    <rect id="Rectangle_529" data-name="Rectangle 529" width="24" height="24" fill="none"/>
                                                </svg>
                                            </a>&nbsp;&nbsp;&nbsp;
                                            <a href="#">
                                                <svg id="Component_51_1" data-name="Component 51 – 1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                                    <path id="u_trash-alt" d="M10,18a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6a1,1,0,0,0,1,1ZM20,6H16V5a3,3,0,0,0-3-3H11A3,3,0,0,0,8,5V6H4A1,1,0,1,0,4,8H5V19a3,3,0,0,0,3,3h8a3,3,0,0,0,3-3V8h1a1,1,0,0,0,0-2ZM10,5a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1V6H10Zm7,14a1,1,0,0,1-1,1H8a1,1,0,0,1-1-1V8H17Zm-3-1a1,1,0,0,0,1-1V11a1,1,0,0,0-2,0v6a1,1,0,0,0,1,1Z" fill="#ce2828"/>
                                                    <rect id="Rectangle_530" data-name="Rectangle 530" width="24" height="24" fill="none"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </td>
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
<link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('page-script')
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>
@stop