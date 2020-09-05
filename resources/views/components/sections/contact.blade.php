<section id="contact" class="col-12 py-5">
    <h1 class="text-white text-center mb-3">Contact Me!</h1>
    <form method="get" action="{{ route('contact') }}" class="form text-light">
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
            <button class="btn btn-lg btn-success">Send Email</button>
        </div>
    </form>


</section>