<div>
    <div class="container">
        <h1>{{ $category->name }}</h1>
        <div class="card">
            <h5 class="p-3">{{ $category->name }} List</h5>
            <table class="table table-hover">
                <thead>
                    <th>Thumbmail</th>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($products as $item)
                        <tr>
                            <td>
                                <img src="{{ asset('/images/products\/') . $item->image }}" width="50" height="50"
                                    alt="">
                            </td>
                            <td>
                                {{ $item->code }}
                            </td>
                            <td>
                                {{ $item->name }}
                            </td>
                            <td>
                                {{ (new NumberFormatter('en_US', NumberFormatter::CURRENCY))->formatCurrency($item->price, 'USD') }}
                            </td>
                            <td>
                                {{ $item->stock_in }}
                            </td>
                            <td>
                                <a href="{{ route('products.show', ['product' => $item->id]) }}">Order</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="p-3">
                {{ $products->links() }}
            </div>
        </div>
    </div>
</div>
