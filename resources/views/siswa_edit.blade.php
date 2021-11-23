<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title>Update CRUD eloquent Laravel</title>
</head>

<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header text-center">
                CRUD Data siswa - <strong>EDIT DATA</strong>
            </div>
            <div class="card-body">
                <a href="/siswa" class="btn btn-primary">Kembali</a>
                <br />
                <br />


                <form method="post" action="/siswa/update/{{ $siswa->id }}">

                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama siswa .." value=" {{ $siswa->nama }}">

                        @if($errors->has('nama'))
                        <div class="text-danger">
                            {{ $errors->first('nama')}}
                        </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Umur</label>
                        <input type="number" name="umur" placeholder="Umur siswa..." class="form-control" value="{{$siswa->umur}}">

                        @if($errors->has('umur'))
                        <div class="text-danger">
                            {{ $errors->first('umur')}}
                        </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control" placeholder="Alamat siswa .."> {{ $siswa->alamat }} </textarea>

                        @if($errors->has('alamat'))
                        <div class="text-danger">
                            {{ $errors->first('alamat')}}
                        </div>
                        @endif

                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Simpan">
                    </div>

                </form>

            </div>
        </div>
    </div>
</body>

</html>