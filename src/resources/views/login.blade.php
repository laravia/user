@extends('laravia.user::layouts/app')
@section('content')


<h1 class="title">{{Laravia::trans('user.siteTitleLogin')}}</h1>
@if (session('status'))
<div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
    {{ session('status') }}
</div>
@endif
<form action="{{route('laravia.user::loginPost')}}" method="post">
    @csrf
    {!! Laravia::form()->name('email')->type('email')->placeholder('email')->render() !!}
    {!! Laravia::form()->name('password')->type('password')->old(false)->placeholder('password')->render() !!}
    {!! Laravia::form()->name('remember')->type('checkbox')->placeholder('remember')->value(1)->render() !!}
    {!! Laravia::form()->type('submit')->text('submit')->text(Laravia::trans('user.btnLogin'))->render() !!}
</form>

@endsection
