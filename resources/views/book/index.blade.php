@extends('layouts.main')
@section('content')
    <div class="container">
        <h2>Data Perpustakaan</h2><br>
        <a href="{{ route('book.create') }}" class="btn btn-primary">Tambah Buku</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Kode Buku</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($buku as $book)
                    <tr>
                        <td>{{ $book->kode_buku }}</td>
                        <td>{{ $book->judul }}</td>
                        <td>{{ $book->penulis }}</td>
                        <td>{{ $book->harga }}</td>
                        <td>
                            <a href="{{ route('book.edit', $book->id) }}" class="btn
btn-warning">Edit</a>
                            <form action="{{ route('book.destroy', $book->id) }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return
confirm('Apakah Anda yakin ingin menghapus book ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
