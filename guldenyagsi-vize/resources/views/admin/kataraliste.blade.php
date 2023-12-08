@extends('layouts.default')

@section('content')

<h1>Kategori Arama ve Görüntüleme</h1>

<div class="text-right mb-3">
    <a href="/kateklefrm" class="btn btn-primary">Kategori Ekle</a>
</div>

<form method="POST" action="{{url('/katara')}}">
    @csrf
    <div class="form-group">
        <label for="katad">Kategori Ad</label>
        <input type="text" name="katad" id="katad" class="form-control">
    </div>
    <div class="form-group">
        <label for="id">Id</label>
        <textarea name="id" id="id" class="form-control" ></textarea>
    </div>
   
    <button type="submit" class="btn btn-primary">ARA</button>
</form>

<table class="table">
    <thead>
        <tr>
            <th>Ad</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($kategoriler as $kategori)
            <tr>
                <td>{{ $kategori->katad }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection