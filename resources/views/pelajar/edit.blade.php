<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" ectype="multipart/form-data" action="/pelajar/{{ $pelajar->id }}">
        @method('patch')
        @csrf
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Nik</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nik"  name="nik" value="{{ $pelajar->nik }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" placeholder="nama" name="nama" value="{{ $pelajar->nama }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Photo</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" placeholder="foto" name="photo" value="{{ $pelajar->photo }}">
            </div>
        </div>

        <button type="submit">Create</button>
    </form>
</body>
</html>