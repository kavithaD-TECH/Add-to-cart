@extends('layouts.app')

@section('content')

<div class="container-fluid page-content py-4">

    <!-- Page Header -->
    <div class="row mb-3">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active">
                            <i class="bx bx-cart"></i> Shopping Cart
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- Card Table -->
    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-header title_cardheader">
                    <div class="row">
                        <div class="col-lg-10 col-md-10 col-sm-6">
                            <h4 class="card-title ttle_head">Your Cart Items</h4>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered nowrap w-100 text-center">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Price</th>
                                    <th>Qty</th>
                                    <th>Total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($cartItems as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->product_name }}</td>
                                    <td>
                                        <img src="{{ asset($item->product_image) }}" width="60" height="60" alt="Product Image">
                                    </td>
                                    <td>₹{{ number_format($item->price, 2) }}</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>₹{{ number_format($item->price * $item->quantity, 2) }}</td>

                                    <td>
                                        <!-- Edit button -->
                                        <a href="{{ route('cart.edit', $item->id) }}" class="btn btn-outline-info">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>

                                        <!-- Delete button -->
                                        <form action="{{ route('cart.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="btn btn-outline-danger"
                                                onclick="return confirm('Are you sure you want to remove this item?')">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Back Button -->
                <div class="row">
                    <div class="col-md-10">
                        <div class="mt-4">
                            <a href="{{ route('cart.index') }}" class="btn btn-primary waves-effect waves-light">
                                <i class="bx bx-left-arrow-alt font-size-16 align-middle me-2"></i>
                                Back to Home
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</div>

@endsection
