<section id="media" class="pb-4 pt-5">

    <h1 class="text-white text-center mt-3 mb-4"><a href="/media">Checkout My Media Love!</a></h1>
    <ul class="list-unstyled row justify-content-center justify-content-md-around text-light">
        @foreach($media as $item)
        <li class="container text-center border border-dark p-2 rounded col-10 col-md-3 mb-3 mx-1">
            <a href="{{$item['sourceUri']}}" target="_blank">
                <div class="container d-flex flex-column h-100">
                    <div class="row justify-content-center flex-column">
                        <figure class="figure">
                            <figcaption class="figure-caption text-small">{{$item['text']}}</figcaption>
                        </figure>
                    </div>
                    <div class="row justify-content-around mt-auto">
                        <p><i class="fa fa-heart text-danger"></i> {{$item['socialLove']['likes']}}</p>
                        <p><i class="fa fa-comment text-primary"></i> {{$item['socialLove']['comments']}}</p>
                    </div>
                </div>
            </a>
        </li>
        @endforeach
    </ul>
</section>