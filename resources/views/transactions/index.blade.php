@extends('layouts.app')

@section('content')

@include('components.tables.transactions',[
    'transactions' => $transactions
])

@endsection