@extends('layout.main')

@section('content')
{{-- <h1>HOME PAGE</h1> --}}

<div class="card">
  <div class="card-body ">
    @if(isset($username))
      <h2>Welcome, {{ $username }}</h2>
    @endif

    <table class="table table-striped-columns">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Date</th>
            <th scope="col">Transaction Type</th>
            <th scope="col">Nominal</th>
            <th scope="col">Category</th>
            <th scope="col">Description</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($transactions as $transaction)
            <tr>
                <td>{{ $transaction->id }}</td>
                <td>{{ $transaction->date }}</td>
                <td>{{ $transaction->transactionType->TransactionType }}</td>
                <td>{{ $transaction->nominal }}</td>
                <td>{{ $transaction->category->Category }}</td>
                <td>{{ $transaction->description }}</td>
                <!-- Tambahkan kolom lain sesuai kebutuhan -->
            </tr>
        @endforeach
        </tbody>
          
      </table>
    </table>


  </div>
</div>





  @endsection