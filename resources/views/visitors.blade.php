@extends('layouts.app')

@section('title')
- {{ __('pack.visitors') }}
@endsection

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="card-box">
				<div class="table-rep-plugin">
					<div class="table-responsive" data-pattern="priority-columns">
						<table id="tech-companies-1" class="table  table-striped">
							<thead>
								<tr>
									<th data-priority="1">{{ __('pack.date') }}</th>
									<th data-priority="2">{{ __('pack.continent') }}</th>
									<th>{{ __('pack.country') }} / {{ __('pack.countryCode') }}</th>
									<th data-priority="3">{{ __('pack.city') }}</th>
									<th data-priority="4">{{ __('pack.ip') }}</th>
									<th data-priority="5">{{ __('pack.isp') }}</th>
									<th data-priority="6">{{ __('pack.map') }}</th>
								</tr>
							</thead>
							<tbody>
								@foreach($vis as $visitor)
						            <tr>
						                <td>{{ $visitor->created_at }}</td>
						                <td>{{ $visitor->continent }}</td>
						                <td>{{ $visitor->country }} / {{ $visitor->countryCode }}</td>
						                <td>{{ $visitor->city }}</td>
						                <td>{{ $visitor->ip }}</td>
						                <td>{{ $visitor->isp }}</td>
						                <td>
						               		<a href="https://www.google.com/maps/search/{{ $visitor->lat }}+{{ $visitor->lon }}" target="_blank">{{ $visitor->lat }} {{ $visitor->lon }}</a>
						                </td>
						            </tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
			
			{{ $vis->links() }}
		</div>
	</div>
</div>
@endsection

@section('scripts')
    <script>
        $(function() {
            $('.table-responsive').responsiveTable({
                addDisplayAllBtn: 'btn btn-secondary',
                i18n: {
                	focus: "@lang('pack.focus')",
	            	display: "@lang('pack.display')",
	            	displayAll: "@lang('pack.displayAll')"
                }
            });
        });
    </script>
@endsection