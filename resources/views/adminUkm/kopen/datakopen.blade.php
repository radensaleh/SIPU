<!DOCTYPE html>
<html>
<head>

  <link rel="icon" type="image/png "href="{{ URL::asset('img/database.png') }}">
  <title>Data Kopen</title>

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
    <a class="sidebar-brand" href="{{ route('dashboardKopen', $getid->id_admin) }}"><span class="highlight">SIPU</span> POLINDRA</a>
    <button type="button" class="sidebar-toggle">
      <i class="fa fa-times"></i>
    </button>
  </div>
  <div class="sidebar-menu">
    <ul class="sidebar-nav">
      <li>
        <a href="{{ route('dashboardKopen', $getid->id_admin) }}">
          <div class="icon">
            <i class="fa fa-tasks" aria-hidden="true"></i>
          </div>
          <div class="title">Dashboard</div>
        </a>
      </li>

      <li class="active">
        <a href="{{ route('data-kopen', $getid->id_admin ) }}">
          <div class="icon">
            <i class="fa fa-database" aria-hidden="true"></i>
          </div>
          <div class="title">Data UKM Kopen</div>
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
        <li class="navbar-title">Data Kopen</li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
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
              <h4 class="username">{{ $getid->nama_admin }}</h4>
            </div>
            <ul class="action">
              <li>
                <a href="{{ url('/') }}">
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

<div class="btn-floating" id="help-actions">
  <div class="btn-bg"></div>
  <button type="button" class="btn btn-default btn-toggle" data-toggle="toggle" data-target="#help-actions">
    <i class="icon fa fa-print"></i>
    <span class="help-text"></span>
  </button>
  <div class="toggle-content">
    <ul class="actions">
      <li><a href="{{ route('PdfKopen', $getid->id_admin) }}"><span class="fa fa-print"></span> Print</a></li>
    </ul>
  </div>
</div>

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
                   <th>ID UKM</th>
                   <td id="id_ukm"></td>
               </tr>
               <tr>
                   <th>NIM</th>
                   <td id="nim"></td>
               </tr>
               <tr>
                   <th>Nama Mahasiswa</th>
                   <td id="nama_mhs"></td>
               </tr>
               <tr>
                   <th>Email</th>
                   <td id="email"></td>
               </tr>
               <tr>
                   <th>No HP</th>
                   <td id="no_hp"></td>
               </tr>
               <tr>
                   <th>Alasan</th>
                   <td id="alasan"></td>
               </tr>
               <tr>
                   <th>Created At</th>
                   <td id="created_at"></td>
               </tr>
           </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal"><span class="fa fa-times-circle"></span> Close</button>
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
        <form id="modal-form-delete" method="post" action="{{ route('deleteKopen') }}">
            {{ method_field('delete') }}
            {{ csrf_field() }}
      <div class="modal-body">
            <input type="hidden" name="id_pendaftaran" id="cat_id" value="">
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

<div class="row">
  <div class="col-xs-12">
    <div class="card">
      <div class="card-header">
        Data Kopen
      </div>
      <div class="card-body no-padding">
        <table class="datatable table table-striped primary" cellspacing="0" width="100%">
  <thead>
      <tr>
        <th>No</th>
        <th>ID UKM</th>
        <th>NIM</th>
        <th width ="200px">Actions</th>
      </tr>
  </thead>
  <tbody>
      @foreach($dataKopen as $key => $data)
        <tr>
          <td>{{ ++$key }}</td>
          <td>{{ $data->id_ukm }}</td>
          <td>{{ $data->nim }}</td>
          <td>
            <button class="btn btn-xs btn-info" data-toggle="modal" data-target="#detailData" data-id_ukm="{{ $data->id_ukm }}" data-nim="{{ $data->nim }}" data-alasan="{{ $data->alasan }}" data-created_at="{{ $data->created_at }}" data-nama_mhs="{{ $data->mahasiswa->nama_mhs }}" data-email="{{ $data->mahasiswa->email }}" data-no_hp="{{ $data->mahasiswa->no_hp }}">
                 <span class="fa fa-info-circle"></span> Detail
            </button>

            <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#deleteData" data-id_pendaftaran="{{ $data->id_pendaftaran }}">
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
          var id_ukm     = button.data('id_ukm') // Extract info from data-* attributes
          var nim        = button.data('nim')
          var nama       = button.data('nama_mhs')
          var email      = button.data('email')
          var no_hp      = button.data('no_hp')
          var alasan     = button.data('alasan')
          var created_at = button.data('created_at')

          // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
          // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
          var modal = $(this)
          modal.find('.modal-body #id_ukm').text(id_ukm)
          modal.find('.modal-body #nim').text(nim)
          modal.find('.modal-body #nama_mhs').text(nama)
          modal.find('.modal-body #email').text(email)
          modal.find('.modal-body #no_hp').text(no_hp)
          modal.find('.modal-body #alasan').text(alasan)
          modal.find('.modal-body #created_at').text(created_at)
        });

        $('#deleteData').on('show.bs.modal', function (event) {
          var button         = $(event.relatedTarget)
          var id_pendaftaran = button.data('id_pendaftaran')
          var modal          = $(this)
          modal.find('.modal-body #cat_id').val(id_pendaftaran)
        });

        var formDelete = $('#modal-form-delete');
        formDelete.submit(function (e) {
            e.preventDefault();

            $.ajax({
                url: formDelete.attr('action'),
                type: "POST",
                data: formDelete.serialize(),
                dataType: "json",
                success: function( res ){
                  console.log(res)
                  if( res.error == 0 ){
                    $('#deleteData').modal('hide');
                    swal(
                      'Success',
                      res.message,
                          'success'
                      ).then(OK => {
                        if(OK){
                            window.location.href = "{{ route('data-kopen', $getid->id_admin) }}";
                        }
                      });
                  } else{
                      $('#deleteData').modal('hide');
                      swal(
                        'Fail',
                        res.message,
                        'error'
                      )
                    }
                  }
              })
          });


      });
  </script>

</body>
</html>
