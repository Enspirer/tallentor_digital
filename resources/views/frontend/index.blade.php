@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')

    <section class="home-hero">
        <img src="images/landing-page/home/hero-ellipse.svg" alt="" class="hero-ellipse">
        <img src="images/landing-page/home/particle.svg" alt="" class="particle-1">
        <img src="images/landing-page/home/particle.svg" alt="" class="particle-2">
        <img src="images/landing-page/home/particle.svg" alt="" class="particle-3">
        <div class="hero-slider">
            <i class="bi bi-three-dots"></i>
            <div class="splide" id="heroSlider">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <img src="images/landing-page/home/slide-1.png" alt="" class="slide-img">
                        </li>
                        <li class="splide__slide">
                            <img src="images/landing-page/home/slide-1.png" alt="" class="slide-img">
                        </li>
                        <li class="splide__slide">
                            <img src="images/landing-page/home/slide-1.png" alt="" class="slide-img">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="form-block">
            <form action="">
                <h2>Best Digital Marketing <br>Agency in UAE</h2>
                <h1>Contact Us Today!</h1>
                <div class="row g-4">
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
                    </div>
                    <div class="col-md-6">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="col-12">
                        <div class="g-recaptcha hero-recaptcha" data-callback="checked"
                            data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR"></div>
                    </div>
                    <div class="col-12">
                        <div class="input-wrapper">
                            <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact">
                            <button type="submit" class="cta-btn btn-fill">Submit</button>
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
                        <div class="tel">+971 583017648</div>
                    </div>
                    <div class="head">
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                </div>
            </div>
            <div class="cta-block short" cta-block>
                <div class="inner-wrapper">
                    <div class="content-block">
                        <div class="title">WhatsApp</div>
                        <div class="tel">+971 583017648</div>
                    </div>
                    <div class="head">
                        <i class="bi bi-whatsapp"></i>
                    </div>
                </div>
            </div>
            <div class="cta-block long" cta-block>
                <div class="inner-wrapper">
                    <div class="content-block">
                        <div class="form-wrapper">
                            <form action="">
                                <h2>Ready to start your project ?</h2>
                                <div class="row g-3">
                                    <div class="col-12">
                                        <input type="name" class="form-control" id="name" name="name"
                                            placeholder="Full Name">
                                    </div>
                                    <div class="col-12">
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Email">
                                    </div>
                                    <div class="col-12">
                                        <input type="text" class="form-control" id="contact" name="contact"
                                            placeholder="Contact">
                                    </div>
                                    <div class="col-12">
                                        <div class="g-recaptcha" data-callback="checked"
                                            data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR"></div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="cta-btn btn-fill">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="head">
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
            <div class="test-web-block">
                <div class="inner-wrapper">
                    <div class="title">Test your website for FREE</div>
                    <p>Supercharged analysis & monitoring tools</p>
                    <div class="input-wrapper">
                        <i class="bi bi-link-45deg"></i>
                        <input type="text" name="test_web" class="form-control" id="test_web"
                            placeholder="Enter your website URL">
                        <button type="submit" class="cta-btn btn-fill">checkup</button>
                    </div>
                </div>
                <img src="images/landing-page/home/particle.svg" alt="">
            </div>
            <div class="title">Our Services</div>
            <div class="service-blocks">
                <div class="block">
                    <img src="images/landing-page/home/dm.png" alt="">
                    <div class="card-title">Digital<br>Marketing</div>
                    <p>Experienced software developers to work individually</p>
                </div>
                <div class="block">
                    <img src="images/landing-page/home/sd.png" alt="">
                    <div class="card-title">Software<br>Development</div>
                    <p>Experienced software developers to work individually</p>
                </div>
                <div class="block">
                    <img src="images/landing-page/home/md.png" alt="">
                    <div class="card-title">Mobile App<br>Development</div>
                    <p>Experienced software developers to work individually</p>
                </div>
                <div class="block">
                    <img src="images/landing-page/home/wad.png" alt="">
                    <div class="card-title">Web Application<br>Development</div>
                    <p>Experienced software developers to work individually</p>
                </div>
                <div class="block">
                    <img src="images/landing-page/home/ww.png" alt="">
                    <div class="card-title">WhatsApp<br>Widget</div>
                    <p>Experienced software developers to work individually</p>
                </div>
                <div class="block">
                    <img src="images/landing-page/home/woa.png" alt="">
                    <div class="card-title">Web Optimizer<br>App</div>
                    <p>Experienced software developers to work individually</p>
                </div>
            </div>
        </div>
    </section>

    <section class="home-about">
        <div class="container">
            <h2 class="mx-lg-5">About the Company</h2>
            <div class="row">
                <div class="col-lg-5 mx-lg-5">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book. It has survived not only five centuries, but also
                        the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the
                        1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                        with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
                <div class="col-lg-5">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                </div>
            </div>
        </div>
    </section>

    <section class="home-contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3>Discuss a Partnership</h3>
                    <form action="">
                        <div class="row g-3">
                            <div class="col-12">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control" id="contact" name="contact"
                                    placeholder="Contact">
                            </div>
                            <div class="col-12">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control" id="message" name="message" rows="4"
                                    placeholder="Message"></textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <div class="g-recaptcha" data-callback="checked"
                                    data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR"></div>
                            </div>
                            <div class="col-12 mt-5">
                                <button type="submit" class="cta-btn btn-fill w-100">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <img src="images/landing-page/home/contact.png" alt="">
    </section>

@endsection

@push('after-scripts')

    <script>
        const ctaBlock = document.querySelectorAll('[cta-block]')

        ctaBlock.forEach((block) => {
            block.addEventListener('click', () => {
                ctaBlock.forEach((block) => {
                    block.classList.remove('active')
                })

                block.classList.add('active')

                setTimeout(() => {
                    block.classList.remove('active')
                }, 2500)
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

@endpush
