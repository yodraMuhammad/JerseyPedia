<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item active">List Jersey</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h2>{{ $title }}</h2>
        </div>
        <div class="col">
            <div class="input-group mb-3">
                <input wire:model="search" type="text" class="form-control" placeholder="Cari..." aria-label="Cari..." aria-describedby="basic-addon1">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="fas fa-search"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <section class="product mt-4">
        <div class="row ">
            @foreach($products as $product)
            <div class="col-md-3 mb-3">
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
        <div class="row">
            <div class="col">
                {{ $products->links() }}
            </div>
        </div>
    </section>
</div>