<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{ $pelajar->nik }}</h5>
    <p class="card-text">{{ $pelajar->nama }}</p>
    <p class="card-text">{{ $pelajar->photo }}</p>


    <a href="{{ $pelajar->id}}/edit" class="btn btn-primary">Edit</a>

    <form action="{{ $pelajar->id }}" method="post">
        @method('delete')
        @csrf
        <button type="submit">Delete</button>
    </form>
  </div>
</div>
</body>
</html>