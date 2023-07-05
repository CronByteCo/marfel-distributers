<div>
    <div class="container">
        <h1>{{ $product->code }}</h1>

        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card w-100">
                    <img src="{{ asset('images/products\/') . $product->image }}" class="card-img-top" alt="...">
                </div>
            </div>
            <div class="col-6">
                <div class="card w-100 h-100 p-5" style="width: 18rem;">
                    <h1>{{ $product->name }}</h1>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Product Details</label>
                            <textarea readonly class="form-control" id="exampleFormControlTextarea1" rows="10">{{ $product->description }}
                            </textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Quantity</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1"
                                value="{{ $product->stock_in }}">
                        </div>

                        <div class="d-flex justify-content-between">
                            <a type="button"
                                href="{{ route('categories.show', ['category' => $product->category_id]) }}"
                                class="btn btn-primary">Back</a>
                            <a type="button" class="btn btn-primary">Place Order</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
