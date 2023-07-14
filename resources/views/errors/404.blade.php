@extends('errors::minimal')

@section('breadcrumbs')
    {{ Breadcrumbs::render('404Error') }}
@endsection
@section('code', '404')
@section('message', __('Not Found'))
