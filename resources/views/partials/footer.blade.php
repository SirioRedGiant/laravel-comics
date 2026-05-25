<footer>
    <div class="bg-primary text-white py-4 position-relative" style="z-index: 2;">
        <div class="container d-flex justify-content-around align-items-center text-uppercase small flex-wrap gap-3">

            @foreach(config('menus.footer_blue') as $item)
            <x-footer-icon :img="$item['img']" :text="$item['text']" />
            @endforeach

        </div>
    </div>



    <div class="bg-dark text-secondary py-5 hero">
        <div class="container">
            <div class="row w-50 text-start">

                <div class="col-4">
                    <x-footer-list
                        :title="config('menus.footer_hero_lists.dc_comics.title')"
                        :links="config('menus.footer_hero_lists.dc_comics.links')" />
                    <x-footer-list
                        :title="config('menus.footer_hero_lists.shop.title')"
                        :links="config('menus.footer_hero_lists.shop.links')" />
                </div>

                <div class="col-4">
                    <x-footer-list
                        :title="config('menus.footer_hero_lists.dc.title')"
                        :links="config('menus.footer_hero_lists.dc.links')" />
                </div>

                <div class="col-4">
                    <x-footer-list
                        :title="config('menus.footer_hero_lists.sites.title')"
                        :links="config('menus.footer_hero_lists.sites.links')" />
                </div>

            </div>
        </div>
    </div>

    <div class="py-4 text-white position-relative" style="background-color: #303030; z-index: 2;">
        <div class="container d-flex justify-content-between align-items-center">
            <button class="btn btn-outline-primary text-white text-uppercase rounded-0 border-2 fw-bold px-3 py-2">Sign-Up Now!</button>
            <div class="d-flex align-items-center gap-3">
                <span class="text-primary text-uppercase fw-bold m-0 fs-5">Follow Us</span>
                <a href="#"><img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="Facebook"></a>
                <a href="#"><img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="Twitter"></a>
                <a href="#"><img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="YouTube"></a>
                <a href="#"><img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="Pinterest"></a>
                <a href="#"><img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="Periscope"></a>
            </div>
        </div>
    </div>
</footer>