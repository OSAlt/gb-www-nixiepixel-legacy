<section id="contact" class="col-12 py-5">
    <h1 class="text-white text-center mb-3">Contact Me!</h1>

    <form id="fs-frm" name="department-contact-form" accept-charset="utf-8" action="https://formspree.io/f/xleadqng" method="post">
        <fieldset id="fs-frm-inputs">
            <div class="form-row justify-content-around">
                <div class="mb-4 col-10 col-md-3">
                    <!-- <label class="col-form-label-sm" for="full-name">Full Name</label> -->
                    <!-- <input type="text" name="name" id="full-name" placeholder="Name" required=""> -->
                    <label class="col-form-label-sm" for="name">Name</label>
                    <input class="form-control" type="text" name="name" id="name" placeholder="Name" value="{{old('name')}}" required />
                </div>
                <div class="mb-4 col-10 col-md-3">
                    <!-- <label class="col-form-label-sm" for="email-address">Email Address</label> -->
                    <!-- <input type="email" style="opacity: 0;" name="_replyto" id="email-address" placeholder="email@domain.tld" required=""> -->
                    <!-- <input class="form-control" type="email" name="_replyto" id="email-address" placeholder="user@domain.tld" value="" style="opacity: 0;"> -->
                    <label class="col-form-label-sm" for="email">Email</label>
                    <input class="form-control" type="email" name="_replyto" id="email" placeholder="user@domain.tld" value="{{old('email')}}" required />

                </div>
                <div class="mb-4 col-10 col-md-3">
                    <label class="col-form-label-sm" for="subject">Subject</label>
                    <select class="form-control" name="subject" id="subject">
                    <!-- <label class="col-form-label-sm" for="subject">Subject</label> -->
                    <!-- <select name="subject" class="form-control animated zoomIn" id="subject" required="" value="Select"> -->
                        <option value="Select" disabled="">Select</option>
                        <option value="Say Hello">Say Hello</option>
                        <option value="Speaking Engagements">Speaking Engagements</option>
                        <option value="Business Opportunity">Business Opportunity</option>
                        <option value="Content Collaboration">Content Collaboration</option>
                    </select>
                </div>
            </div>
            <div class="form-row mb-4 justify-content-center">
                <div class="col-10 col-md-11">
                    <!-- <label class="col-form-label-sm" for="message">Message</label> -->
                    <!-- <textarea rows="5" class="form-control animated zoomIn" name="message" id="message" placeholder="Message...." required=""></textarea> -->
                    <label class="col-form-label-sm" for="message">Message</label>
                    <textarea class="form-control" name="message" id="message" rows="3" placeholder="Message...">{{old('message')}}</textarea>

                </div>
            </div>
            <div class="text-center">
                <input type="hidden" name="_subject" id="email-subject" value="NixiePixel Contact Form Submission">
                <input id="submit" type="submit" value="Submit" class="btn btn-lg btn-success mt-3">
            </div>
        </fieldset>
    </form>



</section>