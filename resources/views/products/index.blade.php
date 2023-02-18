@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Boostrap - Plantilla</title>


    <!-- Enlace Fontawesome -->
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">

    <!-- Vínculo CSS Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css">
  </head>
    <body class="bg-gray-100 py-12 px-6 text-gray-800">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-sm-12 col-md-10 col-lg-8">
              <div class="card">
                <div class="card-header bg-indigo-500 text-white">Tabla de Ejemplo</div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr style="background-color:#7B68EE; border-radius: 10px;" class="pt-2 h-10 text-white" >
                          <th class="py-4">ID</th>
                          <th class="py-4">Title</th>
                          <th class="py-4">Country</th>
                          <th class="py-4">Price</th>
                          <th class="py-4">Created</th>
                          <th class="py-4">Updated</th>
                          <th class="py-4">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($products as $row)
                            
                        
                        <tr>
                          <td class="py-3 px-6">{{ $row ->id }}</td>
                          <td class="p-3">{{ $row ->title }}</td>
                          <td class="p-3">{{ $row ->country }}</td>
                          <td class="p-3">{{ $row ->price }}</td>
                          <td class="p-3 text-center">{{ $row ->created_at }}</td>
                          <td class="p-3 text-center">{{ $row ->update_at }}</td>
                          <td class="py-3 justify-center">

                            <form action="{{ route('products.destroy', $row->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">
                              <i class="fas fa-trash"></i>
                            </button>
                            </form>

                            <a href="{{ route('products.edit', $row->id) }}" class="px-3 py-1 rounded-sm">
                              <i class="fas fa-pen"></i>
                            </a>

                          </td>
                        </tr>
                   
                        @endforeach
                        </tbody>
                    </table>        
    <!-- Vínculo JS Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.min.js"></script>
</tbody>
</table>    
  </body>
</html>
    
@endsection