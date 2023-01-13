@extends('adminmaster')


@section('content')


<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                    <h1 class="pb-3">Category</h1>


                    @if($msg = Session::get('success'))
                        <div class="alert alert-success">
                                <p>{{ $msg }}</p>
                        </div>
                    @endif

                    <a href="{{ route('category.manage_category') }}" class="btn btn-success">Add category</a>

                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Slug</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($all as $record)
                                                <tr>
                                                    <td>{{ $record->id }}</td>
                                                    <td>{{ $record->category_name }}</td>
                                                    <td>{{ $record->category_slug }}</td>
                                                    @if($record->status == 1)
                                                        <td>
                                                            <a href='{{ url("admin/category/active/$record->id") }}' class="btn btn-primary btn-sm">Active</a>
                                                        </td>
                                                    @else
                                                        <td>
                                                            <a href='{{ url("admin/category/deactive/$record->id") }}' class="btn btn-warning btn-sm">Unactive</a>
                                                        </td>
                                                    @endif
                                                    <td>
                                                        <a href='{{ url("admin/category/delete/$record->id") }}' class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                        <a href='{{ url("admin/category/edit/$record->id") }}' class="btn btn-success btn-sm"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                                    </td>
                                                </tr> 
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


@endsection