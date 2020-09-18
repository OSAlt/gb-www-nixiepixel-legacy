<section id="contact" class="col-12 py-5">
    <h1 class="text-white text-center mb-3">Contact Me!</h1>
    <form method="POST" action="{{ route('contact') }}" class="form text-light">
    @csrf
        <div class="form-row justify-content-around">
            <div class="mb-4 col-10 col-md-3">
                <label class="col-form-label-sm" for="name">Name</label>
                <input class="form-control" type="text" name="name" id="name" placeholder="Name" value="{{old('name')}}" />

                @if ($errors->has('name'))
                    <span class="invalid-feedback d-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
            <div class="mb-4 col-10 col-md-3">
                <label class="col-form-label-sm" for="email">Email</label>
                <input class="form-control" type="email" name="email" id="email" placeholder="user@domain.tld" value="{{old('email')}}" />

                @if ($errors->has('email'))
                    <span class="invalid-feedback d-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="mb-4 col-10 col-md-3">
                <label class="col-form-label-sm" for="subject">Subject</label>
                <select class="form-control" name="subject" id="subject">
                    <option value="">Choose...</option>
                    @if($subjects !== NULL)
                        @foreach($subjects as $subj)
                            <option value="{{$subj}}">{{$subj}}</option>
                        @endforeach
                    @endif
                </select>

                @if ($errors->has('subject'))
                    <span class="invalid-feedback d-block">
                        <strong>{{ $errors->first('subject') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-row mb-4 justify-content-center">
            <div class="col-10 col-md-11">
                <label class="col-form-label-sm" for="message">Message</label>
                <textarea class="form-control" name="message" id="message" rows="3" placeholder="Message...">{{old('message')}}</textarea>

                @if ($errors->has('message'))
                    <span class="invalid-feedback d-block">
                        <strong>{{ $errors->first('message') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="text-center">
        <div class="g-recaptcha row justify-content-center mb-3" data-sitekey="6LfQ1MwZAAAAAIjd6phvW4I79ZHgU355OOwUDJdJ"></div>
        <input id="submit" type="submit" value="Submit" class="btn btn-lg btn-success">
        </div>
    </form>

    {{--<a href="https://www.patreon.com/bePatron?u=193956" data-patreon-widget-type="become-patron-button">Become a Patron!</a><script async src="https://c6.patreon.com/becomePatronButton.bundle.js"></script>--}}

    {{--<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">--}}
        {{--<input type="hidden" name="cmd" value="_donations" />--}}
        {{--<input type="hidden" name="business" value="sendlove@nixiepixel.com" />--}}
        {{--<input type="hidden" name="currency_code" value="USD" />--}}
        {{--<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />--}}
        {{--<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />--}}
    {{--</form>--}}

</section>