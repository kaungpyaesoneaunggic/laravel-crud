@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Size</th>
                <th scope="col">Quantity</th>
                <th scope="col "><div class="me-5">Action</div></th>
              </tr>
            </thead>
            <tbody>
              {{ $temp=1 }}
              @foreach ($products as $product)
              <tr>
                <th scope="row">{{$temp++}}</th>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->size }}</td>
                <td>{{ $product->size }}</td>
                <td>
                  <div class="justify-content-center ">
                    
                      <a type="button" href="{{ route('product.edit',$product->id) }}" class="btn btn-outline-warning btn-sm  "><i class="fa-solid fa-pencil"></i></a>
                    <form action="{{ route('product.destroy', $product->id )}}" method="post"  class="d-inline-block">
                      @method('delete')
                      @csrf
                      <button type="submit" class="btn btn-outline-danger btn-sm" ><i class="fa-solid fa-trash"></i></button>
                    </form>
                    
                    
                  </div>
                  </td>
              </tr>   
              @endforeach
                         
            </tbody>
          </table>
    </div>
</div>
@endsection