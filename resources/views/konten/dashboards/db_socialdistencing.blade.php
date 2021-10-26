@extends('layouts.layout')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard Social Distancing</h1>
    <ol class="breadcrumb mb-4">                      
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <ul>
                <div class="row">
                    <iframe src="http://103.129.221.106:3001/public/dashboard/ddbcbb2d-46d5-4598-a0be-1827b569e6bd" frameborder="0" width="1000" height="900" allowtransparency></iframe>
                </div>
    </ul>
</div>
@endsection