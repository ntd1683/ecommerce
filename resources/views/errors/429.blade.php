@extends('errors::minimal')

@section('breadcrumbs')
    {{ Breadcrumbs::render('429Error') }}
@endsection
@section('code', '429')
@section('message', __('Too Many Requests'))
