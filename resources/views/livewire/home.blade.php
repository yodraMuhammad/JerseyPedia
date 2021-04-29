<div class="container">

    <!-- banner -->
    <div class="banner">
        <img src="{{url('assets/slider/slider1.png')}}" alt="">
    </div>

    <!-- pilih liga -->
    <section class="pilih-liga">
        <h3 class="mt-3">
            <strong>Pilih Liga</strong>
        </h3>
        <div class="row ">
            @foreach($ligas as $liga)
            <div class="col">
                <a href="{{ route('products.liga', $liga->id)}}">
                    <div class="card shadow">
                        <div class="card-body text-center">
                            <img src="{{url('assets/liga')}}/{{$liga->gambar}}" class="img-fluid">
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </section>

    <!-- pilih Best Product -->
    <section class="product mt-4">
        <h3 class="mt-3">
            <strong>Best Products</strong>
            <a href="{{ route('product')}}" class="btn float-right"><i class="fas fa-eye">Lihat Semua</i></a>
        </h3>
        <div class="row ">
            @foreach($products as $product)
            <div class="col mb-3">
                <div class="card shadow">
                    <div class="card-body text-center">
                        <img src="{{url('assets/jersey')}}/{{$product->gambar}}" class="img-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <h5><strong>{{$product->nama}}</strong></h5>
                                <p><strong>Rp.{{number_format($product->harga)}}</strong></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <a href="{{ route('products.detail', $product->id)}}" class="btn btn-dark btn-block">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</div>