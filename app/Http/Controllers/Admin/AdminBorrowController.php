<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Magazine;
use App\Models\AdminBorrow;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Book;

class AdminborrowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $borrows = AdminBorrow::with(['users','books'])->latest()->get();

        return view('pages.admin.borrow.index', [
            'borrows' => $borrows
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $books = Book::all();
        $borrows = AdminBorrow::all();
        return view('pages.admin.borrow.create',[
            'users' => $users,
            'books' => $books,
            'borrows' => $borrows
        ]);
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
            'magazine_id'       => 'required|integer|exists:books,id',
            'users_id'          => 'required|integer|exists:users,id',
            'tanggal_pinjam'    => 'required|date',
            'tanggal_kembali'   => 'required|date',
            'status_pinjaman'   => 'required|string',
            'cek'               => 'required|string',
            'denda'             => 'required|numeric',
        ]);

        AdminBorrow::create($validateData);
        return redirect('/admin/borrow')->with('success', 'event telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $borrow = AdminBorrow::where('id', $id)->firstOrFail();
        $users = User::all();
        $books = Book::all();

        return view('pages.admin.borrow.show', [
            'borrow' => $borrow,
            'users' => $users,
            'books' => $books,
        ]);
    }

    public function view(Request $request, $slug)
    {
        $items = Book::where('slug', $slug)->firstOrFail();
        $borrows = AdminBorrow::all();
        return view('pages.admin.borrow.show-file', [
            'items' => $items,
            'borrows' => $borrows
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
        $borrow = AdminBorrow::where('id', $id)->firstOrFail();
        $users = User::all();
        $books = Book::all();
        
        return view('pages.admin.borrow.edit', [
            'borrow' => $borrow,
            'users' => $users,
            'books' => $books,
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
            'magazine_id'       => 'required|integer|exists:books,id',
            'users_id'          => 'required|integer|exists:users,id',
            'tanggal_pinjam'    => 'required|date',
            'tanggal_kembali'   => 'required|date',
            'status_pinjaman'   => 'required|string',
            'cek'               => 'required|string',
            'denda'             => 'required|numeric',
        ];

        $borrow = AdminBorrow::findOrFail($id);
        $validateData = $request->validate($rules);
        
        $borrow->update($validateData);

        return redirect('/admin/borrow')->with('success', 'event telah diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $borrow = AdminBorrow::findOrFail($id);
        $borrow->delete();
        return redirect('/admin/borrow')->with('success', 'event telah terhapus');
    }
}
