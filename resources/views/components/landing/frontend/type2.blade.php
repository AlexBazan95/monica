<article class="media-project-3">
	<div class="media__body">
		<figure class="media__img">
			<img src="{{ $img }}" alt="{{ config('app.name', 'DESSINAGE') }}" width="100%">
		</figure>
		<div>
			<span class="add">{!! $title !!}</span>
			<span class="year">{!! $subtitle !!}</span>
			<div class="media__content">
				<div class="pointer"></div>
				<h4 class="title-sub title-sub--c8">
					{!! $subtitle !!}
				</h4>
				<h2 class="title-3">
					{!! $title !!}
				</h2>
				<p class="media__text mb-3">
					{!! $val !!}
				</p>
			</div>
		</div>
	</div>
</article>