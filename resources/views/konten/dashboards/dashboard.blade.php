@extends('layouts.layout')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard {{$data['name']}}</h1>
    <ol class="breadcrumb mb-4">                      
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row">
        <iframe src="{{$data['link']}}" frameborder="0" width="1000" height="1000" allowtransparency></iframe>
    </div>
</div>
@endsection