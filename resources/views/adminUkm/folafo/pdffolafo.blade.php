<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PDF</title>
  </head>
  <body>
    <p>
      <b>| Data Registration UKM Folafo</b> <br>
        Politeknik Negeri Indramayu
    </p>
  <hr>

  <table border="1" cellspacing="1" width="100%">
      <thead>
        <tr>
          <th>No</th>
          <th width="5%">NIM</th>
          <th width="22%">Nama</th>
          <th width="20%">Jurusan</th>
          <th width="30%">Alamat</th>
          <th width="10%">No HP</th>
        </tr>
      </thead>
      <tbody>
        @foreach($dataFolafo as $key => $data)
          <tr>
            <td>{{ ++$key }}</td>
            <td width="5%">{{ $data->nim }}</td>
            <td width="22%">{{ $data->mahasiswa->nama_mhs }}</td>
            <td width="20%">{{ $data->mahasiswa->prodi->jurusan->nama_jurusan }}</td>
            <td width="30%">{{ $data->mahasiswa->alamat }}</td>
            <td width="10%">{{ $data->mahasiswa->no_hp }}</td>
          </tr>
        @endforeach
      </tbody>
  </table>

  </body>
</html>
