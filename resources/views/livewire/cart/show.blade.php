<div>
    <div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle position-relative" href="#" role="button" id="dropdownMenuLink"
            data-bs-toggle="dropdown" aria-expanded="false">
            cart

            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                {{ $totalQuantity }}
            </span>
        </a>

        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" onclick="event.stopPropagation();">
            @foreach ($content as $id => $item)
                <li class="px-2 w-100">
                    <div class="d-flex">
                        <h6 class="text-nowrap px-2">{{ $item['name'] }}</h6>
                        <p class="text-nowrap px-2">Price:
                            {{ (new NumberFormatter('en_US', NumberFormatter::CURRENCY))->formatCurrency($item['price'], 'USD') }}
                        </p>
                        <p class="text-nowrap px-2">Quantity:
                            {{ $item['quantity'] }}X
                        </p>
                        <p class="text-nowrap px-2">Subtotal:
                            {{ (new NumberFormatter('en_US', NumberFormatter::CURRENCY))->formatCurrency($item['price'] * $item['quantity'], 'USD') }}
                        </p>
                    </div>
                </li>
            @endforeach
            <li class="px-2">
                <a type="button" href="{{ route('cart') }}" class="btn btn-primary">Check Cart</a>
            </li>
        </ul>
    </div>
</div>
