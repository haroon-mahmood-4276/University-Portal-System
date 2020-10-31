@extends('Admin.AdminLayout.AdminMaster')

@section('PageTitle', 'Dashboard')

@section('PageHeader')
    {{ View::make('Admin.AdminLayout.AdminHeader') }}
@endsection

@section('content')
    <h1>admin page</h1>
@endsection
