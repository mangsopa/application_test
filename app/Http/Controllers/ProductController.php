<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Date;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Http::get('https://dummyjson.com/products')->json([]);


        return view('Product.product', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $orderCode = 'ORD' . date('YmdHis') . mt_rand(1000, 9999);

        $data = [
            'no_pesanan' => $orderCode,
            'nm_supplier' => $request->nm_supplier,
            'tanggal' => $request->tanggal,
            'nm_produk' => $request->nm_produk,
            'total' => $request->total,
        ];
        Pesanan::create($data);

        // Tambahkan pesan sukses atau redirect ke halaman yang sesuai
        return redirect()->to('product')->with('success', 'Product berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $products = Http::get('https://dummyjson.com/products/{id}')->json([]);

        $targetId = $id; // Ganti dengan ID yang Anda cari
        $foundProduct = null;

        foreach ($products['products'] as $product) {
            if ($product['id'] == $targetId) {
                $foundProduct = $product;
                break; // Keluar dari loop setelah data ditemukan
            }
        }

        return view('Product.show',  compact('product'));
    }

    function pesanan(string $id)
    {

        $orderCode = 'ORD' . date('YmdHis') . mt_rand(1000, 9999);

        $currentDate = Date::now();
        $products = Http::get('https://dummyjson.com/carts/{id}')->json([]);

        $targetId = $id; // Ganti dengan ID yang Anda cari
        $foundProduct = null;

        foreach ($products['carts'] as $product) {
            if ($product['id'] == $targetId) {
                $foundProduct = $product;
                break; // Keluar dari loop setelah data ditemukan
            }
        }
        return view('Product.pesanan', compact('product', 'currentDate', 'orderCode'));
    }
}
