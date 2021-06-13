@extends('layouts.app')

@section('content')

<form class="row g-3">
    <div class="col-md-6">
      <label for="account_holder" class="form-label">Account Holder</label>
      <input type="disabled" class="form-control" id="account_holder" value="{{ $account->account_holder }}" disabled>
    </div>
    <div class="col-md-6">
      <label for="account_number" class="form-label">Account Number</label>
      <input type="disabled" class="form-control" id="account_number" placeholder="" value=" {{ $account->account_number }}" disabled>
    </div>
    <div class="col-12">
      <label for="account_balance" class="form-label">Account Balance</label>
      <input type="text" class="form-control" id="account_balance" value="{{ $account->account_balance }}" disabled>
    </div>
    <div class="col-12">
      <label for="account_type_name" class="form-label">Accoun Type</label>
      <input type="text" class="form-control" id="account_type_name" value="{{ $account->account_type_name }}" disabled>
    </div>
    <div class="col-md-6">
      <label for="currency_name" class="form-label">Currency</label>
      <input type="text" class="form-control" id="currency_name" value="{{ $account->currency_name }}" disabled>
    </div>

    <div class="col-md-6">
        <label for="branch" class="form-label">Branch</label>
        <input type="text" class="form-control" id="branch"  value="{{ $account->branch }}"  disabled>
      </div>

  </form>
  <hr>

  @include('components.tables.transactions',[
      'transactions' => $transactions
  ])

  @endsection