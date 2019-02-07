<section>
	<div class="container">
		<div class="media-about-2 p-b-80">
			<div class="media__img">
				<img src="{!! $img !!}" style="width: 100%" alt="{{ __('front.about') }} {{ config('app.name', 'DESSINAGE') }}">
			</div>
			<div class="media__body">
				<h5 class="title-sub">
					{!! $subtitle !!}
				</h5>
				<h2 class="title-1">
					{!! $title !!}
				</h2>
				<p class="media__text">{!! $val !!}</p>
				<a class="au-btn au-btn--arrow page-scroll" href="#contacts">{{ __('front.contactus') }}
					<i class="zmdi zmdi-arrow-right ic-arrow"></i>
				</a>
			</div>
		</div>
		<div class="section-row section-row--fit" style="overflow: hidden;">
			<div class="media-statistic" style="border-left:1px solid #ebebeb">
				<span class="ti-cup media__icon wow fadeInLeft" data-wow-delay="0.2s" style="color:#555555"></span>
				<div class="media__body">
					<span class="number js-counterup">10</span>
					<h4 class="name">{{ __('front.exp') }}</h4>
				</div>
			</div>
			<div class="media-statistic" style="border-left:1px solid #ebebeb">
				<span class="ti-user media__icon wow fadeInLeft" data-wow-delay="0.2s" style="color:#555555"></span>
				<div class="media__body">
					<span class="number js-counterup">2000</span>
					<h4 class="name">{{ __('front.happyclients') }}</h4>
				</div>
			</div>
			<div class="media-statistic" style="border-left:1px solid #ebebeb">
				<span class="ti-home media__icon wow fadeInLeft" data-wow-delay="0.2s" style="color:#555555"></span>
				<div class="media__body">
					<span class="number js-counterup">85</span>
					<h4 class="name">{{ __('front.intheworld') }}</h4>
				</div>
			</div>
		</div>
	</div>
</section>