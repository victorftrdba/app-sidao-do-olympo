<div>
    <section class="--hero_image">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 gx-0">
                    <div class="swiper shadow position-relative">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide"
                                style="background:url(https://images2.alphacoders.com/105/thumb-1920-1051513.jpg);background-size:cover;background-position:center;">
                            </div>
                            <div class="swiper-slide"
                                style="background:url(https://images7.alphacoders.com/953/thumb-1920-953296.png);background-size:cover;background-position:center;">
                            </div>
                            <div class="swiper-slide"
                                style="background:url(https://gamepress.com.br/wp-content/uploads/2017/08/the-last.jpg);background-size:cover;background-position:center;">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination position-absolute"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="--posts_main">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col text-center">
                    <h2 class="text-uppercase fw-bold">Últimas postagens</h2>
                    <div class="--posts_swiper mt-5 mb-5">
                        <div class="swiper-wrapper">
                            @forelse($posts as $post)

                            <div
                                class="swiper-slide d-flex align-items-center justify-content-end flex-column" @if ($post->image !== null) style="background:{{ asset('storage/'.$post->image) }}" @endif>
                                {!! $post->iframe !!}
                                @if ($post->image !== null)
                                <h2>{{ $post->title }}</h2>
                                <p>{{ $post->description }}</p>
                                @endif
                        </div>

                            @empty

                        <div class="swiper-slide d-flex align-items-center justify-content-center flex-column">
                            Nenhuma postagem recente encontrada!
                        </div>

                            @endforelse
                        </div>
                        <div class="d-flex justify-content-center align-items-center mt-2">
                            <div class="--posts_swiper-pagination"></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-5 text-center mb-5">
                    <a href="https://www.youtube.com/channel/UCtlxTaU36_RoCnMJcne5GPg" target="_blank" class="rainbow rainbow-1 shadow p-3 text-decoration-none text-reset">CONHEÇA MEU CANAL!</a>
                </div>
            </div>
        </div>
    </section>
</div>
