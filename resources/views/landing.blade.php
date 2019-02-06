@extends('layouts.app')

@section('title')
- {{ __('pack.landing') }}
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">

		<form id="landing-update" class="col-xl-9" method="post" action="/frontend/update">
			@csrf
			<ul class="list-unstyled task-list row" id="drag-landing" style="min-height: 30px">
				
				@foreach($sections as $section) 
					<li class="{{ $section['sizes'] }}" id="{{ $section['uident'] }}">

						<input type="hidden" name="sortOrder[]" id="{{ $section['uident'] }}-sortorder-form" value="{{ $section['sord'] }}">
						<input type="hidden" name="sizes[]" id="{{ $section['uident'] }}-sizes-form" value="{{ $section['sizes'] }}">
						<input type="hidden" name="val[]" id="{{ $section['uident'] }}-content-form">
						<input type="hidden" name="desc[]" id="{{ $section['uident'] }}-desc-form" value="{{ $section['desc'] }}">
						<input type="hidden" name="uident[]" id="{{ $section['uident'] }}-uident-form">
						<input type="hidden" name="type[]" id="{{ $section['uident'] }}-type-form" value="{{ $section['type'] }}">
						<input type="hidden" name="title[]" id="{{ $section['uident'] }}-title-form">
						<input type="hidden" name="subtitle[]" id="{{ $section['uident'] }}-subtitle-form">
						<input type="hidden" name="img[]" id="{{ $section['uident'] }}-img-form">

						<div class="kanban-box card-box pad-landing-editor mt-2 mb-2">
							<div class="contentbox-landing-editor row">
								<div class="col-xl-10 col-8" style="max-width: 100%; overflow: hidden;">
									<span class="contentbox-landing-editor-text" id="{{ $section['desc'] }}-desc">{{ __($section['desc']) }}</span>
									<span class="contentbox-landing-editor-text text-gray">#{{ $section['uident'] }}</span>
								</div>
								<div class="col-xl-2 col-4">
									<div class="btn-group dropdown" style="float: right;">
										<a href="#" class="contentbox-landing-editor-icons dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<i class="mdi mdi-settings"></i>
										</a>
										<div class="dropdown-menu">
											<a href="javascript:void(0);" class="dropdown-item">
												<i class="mdi mdi-close-circle-outline"></i> {{ __('pack.save') }}
											</a>
											<a href="javascript:void(0);" class="dropdown-item tr-red">
												<i class="mdi mdi-close-circle-outline"></i> {{ __('pack.delete') }}
											</a>
										</div>
									</div>
									<a href="javascript:void(0);" class="contentbox-landing-editor-icons grabbable">
										<i class=" mdi mdi-arrow-all"></i>
									</a>
								</div>
							</div>
							<div class="contenteditableArea mb-3">
								@component('components.landing.' . $section['type'], [
									'desc' => __($section['desc']),
									'uident' => $section['uident'],
									'val' => $section['val'],
									'title' => $section['title'],
									'subtitle' => $section['subtitle'],
									'img' => $section['img']])
								@endcomponent
							</div>
						</div>
					</li>
				@endforeach

			</ul>
		</form>

		@cardbox([
			'type' => 'warning',
			'title' => __('pack.settings'),
			'sizes' => 'col-xl-3 col-md-6 mt-2'])

			@slot('actions')
				
			@endslot

			<button type="button" class="btn btn-primary btn-rounded w-md waves-effect waves-light m-b-5" onclick="submitldPage()">
				{{ __('pack.save') }}
			</button>

		@endcardbox

	</div>
</div>
@endsection

@section('scripts')
	<script src="{{ asset('plugins/dragula/dragula.min.js') }}"></script>
	<script src="{{ asset('plugins/custombox/dist/custombox.min.js') }}"></script>
	<script src="{{ asset('plugins/custombox/dist/legacy.min.js') }}"></script>
	<script type="text/javascript">
		dragula([document.querySelector('#drag-elements'), document.querySelector('#drag-landing')], {
				isContainer: function (el) {
					return false; 
				},
				moves: function (el, source, handle, sibling) {
					return true; 
				},
			accepts: function (el, target, source, sibling) {
				return true; 
			},
			invalid: function (el, handle) {
				return false; 
			},
			direction: 'vertical',
			copy: false,
			copySortSource: true,
			revertOnSpill: false,
			removeOnSpill: false,
			mirrorContainer: document.body,
			ignoreInputTextSelection: true
		});

		function submitldPage(){
			// {{$identities}}

			$.each([{!! $identities !!}], function( index, value ) {
				// alert( index + ": " + value );
				let uident = value;
				let desc = $("#" + value + "-desc").text();
				// let sortorder = $("#" + value + "-sortorder").val();
				let content = $("#" + value + "-content").text();
				let subtitle = $("#" + value + "-subtitle").text();
				let title = $("#" + value + "-title").text();
				let img = $("#" + value + "-img").attr('src');

				// $("#" + value + "-sortorder-form".val(sortorder);
				$("#" + value + "-content-form").attr('value', content);
				$("#" + value + "-desc-form").attr('value', desc);
				$("#" + value + "-uident-form").attr('value', uident);
				// $("#" + value + "-type-form".val(type);
				$("#" + value + "-title-form").attr('value', title);
				$("#" + value + "-subtitle-form").attr('value', subtitle);
				$("#" + value + "-img-form").attr('value', img);
			});

			$('#landing-update').submit();
		}

		function allowContentedit(elem)
		{
			$('#' + elem).attr('contenteditable', 'true');
		
			$(document).mouseup(function(e) 
			{
				var container = $("#" + elem);

				if (!container.is(e.target) && container.has(e.target).length === 0) 
				{
					$('#' + elem).attr('contenteditable', 'false');
				}
			});
		}
	</script>
@endsection