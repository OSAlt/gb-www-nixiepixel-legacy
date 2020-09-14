@extends('layouts.base')
@section('title', 'NixiePixel')
@section('content')

<a data-scroll id="toTop" href="#" class="btn btn-light"><i class="fa fa-angle-double-up"></i></a>
<section id="about-me" class="pb-4 pt-5">
    COMING SOON!
</section>

<!-- 
    @component('components.sections.about')@endcomponent

    @component('components.sections.story.geekbeacon')@endcomponent
    <div id="story" class="rich-text" >

        <h3>Adoption Early Life<h3>
        <h3>Discover TV <h3>
        <h3>Linux/Education</h3>
        <h3>Health </h3>
        <h3>GeekBeacon - Your Guiding Light to All Thing Geek</h3>
                        <h4>GeekBeacon got its spark through <a href="//www.nixiepixel.com">Nixie Pixel</a> - she had been well known in the Linux and Tech world as a Youtuber and media influencer with multiple channels having a reach of well over 400,000. After 10 years in the game, Nixie decided it was high time for a fellowship of Geeks that shared her geeky values and dedication toward social good. In 2017, her vision birthed a community. Fellow creators, geeks and enthusiasts answered the call to learn and support each other. That tiny little flicker of an idea had turned into the blazing light we warmly refer to today as GeekBeacon.</h4>
                        <h4>Since its inception, it has been the goal of GeekBeacon to foster an open source community and a gathering place. Geek Beacon is a lighthouse for geeks guiding people of all walks of life towards a common place, to find comrades in arms that share the same values, interest, and help bridge the divide of the world especially in the current, COVID19 climate. GB has fostered friendships and projects that span to the furthest reaches of the globe. We strive to build a community that understands that the one thing that unites us all is our love of our geekiness over tech, science fiction, art, books, movies, video games, anime, comics, travel... that transcends any culture, economical or physical divides.</h4>
                        <h4>We&#x27;ve developed a microcosm inside our community we kindly call our Squirrel Army. You can read more about Squirrel Army below and the &#x27;Special Brains&#x27; it caters to, but it&#x27;s essentially a place for people to find help and support. Whether it&#x27;s wanting to talk to someone else that struggles daily to overcome the same obstacles, or simply looking for relevant resources to help. A &#x27;Squirrel&#x27; has unique mental health challenges and it is our aim to also provide an inclusive environment for not only neuro-atypical individuals, (ADHD, autism, etc) but also those suffering with mental health challenges like anxiety and depression.</h4>
                        <h4>GeekBeacon also has stepped up to help those lost at sea in this COVID19 storm. Our mission in the current pandemic is to offer support by offering community team building exercises. This is in the form of study groups, Hackathons, Game nights classes and much more. We are a fully open source community with all documentation published and all projects allowing for collaboration on Github.</h4>
                        <h4>You can read our <a href="https://docs.geekbeacon.org/">open docs</a> and come join us on our discord, forum and join one of our many events you can find on our <a href="https://forum.geekbeacon.org/t/geek-beacon-calendar/625">calendar</a>.</h4>
    </div>
    </div>



    </div>
 -->
    @component('components.sections.contact', ['subjects'=>$subjects])@endcomponent

@endsection