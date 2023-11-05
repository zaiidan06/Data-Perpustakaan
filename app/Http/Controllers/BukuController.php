<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function home()
    {
        return view('book.home');
        
    }
    public function index()
    {
        $buku = Buku::all();
        return view('book.index', compact('buku'));
    }
    public function create()
    {
        return view('book.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'kode_buku' => 'required|unique:buku',
            'judul' => 'required',
            'penulis' => 'required',
            'harga' => 'required',
        ]);
        Buku::create($request->all());
        return redirect()->route('book.index')
            ->with('success', 'Buku berhasil ditambahkan');
    }
    public function edit($id)
    {
        $book = Buku::find($id);
        return view('book.edit', compact('book'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
        ]);
        $book = Buku::find($id);
        $book->update($request->all());
        return redirect()->route('book.index')
            ->with('success', 'Buku berhasil diperbarui');
    }
    public function destroy($id)
    {
        $book = Buku::find($id);
        $book->delete();
        return redirect()->route('book.index')
            ->with('success', 'Buku berhasil dihapus');
    }

}
