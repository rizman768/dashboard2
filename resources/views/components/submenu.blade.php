<div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
    <nav class="sb-sidenav-menu-nested nav">
    	<a class="nav-link" href="/home">
			<div class="sb-nav-link-icon"><i class="fa fa-university"></i></div>
			Home
		</a>
        @foreach ($role as $r)
            @foreach ($r->iframe as $ifr)
                <a class="nav-link" href="/dashboard/{{$ifr->id}}"> 
                    {{$ifr->nama_dashboard}}
                </a>
            @endforeach
        @endforeach
    </nav>
</div>