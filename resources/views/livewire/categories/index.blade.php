<div>
    <div class="container">
        <div class="row justify-content-center">

            <div class="row">
                @foreach ($categories as $item)
                    <div class="col-4 mt-5">
                        <a href="{{ route('categories.show', ['category' => $item->id]) }}" class="text-decoration-none">
                            <div class="card shadow-sm border-0 bg-white w-full h-100 py-2">
                                <div class="card-body d-flex flex-column align-items-center">
                                    <div class="rounded-circle d-flex justify-content-center align-items-center"
                                        style="width:100px;height:100px;background-color: #d7eef5" alt="Avatar">
                                        <img src="{{ asset('images/categories\/' . $item->id . '.png') }}" alt="Cinque Terre">
                                    </div>
                                    <h2 class="card-title mt-4" style="color:#4baace ">{{ $item->name }}</h2>
                                    {{-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> --}}
                                    {{-- <p class="card-text">{{ $item->description }}</p> --}}
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
