@extends('layouts.layout')

@section('content')
	<div class="container-fluid px-4">
		<h1 class="mt-4">Edit Role</h1>
		<ol class="breadcrumb mb-4">
			<li class="breadcrumb-item active"></li>
		</ol>
		<div class="row">
    			<div class="panel">
    				<div class="panel-heading">
    					<div class="right">
                           <a class="btn btn-secondary" href="/olahrole"> Back</a>
                        </div>
    				</div>
    				<div class="body">
    					<form action="/updaterole" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $role->id }}">
                             <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Role :</strong>
                                        <input type="text" name="role" class="form-control" value="{{ $role->level }}" placeholder="Role">
                                    </div>
                                    <div class="form-group">
                                        <strong>Dashboard Access :</strong><h6>(check again before submit)</h6>
                                        @foreach ($iframe as $f)
                                            <input type="checkbox" name="iframe[]" value="{{$f->id}}"> {{$f->nama_dashboard}} <br/>
                                        @endforeach
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