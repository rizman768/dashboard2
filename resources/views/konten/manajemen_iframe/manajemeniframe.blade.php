@extends('layouts.layout')

@section('content')
	<div class="container-fluid px-4">
		<h1 class="mt-4">Konfigurasi Analitycs</h1>
		<ol class="breadcrumb mb-4">
			<li class="breadcrumb-item active"></li>
		</ol>
		<div class="row">
			<div class="panel">
				<div class="panel-heading">
					<!-- Tabs navs -->
					<ul class="nav nav-tabs nav-fill mb-3" id="ifr1" role="tablist">
					  <li class="nav-item" role="presentation">
					    <a class="nav-link active" id="ifr1-tab-1" data-mdb-toggle="tab" href="#ifr1-tabs-1" role="tab" aria-controls="ifr1-tabs-1" aria-selected="true">
					    	Iframe
						</a>
					  </li>
					  <li class="nav-item" role="presentation">
					    <a class="nav-link" id="ifr1-tab-2" data-mdb-toggle="tab" href="#ifr1-tabs-2" role="tab" aria-controls="ifr1-tabs-2" aria-selected="false">
					    	Model 3D
						</a>
					  </li>
					</ul>
					<!-- Tabs navs -->
				</div>
				<div class="panel-body">
					<!-- Tabs content -->
					<div class="tab-content" id="ifr1-content">
						<div class="tab-pane fade show active" id="ifr1-tabs-1" role="tabpanel" aria-labelledby="ifr1-tab-1">
							<table class="table table-hover">
								<div class="right">
									<button type="button" class="btn btn-default"><a class="btn btn-outline-success" href="/tambahiframe">Tambah Iframe</a> </button>
								</div>
		  						<thead>
		  							<tr>
										<th>No</th>
										<th>Nama Dashboard</th>
										<th>Link</th>
										<th>Option</th>
									</tr>
								</thead>
								<tbody>
									<?php $i=0 ?>
									@foreach ( $iframe as $frame )
				                    <tr>
				                        <td>{{ ++$i }}</td>
				                        <td>{{ $frame->nama_dashboard }}</td>
				                        <td>{{ $frame->link }}</td>
				                        <td>
				                            <form action="/deleteiframe/{{$frame->id}}" method="POST">
				                                <a class="btn btn-primary btn-sm" href="/editiframe/{{$frame->id}}">Edit</a>

				                                	@csrf

													<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
				                            </form>
				                        </td>
				                    </tr>
				                    @endforeach
								</tbody>
		  					</table>
					  	</div>
					  	<div class="tab-pane fade" id="ifr1-tabs-2" role="tabpanel" aria-labelledby="ifr1-tab-2">
					    	<table class="table table-hover">
		  						<thead>
		  							<tr>
										<th>No</th>
										<th>Model 3D</th>
										<th>Link</th>
										<th>Option</th>
									</tr>
								</thead>
								<tbody>
									<?php $i=0 ?>
									@foreach ( $model3d as $model )
				                    <tr>
				                        <td>{{ ++$i }}</td>
				                        <td>{{ $model->model3d }}</td>
				                        <td>{{ $model->link }}</td>
				                        <td>
				                            <form action="/deleteiframe/{{$frame->id}}" method="POST">
				                            	<a class="btn btn-primary btn-sm" href="/editiframe/{{$frame->id}}">Edit</a>

				                                @csrf

													<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
				                            </form>
				                        </td>
				                    </tr>
				                    @endforeach
								</tbody>
		  						</div>
		  					</table>
					  	</div>
					</div>
					<!-- Tabs content -->
				</div>
			</div>
		</div>
	</div>
@endsection