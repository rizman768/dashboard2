@extends('layouts.layout')

@section('content')
	<div class="container-fluid px-4">
		<h1 class="mt-4">Edit Model 3D</h1>
		<ol class="breadcrumb mb-4">
			<li class="breadcrumb-item active"></li>
		</ol>
		<div class="row">
    			<div class="panel">
    				<div class="panel-heading">
    					<div class="right">
                           <a class="btn btn-secondary" href="/olahmodel3d"> Back</a>
                        </div>
    				</div>
    				<div class="body">
    					<form action="/updatemodel3d" method="POST">
                            @csrf
                         
                            <input type="hidden" name="id" value="{{ $model3d->id }}">

                             <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Model 3D :</strong>
                                        <input type="text" name="model3d" class="form-control" value="{{ $model3d->model3d }}" placeholder="Model 3D">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Link :</strong>
                                        <input type="text" name="link" class="form-control" value="{{ $model3d->link }}" placeholder="Link">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                         
                        </form>
    				</div>
    			</div>
    		</div>
	</div>
@endsection