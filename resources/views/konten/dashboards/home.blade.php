@extends('layouts.layout')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">                      
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row">
        @if (auth()->user()->name=="Cabang_Bandung")  
        <div class="col-lg-12 3dframe" data-src="https://app.sketchup.com/viewer/3dw?WarehouseModelId=c7426b44-ce02-4217-88a2-1b155548840c&amp;noEmbedWatermark=true&amp;width=580&amp;height=326">
            <iframe id="model-3d-view-iframe" src="https://app.sketchup.com/viewer/3dw?WarehouseModelId=c7426b44-ce02-4217-88a2-1b155548840c&amp;noEmbedWatermark=true&amp;width=580&amp;height=326" width="100%" height="326" allowfullscreen="allowfullscreen"></iframe>
        </div>
        @endif

        @if (auth()->user()->name=="Cabang_Cimahi")  
        <div class="col-lg-12 3dframe" data-src="https://app.sketchup.com/viewer/3dw?WarehouseModelId=6ebfefb7-e750-47e6-abb0-13ded430ea8d&amp;noEmbedWatermark=true&amp;width=580&amp;height=326">
            <iframe id="model-3d-view-iframe" src="https://app.sketchup.com/viewer/3dw?WarehouseModelId=6ebfefb7-e750-47e6-abb0-13ded430ea8d&amp;noEmbedWatermark=true&amp;width=580&amp;height=326" width="100%" height="326" allowfullscreen="allowfullscreen"></iframe>
        </div>
        @endif

        @if (auth()->user()->name=="Cabang_Ciroyom")  
        <div class="col-lg-12 3dframe" data-src="https://app.sketchup.com/viewer/3dw?WarehouseModelId=8086e0ca-5d60-4370-8e7c-55c81b8493f1&amp;noEmbedWatermark=true&amp;width=580&amp;height=326">
            <iframe id="model-3d-view-iframe" src="https://app.sketchup.com/viewer/3dw?WarehouseModelId=8086e0ca-5d60-4370-8e7c-55c81b8493f1&amp;noEmbedWatermark=true&amp;width=580&amp;height=326" width="100%" height="326" allowfullscreen="allowfullscreen"></iframe>
        </div>
        @endif

        @if (auth()->user()->name=="Cabang_Padalarang")  
        <div class="col-lg-12 3dframe" data-src="https://app.sketchup.com/viewer/3dw?WarehouseModelId=04a6cfff-c5f5-4fc7-b02c-c66524e319e8&amp;noEmbedWatermark=true&amp;width=580&amp;height=326">
            <iframe id="model-3d-view-iframe" src="https://app.sketchup.com/viewer/3dw?WarehouseModelId=04a6cfff-c5f5-4fc7-b02c-c66524e319e8&amp;noEmbedWatermark=true&amp;width=580&amp;height=326" width="100%" height="326" allowfullscreen="allowfullscreen"></iframe>
        </div>
        @endif

        @if (auth()->user()->name=="Cabang_Kiaracondong")  
        <div class="col-lg-12 3dframe" data-src="https://app.sketchup.com/viewer/3dw?WarehouseModelId=62875d3e-dd39-4e86-92b7-0168996729c9&amp;noEmbedWatermark=true&amp;width=580&amp;height=326">
            <iframe id="model-3d-view-iframe" src="https://app.sketchup.com/viewer/3dw?WarehouseModelId=62875d3e-dd39-4e86-92b7-0168996729c9&amp;noEmbedWatermark=true&amp;width=580&amp;height=326" width="100%" height="326" allowfullscreen="allowfullscreen"></iframe>
        </div>
        @endif
    </div>
</div>
@endsection