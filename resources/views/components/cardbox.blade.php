<div class="{{ $sizes }}">
	<div class="card-box">
		<div class="dropdown pull-right">
			<a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
				<i class="mdi mdi-dots-vertical"></i>
			</a>
			<div class="dropdown-menu dropdown-menu-right">
				<a href="javascript:void(0);" class="dropdown-item">Action</a>
				<a href="javascript:void(0);" class="dropdown-item">Another action</a>
				<a href="javascript:void(0);" class="dropdown-item">Something else</a>
			</div>
		</div>
		
		<h4 class="header-title mt-0 m-b-30">
			{{ $title }}
		</h4>

		{{ $slot }}

	</div>
</div>