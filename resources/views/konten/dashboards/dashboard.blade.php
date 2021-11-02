@extends('layouts.layout')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard {{$data['name']}}</h1>
    <ol class="breadcrumb mb-4">                      
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="col-lg-12 3dframe" data-src="https://app.sketchup.com/viewer/3dw?WarehouseModelId=62875d3e-dd39-4e86-92b7-0168996729c9&amp;noEmbedWatermark=true&amp;width=580&amp;height=326">
		<iframe id="model-3d-view-iframe" src="https://app.sketchup.com/viewer/3dw?WarehouseModelId=62875d3e-dd39-4e86-92b7-0168996729c9&amp;noEmbedWatermark=true&amp;width=580&amp;height=326" width="100%" height="326" allowfullscreen="allowfullscreen"></iframe>
                                        
	</div>
    <div class="row">
        <iframe src="{{$data['link']}}" frameborder="0" width="1000" height="1000" allowtransparency></iframe>
    </div>
</div>
@endsection