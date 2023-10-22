


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

      <!-- Google Font: Source Sans Pro -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="{{asset("assets/dashboard/plugins/fontawesome-free/css/all.min.css")}}">
      <!-- daterange picker -->
      <link rel="stylesheet" href="{{asset("assets/dashboard/plugins/daterangepicker/daterangepicker.css")}}">
      <!-- iCheck for checkboxes and radio inputs -->
      <link rel="stylesheet" href="{{asset("assets/dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css")}}">
      <!-- Bootstrap Color Picker -->
      <link rel="stylesheet" href="{{asset("assets/dashboard/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css")}}">
      <!-- Tempusdominus Bootstrap 4 -->
      <link rel="stylesheet" href="{{asset("assets/dashboard/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css")}}">
      <!-- Select2 -->
      <link rel="stylesheet" href="{{asset("assets/dashboard/plugins/select2/css/select2.min.css")}}">
      <link rel="stylesheet" href="{{asset("assets/dashboard/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css")}}">
      <!-- Bootstrap4 Duallistbox -->
      <link rel="stylesheet" href="{{asset("assets/dashboard/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css")}}">
      <!-- BS Stepper -->
      <link rel="stylesheet" href="{{asset("assets/dashboard/plugins/bs-stepper/css/bs-stepper.min.css")}}">
      <!-- dropzonejs -->
      <link rel="stylesheet" href="{{asset("assets/dashboard/plugins/dropzone/min/dropzone.min.css")}}">
      <!-- Theme style -->
      <link rel="stylesheet" href="{{asset("assets/dashboard/dist/css/adminlte.min.css")}}">
</head>


