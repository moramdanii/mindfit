<!DOCTYPE html>
<html lang="en">
    <head>
        @include('includes.head')
    </head>
    <body>
        @include('includes.header')

        <main>
      @yield('content')
    </main>

        @include('includes.footer')

  <!-- Main JS File -->
        @include('includes.scripts')
        @yield('scripts')
    </body>
</html>
