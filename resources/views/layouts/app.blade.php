<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body class="bg-gray-100 text-gray-800">


    <nav class="h-16 flex justify-end py-4 px-16">

        <a href="{{ route('products.index') }}" class="border border-blue-500 rounded px-4 pt-1 h-10 bg-white text-blue-500 font-semibold mx-2" style="background-color:#1E90FF"> Products </a>
        <a href="{{ route('products.create') }}" class="border border-blue-500 rounded px-4 pt-1 h-10 bg-white text-blue-500 font-semibold mx-2" style="background-color:#1E90FF"> Create </a>

    </nav>


    <main class="p-16 flex justify-content-center">
        @yield('content')
    </main>
    

    
    
    
</body>

</html>