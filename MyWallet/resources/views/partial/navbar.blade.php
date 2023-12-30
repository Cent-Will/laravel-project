<nav class="navbar bg-warning">
  <div class="container">  
    <img src="{{ asset('aset/logo.png') }}" alt="Gambar tidak terdeteksi">
    <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link {{ $title == "Home" ? 'active' : '' }}" href="/home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ $title == "Add-Transaction" ? 'active' : '' }}" href="/add">Add Transaction</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/logout">Logout</a>
      </li>
    </ul>
  </div>
</nav>
  
