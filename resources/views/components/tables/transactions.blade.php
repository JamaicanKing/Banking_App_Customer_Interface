<div  class = "mx-auto" style="width: 1000px;">
    <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Account Number</th>
        <th scope="col">Transaction Amount</th>
        <th scope="col">Transaction Type</th>
        <th scope="col">New Balance</th>
        <th scope="col">Currency</th>
      </tr>
    </thead>
    <tbody>
        @foreach($transactions as $transaction)
        <tr>
            <td>{{ $transaction->id }}</td>
            <td>{{ $transaction->account_number }}</td>
            <td>{{ $transaction->transaction_amount }}</td>
            <td>{{ $transaction->transaction_type }}</td>
            <td>{{ $transaction->account_balance }}</td>
            <td>{{ $transaction->currency_name }}</td>
           
        </tr>
        @endforeach
<div>