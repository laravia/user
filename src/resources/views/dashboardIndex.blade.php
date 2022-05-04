@extends('laravia.user::layouts/app')
@section('content')

<h1 class="title">{{Laravia::trans('user.siteTitleDashboard')}}</h1>
{{trans('hello')}} {{auth()->user()->email}}
@endsection
