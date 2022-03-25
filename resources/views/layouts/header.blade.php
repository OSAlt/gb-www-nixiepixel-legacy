<header class="sticky-top bg-dark rounded-bottom">
    <nav class="navbar navbar-expand-md navbar-dark border-transparent rounded-bottom">

        @component('components.social')
        @slot('id', 'socialWeb')
        @endcomponent

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ml-auto">

                {{-- Check if route is the homepage --}}
                @if(Request::path() == '/')

                <li class="nav-item"><a href="#" class="nav-link text-light">Home</a></li>

                <li class="nav-item"><a data-scroll href="#about" class="nav-link text-light">About</a></li>

                <li class="nav-item"><a data-scroll href="#stats" class="nav-link text-light">Stats</a></li>

                <li class="nav-item"><a data-scroll href="/media" class="nav-link text-light">Media</a></li>

                <li class="nav-item"><a data-scroll href="#geekbeacon" class="nav-link text-light">GeekBeacon</a></li>

                <li class="nav-item"><a data-scroll href="/#contact" class="nav-link text-light">Contact</a></li>


                {{-- If Route isn't the homepage, then change hrefs and add a home option --}}
                @else

                <li class="nav-item"><a href="/#" class="nav-link text-light">Home</a></li>

                <li class="nav-item"><a data-scroll href="/#about" class="nav-link text-light">About</a></li>


                <li class="nav-item"><a data-scroll href="/#stats" class="nav-link text-light">Stats</a></li>

                <li class="nav-item"><a data-scroll href="/media" class="nav-link text-light">Media</a></li>

                <li class="nav-item"><a data-scroll href="/#geekbeacon" class="nav-link text-light">GeekBeacon</a></li>

                <li class="nav-item"><a data-scroll href="/#contact" class="nav-link text-light">Contact</a></li>

                @endif
            </ul>

            <hr class="xxs-divider border-white">

            @component('components.social')
            @slot('id', 'socialMobile')
            @endcomponent
        </div>
    </nav>
</header>