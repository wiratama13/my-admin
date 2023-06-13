<?php

namespace App\Http\Controllers\Admin;

use CURLFile;
use App\Models\Book;
use Illuminate\Support\str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AdminBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Book::orderBy('tanggal_buat', 'DESC')->get();
        return view('pages.admin.book.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.book.create');
    }

    protected function makeCurlFile($file)
    {
        $output = new CURLFile($file);
        return $output;
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|string|max:255',
            'gambar' => 'image|mimes:png,jpg,jpeg',
            'deskripsi' => 'required|string',
            'file_buku' => 'required|mimes:pdf|max:15000',
            'tanggal_buat' => 'required|string'
        ]);

        if ($request->file('gambar')) {
            $fileImage = $request->file('gambar');
            $fileNameImage = $fileImage->getClientOriginalName();
            $validateData['gambar'] = $request->file('gambar')
                ->storeAs('public/book-item', $fileNameImage);
        }
        if ($request->file('file_buku')) {
            $file = $request->file('file_buku');
            $fileName = $file->getClientOriginalName();
            $validateData['file_buku'] =  $request->file('file_buku')
                ->storeAs('public/file_buku', $fileName);
        }

        // $validateData['tanggal_buat'] = $this->ReadableToProcessable($validateData['tanggal_buat']);
        $validateData['slug'] = Str::slug($request->nama);
        $validateData['deskripsi_singkat'] = Str::limit(strip_tags($request->deskripsi), 120);
        Book::create($validateData);

        return redirect('/admin/book')->with('success', ' majalah telah ditambahkan');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $slug)
    {
        $items = Book::where('slug', $slug)->firstOrFail();

        return view('pages.admin.book.show', [
            'items' => $items
        ]);
    }

    /**
     * View
     */

    public function view(Request $request, $slug)
    {
        $items = Book::where('slug', $slug)->firstOrFail();

        return view('pages.admin.book.show-file', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $items = Book::where('id', $id)->firstOrFail();

        return view('pages.admin.book.edit', [
            'items' => $items
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $rules = [
            'nama' => 'required|string|max:255',
            'gambar' => 'image|mimes:png,jpg,jpeg',
            'deskripsi' => 'string',
            'file_buku' => 'mimes:pdf|max:15000',
            'tanggal_buat' => 'string',
        ];

        $validateData = $request->validate($rules);

        $items = Book::findOrFail($id);

        if ($request->hasFile('gambar')) {

            $file = $request->file('gambar');
            $fileName = $file->getClientOriginalName();
            $validateData['gambar'] =
                $request->file('gambar')->storeAs('public/book-item', $fileName);

            Storage::delete($items->gambar);

            $validateData['slug'] = Str::slug($request->nama);

            $items->update($validateData);
        }
        if ($request->hasFile('file_buku')) {
            $file = $request->file('file_buku');
            $fileName = $file->getClientOriginalName();
            $validateData['file_buku'] =
                $request->file('file_buku')->storeAs('public/file_buku', $fileName);

            Storage::delete($items->file_buku);

            $validateData['slug'] = Str::slug($request->nama);

            $items->update($validateData);
        }

        $validateData['slug'] = Str::slug($request->nama);
        $validateData['deskripsi_singkat'] = Str::limit(strip_tags($request->deskripsi), 120);
        $items->update($validateData);


        return redirect('/admin/book')->with('success', 'event telah diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $items = Book::findOrFail($id);
        if ($items->file_buku) {
            Storage::delete($items->file_buku);
        }
        if ($items->gambar) {
            Storage::delete($items->gambar);
        }
        $items->delete();
        return redirect('/admin/book')->with('success', 'event telah terhapus');
    }
}
