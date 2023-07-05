<div>
    <div class="container">
        <div class="row justify-content-center">

            <div class="row">
                @foreach ($categories as $item)
                    <div class="col-4 mt-5">
                        <a href="{{ route('categories.show', ['category' => $item->id]) }}">
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->name }}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
