<div class="row justify-content-center">
	<div class="col-5 text-center">
		<h5 class="title-sub contenteditableArea" id="{{ $uident }}-subtitle" ondblclick="allowContentedit(this.id)">{!! $subtitle !!}</h5>
		<h2 class="title-1 contenteditableArea" id="{{ $uident }}-title" ondblclick="allowContentedit(this.id)" style="text-transform: uppercase;">{!! $title !!}</h2>
		<div class="additional-not-used">
			<div id="{{ $uident }}-content">{{ $val }}</div>
			<div id="{{ $uident }}-img" src="{{ $img }}"></div>
			{## $desc ##}
		</div>
	</div>
</div>