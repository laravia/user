@extends('laravia.user::layouts/app')
@section('content')

<h1 class="title">{{trans('laravia.user::common.siteTitleDashboard')}}</h1>
{{trans('hello')}} {{auth()->user()->email}}
@endsection
