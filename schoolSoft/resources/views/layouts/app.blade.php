<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>schoolsoft</title>
</head>
<body>
    @include('partials.navbar')
    <main>
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
          <!-- Replace with your content -->
          @yield('content')
         
        </div>
      </main>
    {{-- <script>
    alert('oh');
    </script> --}}
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>