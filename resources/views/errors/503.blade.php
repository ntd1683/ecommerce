@extends('errors::minimal')

@section('breadcrumbs')
    {{ Breadcrumbs::render('503Error') }}
@endsection
@section('code', '503')
@section('message', __('Service Unavailable'))
