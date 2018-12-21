<!DOCTYPE html>
<html>
<head>

  <link rel="icon" type="image/png "href="{{ URL::asset('img/database.png') }}">
  <title>Data Admin UKM</title>

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
      <li class="active">
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
        <li class="navbar-title">Data Admin UKM</li>
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

<div class="btn-floating" id="help-actions">
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
</div>

<!-- Modal Add Data-->
<div id="addData" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><span class="fa fa-user-plus"></span> Add Data Admin</h4>
      </div>
      <div class="modal-body">
        <form id="modal-form-add" action="{{ route('data-admin.store') }}" method="post" role="form">
          {{ csrf_field() }}
          <div class="form-group has-success">
            <label for="id_admin" class="form-control-label">ID Admin</label>
            <input type="text" id="inputIdAdmin" name="id_admin" class="form-control" required/>
            <span class="text-warning" ></span>
          </div>
          <div class="form-group has-success">
            <label for="nama_admin" class="form-control-label">Nama Admin</label>
            <input type="text" id="inputNamaAdmin" name="nama_admin" class="form-control" required />
          </div>
          <div class="form-group has-success">
            <label for="email" class="form-control-label">Email</label>
            <input type="email" id="inputEmail" name="email" class="form-control" required />
          </div>
          <div class="form-group has-success">
            <label for="password" class="form-control-label">Password</label>
            <input type="password" id="inputPassword" name="password" class="form-control" required />
          </div>
          <div class="form-group has-success">
            <label for="id_ukm" class="form-control-label">UKM</label>
            <select name="id_ukm" class="form-control">
              @foreach($dataUKM as $data)
                <option value="{{ $data->id_ukm }}">{{ $data->nama_ukm }}</option>
              @endforeach
            </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class=" btn btn-success"><span class="fa fa-plus-circle"></span> Submit</button>
        <button type="button" class="btn btn-info" data-dismiss="modal"><span class="fa fa-times-circle"></span> Close</button>
      </div>
      </form>
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
        <form id="modal-form-delete" method="post" action="{{ route('data-admin.destroy', 'test') }}">
            {{ method_field('delete') }}
            {{ csrf_field() }}
      <div class="modal-body">
            <input type="hidden" name="id_admin" id="cat_id" value="">
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
                   <th>ID Admin</th>
                   <td id="id_admin"></td>
               </tr>
               <tr>
                   <th>Nama Admin</th>
                   <td id="nama_admin"></td>
               </tr>
               <tr>
                   <th>Email</th>
                   <td id="email"></td>
               </tr>
               <!-- <tr>
                   <th>Password</th>
                   <td id="password"></td>
               </tr> -->
               <tr>
                   <th>ID UKM</th>
                   <td id="id_ukm"></td>
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
        Data Admin UKM
      </div>
      <div class="card-body no-padding">
        <table class="datatable table table-striped primary" cellspacing="0" width="100%">
  <thead>
      <tr>
        <th>No</th>
        <th>ID Admin</th>
        <th>Nama Admin</th>
        <th width ="250px">Actions</th>
      </tr>
  </thead>
  <tbody>
      @foreach($adminUKM as $key => $data)
        <tr>
          <td>{{ ++$key }}</td>
          <td>{{ $data->id_admin }}</td>
          <td>{{ $data->nama_admin }}</td>
          <td>
            <button class="btn btn-xs btn-info" data-toggle="modal" data-target="#detailData" data-id_admin = "{{ $data->id_admin }}" data-nama_admin="{{ $data->nama_admin }}" data-email="{{ $data->email }}" data-password="{{ $data->password }}" data-id_ukm="{{ $data->id_ukm }}">
                 <span class="fa fa-info-circle"></span> Detail
               </button>
            <button class="btn btn-xs btn-warning" data-toggle="modal" data-target="#editData" data-id_admin = "{{ $data->id_admin }}" data-nama_admin="{{ $data->nama_admin }}" data-email="{{ $data->email }}" data-password="{{ $data->password }}" data-id_ukm="{{ $data->id_ukm }}">
                  <span class="fa fa-edit"></span> Edit
            </button>
            <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#deleteData" data-id_admin = "{{ $data->id_admin }}">
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

  <!-- Modal Edit Data-->
  <div id="editData" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="fa fa-edit"></span> Edit Data</h4>
        </div>
          <form id="modal-form-edit" method="post" action="{{ route('data-admin.update', 'update') }}">
              {{ method_field('patch') }}
              {{ csrf_field() }}
        <div class="modal-body">
              <input type="hidden" name="id_admin" id="cat_id" value="">
            <div class="form-group has-warning">
              <label for="id_admin" class="form-control-label">ID Admin</label>
              <input type="text" id="id_admin" name="id_admin" class="form-control"  readonly />
            </div>
            <div class="form-group has-warning">
              <label for="nama_admin" class="form-control-label">Nama Admin</label>
              <input type="text" id="nama_admin" name="nama_admin" class="form-control"  required />
            </div>
            <div class="form-group has-warning">
              <label for="email" class="form-control-label">Email</label>
              <input type="email" id="email" name="email" class="form-control"  required />
            </div>
            <div class="form-group has-warning">
              <label for="password" class="form-control-label">Password</label>
              <input type="password" id="password" name="password" class="form-control"  required />
            </div>
            <div class="form-group has-warning">
              <label for="id_ukm" class="form-control-label">UKM</label>
              <select id="id_ukm" name="id_ukm" class="form-control">
                @foreach($dataUKM as $data)
                  <option value="{{ $data->id_ukm }}">{{ $data->nama_ukm }}</option>
                @endforeach
              </select>
            </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-warning" id="btnEdit"><span class="fa fa-edit"></span> Edit</button>
          <button type="button" class="btn btn-info" data-dismiss="modal"><span class="fa fa-times-circle"></span> Close</button>
        </div>
        </form>
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
              var id_admin   = button.data('id_admin') // Extract info from data-* attributes
              var nama_admin = button.data('nama_admin')
              var email      = button.data('email')
              var password   = button.data('password')
              var id_ukm     = button.data('id_ukm')
              // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
              // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
              var modal = $(this)
              modal.find('.modal-body #id_admin').text(id_admin)
              modal.find('.modal-body #nama_admin').text(nama_admin)
              modal.find('.modal-body #email').text(email)
              modal.find('.modal-body #password').text(password)
              modal.find('.modal-body #id_ukm').text(id_ukm)
            });

          $('#editData').on('show.bs.modal', function (event) {

            var button = $(event.relatedTarget) // Button that triggered the modal
            var id_admin   = button.data('id_admin') // Extract info from data-* attributes
            var nama_admin = button.data('nama_admin')
            var email      = button.data('email')
            var password   = button.data('password')
            var id_ukm     = button.data('id_ukm')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this)
            modal.find('.modal-body #id_admin').val(id_admin)
            modal.find('.modal-body #nama_admin').val(nama_admin)
            modal.find('.modal-body #email').val(email)
            modal.find('.modal-body #password').val(password)
            modal.find('.modal-body #id_ukm').val(id_ukm)
            modal.find('.modal-body #cat_id').val(id_admin)
            $("#id_admin").prop('disabled', true);
          });

          $('#deleteData').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var id_admin = button.data('id_admin')
            var modal = $(this)
            modal.find('.modal-body #cat_id').val(id_admin)
          });

          var formAdd    = $('#modal-form-add');
          var formEdit   = $('#modal-form-edit');
          var formDelete = $('#modal-form-delete');

          formAdd.submit(function (e) {
              e.preventDefault();

              $.ajax({
                  url: formAdd.attr('action'),
                  type: "POST",
                  data: formAdd.serialize(),
                  dataType: "json",
                  success: function( res ){
                    console.log(res)
                    if( res.error == 0 ){
                      $('#addData').modal('hide');
                      swal(
                        'Success',
                        res.message,
                            'success'
                        ).then(OK => {
                          if(OK){
                            window.location.href = "{{ route('data-admin') }}";
                          }
                        });
                    } else{
                        $('#addData').modal('hide');
                        swal(
                          'Fail',
                          res.message,
                          'error'
                        ).then(OK => {
                          if(OK){
                            window.location.href = "{{ route('data-admin') }}";
                          }
                        });
                      }
                    }
                })
            });

          formEdit.submit(function (e) {
              e.preventDefault();

              $.ajax({
                  url: formEdit.attr('action'),
                  type: "POST",
                  data: formEdit.serialize(),
                  dataType: "json",
                  success: function( res ){
            				console.log(res)
            				if( res.error == 0 ){
                      $('#editData').modal('hide');
            					swal(
            					  'Success',
            					  res.message,
                					  'success'
              					).then(OK => {
                          if(OK){
                            window.location.href = "{{ route('data-admin') }}";
                          }
                        });
                		} else{
                        $('#editData').modal('hide');
                				swal(
                				  'Fail',
              					  res.message,
              					  'error'
              					).then(OK => {
                          if(OK){
                            window.location.href = "{{ route('data-admin') }}";
                          }
                        });
              				}
              			}
                })
            });

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
                                window.location.href = "{{ route('data-admin') }}";
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
