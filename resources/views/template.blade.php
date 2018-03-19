<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
  </head>
    <body>
      <div class="columns">
        <div class="column">
          @section('sidebar')
            This is the master sidebar.
          @show
        </div>
        <div class="column">
          <div class="container">
            @yield('content')
          </div>
        </div>
      </div>

      <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    </body>
</html>
