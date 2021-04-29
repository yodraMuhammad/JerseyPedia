<?php

namespace App\Http\Livewire;

use App\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ProductDetail extends Component
{
    public $product, $jumlah_pesanan, $nama, $nomer;

    public function mount($id)
    {
        $productDetail = Product::find($id);

        if ($productDetail) {
            $this->product = $productDetail;
        }
    }

    public function masukanKeranjang()
    {
        $this->validate([
            'jumlah_pesanan' => 'required'
        ]);

        //validasi login
        if (!Auth::user()) {
            return redirect()->route('login');
        }

        //menghitung total harga
    }

    public function render()
    {
        return view('livewire.product-detail');
    }
}
