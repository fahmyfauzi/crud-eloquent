<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>CRUD Eloquent Larvel</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Siswa
                </div>
                <div class="card-body">
                    <a href="/siswa/add" class="btn btn-primary">Input Siswa Baru</a> | <a href="/siswa/trash">Tong Sampah</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($siswa as $s)
                            <tr>
                                <td>{{ $s->nama }}</td>
                                <td>{{ $s->umur}}</td>
                                <td>{{ $s->alamat }}</td>
                                <td>
                                    <a href="/siswa/edit/{{ $s->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/siswa/hapus/{{ $s->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
