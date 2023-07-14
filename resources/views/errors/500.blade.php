@extends('errors::minimal')

@section('breadcrumbs')
    {{ Breadcrumbs::render('500Error') }}
@endsection
@section('code', '500')
@section('message', __('Server Error'))
