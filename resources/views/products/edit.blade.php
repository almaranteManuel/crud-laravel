{{-- Formulario de edicion --}}
@extends('layouts.app')

@section('title', 'Edit')

@section('content')

<form action="{{ route('products.store') }}" method="post" class="bg-white w-1/3 p-4 border-gray-100 shadow-xl rounded-lg">
@csrf
    <h2 class="text-2xl text-center py-4 mb-4 font-semibold">Edit Product {{ $product->id }}</h2>

    <input type="text" class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Title" name="title">
    <br>
    <input type="text" class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Country" name="country">
    <br>
    <input type="text" class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Price" name="price">
    <br>
    <button type="submit" class="my-3 w-full bg-blue-500 p-2 font-semibold rounded text-blue hover:bg-blue-600"> Save </button>


</form>

@endsection