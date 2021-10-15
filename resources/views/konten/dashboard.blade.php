@extends('layouts.layout')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">                      
    <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row">
        <iframe src="https://metabase.sccic.cloudns.asia/public/dashboard/990abcb9-8503-4087-9ba8-686a54bdb0c3" frameborder="0" width="800" height="1700" allowtransparency></iframe>
    </div>
</div>
@endsection