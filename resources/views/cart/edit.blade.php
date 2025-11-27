@extends('layouts.app') 

@section('content') 
<div class="container py-5">
     <h3>Edit Cart Item</h3> 
     <form action="{{ route('cart.update', $cartItem->id) }}" method="POST"> 
        @csrf
         <div class="mb-3"> 
            <label>Quantity</label>
             <input type="number" name="quantity" class="form-control" value="{{ $cartItem->quantity }}"> 
          </div>
             <button type="submit" class="btn btn-success">Update</button>
              <a href="{{ route('cart.list') }}" class="btn btn-secondary">Back</a>
     </form>
</div>
@endsection