<div class="container">
    <div class="row mt-3 mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('product')}}" class="text-dark">List Jersey</a></li>
                    <li class="breadcrumb-item active" aria-current="{{route('home')}}">Jersey Detail</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row ">
        <div class="col-md-6">
            <div class="card gambar-product">
                <div class="card-body">
                    <img src="{{url('assets/jersey')}}/{{$product->gambar}}" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h2><strong>{{ $product->nama }}</strong></h2>
            <h4>Rp. {{ number_format($product->harga) }} -

                @if($product->is_ready == 1)
                <span class="badge badge-success"> <i class="fas fa-check"></i> Ready Stok</span>
                @else
                <span class="badge badge-danger"> <i class="fas fa-temp"></i> Stok habis</span>
                @endif
            </h4>
            <hr>
            <div class="row">
                <div class="col">
                    <form wire:submit.prevent="masukanKeranjang">
                        <table class="table" style="border-top: hidden;">
                            <tr>
                                <td>Liga</td>
                                <td>:</td>
                                <td><img src="{{url('assets/liga')}}/{{$product->liga->gambar}}" class="img-fluid" width="100"></td>
                            </tr>
                            <tr>
                                <td>Jenis</td>
                                <td>:</td>
                                <td>{{ $product->jenis }}</td>
                            </tr>
                            <tr>
                                <td>Berat</td>
                                <td>:</td>
                                <td>{{ $product->berat }}</td>
                            </tr>
                            <tr>
                                <td>Jumlah</td>
                                <td>:</td>
                                <td>
                                    <input id="jumlah_pesanan" type="number" class="form-control @error('jumlah_pesanan') is-invalid @enderror" wire:model="jumlah_pesanan" value="{{ old('jumlah_pesanan') }}" required autocomplete="jumlah_pesanan" autofocus>

                                    @error('jumlah_pesanan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </td>
                            </tr>
                            @if($jumlah_pesanan > 1)
                            @else
                            <tr>
                                <td colspan="3"><strong>Name Set(isi jika tambah nameset)</strong></td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td>
                                    <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" wire:model="nama" value="{{ old('nama') }}" autocomplete="nama" autofocus>

                                    @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>Nomer</td>
                                <td>:</td>
                                <td>
                                    <input id="nomer" type="number" class="form-control @error('nomer') is-invalid @enderror" wire:model="nomer" value="{{ old('nomer') }}" autocomplete="nomer" autofocus>

                                    @error('nomer')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </td>
                            </tr>
                            @endif
                            <tr>
                                <td colspan="3">
                                    <button class="btn btn-dark btn-block" type="submit" @if($product->is_ready !== 1) disabled @endif> <i class="fas fa-shopping-cart"></i> Tambah Ke Keranjang</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>