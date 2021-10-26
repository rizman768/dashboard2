@extends('layouts.layout')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">                      
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <ul>
        @foreach ($role as $r)
            @foreach ($r->iframe as $ifr)
                <div class="row">
                    <iframe src="{{$ifr->link}}" frameborder="0" width="1000" height="550" allowtransparency></iframe>
                </div>
            @endforeach
        @endforeach
    </ul>
</div>
@endsection