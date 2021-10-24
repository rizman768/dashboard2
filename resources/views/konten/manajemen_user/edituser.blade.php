@extends('layouts.layout')

@section('content')
	<div class="container-fluid px-4">
		<h1 class="mt-4">Edit User</h1>
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
                         @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
    					<form action="/updateuser" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $users->id }}">
                         
                            <input type="hidden" name="id" value="{{ $users->id }}">

                             <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Full Name :</strong>
                                        <input type="text" name="name" class="form-control" value="{{ $users->name }}"placeholder="Nama">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Email:</strong>
                                        <input type="email" name="email" class="form-control" value="{{ $users->email }}" placeholder="Email">
                                    </div>
                                </div>
                                <!-- <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Password :</strong>
                                        <input type="password" name="password" class="form-control"  placeholder="Password">
                                    </div>
                                </div> -->
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Role Id :</strong>
                                        <select class="form-select" name="role_id" >
                                            <option selected value="{{$users->role_id}}">{{$users->role->level }}</option>
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
@endsection