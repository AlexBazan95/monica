@extends('layouts.app')

@section('title')
    - {{ __('pack.dashboard') }}
@endsection

@section('content')

<div class="container-fluid">
    <div class="row">

        @cardbox([
            'type' => 'warning',
            'title' => __('pack.visitors'),
            'sizes' => 'col-xl-3 col-md-6'])

            @slot('actions')
                <a href="#" onclick="" class="card-drop">
                    <i class="mdi mdi-refresh"></i>
                </a> 
            @endslot

            @bage([
                'type' => 'widget-chart-1',
                'width' => '80',
                'height' => '80',
                'graphcolor' => '#f05050',
                'bgcolor' => '#F9B9B9',
                'classcolor' => 'badge-success',
                'value' => '23',
                'additionalvalue' => '58',
                'number' => '100',
                'title' => __('pack.dailytarget'),])
            @endbage

        @endcardbox

        @cardbox([
            'type' => 'danger',
            'title' => 'danger3',
            'sizes' => 'col-xl-3 col-md-6'])

            @slot('actions')
                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                    <i class="mdi mdi-dots-vertical"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="javascript:void(0);" class="dropdown-item">{{ __('pack.refresh') }}</a>
                    <a href="javascript:void(0);" class="dropdown-item">{{ __('pack.showmore') }}</a>
                </div>
            @endslot
            
            @bage([
                'type' => 'widget-box-2',
                'width' => '80',
                'height' => '80',
                'graphcolor' => '#f05050',
                'bgcolor' => '#F9B9B9',
                'value' => '58',
                'additionalvalue' => '58',
                'number' => '256',
                'classcolor' => 'badge-success',
                'title' => 'danger',])
            @endbage

        @endcardbox

        @cardbox([
            'type' => 'danger',
            'title' => 'danger2',
            'sizes' => 'col-xl-3 col-md-6'])

            @slot('actions') @endslot
            
            @bage([
                'type' => 'widget-chart-1',
                'width' => '80',
                'height' => '80',
                'graphcolor' => '#f05050',
                'bgcolor' => '#F9B9B9',
                'classcolor' => 'badge-success',
                'value' => '58',
                'additionalvalue' => '58',
                'number' => '256',
                'title' => 'danger',])
            @endbage

        @endcardbox


        @cardbox([
            'type' => 'danger',
            'title' => 'danger3',
            'sizes' => 'col-xl-3 col-md-6'])
            
            @slot('actions') @endslot
            
            @bage([
                'type' => 'widget-box-2',
                'width' => '80',
                'height' => '80',
                'graphcolor' => '#f05050',
                'bgcolor' => '#F9B9B9',
                'value' => '58',
                'additionalvalue' => '58',
                'number' => '256',
                'classcolor' => 'badge-success',
                'title' => 'danger',])
            @endbage

        @endcardbox

    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('/plugins/morris/morris.min.js') }}"></script>
    <script src="{{ asset('/pages/jquery.dashboard.js') }}"></script>
@endsection