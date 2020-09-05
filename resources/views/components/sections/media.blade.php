<section id="media" class="pb-4 pt-5">
    <h1 class="text-white text-center mt-3 mb-4">This Is Some Of My Media!</h1>
    <ul class="list-unstyled row justify-content-center justify-content-md-around text-light">
        @if($media !== NULL)
            @foreach($media as $item)
                    <li class="container text-center border border-dark p-2 rounded col-10 col-md-3 mb-3 mx-1">
                        <a href="{{$item['sourceUri']}}" target="_blank">
                            <div class="container d-flex flex-column h-100">
                            <!-- Place <div> tag where you want the feed to appear -->
                            <div id="curator-feed-default-feed-layout"><a href="https://curator.io" target="_blank" class="crt-logo crt-tag">Powered by Curator.io</a></div>
                            <!-- The Javascript can be moved to the end of the html page before the </body> tag -->
                            <script type="text/javascript">
                            /* curator-feed-default-feed-layout */
                            (function(){
                            var i, e, d = document, s = "script";i = d.createElement("script");i.async = 1;
                            i.src = "https://cdn.curator.io/published/665652c2-9507-4961-9372-637c95380d14.js";
                            e = d.getElementsByTagName(s)[0];e.parentNode.insertBefore(i, e);
                            })();
                            </script>
                                <!-- <div class="row justify-content-center flex-column"> -->
                                    <!-- <figure class="figure">  -->
                                        <!-- <img class="figure-img img-fluid img-thumbnail" src="{{$item['mediaPreview']}}" height="200" width="200"> -->
                                        <!-- <figcaption class="figure-caption text-small">{{$item['text']}}</figcaption> -->
                                    <!-- </figure>  -->
                                <!-- </div> -->
                                <!-- <div class="row justify-content-around mt-auto"> -->
                                    <!-- <p><i class="fa fa-heart text-danger"></i> {{$item['socialLove']['likes']}}</p> -->
                                    <!-- <p><i class="fa fa-comment text-primary"></i> {{$item['socialLove']['comments']}}</p> -->
                                <!-- </div> -->

                            </div>
                        </a>
                    </li>
            @endforeach
        @else
            <li class="list-inline-item text-center border border-dark p-2 rounded col-4 col-md-2 mb-3 mb-md-0">
                <a href="https://www.instagram.com/nixietron/" target="_blank">
                    <figure class="figure">
                        <img class="figure-img img-fluid" src="https://yt3.ggpht.com/-mCl3nWaUSkI/AAAAAAAAAAI/AAAAAAAAAAA/89YkMofRo2s/s900-c-k-no/photo.jpg" width="200" height="200">
                        <figcaption class="figure-caption text-center text-small">Unable To Load Posts. Click To View Nixie's Instagram</figcaption>
                    </figure>
                </a>
            </li>
        @endif
    </ul>
</section>