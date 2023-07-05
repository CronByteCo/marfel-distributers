<div>
    <div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle position-relative" href="#" role="button" id="dropdownMenuLink"
            data-bs-toggle="dropdown" aria-expanded="false">
            cart

            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                {{ $totalQuantity }}
            </span>
        </a>

        <ul class="dropdown-menu px-2" onclick="event.stopPropagation();">
            <ul class="list-group">
                @foreach ($content as $id => $item)
                    <li class="list-group-item  d-flex align-items-center justify-content-between lh-sm">
                        <div class="px-2 text-nowrap">
                            <h6 class="my-0">{{ $item['name'] }}</h6>
                            <span>{{ $item['quantity'] }}x</span>
                        </div>
                        <span class="px-5 text-muted">
                            <p class="mb-0">Price</p>
                            {{ (new NumberFormatter('en_US', NumberFormatter::CURRENCY))->formatCurrency($item['price'], 'USD') }}
                        </span>
                        <span class="px-5 text-muted">
                            <p class="mb-0">Subtotal</p>
                            {{ (new NumberFormatter('en_US', NumberFormatter::CURRENCY))->formatCurrency($item['price'] * $item['quantity'], 'USD') }}
                        </span>

                        <a type="button" wire:click="removeFromCart({{ $item['id'] }})" class="px-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-trash" viewBox="0 0 16 16">
                                <path
                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z" />
                                <path
                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z" />
                            </svg>
                        </a>
                    </li>
                @endforeach
                <li class="list-group-item d-flex justify-content-between">
                    <span>Total (USD)</span>
                    <strong>{{ (new NumberFormatter('en_US', NumberFormatter::CURRENCY))->formatCurrency($total, 'USD') }}</strong>
                </li>
            </ul>
            <a type="button" href="{{ route('cart') }}" class="btn btn-primary mt-3 d-md-block">Checkout</a>
        </ul>
    </div>
</div>
