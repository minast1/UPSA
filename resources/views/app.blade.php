<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- Styles -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    <script src="{{ mix('/js/app.js') }}" defer></script>
  </head>
  <body>
  	<div id="no-app" class="container">
      
        <main class="py-4">

    @inertia
    
        </main>
    </div>
  </body>
</html>
