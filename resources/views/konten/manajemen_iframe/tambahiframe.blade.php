@extends('layouts.layout')

@section('content')
	<div class="container-fluid px-4">
		<div class="row">
			<h1 class="mt-4">Tambah Iframe</h1>
    		<ol class="breadcrumb mb-4">                      
    			<li class="breadcrumb-item active"></li>
    		</ol>
    		<div class="row">
    			<div class="panel">
    				<div class="panel-heading">
    					<div class="right">
                           <a class="btn btn-secondary" href="/olahiframe"> Back</a>
                        </div>
    				</div>
    				<div class="body">
    					<form action="/storetambahiframe" method="POST">
                            @csrf
                         
                             <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Nama Dashboard :</strong>
                                        <input type="text" name="nama_dashboard" class="form-control" placeholder="Nama Dashboard">
                                    </div>
                                    <div class="form-group">
                                        <strong>Link :</strong>
                                        <input type="text" name="link" class="form-control" placeholder="Link">
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