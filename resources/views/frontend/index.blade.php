@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

    <section class="home-hero">
        <img src="images/landing-page/home/hero-ellipse.svg" alt="particle" class="hero-ellipse">
        <img src="images/landing-page/home/particle.svg" alt="particle" class="particle-1">
        <img src="images/landing-page/home/particle.svg" alt="particle" class="particle-2">
        <img src="images/landing-page/home/particle.svg" alt="particle" class="particle-3">
        <div class="hero-slider">
            <i class="bi bi-three-dots"></i>
            <div class="splide" id="heroSlider">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <img src="images/landing-page/home/slide-1.png" alt="hero-slide" class="slide-img">
                        </li>
                        <li class="splide__slide">
                            <img src="images/landing-page/home/slide-1.png" alt="hero-slide" class="slide-img">
                        </li>
                        <li class="splide__slide">
                            <img src="images/landing-page/home/slide-1.png" alt="hero-slide" class="slide-img">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="form-block">
            <form action="{{route('frontend.contact_us.store')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
              
                <h2>Best Digital Marketing <br>Agency in UAE</h2>
                <h1>Contact Us Today!</h1>

                @if(session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                @endif

                <div class="row g-4">
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required>
                    </div>
                    <div class="col-md-6">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="col-12">
                        <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact" required>
                    </div>
                    <div class="col-12">
                        <textarea class="form-control" id="message" name="message" rows="3" placeholder="Message" required></textarea>
                    </div>
                    <div class="col-12">
                        <div class="input-wrapper">
                            <div class="captcha-modal hide" id="captchaModal">
                                <i class="bi bi-x-lg" captcha-modal-close></i>
                                <p>Please click "<strong>Continue</strong>" to submit.</p>
                                <div class="g-recaptcha hero-recaptcha" data-callback="checked"
                                        data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR"></div>
                                <button type="submit" class="cta-btn btn-fill">Continue</button>
                            </div>
                            <button type="button" class="cta-btn btn-fill" captcha-modal>Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="cta-section">
            <div class="cta-block short" cta-block>
                <div class="inner-wrapper">
                    <div class="content-block">
                        <div class="title">Mobile</div>
                        <div class="tel">+971503743699</div>
                    </div>
                    <div class="head" cta-block-head>
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                </div>
            </div>
            <div class="cta-block short" cta-block>
                <div class="inner-wrapper">
                    <div class="content-block">
                        <div class="title">WhatsApp</div>
                        <div class="tel">+971503743699</div>
                    </div>
                    <div class="head" cta-block-head>
                        <i class="bi bi-whatsapp"></i>
                    </div>
                </div>
            </div>
            <div class="cta-block long" cta-block>
                <div class="inner-wrapper">
                    <div class="content-block">
                        <div class="form-wrapper">
                            <form action="{{route('frontend.contact_us_sidebar.store')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
              
                                <h2>Ready to start your project ?</h2>

                                @if(session()->has('error_sidebar'))
                                    <div class="alert alert-danger">
                                        {{ session()->get('error_sidebar') }}
                                    </div>
                                @endif

                                <div class="row g-3">
                                    <div class="col-12">
                                        <input type="name" class="form-control" id="name" name="name" placeholder="Full Name" required>
                                    </div>
                                    <div class="col-12">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                    </div>
                                    <div class="col-12">
                                        <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact" required>
                                    </div>
                                    <div class="col-12">
                                        <textarea class="form-control" id="message" name="message" rows="3" placeholder="Message" required></textarea>
                                    </div>
                                    <div class="col-12">
                                        <div class="g-recaptcha" data-callback="checked" data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR"></div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="cta-btn btn-fill">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="head" cta-block-head>
                        <div class="wrapper">
                            <i class="bi bi-chevron-right"></i>
                            <p>Get in Touch</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-services">
        <div class="container">
            <!-- <div class="test-web-block">
                <div class="inner-wrapper">
                    <div class="title">Test your website for FREE</div>
                    <p>Supercharged analysis & monitoring tools</p>
                    <form action="{{route('frontend.website.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                        <div class="input-wrapper">
                            <i class="bi bi-link-45deg"></i>
                            <input type="url" name="url" class="form-control" id="url" placeholder="Enter your website URL" required>
                            <button type="submit" class="cta-btn btn-fill">checkup</button>
                        </div>
                    </form>
                </div>
                <img src="images/landing-page/home/particle.svg" alt="particle">
            </div> -->
            <div class="title">Our Services</div>
            <div class="service-blocks">
                <div class="block">
                    <a href="http://tallentordigital.com/services/marketplace" target="_blank" rel="noopener noreferrer">
                        <img src="images/landing-page/home/dm.png" alt="digital marketing">
                        <div class="card-title">Digital<br>Marketing</div>
                        <p>For any business to thrive in modern digital world, needs an exceptional digital strategy.</p>
                    </a>
                </div>
                <div class="block">
                    <a href="http://tallentordigital.com/services/marketplace" target="_blank" rel="noopener noreferrer">
                        <img src="images/landing-page/home/sd.png" alt="software development">
                        <div class="card-title">Software<br>Development</div>
                        <p>Fully customized web based software to cater specific needs of your business</p>
                    </a>
                </div>
                <div class="block">
                    <a href="http://tallentordigital.com/services/marketplace" target="_blank" rel="noopener noreferrer">
                        <img src="images/landing-page/home/md.png" alt="mobile app development">
                        <div class="card-title">Mobile App<br>Development</div>
                        <p>Custom mobile apps and IoT solutions to interact customers with your services.</p>
                    </a>
                </div>
                <div class="block">
                    <a href="http://tallentordigital.com/services/marketplace" target="_blank" rel="noopener noreferrer">
                        <img src="images/landing-page/home/wad.png" alt="web application development">
                        <div class="card-title">Web Application<br>Development</div>
                        <p>From eCommerce solutions to comprehensive web portals to manage complex business needs</p>
                    </a>
                </div>
                <div class="block">
                    <a href="http://tallentordigital.com/services/marketplace" target="_blank" rel="noopener noreferrer">
                        <img src="images/landing-page/home/ww.png" alt="WhatsApp widget">
                        <div class="card-title">WhatsApp<br>Widget</div>
                        <p>Integrate whatsapp chat to your website with inquiry management system for effective communication</p>
                    </a>
                </div>
                <div class="block">
                    <a href="http://tallentordigital.com/services/marketplace" target="_blank" rel="noopener noreferrer">
                        <img src="images/landing-page/home/woa.png" alt="web optimizer app">
                        <div class="card-title">Web Optimizer<br>App</div>
                        <p>Monitor and enhance the performance of your website with powerful optimizer app</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="home-about">
        <div class="container">
            <h2 class="mx-lg-5">The Tallentor Digital Agency</h2>
            <div class="row">
                <div class="col-lg-5 mx-lg-5">
                    <p>Building a new brand or enhancing the existing customer base of a business is extremely challenging in competitive industries. With creatively crafted and wisely selected strategies any business can thrive in the digital space.</p>
                </div>
                <div class="col-lg-5">
                    <p>Our trained specialists will make sure they understand your business goals precisely and Advise you with the best digital plan, from developing your website or mobile app, Social media marketing, SEO services, and lead generation campaigns with the best possible growth of your business.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="home-contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3>Let's get your project started</h3>
                    <form action="{{route('frontend.partnership.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
              
                        @if(session()->has('error_partnership'))
                            <div class="alert alert-danger">
                                {{ session()->get('error_partnership') }}
                            </div>
                        @endif

                        <div class="row g-3">
                            <div class="col-12">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact" required>
                            </div>
                            <div class="col-12">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Message" required></textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <div class="g-recaptcha" data-callback="checked" data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR"></div>
                            </div>
                            <div class="col-12 mt-5">
                                <button type="submit" class="cta-btn btn-fill w-100">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <img src="images/landing-page/home/contact.png" alt="contact background">
    </section>


@if(\Session::has('success'))
    <div class="modal fade form-submit-modal" id="overlay" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" style="width: 90%; max-width: 600px; margin: 0; top: 50%; left: 50%; transform: translate(-50%, -50%) !important;">
            <div class="modal-content" style="background: linear-gradient(60deg, #E4F2FB, #9ACDFF); border: 2px solid #0C75FF; border-radius: 15px;">
                <div class="modal-body" style="display: flex; flex-direction: row; align-items: center; justify-content: center; gap: 30px;">
                    <i class="bi bi-x-lg" data-bs-dismiss="modal" style="position: absolute; top: -15px; right: -15px; color: #fff; font-size: 16px; background-color: rgba(255, 255, 255, 0.5); width: 35px; height: 35px; border-radius: 50%; display: flex; flex-direction: row; justify-content: center; align-items: center; backdrop-filter: blur(5px);"></i>
                    <div class="image-block">
                        <img src="{{url('images/success.png')}}" alt="modal img">
                    </div>
                    <div class="content-block">
                        <div class="title" style="font-size: 40px; color: #0C75FF; font-weight: 400; margin-bottom: 10px;">Success !</div>
                        <p class="text" style="font-size: 16px; ont-weight 300; margin: 0; color: #333;">Your message submitted successfully.</p>
                        <p class="text" style="font-size: 16px; ont-weight 300; margin: 0; color: #333;">One of our agent will be in touch shortly.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

@if(\Session::has('website_success'))
    <div class="modal fade form-submit-modal" id="overlay" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" style="width: 90%; max-width: 600px; margin: 0; top: 50%; left: 50%; transform: translate(-50%, -50%) !important;">
            <div class="modal-content" style="background: linear-gradient(60deg, #E4F2FB, #9ACDFF); border: 2px solid #0C75FF; border-radius: 15px;">
                <div class="modal-body" style="display: flex; flex-direction: row; align-items: center; justify-content: center; gap: 30px;">
                    <i class="bi bi-x-lg" data-bs-dismiss="modal" style="position: absolute; top: -15px; right: -15px; color: #fff; font-size: 16px; background-color: rgba(255, 255, 255, 0.5); width: 35px; height: 35px; border-radius: 50%; display: flex; flex-direction: row; justify-content: center; align-items: center; backdrop-filter: blur(5px);"></i>
                  
                    <div class="content-block">
                        <div class="title" style="font-size: 40px; color: #0C75FF; font-weight: 400; margin-bottom: 10px;">Success!</div>
                        <p class="text" style="font-size: 16px; ont-weight 300; margin: 0; color: #333;">Successfully Submitted.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

@endsection

@push('after-scripts')

<script>
    $(window).on('load', function () {
        $('#overlay').modal('show');
    });
    $("#close-btn").click(function () {
        $('#overlay').modal('hide');
    });
</script>

    <script>
        const ctaBlock = document.querySelectorAll('[cta-block]')
        const ctaBlockHead = document.querySelectorAll('[cta-block-head]')

        ctaBlockHead.forEach((head) => {
            head.addEventListener('click', () => {
                head.closest('[cta-block]').classList.toggle('active')
            })
        })
    </script>

    <script>
        const navTrigger = document.querySelector('[nav-trigger]')

        navTrigger.addEventListener('click', () => {
            document.querySelector('nav .contacts').classList.toggle('active')
        })
    </script>

    <script>
        var heroSlider = new Splide('#heroSlider', {
            type: 'loop',
            rewind: true,
            arrows: false,
        });

        heroSlider.mount();
    </script>

    <script>
        document.querySelector('[captcha-modal]').addEventListener('click', () => {
            document.getElementById('captchaModal').classList.remove('hide')
            document.getElementById('captchaModal').classList.add('show')
        })

        document.querySelector('[captcha-modal-close]').addEventListener('click', () => {
            document.getElementById('captchaModal').classList.remove('show')
            document.getElementById('captchaModal').classList.add('hide')
        })
    </script>

@endpush
