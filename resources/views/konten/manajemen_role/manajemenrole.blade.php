@extends('layouts.layout')

@section('content')
	<div class="container-fluid px-4">
		<h1 class="mt-4">Manajemen Role</h1>
		<ol class="breadcrumb mb-4">
			<li class="breadcrumb-item active"></li>
		</ol>
		<div class="row">
			<div class="panel">
				<div class="panel-heading">
					<div class="right">
						<button type="button" class="btn btn-default"><a class="btn btn-outline-success" href="/tambahrole">Tambah Role</a> </button>
					</div>
				</div>
				<div class="panel-body">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>ID</th>
								<th>Role</th>
								<th>Option</th>
							</tr>
						</thead>
						<tbody>
							<?php $i=0 ?>
							@foreach ( $role as $r )
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $r->id }}</td>
                                <td>{{ $r->role }}</td>
                                <td>
                                    <form action="/deleterole/{{$r->id}}" method="POST">
                                        <a class="btn btn-primary btn-sm" href="/editrole/{{$r->id}}">Edit</a>

                                        @csrf
										

										<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection