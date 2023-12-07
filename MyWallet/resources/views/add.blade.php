@extends('layout/main')

@section('content')
    <div class="container mt-3 mb-3 d-flex justify-content-center">
            <div class="container" style="width: 90%;">
                <form method="POST" acition="add/post">
                  
                  {{-- RADIO BUTTON PENGELUARAN/PEMASUKAN --}}
                  <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group" >
                    <input type="checkbox" class="btn-check" id="1" autocomplete="off" name="transaction" value="1">
                    <label class="btn btn-outline-primary" for="1">Pemasukan</label>
                
                    <input type="checkbox" class="btn-check" id="2" autocomplete="off" name="transaction" value="2">
                    <label class="btn btn-outline-primary" for="2">Pengeluaran</label>
                </div>
                
                <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                <script>
                    $(document).ready(function () {
                        $('.btn-check').on('change', function() {
                            $('.btn-check').not(this).prop('checked', false);
                        });
                    });
                </script>
                
                    {{-- INPUT DATE --}}
                    <div class="mb-3">
                        <label for="exampleInputEmail1"  class="form-label">Date</label>
                        <input type="date" name="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>

                      {{-- INPUT NOMINAL --}}                    
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" >Nominal</label>     
                        <div class="input-group">
                            <span class="input-group-text">Rp</span>
                            <input type="text" name="nominal" class="form-control" placeholder="50000">
                        </div>              
                      </div>
                    
                    {{-- INPUT CATEGORY --}}
                    <label for="exampleInputCategory" class="form-label">Category</label>
                      <select class="form-select" name="category" aria-label="Default select example">
                        <option selected>Category</option>
                        <option value="1">Food</option>
                        <option value="2">Transportation</option>
                        <option value="3">Homecare</option>
                        <option value="4">Lain-lain</option>
                      </select>

                    {{-- INPUT DESCRIPTION --}}
                    <div class="mt-3 mb-3">
                      <label for="exampleInputPassword1" class="form-label">Description</label><br> 
                      {{-- <input type="text" name="description" class="form-control"  id="exampleInputPassword1"> --}}
                      <textarea name="description" cols="57" rows="5"></textarea>
                    </div>
                    {{-- SUBMIT --}}
                    <button type="submit" class="btn btn-primary">Submit</button>
                    

                    

                </form>
            </div>
    </div>
@endsection