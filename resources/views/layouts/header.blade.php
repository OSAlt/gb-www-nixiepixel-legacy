<header class="sticky-top bg-dark rounded-bottom">
    <nav class="navbar navbar-expand-md navbar-dark border-transparent rounded-bottom">
        <a data-scroll class="navbar-brand pb-2" href="/">
            <img class="mb-1 mr-1" src="/imgs/nav-logo.png" alt="Logo" />
        </a>

        @component('components.social')
            @slot('id', 'socialWeb')
        @endcomponent

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item"><a data-scroll href="#about" class="nav-link text-light">About</a></li>

                <li class="nav-item"><a data-scroll href="#stats" class="nav-link text-light">Stats</a></li>

                <li class="nav-item"><a data-scroll href="#media" class="nav-link text-light">Media</a></li>

                <li class="nav-item"><a data-scroll href="#geekbeacon" class="nav-link text-light">GeekBeacon</a></li>

                <li class="nav-item"><a data-scroll href="#contact" class="nav-link text-light">Contact</a></li>
            </ul>

            <hr class="xxs-divider border-white">

            @component('components.social')
                @slot('id', 'socialMobile')
            @endcomponent
        </div>
    </nav>
</header>