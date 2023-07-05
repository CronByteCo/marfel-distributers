<div>
    <div class="container">
        <div class="d-flex justify-content-between">
            <h1>Cart</h1>
            <h1>Total: {{ (new NumberFormatter('en_US', NumberFormatter::CURRENCY))->formatCurrency($total, 'USD') }}
            </h1>
        </div>
        <table class="table table-hover mt-3">
            <thead>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </thead>
            <tbody>
                @foreach ($content as $id => $item)
                    <tr>
                        <td>{{ $item['name'] }}</td>
                        <td>
                            {{ (new NumberFormatter('en_US', NumberFormatter::CURRENCY))->formatCurrency($item['price'], 'USD') }}
                        </td>
                        <td>
                            <input type="number" step="1" min="1" wire:model="cartQtys.{{ $item['id'] }}"
                                class="form-control">
                        </td>
                        <td>
                            {{ (new NumberFormatter('en_US', NumberFormatter::CURRENCY))->formatCurrency($item['price'] * $item['quantity'], 'USD') }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" onclick="event.stopPropagation();">
            <li class="px-2">
                <div class="d-inline-flex">
                    <h6>{{ $item['name'] }}</h6>
                    <p>Price:
                        {{ (new NumberFormatter('en_US', NumberFormatter::CURRENCY))->formatCurrency($item['price'], 'USD') }}
                    </p>
                    <p>Quantity:
                        {{ $item['quantity'] }}X
                    </p>
                    <p>Quantity:
                        {{ (new NumberFormatter('en_US', NumberFormatter::CURRENCY))->formatCurrency($item['price'] * $item['quantity'], 'USD') }}
                    </p>
                </div>
            </li>
            <li class="px-2">
                <a type="button" class="btn btn-primary">Check Cart</a>
            </li>
        </ul>
    </div>
</div>
