@extends('layouts.app')

@section('title')
- {{ __('pack.knowledge') }}
@endsection

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				@cardbox([
	            'type' => 'warning',
	            'title' => __('pack.documentation'),
	            'sizes' => 'col-12'])

	            @slot('actions')
	            @endslot
	            <div id="mainmenuItem-docs"></div>
	            <div style="max-width: 80%">
	            	<h5>{{ __('pack.docs1') }}</h5>
	            	<ul>
                        <li><span>{{ __('pack.docs2') }} {{ config('app.name', 'DESSINAGE') }}</span></li>
                        <li><span>{{ __('pack.docs3') }}</span></li>
                        <li><span>{{ __('pack.docs4') }}</span></li>
                    </ul>
	            	<div class="clearfix"></div>

	            	<h5>{{ __('pack.docs5') }}</h5>
	            	<ul>
                        <li><span>{{ __('pack.docs6') }}</span></li>
                        <li><span>{{ __('pack.docs7') }}</span></li>
                    </ul>
	            	<div class="clearfix"></div>

	            	<h5>{{ __('pack.docs8') }}</h5>
	            	<ul>
                        <li><span>{{ __('pack.docs9') }}</span></li>
                        <li><span>{{ __('pack.docs10') }}</span></li>
                        <li><span>{{ __('pack.docs11') }}</span></li>
                        <li><span>{{ __('pack.docs12') }}</span></li>
                    </ul>
	            	<div class="clearfix"></div>

	            	<h5>{{ __('pack.docs13') }}</h5>
	            	<ul>
                        <li><span>{{ __('pack.docs14') }}</span></li>
                        <li><span>{{ __('pack.docs15') }}</span></li>
                        <li><span>{{ __('pack.docs16') }}</span></li>
                    </ul>
	            	<div class="clearfix"></div>

	            	<h5>{{ __('pack.docs17') }}</h5>
	            	<ul>
                        <li><span>{{ __('pack.docs18') }}</span></li>
                        <li><span>{{ __('pack.docs19') }}</span></li>
                        <li><span>{{ __('pack.docs20') }}</span></li>
                    </ul>
	            	<div class="clearfix"></div>
	            </div>

				@endcardbox
			</div>
		</div>
	</div>
@endsection

@section('scripts')
<script>
	$(document).ready(function () {
		var placementRight = 'right';
		var placementLeft = 'left';

            var tour = {
                id: "main-intro",
                showSkip: true,
                i18n: {
                	nextBtn: "{{ __('pack.next') }}", 
                	prevBtn: "{{ __('pack.prev') }}", 
                	doneBtn: "{{ __('pack.done') }}", 
                	skipBtn: "{{ __('pack.skip') }}", 
                	closeTooltip: "{{ __('pack.close') }}" 
                },
                steps: [
                	{
                		target: "mainmenuItem-dashboard",
                		title: "{{ __('pack.tour011') }}",
                		content: "{{ __('pack.tour012') }}",
                		placement: placementRight,
                		yOffset: 10
                	},
                	{
                		target: 'mainmenuItem-customers',
                		title: "{{ __('pack.tour021') }}",
                		content: "{{ __('pack.tour022') }}",
                		placement: placementRight,
                		yOffset: 10
                	},
                	{
                		target: 'mainmenuItem-landing',
                		title: "{{ __('pack.tour031') }}",
                		content: "{{ __('pack.tour032') }}",
                		placement: placementRight,
                		yOffset: 10
                	},
                	{
                		target: 'mainmenuItem-knowledge',
                		title: "{{ __('pack.tour041') }}",
                		content: "{{ __('pack.tour042') }}",
                		placement: 'bottom',
                		zindex: 999
                	},
                	{
                		target: 'mainmenuItem-notification',
                		title: "{{ __('pack.tour051') }}",
                		content: "{{ __('pack.tour052') }}",
                		placement: placementLeft,
                		yOffset: 10
                	},
                	{
                		target: 'mainmenuItem-search',
                		title: "{{ __('pack.tour061') }}",
                		content: "{{ __('pack.tour062') }}",
                		placement: placementLeft,
                		yOffset: 10
                	},
                	{
                		target: 'mainmenuItem-user',
                		title: "{{ __('pack.tour071') }}",
                		content: "{{ __('pack.tour072') }}",
                		placement: placementLeft,
                		yOffset: 10
                	},
                	{
                		target: 'mainmenuItem-docs',
                		title: "{{ __('pack.tour081') }}",
                		content: "{{ __('pack.tour082') }}",
                		placement: 'bottom',
                		yOffset: 10
                	}
                ],
                showPrevButton: true
            };

            hopscotch.startTour(tour);
        });
    </script>
@endsection