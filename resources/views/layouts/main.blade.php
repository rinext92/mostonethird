<!DOCTYPE html>
<html lang="en">

  @include('includes.header')

  <body>

    <!-- Navigation -->
    @include('includes.navbar')
  
    <!-- Page Content -->
    <div class="container">
    @if(Session::has('alert-success'))
      <p class="alert {{ Session::get('alert-class', 'alert-success') }}" style="position:relative;margin-top: 5%;">{{ Session::get('alert-success') }}</p>
    @endif
    @if(Session::has('alert-warning')) 
      @if (count($errors) > 0)
          <p class="alert {{ Session::get('alert-class', 'alert-danger') }}" style="position:relative;margin-top: 5%">
            @foreach ($errors->all() as $error)
                      {{ $error }}
            @endforeach
          </p>
      @else
        <p class="alert {{ Session::get('alert-class', 'alert-danger') }}" style="position:relative;margin-top: 5%">{{ Session::get('alert-warning') }}</p>
      @endif
    @endif
      <div class="row">
        
        
             <!-- Post Content Column -->       
          @yield('content')
       
        <!-- Sidebar Widgets Column -->
        @include('includes.side-widget')

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    @include('includes.footer')

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('boostrap/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('boostrap/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  </body>

</html>
