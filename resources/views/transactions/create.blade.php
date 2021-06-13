@extends('layouts.app')

@section('content')


  <form method="POST" action="{{ route('transactions.store') }}" class="row g-3">
      @csrf
      @method('PUT')
    
      <div class="col-12">
        <label for="account_number" class="form-label">Account Number</label>
        <input type="text" class="form-control" id="account_number" name="account_number" placeholder="" value=" {{ $accountNumber }}" readonly>
      </div>

      @include('components.common.dropDown',[
        $fieldName = 'transaction_type_id',
        $options = $options,
        $fieldLabel = 'Transaction Type',
        $defaultDropDownOption = 'Please select transaction type'
      ])

      
      <div class="col-12">
        <label for="transaction_amount" class="form-label">Transaction Amount</label>
        <input type="text" class="form-control" name="transaction_amount" id="transaction_amount">
      </div>

      <div class="col-auto">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>


  </form>


@endsection