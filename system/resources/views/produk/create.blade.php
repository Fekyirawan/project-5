<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="{{url('public')}}/img/favicon.png" rel="icon">
  <link href="{{url('public')}}/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="{{url('public')}}/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="{{url('public')}}/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="{{url('public')}}/css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="{{url('public')}}/lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="{{url('public')}}/css/style.css" rel="stylesheet">
  <link href="{{url('public')}}/css/style-responsive.css" rel="stylesheet">
  <script src="{{url('public')}}/lib/chart-master/Chart.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>DASH<span>IO</span></b></a>
      <!--logo end-->
      <div class="nav notify-row pull-right" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
         
          <!-- settings end -->
          <!-- inbox dropdown start-->
          <li id="header_inbox_bar ">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-ellipsis-h"></i>
              </a>
            <ul class="dropdown-menu extended inbox pull-right">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">Silahkan Login</p>
              </li>
               <li>
             <a href="{{url('login')}}"><i class="fa fa-sign-in"></i> login</a>
              </li>
              <li>
                 <a href="{{url('registrasi')}}"><i class="fa fa-sign-in"></i> Registrasi</a>
              </li>
               <li>
                  <a href="{{url('logout')}}"><i class="fa fa-sign-out"></i> logout</a>
              </li>
            </ul>
          </li>
          <!-- inbox dropdown end -->
          <!-- notification dropdown start-->
         
        </ul>
        <!--  notification end -->
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="{{url('public')}}/img/login.png" class="img-circle" width="70"></a></p>
          <h5 class="centered"></h5>
          <li class="mt">
            <a class="javascript:;" href="{{url('/beranda')}}">
              <i class="fa fa-home"></i>
              <span>Beranda</span>
              </a>
          </li>
          <li class="sub">
            <a class="active" href="{{url('/produk')}}">
              <i class="fa fa-th"></i>
              <span>Produk</span>
              </a>
          </li>
           <li class="sub">
            <a class="javascript:;" href="#">
              <i class="fa fa-th"></i>
              <span>Kategori</span>
              </a>
          </li>
           <li class="sub">
            <a class="javascript:;" href="{{url('/user')}}">
              <i class="fa fa-th"></i>
              <span>User</span>
              </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <section class="wrapper">
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-xs-12">
                <div class="card">
                  <div class="card-header">
                    Tambah Data produk
                  </div>
                  <div class="card-body" >
                   <form action="{{url('produk')}}" method="post">
                      @csrf
                     <div class="form-group">
                        <label for="" class="control-label">Nama</label>
                        <input type="text" class="form-control" name="nama"></input>
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                             <label for="" class="control-label">Stok</label>
                             <input type="text" class="form-control" name="stok"></input>
                          </div>
                        </div>
                        <div class="col-md-3">
                           <div class="form-group">
                             <label for="" class="control-label">Harga</label>
                             <input type="text" class="form-control" name="harga"></input>
                           </div> 
                        </div>
                        <div class="col-md-3">
                           <div class="form-group">
                             <label for="" class="control-label">Berat</label>
                             <input type="text" class="form-control" name="berat"></input>
                           </div> 
                        </div>
                     </div>
                      <div class="form-group">
                             <label for="" class="control-label">Deskripsi</label>
                             <textarea name="deskripsi" class="form-control"></textarea>
                         </div>
                     <button class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>
                    </form>
                  </div>
                </div>
              </div>  
            </div> 
          </div>
        </section>
      </section>
    </section>
    <!--main content end-->
  
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="{{url('public')}}/lib/jquery/jquery.min.js"></script>

  <script src="{{url('public')}}/lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="{{url('public')}}/include" type="text/javascript" src="{{url('public')}}/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="{{url('public')}}/lib/jquery.scrollTo.min.js"></script>
  <script src="{{url('public')}}/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="{{url('public')}}/lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="{{url('public')}}/lib/common-scripts.js"></script>
  <script type="text/javascript" src="{{url('public')}}/lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="{{url('public')}}/lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="{{url('public')}}/lib/sparkline-chart.js"></script>
  <script src="{{url('public')}}/lib/zabuto_calendar.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Welcome to Dashio!',
        // (string | mandatory) the text inside the notification
        text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
        // (string | optional) the image to display on the left
        image: 'img/ui-sam.jpg',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script>
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>
