@extends('errors::minimal')

@section('breadcrumbs')
    {{ Breadcrumbs::render('403Error') }}
@endsection
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Forbidden'))
