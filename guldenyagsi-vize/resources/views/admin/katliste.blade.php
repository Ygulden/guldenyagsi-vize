@extends('layouts.default')

@section('content')

<h1>Kategori Listeleme Sayfası</h1>


<form method="POST" action="{{url('/katekle')}}">
    @csrf
    <div class="form-group">
        <label for="katad">Kategori adı</label>
        <input type="text" name="katad" id="katad" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Oluştur</button>
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
