@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card mt-5 shadow">
          <div class="card-body m-3">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">id</th>
                  <th scope="col">Name</th>
                  <th scope="col">Price</th>
                  <th scope="col">Size</th>
                  <th scope="col">Quantity</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                      <th scope="row">{{$product->id}}</th>
                      <td>{{ $product->name }}</td>
                      <td>{{ $product->price }}</td>
                      <td>{{ $product->size }}</td>
                      <td>{{ $product->size }}</td>
                      </tr>   
           
                 </tbody>
              </table>
              <div class="mb-4 text-center">
                <a href="{{ route('product.index') }}" class="btn btn-lg btn-outline-dark">Back</a>
        </div>
            </div>
                     </div>
                 </div>
             </div>
          </div>
@endsection