<article class="media-project-3 right">
	<div class="media__body row">
		<figure class="media__img col-sm-6">
			<img src="{{ $img }}" id="{{ $uident }}-img" alt="{{ config('app.name', 'DESSINAGE') }}" width="100%">
		</figure>
		<div class="col-sm-6">
			<span class="add">{!! $title !!}</span>
			<span class="year">{!! $subtitle !!}</span>
			<div class="media__content">
				<div class="pointer"></div>
				<h4 class="title-sub title-sub--c8 contenteditableArea" id="{{ $uident }}-subtitle" ondblclick="allowContentedit(this.id)">
					{!! $subtitle !!}
				</h4>
				<h2 class="title-3 contenteditableArea" id="{{ $uident }}-title" ondblclick="allowContentedit(this.id)">
					{!! $title !!}
				</h2>
				<p class="media__text contenteditableArea mb-3" ondblclick="allowContentedit(this.id)" id="{{ $uident }}-content">
					{!! $val !!}
				</p>
			</div>
		</div>
	</div>
</article>