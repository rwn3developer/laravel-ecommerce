@extends('adminmaster')


@section('content')

<div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="card">
                                    <div class="card-header">Add Category</div>
                                    <div class="card-body">
                                        
                                        <form action="{{ route('category.add') }}" method="post" novalidate="novalidate">
                                            @csrf
                                            <div class="form-group">
                                                <label class="control-label mb-1">Category</label>
                                                <input name="category" type="text" placeholder="Enter your category" class="form-control" aria-required="true" aria-invalid="false">
                                            </div>
                                            <div class="form-group has-success">
                                                <label class="control-label mb-1">Slug</label>
                                                <input name="slug" type="text" placeholder="Enter your slug" class="form-control cc-name valid">
                                            </div>
                                            
                                            <div>
                                            <button type="submit" class="btn btn-primary btn-sm">
                                                <i class="fa fa-dot-circle-o"></i> Submit
                                            </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                       
                    </div>
                </div>
            </div>


@endsection