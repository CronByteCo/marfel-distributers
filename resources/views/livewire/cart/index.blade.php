<div>
    <div class="container">
        <main>
            <div class="py-5 text-center">
                {{-- <img class="d-block mx-auto mb-4" src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt=""
                    width="72" height="57"> --}}
                <h2>Checkout form</h2>
                {{-- <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required
                    form group has a validation state that can be triggered by attempting to submit the form without
                    completing it.</p> --}}
            </div>

            <div class="row g-5">
                <div class="col-md-5 col-lg-4 order-md-last">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-primary">Your cart</span>
                        <span class="badge bg-primary rounded-pill">
                            {{ $totalQuantity }}
                        </span>
                    </h4>
                    <ul class="list-group mb-3">
                        @foreach ($content as $id => $item)
                            <li class="list-group-item d-flex justify-content-between lh-sm">
                                <div>
                                    <h6 class="my-0">{{ $item['name'] }}</h6>
                                    <input type="number" step="1" min="1"
                                        wire:model="cartQtys.{{ $item['id'] }}" class="form-control">
                                </div>
                                <span class="text-muted">
                                    {{ (new NumberFormatter('en_US', NumberFormatter::CURRENCY))->formatCurrency($item['price'] * $item['quantity'], 'USD') }}
                                </span>
                                <span class="text-muted">
                                    {{ (new NumberFormatter('en_US', NumberFormatter::CURRENCY))->formatCurrency($item['price'] * $item['quantity'], 'USD') }}
                                </span>
                            </li>
                        @endforeach
                        {{-- <li class="list-group-item d-flex justify-content-between bg-light">
                            <div class="text-success">
                                <h6 class="my-0">Promo code</h6>
                                <small>EXAMPLECODE</small>
                            </div>
                            <span class="text-success">−$5</span>
                        </li> --}}
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (USD)</span>
                            <strong>{{ (new NumberFormatter('en_US', NumberFormatter::CURRENCY))->formatCurrency($total, 'USD') }}</strong>
                        </li>
                    </ul>
                </div>
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Billing address</h4>
                    <form class="needs-validation" novalidate="">
                        <div class="row g-3">

                            <div class="col-12">
                                <label for="email" class="form-label">
                                    Contact Number
                                    {{-- <span class="text-muted">(Optional)</span> --}}
                                </label>
                                <input wire:model="contactNumber" type="text" class="form-control" id="email"
                                    placeholder="">
                                @error('contactNumber')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label for="address" class="form-label">Shipping Address</label>
                                <input wire:model="shippingAddress" type="text" class="form-control" id="address"
                                    placeholder="1234 Main St" required="">
                                @error('shippingAddress')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label for="state" class="form-label">Distributor</label>
                                <select wire:model="distributor" class="form-select" id="state" required="">
                                    <option value="">Choose...</option>
                                    @foreach ($distributors as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                @error('distributor')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <hr class="my-4">

                        <button wire:click="store" class="w-100 btn btn-primary btn-lg" type="button">Continue to
                            checkout</button>
                    </form>
                </div>
            </div>
        </main>
    </div>
</div>
