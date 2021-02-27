@extends('layouts.layout')
@section('content')
    <div class="container">
        <h1 class="display-4 text-center" style="font-size: 2.5rem">@lang("Hello")</h1>
        <h3 class="display-4 text-center" style="font-size: 1.5rem">{{ trans('lang.title') }}</h3>
        <h3 class="display-4 text-center" style="font-size: 1.5rem">{{ __('lang.Programming clubs among the globe') }}</h3>
        <h4 class="display-4 text-center" style="font-size: 1.5rem">{{ __("Stay with TeamPro and keep learning")}}</h4>
    </div>
@endsection