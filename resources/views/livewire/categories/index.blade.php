<div>
    <div class="container">
        <div class="row justify-content-center">

            <div class="row">
                @foreach ($categories as $item)
                    <div class="col-4 mt-5">
                        <a href="{{ route('categories.show', ['category' => $item->id]) }}" class="text-decoration-none">
                            <div class="card w-full h-100">
                                <div class="card-body">
                                    <h2 class="card-title">{{ $item->name }}</h2>
                                    {{-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> --}}
                                    <p class="card-text">{{ $item->description }}</p>
                                    {{-- <a href="#" class="card-link">Card link</a>
                                  <a href="#" class="card-link">Another link</a> --}}
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
