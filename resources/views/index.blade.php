@extends('layout')
@section('title', 'Home')
@section('content')
    <!-- main content start  -->
    <main>
        <!-- first section start  -->
        <section id="section_one">
            <div class="container">
                <div class="row">
                    <p class="fs-18 main_content_title position-relative ps-4">ÜBER UNS</p>
                    <div class="col-md-6">
                        <h1 class="fs-40 content_head">Sie beauftragen uns, wir kümmern uns um alles.</h1>
                        <p class="fs-16 gray_color fw-light content_text">Wir vom Kurt Transport Service – kurz KTS –
                            verstehen uns als Full-Service-Anbieter rund um die Bereiche Umzug, Transport, Entrümpelung
                            bzw. Haushaltsauflösung. Wir begleiten Sie nicht nur vom ersten Beratungsgespräch bis zur
                            Schlüsselübergabe, sondern bieten Ihnen auch bei jedem Schritt Ihres Projektes unsere
                            Unterstützung an. Wir wissen, worauf es bei einem Umzug ankommt und geben Ihnen wertvolle
                            Ratschläge, was Sie beachten und bedenken müssen.</p>
                    </div>
                    <div class="col-md-6 position-relative text-end">
                        <img src="{{ asset('frontend') }}/images/Mask group.png" class="img-fluid" alt="">
                        <div class="card first_card rounded-0 position-absolute">
                            <div class="card-body">
                                <p class=" card_text"><span class="fw-bold">Ihr Ansprechpartner</span> <br> <span
                                        class="fw-light">Ferhat Kurt</span> <span class="">0173 / 156 74 12</span></p>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="row mt-110">
                    <div class="col-md-6  position-relative">
                        <img src="{{ asset('frontend') }}/images/Pexels Photo by Stefan Stefancik.png" class="img-fluid"
                            alt="">
                        <div class="card second_card rounded-0 position-absolute">
                            <div class="card-body">
                                <p class="card_text"><span class="fw-bold">Ihr Ansprechpartner</span> <br> <span
                                        class="fw-light">Ferhat Kurt</span> <span class="">0173 / 156 74 12</span></p>

                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <h1 class="fs-40 content_head">Sie beauftragen uns, wir kümmern uns um alles.</h1>
                        <p class="fs-16 gray_color fw-light content_text">Wir vom Kurt Transport Service – kurz KTS –
                            verstehen uns als Full-Service-Anbieter rund um die Bereiche Umzug, Transport, Entrümpelung
                            bzw. Haushaltsauflösung. Wir begleiten Sie nicht nur vom ersten Beratungsgespräch bis zur
                            Schlüsselübergabe, sondern bieten Ihnen auch bei jedem Schritt Ihres Projektes unsere
                            Unterstützung an. Wir wissen, worauf es bei einem Umzug ankommt und geben Ihnen wertvolle
                            Ratschläge, was Sie beachten und bedenken müssen.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- first section end  -->

        <!-- second section start  -->
        <section id="section_two" class="bg-secondary">
            <div class="container text-light">
                <div class="text-center">
                    <img src="{{ asset('frontend') }}/images/Group 7.png" class="mb-4" alt="">
                    <p class="mx-0 fs-16 second_content_title position-relative ps-md-4">Advisa Finance & Commerce GmbH</p>
                    <h2 class="fs-30 second_content_big_title">LEISTUNGEN & SERVICE</h2>
                </div>
                <div class="row">
                    <div class="col-md-6 my-sm-2 my-md-5" data-aos="fade-zoom-in" data-aos-delay="100"
                        data-aos-duration="400">
                        <div class="bg-transparent border-0 card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4 text-center text-md-end">
                                    <img src="{{ asset('frontend') }}/images/icons/service icon.png"
                                        class="img-fluid mt-2 rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title fs-16 text-center text-md-start fw-bold">E Commerce</h5>
                                        <p class="card-text second_sec_card_text second_sec_card_text fs-14 fw-light">Lorem
                                            Ipsum is simply dummy text of the
                                            printing and typesetting industry. Lorem Ipsum has been the industry's
                                            standard dummy text ever since the 1500s, when an unknown printer took a
                                            galley of type and scrambled it to make a type specimen book.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 my-sm-2 my-md-5"data-aos="fade-zoom-in" data-aos-delay="200"
                        data-aos-duration="400">
                        <div class="bg-transparent border-0 card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4 text-center text-md-end">
                                    <img src="{{ asset('frontend') }}/images/icons/service icon (1).png"
                                        class="img-fluid mt-2 rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title fs-16 text-center text-md-start fw-bold">online shop</h5>
                                        <p class="card-text second_sec_card_text fs-14 fw-light">Lorem Ipsum is simply dummy
                                            text of the
                                            printing and typesetting industry. Lorem Ipsum has been the industry's
                                            standard dummy text ever since the 1500s, when an unknown printer took a
                                            galley of type and scrambled it to make a type specimen book.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 my-sm-2 my-md-5"data-aos="fade-zoom-in" data-aos-delay="300"
                        data-aos-duration="400">
                        <div class="bg-transparent border-0 card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4 text-center text-md-end">
                                    <img src="{{ asset('frontend') }}/images/icons/service icon (2).png"
                                        class="img-fluid mt-2 rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title fs-16 text-center text-md-start fw-bold">various products
                                        </h5>
                                        <p class="card-text second_sec_card_text fs-14 fw-light">Lorem Ipsum is simply dummy
                                            text of the
                                            printing and typesetting industry. Lorem Ipsum has been the industry's
                                            standard dummy text ever since the 1500s, when an unknown printer took a
                                            galley of type and scrambled it to make a type specimen book.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 my-sm-2 my-md-5"data-aos="fade-zoom-in" data-aos-delay="400"
                        data-aos-duration="400">
                        <div class="bg-transparent border-0 card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4 text-center text-md-end">
                                    <img src="{{ asset('frontend') }}/images/icons/service icon (1).png"
                                        class="img-fluid mt-2 rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title fs-16 text-center text-md-start fw-bold">Finance Advisor
                                        </h5>
                                        <p class="card-text second_sec_card_text fs-14 fw-light">Lorem Ipsum is simply dummy
                                            text of the
                                            printing and typesetting industry. Lorem Ipsum has been the industry's
                                            standard dummy text ever since the 1500s, when an unknown printer took a
                                            galley of type and scrambled it to make a type specimen book.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- second section end  -->




        <!-- contact area start  -->
        <section id="contact_area" class="">
            <div class="container text-light">
                <div class="text-center">
                    <h2 class="fs-40 content_head contact_head text-light">Kontaktieren Sie uns</h2>
                    <p class="fs-16 fw-light contact_area_h_text mx-auto">Wir machen es Ihnen leicht. Schicken Sie uns Ihre
                        Anfrage per
                        Telefon oder über das Kontaktformular. Auf Wunsch vereinbaren wir einen kostenlosen
                        Besichtigungstermin vor Ort, anschließend erhalten Sie ein unverbindliches Angebot.</p>
                    <div class="contact_area_number" style="padding-top: 9px;">
                        <i class="fa fa-phone"></i>
                        <span>0173 156 74 12</span>
                    </div>
                </div>

                <div class="row mt-5 input_field">
                    <div class="col-md-6 my-3">
                        <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>
                    <div class="col-md-6 my-3">
                        <input type="text" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="col-md-6 my-3">
                        <input type="text" class="form-control" name="phone" placeholder="Phone">
                    </div>
                    <div class="col-md-6 my-3">
                        <input type="text" class="form-control" name="subject" placeholder="Subject">
                    </div>
                    <div class="col-md-12 my-3">
                        <textarea name="message" placeholder="Write Your Message" id="" class="form-control" rows="10"></textarea>
                    </div>
                    <div class="col-md-12 my-3">
                        <button type="submit" class="btn text-light w-100 send_btn">Send Now</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact area end  -->




    </main>
    <!-- main content end  -->

@endsection
