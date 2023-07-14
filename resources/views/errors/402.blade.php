@extends('errors::minimal')

@section('breadcrumbs')
    {{ Breadcrumbs::render('402Error') }}
@endsection
@section('code', '402')
@section('message', __('Payment Required'))
