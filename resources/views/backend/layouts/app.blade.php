
<!DOCTYPE html>

<html lang="en">

 @include('backend.layouts.head');


<body class="hold-transition sidebar-mini">
<div class="wrapper">


@include('backend.layouts.navbar');



  @include('backend.layouts.sidebar');


  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-10">
            <h1 class=" text-dark" style="margin-left: 30">Starter Page</h1>
                 @section('body-content')

                  @show


          </div>
        </div>
      </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

  </div>


 @include('backend.layouts.footer');
  <script  src="{{ asset('js/app.js')}}"></script>

</body>
</html>
