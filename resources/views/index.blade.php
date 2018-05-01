
@extends('layouts.header')

@section('content')

    <!-- main block -->
    <main class="main-block">

        <!-- about section -->
        <section id="about-section" class="about-section">
            <div class="container">
                <div class="row about-row-one">
                    <div class="col-md-6 about-row-one__text">
                        We are here for you to make your advertising work. For several years we carefully studied the mobile
                        advertising market, learned all its secrets, strengths and weaknesses. We always pay great attention to
                        the subtleties and nuances, and due to this, we can direct the mobile advertising as quickly and
                        efficiently as possible
                    </div>
                </div>
                <div class="row about-row-two">
                    <div class="col-md-6 offset-md-6 about-row-two__text">
                        We provide our customers with a high-quality service based on the latest technologies and in-depth
                        data analytics. The customization and flexibility of our platform will allow you to discover the new
                        highest standards for CPI / CPА / CPM advertising campaigns.
                    </div>
                </div>
                <div class="row about-row-three">
                    <div class="col-md-6 about-row-three__text">
                        The team of our highly motivated specialists of the highest level is ready to immediately help you,
                        answer all the questions that arise and help both advertisers and publishers achieve maximum results
                        in a short time.
                    </div>
                </div>
            </div>
        </section>
        <!-- End about section -->

        <!-- for publishers section -->
        <section id="forpublishers-section" class="forpublishers-section">
            <div class="container">
                <div class="background-text change" id="change">
                    <p><span>FOR</span></br></span>PUBLISHERS</p>

                </div>
                <div class="row forpublishers-row-one">
                    <div class="col-md-6 offset-md-6 forpublishers-row-one__text">
                        The main goal of each publisher is to adjust the flow of their mobile traffic so that they bring
                        the maximum profit. Do you still think that this is easier said than done? You tried a lot of
                        options, but none of the platforms brought you the planned result? Do you think that other publishers
                        are successful because of some magic or a secret recipe? We know this secret and can make it work for you.
                    </div>
                </div>
                <div class="row forpublishers-row-three">
                    <div class="col-md-6 forpublishers-row-three__text">
                        Working with us you choose only among the best offers. We will provide you with the most accurate
                        and up-to-date tracking system in real time and API integration in a few easy steps. Our team of
                        experts is always here to help.
                    </div>
                </div>
            </div>
        </section>
        <!-- End for publishers  section-->

        <!-- for advertisers section -->
        <section id="foradvertisers-section" class="foradvertisers-section">
            <div class="container">
                <div class="row foradvertisers-row-one">
                    <div class="col-md-6 offset-md-6 foradvertisers-row-one__text">
                        To deliver your Ads to every potential customer. To hook
                        on the narrowest niches and the most hard-to-reach
                        audiences. Advertisers face these challenges every day and
                        often they determine the success of the camping. You
                        think that you have tried everything, but the result still does
                        not please you? We are here to come to your aid.
                    </div>
                </div>
                <div class="row foradvertisers-row-three">
                    <div class="col-md-6 foradvertisers-row-three__text">
                        The most accurate targeting. Fine-tuned Ad campaigns. The
                        best anti-fraud technologies. Direct access to the most
                        succesful publishers and high-priority trafic. All these
                        factors will work for you, bring you market leadership and
                        impressively increase your ROI.
                    </div>
                </div>
            </div>
        </section>
        <!-- End for advertisers section -->

    </main>
    <!-- End main block -->


    <footer>
        <section id="contacts-section" class="contacts-section">
            <div class="container">
                <!-- contacts -->
                <div class="row contacts-row-one">
                    <div class="col-md-6 offset-md-6 contacts-row-one__text">
                        Are you a publisher and want to turn your traffic into gold?
                        Are you an advertiser and want your advertising campaign
                        to clearly reach the customers? In both cases, you are in
                        the right place.
                    </div>
                </div>

                <div class="background-text">
                    <p><span>CONTACTS</span></p>
                </div>

                <div class="row contacts-row-two">
                    <div class="col-md-6  contacts-row-two__text">
                        Do not delay, start making profits today! Just fill out the
                        from below and our team will contact you as
                        soon as possible.
                    </div>
                </div>


                <!-- End contacts -->

                <!-- contacts form -->
                <div class="row contacts-row-three">
                    <div class="col-md-6 offset-md-6 contacts-row-three__form">
                        <form  class="contact-form" action="">
                            <input class="contact-form__name" type="text" placeholder="You name"/>
                            <input class="contact-form__email" type="text" placeholder="Email"/>
                            <textarea rows="4" class="contact-form__message" type="text" placeholder="Message"></textarea>
                            <input class="contact-form__submit btn" type="submit" value="submit"/>
                        </form>
                    </div>
                </div>
                <!-- End contacts form -->

            </div>
        </section>
    </footer>

    <div class="popup-form-section" id="modal_form">
        <span class="modal_close" id="modal_close">X</span>
        <img class="popup-form-section__img" src="{{asset('img/logo.png')}}" alt="">
        <h1 class="popup-form-section__title">Fill for get file</h1>
        <form  class="popup-form" id="modal-form" method="POST" action="{{route('subscribersStore')}}">
            {{csrf_field()}}
            <input class="popup-form__name" type="text" name="name" placeholder="You name"/>
            <input class="popup-form__email" type="email" name="email" placeholder="Email"/>
            <input class="popup-form__submit btn" type="submit" value="download"/>
        </form>
    </div>

@endsection
