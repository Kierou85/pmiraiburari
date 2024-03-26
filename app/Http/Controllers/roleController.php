<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;

class roleController extends Controller
{
    /**
     * Menampilkan list buku
     */
    public function admin()
    {
        $books = Book::latest()->paginate(5);
        $categories = Category::all(); // Ambil semua kategori

        return view('admin', compact('books', 'categories'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function pengguna()
    {
        $books = Book::all();

        return view('pengguna', compact('books'));
        // return view('pengguna');
    }


    public function peraturanorganisasi()
    {
        // Ambil kategori "Peraturan Organisasi"
        $category = Category::where('name', 'Peraturan Organisasi')->first();

        // Pastikan kategori "Peraturan Organisasi" ditemukan
        if ($category) {
            // Ambil ID kategori "Peraturan Organisasi"
            $categoryId = $category->id_cat;

            // Ambil semua buku dengan ID kategori yang sesuai
            $books = Book::where('id_cat', $categoryId)->get();

            return view('peraturanorganisasi', compact('books'));
        } else {
            // Jika kategori "Peraturan Organisasi" tidak ditemukan, kembalikan pesan atau tindakan yang sesuai
            return "Kategori 'Peraturan Organisasi' tidak ditemukan.";
        }
    }

    public function juklakjuknis()
    {
         // Ambil kategori "Juklak-Juknis"
         $category = Category::where('name', 'Juklak-Juknis')->first();

         // Pastikan kategori "Juklak-Juknis" ditemukan
         if ($category) {
             // Ambil ID kategori "Juklak-Juknis"
             $categoryId = $category->id_cat;
 
             // Ambil semua Juklak-Juknis dengan ID kategori yang sesuai
             $books = Book::where('id_cat', $categoryId)->get();
 
             return view('juklakjuknis', compact('books'));
         } else {
             // Jika kategori "Juklak-Juknis" tidak ditemukan, kembalikan pesan atau tindakan yang sesuai
             return "Kategori 'Juklak-Juknis' tidak ditemukan.";
         }
    }

    public function pedoman()
    {
        // Ambil kategori "Pedoman"
        $category = Category::where('name', 'Pedoman')->first();

        // Pastikan kategori "Pedoman" ditemukan
        if ($category) {
            // Ambil ID kategori "Pedoman"
            $categoryId = $category->id_cat;

            // Ambil semua buku dengan ID kategori yang sesuai
            $books = Book::where('id_cat', $categoryId)->get();

            return view('pedoman', compact('books'));
        } else {
            // Jika kategori "Pedoman" tidak ditemukan, kembalikan pesan atau tindakan yang sesuai
            return "Kategori 'Pedoman' tidak ditemukan.";
        }
    }

    public function buku()
    {
        // Ambil kategori "Buku"
        $category = Category::where('name', 'Buku')->first();

        // Pastikan kategori "Buku" ditemukan
        if ($category) {
            // Ambil ID kategori "Buku"
            $categoryId = $category->id_cat;

            // Ambil semua buku dengan ID kategori yang sesuai
            $books = Book::where('id_cat', $categoryId)->get();

            return view('buku', compact('books'));
        } else {
            // Jika kategori "Buku" tidak ditemukan, kembalikan pesan atau tindakan yang sesuai
            return "Kategori 'Buku' tidak ditemukan.";
        }
    }


    public function materimateri()
    {
        // Ambil kategori "Materi-Materi"
        $category = Category::where('name', 'Materi-Materi')->first();

        // Pastikan kategori "Materi-Materi" ditemukan
        if ($category) {
            // Ambil ID kategori "Buku"
            $categoryId = $category->id_cat;

            // Ambil semua Materi-Materi dengan ID kategori yang sesuai
            $books = Book::where('id_cat', $categoryId)->get();

            return view('materimateri', compact('books'));
        } else {
            // Jika kategori "Materi-Materi" tidak ditemukan, kembalikan pesan atau tindakan yang sesuai
            return "Kategori 'Materi-Materi' tidak ditemukan.";
        }
    }

    public function poster()
    {
        // Ambil kategori "Materi-Materi"
        $category = Category::where('name', 'Materi-Materi')->first();

        // Pastikan kategori "Materi-Materi" ditemukan
        if ($category) {
            // Ambil ID kategori "Buku"
            $categoryId = $category->id_cat;

            // Ambil semua Materi-Materi dengan ID kategori yang sesuai
            $books = Book::where('id_cat', $categoryId)->get();

            return view('materimateri', compact('books'));
        } else {
            // Jika kategori "Materi-Materi" tidak ditemukan, kembalikan pesan atau tindakan yang sesuai
            return "Kategori 'Materi-Materi' tidak ditemukan.";
        }
    }

    public function leaflet()
    {
        // Ambil kategori "Leaflet"
        $category = Category::where('name', 'Leaflet')->first();

        // Pastikan kategori "Leaflet" ditemukan
        if ($category) {
            // Ambil ID kategori "Leaflet"
            $categoryId = $category->id_cat;

            // Ambil semua Leaflet dengan ID kategori yang sesuai
            $books = Book::where('id_cat', $categoryId)->get();

            return view('leaflet', compact('books'));
        } else {
            // Jika kategori "Leaflet" tidak ditemukan, kembalikan pesan atau tindakan yang sesuai
            return "Kategori 'Leaflet' tidak ditemukan.";
        }
    }

    public function suratkeputusan()
    {
        // Ambil kategori "Surat Keputusan"
        $category = Category::where('name', 'Surat Keputusan')->first();

        // Pastikan kategori "Surat Keputusan" ditemukan
        if ($category) {
            // Ambil ID kategori "Surat Keputusan"
            $categoryId = $category->id_cat;

            // Ambil semua Surat Keputusan dengan ID kategori yang sesuai
            $books = Book::where('id_cat', $categoryId)->get();

            return view('suratkeputusan', compact('books'));
        } else {
            // Jika kategori "Surat Keputusan" tidak ditemukan, kembalikan pesan atau tindakan yang sesuai
            return "Kategori 'Surat Keputusan' tidak ditemukan.";
        }
    }

    public function undangundang()
    {
        // Ambil kategori "Undang-Undang"
        $category = Category::where('name', 'Undang-Undang')->first();

        // Pastikan kategori "Undang-Undang" ditemukan
        if ($category) {
            // Ambil ID kategori "Undang-Undang"
            $categoryId = $category->id_cat;

            // Ambil semua Surat Keputusan dengan ID kategori yang sesuai
            $books = Book::where('id_cat', $categoryId)->get();

            return view('undangundang', compact('books'));
        } else {
            // Jika kategori "Undang-Undang" tidak ditemukan, kembalikan pesan atau tindakan yang sesuai
            return "Kategori 'Undang-Undang' tidak ditemukan.";
        }
    }

    public function adart()
    {
       // Ambil kategori "AD/ART"
       $category = Category::where('name', 'AD/ART')->first();

       // Pastikan kategori "AD/ART" ditemukan
       if ($category) {
           // Ambil ID kategori "AD/ART"
           $categoryId = $category->id_cat;

           // Ambil semua AD/ART dengan ID kategori yang sesuai
           $books = Book::where('id_cat', $categoryId)->get();

           return view('adart', compact('books'));
       } else {
           // Jika kategori "AD/ART" tidak ditemukan, kembalikan pesan atau tindakan yang sesuai
           return "Kategori 'AD/ART' tidak ditemukan.";
       }
    }


    public function article($id_bo)
    {
        $book = Book::findOrFail($id_bo);

        // Tambahkan jumlah pengunjung
        $book->increment('jml_pengunj');

        return view('article', compact('book'));
    }

    public function download($id_bo)
    {
        $book = Book::findOrFail($id_bo);

        // Tambahkan jumlah unduhan
        $book->increment('jml_dl');

        // Kembalikan berkas untuk diunduh
        return response()->download(public_path('downloads/' . $book->download));
    }


    /**
     * Menampilkan form untuk dibuat buku baru
     */
    public function create()
    {
        $categories = \App\Models\Category::all(); // Mengambil semua kategori dari database

        return view('create', compact('categories'));
    }

    /**
     * Simpan buku yang sudah dibuat ke form
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'jumlah_halaman' => 'required',
            'deskripsi' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'download' => 'required|mimes:pdf',
            'id_cat' => 'required' // tambahkan validasi untuk memastikan kategori dipilih
        ]);

        $input = $request->all();

        // Set nilai default untuk jml_pengunj dan jml_dl
        $input['jml_pengunj'] = 0;
        $input['jml_dl'] = 0;

        if ($image = $request->file('image')) {
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalName();
            $image->move(public_path('images'), $profileImage);
            $input['image'] = $profileImage;
        }

        if ($download = $request->file('download')) {
            $profileDownload = date('YmdHis') . "." . $download->getClientOriginalName();
            $download->move(public_path('downloads'), $profileDownload);
            $input['download'] = $profileDownload;
        }

        // Tambahkan id_cat ke dalam input
        $input['id_cat'] = $request->id_cat;

        // Simpan buku baru dengan kategori yang dipilih
        Book::create($input);

        return redirect()->route('admin')
            ->with('success', 'Product created successfully.');
    }



    /**
     * Menampilkan detail buku dan menambah jumlah unduhan
     */
    public function show($id_bo)
    {
        $book = Book::findOrFail($id_bo);
        // Tambahkan jumlah unduhan
        $book->increment('jml_dl');
        // Simpan perubahan
        $book->save();
        return view('article', compact('book'));
    }
    

    /**
     * Menampilkan form untuk bisa diedit
     */
    public function edit($id_bo)
    {
        $book = Book::findOrFail($id_bo);
        $categories = \App\Models\Category::all(); // Mengambil semua kategori dari database

        return view('edit', compact('book', 'categories'));
    }


    /**
     * Memperbarui buku yang sudah ada di form
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'judul' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required',
            'jumlah_halaman' => 'required',
            'deskripsi' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Ubah menjadi opsional
            'download' => 'mimes:pdf' // Ubah menjadi opsional
        ]);

        $input = $request->all();

        // Cek apakah ada file gambar yang diunggah
        if ($image = $request->file('image')) {
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalName();
            $image->move(public_path('images'), $profileImage);
            $input['image'] = $profileImage;
        }

        // Cek apakah ada file download yang diunggah
        if ($download = $request->file('download')) {
            $profileDownload = date('YmdHis') . "." . $download->getClientOriginalName();
            $download->move(public_path('downloads'), $profileDownload);
            $input['download'] = $profileDownload;
        }

        // Perbarui buku yang sudah ada
        $book->update($input);

        return redirect()->route('admin')
            ->with('success', 'Product updated successfully.');
    }

    /**
     * Menghapus buku yg sudah ada diform.
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('admin')
            ->with('success', 'Product deleted successfully');
    }
}
