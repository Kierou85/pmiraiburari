<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>book</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
</head>

<!--<style>
.banner{
    background: url(ghibli.jpeg)
    no-repeat center center;
    background-size: cover; 
    padding-top: 25%;
    padding-bottom: 20%;
    color: black;
}
</style>-->

<!-- Background -->
<body style="background-image: url(https://images.pexels.com/photos/7130560/pexels-photo-7130560.jpeg?cs=srgb&dl=pexels-codioful-%28formerly-gradienta%29-7130560.jpg&fm=jpg)">

    <div class="container py-4">
        @foreach ($books as $book)
        <a href="pengguna.php" class="btn btn-secondary mb-3">Kembali</a>
        {{-- <a href="{{ route('book', ['id' => $book->id]) }}" class="btn btn-secondary mb-3">View Book</a> --}}
        <h3>
            {{-- <?= $book['deskripsi'] ?> --}}
            {{ $book->deskripsi }}
        </h3>
        <img src="{{ asset('/images/' . $book->image) }}" style="height: 400px;">
        <pre class="mt-3 lh-bas" style="white-space: break-spaces;font-family: Arial;font-size: 20px;"><?= $book['deskripsi'] ?></pre>
    @endforeach
    </div>


    <script src="./js/bootstrap.bundle.min.js" ></script>
</body>
</html>y