@extends('frontend.master')
@section('title',"Contact Us")
@section('content')
    <style>
        .div-hide{
            display: none;
        }
    </style>
    <section id="contact" class="wow fadeInUp">
        <div class="container">

            <div class="section-header"><br><br>
                <h3>Contact Us</h3>
                <p>Contact Us on the following links</p>
            </div>

            <div class="row contact-info">

                <div class="col-md-4">
                    <div class="contact-address">
                        <i class="ion-ios-location-outline"></i>
                        <h3>Address</h3>
                        <address>DOWN TOWN BUILDING,F3-35</address>
                        <box>Po. Box: 3526 Kigali</box>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-phone">
                        <i class="ion-ios-telephone-outline"></i>
                        <h3>Phone Number</h3>
                        <p><a href="tel:+155895548855">+250783648884/+250788476252</a></p>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="contact-email">
                        <i class="ion-ios-email-outline"></i>
                        <h3>Email</h3>
                        <p><a href="mailto:info@example.com">info@teco.rw/tecorwanda@gmail.com</a></p>
                    </div>
                </div>

            </div>


            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <div class="sendmessage div-hide">
                        <div class="alert alert-success flat text-center">
                            <i class="fa fa-check-circle-o"></i>
                            Your message has been sent. Thank you!
                        </div>
                    </div>

                    <div class="form">

                        {{--<div id="errormessage"></div>--}}
                        <form action="{{ route("message.save") }}"
                              method="post" role="form" class="feedbackForm" autocomplete="off">
                            {{ csrf_field() }}
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input required type="text" name="name" class="form-control" id="name"
                                           placeholder="Your Name" data-rule="minlen:4"
                                           data-msg="Please enter at least 4 chars"/>
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" required class="form-control" name="email" id="email"
                                           placeholder="Your Email" data-rule="email"
                                           data-msg="Please enter a valid email"/>
                                    <div class="validation"></div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <input type="text" class="form-control" name="subject" id="subject"
                                       placeholder="Subject" data-rule="minlen:4"
                                       data-msg="Please enter at least 8 chars of subject"/>
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" required name="message" rows="5" data-rule="required"
                                          data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validation"></div>
                            </div>
                            <div class="text-center">
                                <button type="submit" id="sendBtn" class="btn btn-block btn-primary flat btn-teco">
                                    Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </section><!-- #contact -->


@endsection
@section("scripts")
    <script>
        $('.nav-contact').addClass("menu-active");
        $('.feedbackForm').submit(function (e) {
            e.preventDefault();
            var form = $(this);
            var btn = $('#sendBtn');
            btn.prop("disabled",true);
            $.post(form.attr('action'), form.serialize())
                .done(function (data) {
                    btn.prop("disabled",false);
                    form[0].reset();
                    $('.sendmessage').removeClass('div-hide');
                });
        });
    </script>
@endsection
