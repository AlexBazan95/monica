@extends('layouts.app')

@section('title')
    - {{ __('pack.dashboard') }}
@endsection

@section('content')

<div class="container-fluid">
    <div class="row">

        @cardbox([
            'type' => 'danger',
            'title' => 'danger2',
            'sizes' => 'col-xl-3 col-md-6'])

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