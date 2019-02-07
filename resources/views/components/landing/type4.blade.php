	<div class="row">
		<div class="col-xl-12">
			<div class="row">
				<div class="col-12 col-md-4">
					<img src="{!! $img !!}" id="{{ $uident }}-img" style="width: 100%" alt="{{ __('front.about') }} {{ config('app.name', 'DESSINAGE') }}">
				</div>
				<div class="col-12 col-md-8">
					<h5 class="title-sub contenteditableArea" id="{{ $uident }}-subtitle" ondblclick="allowContentedit(this.id)">
						{!! $subtitle !!}
					</h5>
					<h2 class="title-1 contenteditableArea" id="{{ $uident }}-title" ondblclick="allowContentedit(this.id)">
						{!! $title !!}
					</h2>
					<p class="media__text contenteditableArea" id="{{ $uident }}-content" ondblclick="allowContentedit(this.id)">{!! $val !!}</p>
				</div>
			</div>
		</div>
		<div class="col-12" style="overflow: hidden;">
			<div class="row">
			<div class="media-statistic col-12 col-md-4" style="border-left:1px solid #ebebeb; float: left;">
				<span class="ti-cup media__icon wow fadeInLeft" data-wow-delay="0.2s" style="color:#555555"></span>
				<div class="media__body">
					<span class="number js-counterup">10</span>
					<h4 class="name">{{ __('front.exp') }}</h4>
				</div>
			</div>
			<div class="media-statistic col-12 col-md-4" style="border-left:1px solid #ebebeb; float: left;">
				<span class="ti-user media__icon wow fadeInLeft" data-wow-delay="0.2s" style="color:#555555"></span>
				<div class="media__body">
					<span class="number js-counterup">2000</span>
					<h4 class="name">{{ __('front.happyclients') }}</h4>
				</div>
			</div>
			<div class="media-statistic col-12 col-md-4" style="border-left:1px solid #ebebeb; float: left;">
				<span class="ti-home media__icon wow fadeInLeft" data-wow-delay="0.2s" style="color:#555555"></span>
				<div class="media__body">
					<span class="number js-counterup">85</span>
					<h4 class="name">{{ __('front.intheworld') }}</h4>
				</div>
			</div>
			</div>
		</div>
	</div>
