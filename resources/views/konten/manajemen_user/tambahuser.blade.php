@extends('layouts.layout')

@section('content')
	<div class="container-fluid px-4">
		<div class="row">
			<h1 class="mt-4">Tambah User</h1>
    		<ol class="breadcrumb mb-4">                      
    			<li class="breadcrumb-item active"></li>
    		</ol>
    		<div class="row">
    			<div class="panel">
    				<div class="panel-heading">
    					<div class="right">
                           <a class="btn btn-secondary" href="/olahuser"> Back</a>
                        </div>
    				</div>
    				<div class="body">
    					<form action="/storetambahuser" method="POST">
                            @csrf
                         
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Full Name :</strong>
                                        <input type="text" name="nama" class="form-control" placeholder="Nama">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Email:</strong>
                                        <input type="email" name="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Password :</strong>
                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Role :</strong>
                                        <select class="form-select" name="role_id" >
							                @foreach ( $role as $r )
                                                <option value="{{$r->id}}">{{ $r->level }}</option>
                                            @endforeach
                                        </select>
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
	</div>
@endsection