@extends('layouts.layout')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">                      
    <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <!-- <div class="row">
        <iframe src="https://metabase.sccic.cloudns.asia/public/dashboard/990abcb9-8503-4087-9ba8-686a54bdb0c3" frameborder="0" width="800" height="1700" allowtransparency></iframe>
    </div> -->
    <div class="row">
    	<iframe src="http://103.129.221.106:3001/public/dashboard/50a9fb48-3f21-4318-8cfc-12c80e532b8f" frameborder="0" width="1000" height="550" allowtransparency></iframe>
    </div>
    <div class="row">
    	<iframe src="http://103.129.221.106:3001/public/dashboard/f06e6ecf-07db-49b9-9245-591987948be0" frameborder="0" height="800" allowtransparency></iframe>
    </div>
    <div class="row">
        <iframe src="http://103.129.221.106:3001/public/dashboard/ddbcbb2d-46d5-4598-a0be-1827b569e6bd" frameborder="0" width="800" height="900" allowtransparency></iframe>
    </div>
    <div class="row">
        <iframe src="http://103.129.221.106:3001/public/dashboard/28c98d62-9867-41f0-8c7b-c09d78910dd1" frameborder="0" width="800" height="600" allowtransparency></iframe>
    </div>
    <div class="row">
        <iframe src="http://103.129.221.106:3001/public/dashboard/932bb324-7924-40c8-8d5a-b221617c2046" frameborder="0" width="800" height="500" allowtransparency></iframe>
    </div>
    <div class="row">
        <iframe src="http://103.129.221.106:3001/public/dashboard/a55322b8-c666-4737-b3ec-4cb88a332953" frameborder="0" width="800" height="950" allowtransparency></iframe>
    </div>
    <div class="row">
        <iframe src="http://103.129.221.106:3001/public/dashboard/70b1bb72-0528-4adb-9dfe-10d04b53e6e9" frameborder="0" width="800" height="900" allowtransparency></iframe>
    </div>
</div>
@endsection