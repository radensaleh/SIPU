<!DOCTYPE html>
<html>
<head>

  <link rel="icon" type="image/png "href="{{ URL::asset('img/database.png') }}">
  <title>Data Users</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/flat-admin/vendor.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/flat-admin/flat-admin.css') }}">
  <!-- Theme -->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/flat-admin/theme/blue-sky.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/flat-admin/theme/blue.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/flat-admin/theme/red.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/flat-admin/theme/yellow.css') }}">

  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>
  <div class="app app-default">

<aside class="app-sidebar" id="sidebar">
  <div class="sidebar-header">
    <a class="sidebar-brand" href="{{ route('dashboardAdminWeb') }}"><span class="highlight">SIPU</span> POLINDRA</a>
    <button type="button" class="sidebar-toggle">
      <i class="fa fa-times"></i>
    </button>
  </div>
  <div class="sidebar-menu">
    <ul class="sidebar-nav">
      <li>
        <a href="{{ route('dashboardAdminWeb') }}">
          <div class="icon">
            <i class="fa fa-tasks" aria-hidden="true"></i>
          </div>
          <div class="title">Dashboard</div>
        </a>
      </li>
      <li>
        <a href="{{ route('data-admin') }}">
          <div class="icon">
            <i class="fa fa-database" aria-hidden="true"></i>
          </div>
          <div class="title">Data Admin UKM</div>
        </a>
      </li>
      <li>
        <a href="{{ route('data-ukm') }}">
          <div class="icon">
            <i class="fa fa-database" aria-hidden="true"></i>
          </div>
          <div class="title">Data UKM</div>
        </a>
      </li>
      <li>
        <a href="{{ route('data-prodi') }}">
          <div class="icon">
            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
          </div>
          <div class="title">Data Prodi</div>
        </a>
      </li>
      <li>
        <a href="{{ route('data-jurusan') }}">
          <div class="icon">
            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
          </div>
          <div class="title">Data Jurusan</div>
        </a>
      </li>
    </ul>
  </div>
</aside>

<script type="text/ng-template" id="sidebar-dropdown.tpl.html">
  <div class="dropdown-background">
    <div class="bg"></div>
  </div>
  <div class="dropdown-container">
  </div>
</script>
<div class="app-container">

  <nav class="navbar navbar-default" id="navbar">
  <div class="container-fluid">
    <div class="navbar-collapse collapse in">
      <ul class="nav navbar-nav navbar-left">
        <li class="navbar-title">Data Mahasiswa</li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown notification warning">
          <a href="{{ route('data-mhs') }}" class="dropdown-toggle" data-toggle="dropdown">
            <div class="icon"><i class="fas fa-user-circle" aria-hidden="true"></i></div>
            <div class="count">{{ $countMHS }}</div>
          </a>
          <div class="dropdown-menu">
            <ul>
              <li class="dropdown-header">Data Mahasiswa</li>
              <li>
                <a href="">
                  <span class="badge badge-danger pull-right">{{ $countMHS }}</span>
                  <div class="message">
                    <div class="content">
                      <div class="title">Data Mahasiswa</div>
                      <div class="description">All Data</div>
                    </div>
                  </div>
                </a>
              </li>
              <li class="dropdown-footer">
                <a href="{{ route('data-mhs') }}">View All <i class="fa fa-angle-right" aria-hidden="true"></i></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="dropdown notification danger">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <div class="icon"><i class="fa fa-database" aria-hidden="true"></i></div>
            <div class="title"></div>
            <div class="count">{{ $countDaftar }}</div>
          </a>
          <div class="dropdown-menu">
            <ul>
              <li class="dropdown-header">All Data</li>
              <li>
                <a href="">
                  <span class="badge badge-danger pull-right">{{ $countDaftar }}</span>
                  <div class="message">
                    <div class="content">
                      <div class="title">Data Pendaftaran</div>
                      <div class="description">All Data</div>
                    </div>
                  </div>
                </a>
              </li>
              <li class="dropdown-footer">
                <a href="{{ route('data-pendaftaran') }}">View All <i class="fa fa-angle-right" aria-hidden="true"></i></a>
              </li>
            </ul>
          </div>
        </li>
        <li class="dropdown profile">
          <a href="/html/pages/profile.html" class="dropdown-toggle"  data-toggle="dropdown">
            <img class="profile-img" src="{{ URL::asset('img/boy.png') }}">
            <div class="title">Profile</div>
          </a>
          <div class="dropdown-menu">
            <div class="profile-info">
              @foreach($admin as $data)
              <h4 class="username">Hi, {{ $data->nama }}</h4>
              @endforeach
            </div>
            <ul class="action">
              <!-- <li>
                <a href="#">
                  Profile
                </a>
              </li> -->
              <!-- <li>
                <a href="#">
                  <span class="badge badge-danger pull-right">5</span>
                  My Inbox
                </a>
              </li> -->
              <!-- <li>
                <a href="#">
                  Setting
                </a>
              </li> -->
              <li>
                <a href="{{ route('adminpage') }}">
                  Logout
                </a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- <div class="btn-floating" id="help-actions">
  <div class="btn-bg"></div>
  <button type="button" class="btn btn-default btn-toggle" data-toggle="toggle" data-target="#help-actions">
    <i class="icon fa fa-plus"></i>
    <span class="help-text">Shortcut</span>
  </button>
  <div class="toggle-content">
    <ul class="actions">
      <li><a id="addDataAdmin" data-toggle="modal" data-target="#addData"><span class="fa fa-plus-circle"></span> Add Data</a></li>
    </ul>
  </div>