<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{ asset('assets/dashboard/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo"
            height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index3.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-comments"></i>
                    <span class="badge badge-danger navbar-badge">3</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="{{ asset('assets/dashboard/dist/img/user1-128x128.jpg') }}" alt="User Avatar"
                                class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">Call me whenever you can...</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="{{ asset('assets/dashboard/dist/img/user8-128x128.jpg') }}" alt="User Avatar"
                                class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    John Pierce
                                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">I got your message bro</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="{{ asset('assets/dashboard/dist/img/user3-128x128.jpg') }}" alt="User Avatar"
                                class="img-size-50 img-circle mr-3">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    Nora Silvester
                                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">The subject goes here</p>
                                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#"
                    role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="{{ asset('assets/front/images/bg_2.jpg') }}" alt="AdminLTE Logo"
                class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Coffee Blend</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel  -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ asset('assets/dashboard/dist/img/user2-160x160.jpg') }}"
                        class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                </div>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-outline-light  ml-3">Logout</button>
                </form>
            </div>
            <!-- SidebarSearch Form -->

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item {{ request()->routeIs('categories.index') ? 'menu-open' : '' }}">
                        <a href="{{ route('categories.index') }}" class="nav-link {{ request()->routeIs('categories.index') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Categories
                            </p>
                        </a>
                    </li>

                    <li class="nav-item {{ request()->routeIs('products.index') ? 'menu-open' : '' }}">
                        <a href="{{ route('products.index') }}" class="nav-link {{ request()->routeIs('products.index') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-mug-hot"></i>
                            <p>
                                Products
                            </p>
                        </a>
                    </li>

                    <li class="nav-item {{ request()->routeIs('users.index') ? 'menu-open' : '' }}">
                        <a href="{{ route('users.index') }}" class="nav-link {{ request()->routeIs('users.index') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-user"></i>
                            <p>
                                Users
                            </p>
                        </a>
                    </li>

                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link {{  request()->routeIs('offline.index') ? 'active' : '' }}">
                            <i class "nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Orders
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item {{ request()->routeIs('online.index') ? 'active' : '' }}">
                                <a href="{{ route('online.index') }}" class="nav-link {{ request()->routeIs('online.index') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Online Orders</p>
                                </a>
                            </li>
                            <li class="nav-item {{ request()->routeIs('offline.index') ? 'active' : '' }}">
                                <a href="{{ route('offline.index') }}" class="nav-link {{ request()->routeIs('offline.index') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Offline Orders</p>
                                </a>
                            </li>
                            <li class="nav-item {{ request()->routeIs('checks.index') ? 'active' : '' }}">
                                <a href="{{ route('checks.index') }}" class="nav-link {{ request()->routeIs('checks.index') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Check Offline Orders</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->


            <!-- Main content -->
    <section class="content w-100">
        <div class="row mx-5">
          <div class="col-md-12 ">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">General</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>

              {{-- //search by product name --}}
              <form class="mt-3 mx-3" method="GET" action="search">
                @csrf
                <!-- Search form -->
            <input class="form-control" type="text" placeholder="Search" aria-label="Search" name="query">
              </form>

              {{-- end of serach by product name --}}

              <form action="{{ route('offline.store') }}" method="post">
                @csrf
              <div class="card-body w-100">
                    <div class="d-flex justify-content-between w-100">
                        <div class="form-group col-6">
                            <label>Select User</label>

                          <select class="select2 "  data-placeholder="Select a State"  style="width: 100% ;  " name="user_id">
                              @foreach ($users as $user )
                              <option value="{{ $user->id }}">{{ $user->name }}</option>
                              @endforeach
                          </select>
                          </div>


                          <div class="form-group col-6">
                                <label>Rooms Number</label>
                                <select class="select2"  data-placeholder="Select a State" style="width: 100%;" name="user_id">
                                  @foreach ($rooms as $room )
                                  <option value="{{ $room->id }}">{{ $room->name }}</option>
                                  @endforeach
                                </select>
                          </div>
                    </div>





                    <div class="form-group">


                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Select</th>
                                     <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                </tr>
                            </thead>


                            <tbody>
                                @foreach ($products as $product)
                                <tr>
                                    <td>
                                        <input type="checkbox" name="selected_products[]" value="{{ $product->id }}">
                                    </td>
                                     <td>{{ $product->name }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>
                                        <input type="number" name="product_quantities[{{ $product->id }}]" value="1" class="form-control"  min="1" max="10">
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- //pagniation --}}
                        <div class="d-flex justify-content-center ">
                            {{$products->links()}}
                          </div>
                          <div class="form-group">
                            <label for="inputDescription">Notes</label>
                            <textarea id="inputDescription" class="form-control" rows="4">Raw denim you probably</textarea>
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <a href="#" class="btn btn-secondary">Cancel</a>
                          <input type="submit" value="Save Changes" class="btn btn-success float-right">
                        </div>
                      </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

        </div>

    </form>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
</html>
     {{-- <tbody>
                                @foreach ($products as $product)

                                <tr>
                                    <td>
                                        <input type="checkbox" name="selected_products[]" value="{{ $product->id }}">
                                    </td>
                                    <td><img src="{{ $product->image }}" alt=""></td>

                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td><input type="number" name="product_quantities[{{ $product->id }}]" value="1"></td>
                                </tr>
                                @endforeach
                            </tbody> --}}











<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset("assets/dashboard/plugins/jquery/jquery.min.js")}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset("assets/dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<!-- Select2 -->
<script src="{{asset("assets/dashboard/plugins/select2/js/select2.full.min.js")}}"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="{{asset("assets/dashboard/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js")}}"></script>
<!-- InputMask -->
<script src="{{asset("assets/dashboard/plugins/moment/moment.min.js")}}"></script>
<script src="{{asset("assets/dashboard/plugins/inputmask/jquery.inputmask.min.js")}}"></script>
<!-- date-range-picker -->
<script src="{{asset("assets/dashboard/plugins/daterangepicker/daterangepicker.js")}}"></script>
<!-- bootstrap color picker -->
<script src="{{asset("assets/dashboard/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js")}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset("assets/dashboard/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js")}}"></script>
<!-- Bootstrap Switch -->
<script src="{{asset("assets/dashboard/plugins/bootstrap-switch/js/bootstrap-switch.min.js")}}"></script>
<!-- BS-Stepper -->
<script src="{{asset("assets/dashboard/plugins/bs-stepper/js/bs-stepper.min.js")}}"></script>
<!-- dropzonejs -->
<script src="{{asset("assets/dashboard/plugins/dropzone/min/dropzone.min.js")}}"></script>
<!-- AdminLTE App -->
<script src="{{asset("assets/dashboard/dist/js/adminlte.min.js")}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset("assets/dashboard/dist/js/demo.js")}}"></script>
<!-- Page specific script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>



