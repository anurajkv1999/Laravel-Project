@extends('layouts.admin_layout')
@section('content')
    <div class="pt-4"></div>
    <div class="jumbotron bg-white p-3" style="margin-bottom: 10px">
        <h3 class="text-gray">Ads</h3>
        <p class="text-gray" style="font-size: 18px">Admin / Ads </P>
    </div>
    <div class="container-fluid">

        <!--button-->
        <div class="btncustom">
            <button type="button" data-toggle="modal" data-target="#exampleModal" style="float: right">
                Add New Ads</button>
        </div>
        <!--button End-->
        <!--popup-->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ads</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!-- form-->
                        <div class="modal-body">
                            <div class="form-group">
                                <label>
                                    <h4 class="text-gray" style="font-size: 18px">Discription</h4>
                                </label>
                                <input type="text" name="Country" class="form-control" placeholder="Enter Discription">
                            </div>
                            <!--Select-box-->
                            <div class="form-group">
                                <label>
                                    <h4 class="text-gray" style="font-size: 18px">Select Ads</h4>
                                </label>
                                <select class="form-control" style="width: 100%;">
                                    <option selected="selected">Alabama</option>
                                    <option>Alaska</option>
                                    <option>California</option>
                                    <option>Delaware</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Washington</option>
                                </select>
                                <label for="formFileLg" class="form-label">
                                    <div class="pt-3">
                                    <h4 class="text-gray" style="font-size: 18px">Choose File</h4>
                                    </div>
                                </label>
                                <div class="p-2">
                                <input class="form-control-Lg" id="formFileLg" type="file" />
                                </div>
                            </div>
                            <!--form-End-->
                            <div class="modal-footer">
                                <div class="btncustom">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-secondary">Add</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!--Popup End-->

        <div class="card" style="width: 100%">
            <div class="card-header">
                <h3 class="card-title">Ads</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body tg">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">

                    <div class="row ">
                        <div class="col-sm-12">
                            <table id="unit_table" class="table table-bordered table-striped" role="grid"
                                aria-describedby="example1_info">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Headings</th>
                                        <th>Discription</th>
                                        <th>Actions</th>
                                        <th>Image</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>001</td>
                                        <td>Phone</td>
                                        <td>Samsung </td>
                                        <td>Deleted</td>
                                        <td>Added</td>
                                    </tr>
                                    <tr>
                                        <td>001</td>
                                        <td>Phone</td>
                                        <td>Samsung </td>
                                        <td>Deleted</td>
                                        <td>Added</td>
                                    </tr>
                                    <tr>
                                        <td>001</td>
                                        <td>Phone</td>
                                        <td>Samsung </td>
                                        <td>Deleted</td>
                                        <td>Added</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>

@endsection