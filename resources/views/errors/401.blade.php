@extends('errors::minimal')

@section('breadcrumbs')
    {{ Breadcrumbs::render('401Error') }}
@endsection
@section('code', '401')
@section('message', __('Unauthorized'))
