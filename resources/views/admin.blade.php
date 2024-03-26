@extends('app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create, Read, Update and Delete</h2>
            </div>
            <div class="pull-right" style="margin-bottom:10px;">
                <a class="btn btn-danger" href="{{ route('pengguna') }}"> Back</a>
                <a class="btn btn-success" href="{{ url('create') }}"> Create New Book</a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>Download</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Jumlah Halaman</th>
            <th>Deskripsi</th>
            <th>jml_pengunj</th>
            <th>jml_dl</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($books as $book)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/images/{{ $book->image }}" width="100px"></td>
            <td><img src="/downloads/{{ $book->download }}" width="100px"></td>
            <td>{{ $book->judul }}</td>
            <td>{{ $book->pengarang }}</td>
            <td>{{ $book->penerbit }}</td>
            <td>{{ $book->tahun_terbit }}</td>
            <td>{{ $book->jumlah_halaman }}</td>
            <td>{{ $book->deskripsi }}</td>
            <td>{{ $book->jml_pengunj }}</td>
            <td>{{ $book->jml_dl }}</td>
            <td>
                <form action="{{ route('destroy',$book->id_bo) }}" method="POST">
    
                    <a class="btn btn-info" href="{{ route('show',$book->id_bo) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('edit',$book->id_bo) }}">Edit</a>
    
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $books->links() !!}

    <!-- Tabel Categories -->
    <!-- <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
            </tr>
        @endforeach
    </table> -->

@endsection