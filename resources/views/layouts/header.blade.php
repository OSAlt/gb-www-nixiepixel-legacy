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

                <li class="nav-item"><a href="/" class="nav-link text-light">Home</a></li>
                {{-- Check if route is the homepage --}}
                @if(Request::path() == '/')


                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      About
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="/#about">About Me</a>
                      <a class="dropdown-item" href="/nixie">Read My Story</a>
                    </div>
                </div>


                <li class="nav-item"><a data-scroll href="#stats" class="nav-link text-light">Stats</a></li>

                <li class="nav-item"><a data-scroll href="#media" class="nav-link text-light">Instagram Feed</a></li>

                <li class="nav-item"><a data-scroll href="#geekbeacon" class="nav-link text-light">GeekBeacon</a></li>

                <li class="nav-item"><a data-scroll href="/#contact" class="nav-link text-light">Contact</a></li>


                {{-- If Route isn't the homepage, then change hrefs and add a home option --}}
                @else


                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      About
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="/#about">About Me</a>
                      <a class="dropdown-item" href="/nixie">Biogrpahy</a>
                    </div>
                </div>


                    <li class="nav-item"><a data-scroll href="/#stats" class="nav-link text-light">Stats</a></li>

                    <li class="nav-item"><a data-scroll href="/#media" class="nav-link text-light">Instagram Feed</a></li>

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