</div> -->


<!-- Modal Detail Data-->
<div id="detailData" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> <span class="fa fa-info-circle">  </span> Detail Data</h4>
      </div>
      <div class="modal-body">
           <table class="table table-striped table-bordered table-hover no-footer">
               <tr>
                   <th>Nim</th>
                   <td id="nim"></td>
               </tr>
               <tr>
                   <th>Nama Mahasiswa</th>
                   <td id="nama_mhs"></td>
               </tr>
               <tr>
                   <th>ID Prodi</th>
                   <td id="id_prodi"></td>
               </tr>
               <tr>
                   <th>Email</th>
                   <td id="email"></td>
               </tr>
               <tr>
                   <th>Alamat</th>
                   <td id="alamat"></td>
               </tr>
               <tr>
                   <th>No HP</th>
                   <td id="no_hp"></td>
               </tr>
           </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal"><span class="fa fa-times-circle"></span> Close</button>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-xs-12">
    <div class="card">
      <div class="card-header">
        Data Mahasiswa
      </div>
      <div class="card-body no-padding">
        <table class="datatable table table-striped primary" cellspacing="0" width="100%">
          <thead>
              <tr>
                <th>No</th>
                <th>Nim</th>
                <th>Nama Mahasiswa</th>
                <th>Email</th>
                <th width ="250px">Actions</th>
              </tr>
          </thead>
          <tbody>
              @foreach($mhs as $key => $data)
                <tr>
                  <td>{{ ++$key }}</td>
                  <td>{{ $data->nim }}</td>
                  <td>{{ $data->nama_mhs }}</td>
                  <td>{{ $data->email }}</td>
                  <td>
                    <button class="btn btn-xs btn-info" data-toggle="modal" data-target="#detailData" data-nim = "{{ $data->nim }}" data-nama_mhs="{{ $data->nama_mhs }}" data-id_prodi="{{ $data->id_prodi }}" data-email="{{ $data->email }}" data-alamat="{{ $data->alamat }}" data-no_hp="{{ $data->no_hp }}">
                         <span class="fa fa-info-circle"></span> Detail
                    </button>
                    <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#deleteData" data-nim = "{{ $data->nim }}">
                          <span class="fa fa-trash"></span> Delete
                    </button>
                  </td>
                </tr>
              @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Modal Delete Data-->
<div id="deleteData" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center"><span class="fa fa-check"></span> Delete Confirmation</h4>
      </div>
        <form id="modal-form-delete" method="post" action="{{ route('data-mhs.destroy', 'destroy') }}">
            {{ method_field('delete') }}
            {{ csrf_field() }}
      <div class="modal-body">
            <input type="hidden" name="nim" id="cat_nim" value="">
            <p><center>Are you sure you want to delete this ?</center></p>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger" id="btnDelete"><span class="fa fa-trash"></span> Yes, Delete</button>
        <button type="button" class="btn btn-info" data-dismiss="modal"><span class="fa fa-times-circle"></span> No, Cancel</button>
      </div>
      </form>
    </div>
  </div>
</div>

  <footer class="app-footer">
  <div class="row">
    <div class="col-xs-12">
      <div class="footer-copyright">
        Copyright © 2018 SIPU-POLINDRA | D4RPL
      </div>
    </div>
  </div>
</footer>
</div>

  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="{{ URL::asset('js/flat-admin/vendor.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/flat-admin/app.js') }}"></script>
  <script src="https://unpkg.com/sweetalert2@7.1.0/dist/sweetalert2.all.js"></script>
  <script type="text/javascript">

    $(document).ready(function(){

          $('#detailData').on('show.bs.modal', function (event) {

              var button = $(event.relatedTarget) // Button that triggered the modal
              var nim      = button.data('nim') // Extract info from data-* attributes
              var nama_mhs = button.data('nama_mhs')
              var id_prodi = button.data('id_prodi')
              var email    = button.data('email')
              var alamat   = button.data('alamat')
              var no_hp    = button.data('no_hp')
              // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
              // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
              var modal = $(this)
              modal.find('.modal-body #nim').text(nim)
              modal.find('.modal-body #nama_mhs').text(nama_mhs)
              modal.find('.modal-body #id_prodi').text(id_prodi)
              modal.find('.modal-body #email').text(email)
              modal.find('.modal-body #alamat').text(alamat)
              modal.find('.modal-body #no_hp').text(no_hp)
            });

            $('#deleteData').on('show.bs.modal', function (event) {
              var button     = $(event.relatedTarget)
              var nim        =  button.data('nim')
              var modal      = $(this)
              modal.find('.modal-body #cat_nim').val(nim)
            });

          var formDelete = $('#modal-form-delete');
          formDelete.submit( function(e) {
              e.preventDefault();

              $.ajax({
                  url:formDelete.attr('action'),
                  type:"POST",
                  data:formDelete.serialize(),
                  dataType:"json",
                  success: function( res ){
                    if( res.error == 0){
                      $('#deleteData').modal('hide');
                      swal(
                        'Success',
                        res.message,
                            'success'
                        ).then(OK => {
                          if(OK){
                            window.location.href = "{{ route('data-mhs') }}";
                          }
                        });
                    }else if( res.error == 1){
                      $('#deleteData').modal('hide');
                      swal(
                        'Fail',
                        res.message,
                            'fail'
                        ).then(OK => {
                          if(OK){
                            window.location.href = "{{ route('data-mhs') }}";
                          }
                        });
                    }
                  }
              });
          });


        });
  </script>

</body>
</html>
