@extends('errors::minimal')

@section('breadcrumbs')
    {{ Breadcrumbs::render('419Error') }}
@endsection
@section('code', '419')
@section('message', __('Page Expired'))
