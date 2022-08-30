<x-yummy title="Mycomputer">
    <section id="chefs" class="chefs section-bg">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="row gy-3">

                @foreach ($cards as $card)
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch aos-init aos-animate"
                         data-aos="fade-up"
                         data-aos-delay="100">
                        <div class="chef-member">
                            <div class="member-img">
                                <img
                                    src="{{asset("storage/cards_cover/$card->idcards.jpg")}}"
                                    class="img-fluid align" alt="">
                                <div class="social">

                                </div>
                            </div>
                            <div class="member-info">
                                <h4>{{$card->nome}}</h4>
                                <span>
                                @for ($i = 0; $i < $card->avaliacao; $i++)
                                        <i class=" bi bi-hdd"></i>
                                    @endfor</span>
                                <p>{{$card->comentario}}</p>
                            </div>
                        </div>
                    </div><!-- End Chefs Member -->
                @endforeach
            </div>
        </div>
    </section>
</x-yummy>
