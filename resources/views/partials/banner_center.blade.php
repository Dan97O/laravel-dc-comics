<div class="banner_center">
    <div class="container">
        <nav class="nav d-flex justify-content-around">
            <a class="nav-link d-flex" href="#" v-for="item in banner">
                <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="digital-comics" />
                <div class="align-self-center">"DIGITAL COMICS"</div>
            </a>
            <a class="nav-link d-flex" href="#" v-for="item in banner">
                <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="digital-comics" />
                <div class="align-self-center">"DC MERCHANANDISE"</div>
            </a>
            <a class="nav-link d-flex" href="#" v-for="item in banner">
                <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="digital-comics" />
                <div class="align-self-center">"SUBSCRIPTION"</div>
            </a>
            <a class="nav-link d-flex" href="#" v-for="item in banner">
                <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="digital-comics" />
                <div class="align-self-center">"COMIC SHOP LOCATOR"</div>
            </a>
            <a class="nav-link d-flex" href="#" v-for="item in banner">
                <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="digital-comics" />
                <div class="align-self-center">"DC POWER VISA"</div>
            </a>
        </nav>
    </div>
</div>
