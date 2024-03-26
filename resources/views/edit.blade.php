@extends('app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Book</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('admin') }}"> Back</a>
            </div>
        </div>
    </div>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> sepertinya ada yang tidak beres <br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('update',$book->id_bo) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kategori:</strong>
                    <select name="category_id" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{ $category->id_cat }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Judul:</strong>
                    <input type="text" name="judul" value="{{ $book->judul }}" class="form-control" placeholder="Judul">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pengarang:</strong>
                    <input type="text" name="pengarang" value="{{ $book->pengarang }}" class="form-control" placeholder="Pengarang">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Penerbit:</strong>
                    <input type="text" name="penerbit" value="{{ $book->penerbit }}" class="form-control" placeholder="Penerbit">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tahun Terbit:</strong>
                    <input type="number" name="tahun_terbit" value="{{ $book->tahun_terbit }}" class="form-control" placeholder="Tahun Terbit">
                </div>
            </div>            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jumlah Halaman:</strong>
                    <input type="number" name="jumlah_halaman" value="{{ $book->jumlah_halaman }}" class="form-control" placeholder="Jumlah Halaman">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Deskripsi:</strong>
                    <textarea class="form-control" style="height:150px" name="deskripsi" placeholder="Deskripsi">{{ $book->deskripsi }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="image" class="form-control" placeholder="image">
                    <img src="/images/{{ $book->image }}" width="300px">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Download:</strong>
                    <input type="file" name="download" class="form-control" placeholder="download">
                    <img src="/downloads/{{ $book->download }}" width="300px">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    
    </form>
@endsection