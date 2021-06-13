@extends('layouts.app')

@section('content')




<div  class = "mx-auto" style="width: auto;">
    <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Account Holder</th>
        <th scope="col">Account Number</th>
        <th scope="col">Account Balance</th>
        <th scope="col">Account Type</th>
        <th scope="col">Currency</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach($accounts as $account)
        <tr>
            <td>{{ $account->account_holder }}</td>
            <td>{{ $account->account_number }}</td>
            <td>{{ $account->account_balance }}</td>
            <td>{{ $account->account_type_name }}</td>
            <td>{{ $account->currency_name }}</td>
            <td>
                <div class="container">
                    <div class="row">
                        <div class="col" style="padding-right: 0px; flex-grow: 0;">   
                            <a href="{{ route('accounts.show',['accountNumber' => $account->account_number]) }}">
                                <button role="button" class="btn btn-success" type="submit" >Details</button>
                            </a> 
                        </div>

                        <div class="col" style="padding-right: 0px; flex-grow: 0;">   
                            <a href="{{ route('transactions.create',['accountNumber' => $account->account_number]) }}">
                                <button role="button" class="btn btn-primary" type="submit" >New Transaction</button>
                            </a> 
                        </div>
                    </div>
                </div>
            <td>
        </tr>
        @endforeach
@endsection