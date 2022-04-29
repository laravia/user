@extends('user::layouts/app')
@section('content')

<h1 class="title">{{Laravia::translate('site_title_dashboard')}}</h1>
{{Laravia::translate('hello')}} {{auth()->user()->email}}
@endsection
