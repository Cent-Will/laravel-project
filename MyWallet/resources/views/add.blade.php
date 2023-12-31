@extends('layout/main')

@section('content')
<div class="container mt-3 mb-3 d-flex justify-content-center">
  <div class="container" style="width: 90%;">
    
                <form method="POST" action="{{ route('addData') }}">
                  @csrf

                  @if(Session::has('sukses'))
                    <div class="alert alert-success">
                      {{ Session::get('sukses') }}
                    </div>
                  @endif
                  {{-- RADIO BUTTON PENGELUARAN/PEMASUKAN --}}
                  <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                    <input type="checkbox" class="btn-check" id="1" autocomplete="off" name="TransactionType_id" value="1">
                    <label class="btn btn-outline-primary" for="1">Pengeluaran</label>
                
                    <input type="checkbox" class="btn-check" id="2" autocomplete="off" name="TransactionType_id" value="2">
                    <label class="btn btn-outline-primary" for="2">Pemasukan</label><br>
                    @error('TransactionType_id')                   
                    {{-- <div class="alert alert-danger">Username/password invalid</div> --}}
                    <div class="error text-danger">{{ $message }}</div>
                @enderror 
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
                        <input type="date" name="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('date') }}">
                        @error('date')                   
                          {{-- <div class="alert alert-danger">Username/password invalid</div> --}}
                          <div class="error text-danger">{{ $message }}</div>
                        @enderror 
                      </div>

                      {{-- INPUT NOMINAL --}}                    
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nominal</label>     
                        <div class="input-group">
                            <span class="input-group-text">Rp</span>
                            <input type="text" name="nominal" class="form-control" placeholder="50000" value="{{ old('nominal') }}">
                        </div>         
                          @error('nominal')                   
                            {{-- <div class="alert alert-danger">Username/password invalid</div> --}}
                            <div class="error text-danger">{{ $message }}</div>
                          @enderror      
                      </div>
                    
                    {{-- INPUT CATEGORY --}}
                    <label for="exampleInputCategory" class="form-label">Category</label>
                      <select class="form-select" name="Category_id" aria-label="Default select example">
                        <option value="">Category</option>
                        <option value="1" {{ (old('category') == '1') ? 'selected' : '' }}>Makan</option>
                        <option value="2" {{ (old('category') == '2') ? 'selected' : '' }}>Gojek</option>
                        <option value="3" {{ (old('category') == '3') ? 'selected' : '' }}>Selfcare</option>
                        <option value="4" {{ (old('category') == '4') ? 'selected' : '' }}>Kuota</option>
                        <option value="5" {{ (old('category') == '5') ? 'selected' : '' }}>Bensin</option>
                        <option value="6" {{ (old('category') == '6') ? 'selected' : '' }}>Lain-lain</option>
                      </select>
                      @error('Category_id')                   
                        {{-- <div class="alert alert-danger">Username/password invalid</div> --}}
                        <div class="error text-danger">{{ $message }}</div>
                      @enderror 

                    {{-- INPUT DESCRIPTION --}}
                    <div class="mt-3 mb-3">
                      <label for="exampleInputPassword1" class="form-label">Description</label><br> 
                      {{-- <input type="text" name="description" class="form-control"  id="exampleInputPassword1"> --}}
                      <textarea name="description" cols="57" rows="5">{{ old('description') }}</textarea>
                      @error('description')                   
                        {{-- <div class="alert alert-danger">Username/password invalid</div> --}}
                        <div class="error text-danger">{{ $message }}</div>
                      @enderror 
                    </div>
                    {{-- SUBMIT --}}
                    <button type="submit" class="btn btn-primary">Submit</button>
                    

                    

                </form>
            </div>
    </div>
@endsection