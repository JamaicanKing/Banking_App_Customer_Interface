@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-right">
        <div class="col-md-3">
            <div class="Card">
                   <div class="card-header alert alert-success">Saving Balance</div>
                    <div class="card-body alert alert-success">
                        Hi
                   </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>

<div calss="dashboard-wrapper">
<div class="dashboard-row row-fluid">
    <div class="block4 main">
    <div class="block12">
    <div class="block6">
    <div class="savings_account_block block">
    <span class="block_text">
    "Saving Accounts"
    <b>$balance</b>
    </div>
    </div>
    </div>
    </div>
    </div>
</div>
@endsection
