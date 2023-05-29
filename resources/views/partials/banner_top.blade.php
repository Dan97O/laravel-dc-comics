<div class="banner_top">
    <div class="jumbotron">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="">
    </div>
    <div class="container">
        <button class="btn-outline-primary p-1">CURRENT SERIES</button>
        <div class="row d-flex justify-content-center mt-3">
            <div class="col-12 d-flex flex-wrap justify-content-evenly g-2">
                @foreach ($comics as $comic)
                    <div class="my_card me-3" v-for="img in comics">
                        <a href="{{ route('comic') }}">
                            <img src="{{ $comic['thumb'] }}" alt="">
                        </a>
                        <div class="text">
                            <span>
                                {{ $comic['series'] }}
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class=" d-flex justify-content-center my-3">
                <a href="{{ route('comic') }}" class="btn-outline-primary">LOAD MORE</a>
            </div>
        </div>
    </div>
</div>
