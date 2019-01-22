@if($type == 'widget-chart-1')
	<div class="{{$type}}">
		<div class="widget-chart-box-1">
			<input data-plugin="knob" data-width="{{$width}}" data-height="{{$height}}" data-fgColor="{{$graphcolor}}"
			data-bgColor="{{$bgcolor}}" value="{{$value}}"
			data-skin="tron" data-angleOffset="180" data-readOnly=true
			data-thickness=".15"/>
		</div>

		<div class="widget-detail-1">
			<h2 class="p-t-10 mb-0">{{$number}}</h2>
			<p class="text-muted m-b-10">{{$title}}</p>
		</div>
	</div>
@elseif($type == 'widget-box-2')
	<div class="{{$type}}">
		<div class="widget-detail-2">
			<span class="badge {{$classcolor}} badge-pill pull-left m-t-20">{{$additionalvalue}}% <i class="mdi mdi-trending-up"></i> </span>
			<h2 class="mb-0">{{$number}}</h2>
			<p class="text-muted m-b-25">{{$title}}</p>
		</div>
		<div class="progress progress-bar-success-alt progress-sm mb-0">
			<div class="progress-bar progress-bar-success" role="progressbar"
			aria-valuenow="{{$value}}" aria-valuemin="0" aria-valuemax="100"
			style="width: {{$value}}%;">
				<span class="sr-only">{{$value}}% Complete</span>
			</div>
		</div>
	</div>
@endif