@extends('layout.main')

@section('content')
{{-- <h1>HOME PAGE</h1> --}}

      <div class="container mt-4">
        @if(isset($username))
          <h4>Welcome, {{ $username }}</h4>
        @endif
   
        <h6>
          Uang kamu sisa 
        </h6>
        <h2>
          Rp{{ $saldo }}
        </h2>
      </div>


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
                <td>Rp {{number_format($transaction->nominal,0) }}</td>
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