<template>
    <Header />
    <!-- ======= Hero Section ======= -->
    <section
        id="hero"
        class="d-flex flex-column justify-content-center align-items-center"
    >
        <div class="hero-container" data-aos="fade-in">
            <h1>Alex Smith</h1>
            <p>
                I'm
                <span
                    class="typed"
                    data-typed-items="Designer, Developer, Freelancer, Photographer"
                ></span>
            </p>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">
        <!-- ======= About Section ======= -->
        <About />
        <!-- End About Section -->

        <!-- ======= Facts Section ======= -->
        <section id="facts" class="facts">
            <div class="container">
                <div class="section-title">
                    <h2>Facts</h2>
                    <p>
                        Magnam dolores commodi suscipit. Necessitatibus eius
                        consequatur ex aliquid fuga eum quidem. Sit sint
                        consectetur velit. Quisquam quos quisquam cupiditate. Et
                        nemo qui impedit suscipit alias ea. Quia fugiat sit in
                        iste officiis commodi quidem hic quas.
                    </p>
                </div>

                <div class="row no-gutters">
                    <div
                        class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch"
                        data-aos="fade-up"
                    >
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <span
                                data-purecounter-start="0"
                                data-purecounter-end="232"
                                data-purecounter-duration="1"
                                class="purecounter"
                            ></span>
                            <p>
                                <strong>Happy Clients</strong> consequuntur quae
                            </p>
                        </div>
                    </div>

                    <div
                        class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch"
                        data-aos="fade-up"
                        data-aos-delay="100"
                    >
                        <div class="count-box">
                            <i class="bi bi-journal-richtext"></i>
                            <span
                                data-purecounter-start="0"
                                data-purecounter-end="521"
                                data-purecounter-duration="1"
                                class="purecounter"
                            ></span>
                            <p>
                                <strong>Projects</strong> adipisci atque cum
                                quia aut
                            </p>
                        </div>
                    </div>

                    <div
                        class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch"
                        data-aos="fade-up"
                        data-aos-delay="200"
                    >
                        <div class="count-box">
                            <i class="bi bi-headset"></i>
                            <span
                                data-purecounter-start="0"
                                data-purecounter-end="1453"
                                data-purecounter-duration="1"
                                class="purecounter"
                            ></span>
                            <p>
                                <strong>Hours Of Support</strong> aut commodi
                                quaerat
                            </p>
                        </div>
                    </div>

                    <div
                        class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch"
                        data-aos="fade-up"
                        data-aos-delay="300"
                    >
                        <div class="count-box">
                            <i class="bi bi-people"></i>
                            <span
                                data-purecounter-start="0"
                                data-purecounter-end="32"
                                data-purecounter-duration="1"
                                class="purecounter"
                            ></span>
                            <p>
                                <strong>Hard Workers</strong> rerum asperiores
                                dolor
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Facts Section -->

        <!-- ======= Skills Section ======= -->
        <Skills />
        <!-- End Skills Section -->

        <!-- ======= Resume Section ======= -->
        <Resume />
        <!-- End Resume Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio section-bg">
            <div class="container">
                <div class="section-title">
                    <h2>Portfolio</h2>
                    <p>
                        Magnam dolores commodi suscipit. Necessitatibus eius
                        consequatur ex aliquid fuga eum quidem. Sit sint
                        consectetur velit. Quisquam quos quisquam cupiditate. Et
                        nemo qui impedit suscipit alias ea. Quia fugiat sit in
                        iste officiis commodi quidem hic quas.
                    </p>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-card">Card</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div>

                <div
                    class="row portfolio-container"
                    data-aos="fade-up"
                    data-aos-delay="100"
                >
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <!-- <img
                                src="{{ asset('assets/img/portfolio/portfolio-1.jpg') }}"
                                class="img-fluid"
                                alt=""
                            /> -->
                            <div class="portfolio-links">
                                <a
                                    href="assets/img/portfolio/portfolio-1.jpg"
                                    data-gallery="portfolioGallery"
                                    class="portfolio-lightbox"
                                    title="App 1"
                                    ><i class="bx bx-plus"></i
                                ></a>
                                <a
                                    href="portfolio-details.html"
                                    title="More Details"
                                    ><i class="bx bx-link"></i
                                ></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <!-- <img
                                src="assets/img/portfolio/portfolio-2.jpg"
                                class="img-fluid"
                                alt=""
                            /> -->
                            <div class="portfolio-links">
                                <a
                                    href="assets/img/portfolio/portfolio-2.jpg"
                                    data-gallery="portfolioGallery"
                                    class="portfolio-lightbox"
                                    title="Web 3"
                                    ><i class="bx bx-plus"></i
                                ></a>
                                <a
                                    href="portfolio-details.html"
                                    title="More Details"
                                    ><i class="bx bx-link"></i
                                ></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <!-- <img
                                src="assets/img/portfolio/portfolio-3.jpg"
                                class="img-fluid"
                                alt=""
                            /> -->
                            <div class="portfolio-links">
                                <a
                                    href="assets/img/portfolio/portfolio-3.jpg"
                                    data-gallery="portfolioGallery"
                                    class="portfolio-lightbox"
                                    title="App 2"
                                    ><i class="bx bx-plus"></i
                                ></a>
                                <a
                                    href="portfolio-details.html"
                                    title="More Details"
                                    ><i class="bx bx-link"></i
                                ></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <!-- <img
                                src="assets/img/portfolio/portfolio-4.jpg"
                                class="img-fluid"
                                alt=""
                            /> -->
                            <div class="portfolio-links">
                                <a
                                    href="assets/img/portfolio/portfolio-4.jpg"
                                    data-gallery="portfolioGallery"
                                    class="portfolio-lightbox"
                                    title="Card 2"
                                    ><i class="bx bx-plus"></i
                                ></a>
                                <a
                                    href="portfolio-details.html"
                                    title="More Details"
                                    ><i class="bx bx-link"></i
                                ></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <!-- <img
                                src="assets/img/portfolio/portfolio-5.jpg"
                                class="img-fluid"
                                alt=""
                            /> -->
                            <div class="portfolio-links">
                                <a
                                    href="assets/img/portfolio/portfolio-5.jpg"
                                    data-gallery="portfolioGallery"
                                    class="portfolio-lightbox"
                                    title="Web 2"
                                    ><i class="bx bx-plus"></i
                                ></a>
                                <a
                                    href="portfolio-details.html"
                                    title="More Details"
                                    ><i class="bx bx-link"></i
                                ></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <!-- <img
                                src="assets/img/portfolio/portfolio-6.jpg"
                                class="img-fluid"
                                alt=""
                            /> -->
                            <div class="portfolio-links">
                                <a
                                    href="assets/img/portfolio/portfolio-6.jpg"
                                    data-gallery="portfolioGallery"
                                    class="portfolio-lightbox"
                                    title="App 3"
                                    ><i class="bx bx-plus"></i
                                ></a>
                                <a
                                    href="portfolio-details.html"
                                    title="More Details"
                                    ><i class="bx bx-link"></i
                                ></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <!-- <img
                                src="assets/img/portfolio/portfolio-7.jpg"
                                class="img-fluid"
                                alt=""
                            /> -->
                            <div class="portfolio-links">
                                <a
                                    href="assets/img/portfolio/portfolio-7.jpg"
                                    data-gallery="portfolioGallery"
                                    class="portfolio-lightbox"
                                    title="Card 1"
                                    ><i class="bx bx-plus"></i
                                ></a>
                                <a
                                    href="portfolio-details.html"
                                    title="More Details"
                                    ><i class="bx bx-link"></i
                                ></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <!-- <img
                                :src="assets/img/portfolio/portfolio-8.jpg"
                                class="img-fluid"
                                alt=""
                            /> -->
                            <div class="portfolio-links">
                                <a
                                    href="assets/img/portfolio/portfolio-8.jpg"
                                    data-gallery="portfolioGallery"
                                    class="portfolio-lightbox"
                                    title="Card 3"
                                    ><i class="bx bx-plus"></i
                                ></a>
                                <a
                                    href="portfolio-details.html"
                                    title="More Details"
                                    ><i class="bx bx-link"></i
                                ></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <!-- <img
                                src="assets/img/portfolio/portfolio-9.jpg"
                                class="img-fluid"
                                alt=""
                            /> -->
                            <div class="portfolio-links">
                                <a
                                    href="assets/img/portfolio/portfolio-9.jpg"
                                    data-gallery="portfolioGallery"
                                    class="portfolio-lightbox"
                                    title="Web 3"
                                    ><i class="bx bx-plus"></i
                                ></a>
                                <a
                                    href="portfolio-details.html"
                                    title="More Details"
                                    ><i class="bx bx-link"></i
                                ></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Portfolio Section -->

        <!-- ======= Services Section ======= -->
        <Service />
        <!-- End Services Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container">
                <div class="section-title">
                    <h2>Testimonials</h2>
                    <p>
                        Magnam dolores commodi suscipit. Necessitatibus eius
                        consequatur ex aliquid fuga eum quidem. Sit sint
                        consectetur velit. Quisquam quos quisquam cupiditate. Et
                        nemo qui impedit suscipit alias ea. Quia fugiat sit in
                        iste officiis commodi quidem hic quas.
                    </p>
                </div>

                <div
                    class="testimonials-slider swiper"
                    data-aos="fade-up"
                    data-aos-delay="100"
                >
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-item" data-aos="fade-up">
                                <p>
                                    <i
                                        class="bx bxs-quote-alt-left quote-icon-left"
                                    ></i>
                                    Proin iaculis purus consequat sem cure digni
                                    ssim donec porttitora entum suscipit
                                    rhoncus. Accusantium quam, ultricies eget
                                    id, aliquam eget nibh et. Maecen aliquam,
                                    risus at semper.
                                    <i
                                        class="bx bxs-quote-alt-right quote-icon-right"
                                    ></i>
                                </p>
                                <!-- <img
                                    src="assets/img/testimonials/testimonials-1.jpg"
                                    class="testimonial-img"
                                    alt=""
                                /> -->
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div
                                class="testimonial-item"
                                data-aos="fade-up"
                                data-aos-delay="100"
                            >
                                <p>
                                    <i
                                        class="bx bxs-quote-alt-left quote-icon-left"
                                    ></i>
                                    Export tempor illum tamen malis malis eram
                                    quae irure esse labore quem cillum quid
                                    cillum eram malis quorum velit fore eram
                                    velit sunt aliqua noster fugiat irure amet
                                    legam anim culpa.
                                    <i
                                        class="bx bxs-quote-alt-right quote-icon-right"
                                    ></i>
                                </p>
                                <!-- <img
                                    src="assets/img/testimonials/testimonials-2.jpg"
                                    class="testimonial-img"
                                    alt=""
                                /> -->
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div
                                class="testimonial-item"
                                data-aos="fade-up"
                                data-aos-delay="200"
                            >
                                <p>
                                    <i
                                        class="bx bxs-quote-alt-left quote-icon-left"
                                    ></i>
                                    Enim nisi quem export duis labore cillum
                                    quae magna enim sint quorum nulla quem
                                    veniam duis minim tempor labore quem eram
                                    duis noster aute amet eram fore quis sint
                                    minim.
                                    <i
                                        class="bx bxs-quote-alt-right quote-icon-right"
                                    ></i>
                                </p>
                                <!-- <img
                                    src="assets/img/testimonials/testimonials-3.jpg"
                                    class="testimonial-img"
                                    alt=""
                                /> -->
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div
                                class="testimonial-item"
                                data-aos="fade-up"
                                data-aos-delay="300"
                            >
                                <p>
                                    <i
                                        class="bx bxs-quote-alt-left quote-icon-left"
                                    ></i>
                                    Fugiat enim eram quae cillum dolore dolor
                                    amet nulla culpa multos export minim fugiat
                                    minim velit minim dolor enim duis veniam
                                    ipsum anim magna sunt elit fore quem dolore
                                    labore illum veniam.
                                    <i
                                        class="bx bxs-quote-alt-right quote-icon-right"
                                    ></i>
                                </p>
                                <!-- <img
                                    src="assets/img/testimonials/testimonials-4.jpg"
                                    class="testimonial-img"
                                    alt=""
                                /> -->
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                            </div>
                        </div>
                        <!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div
                                class="testimonial-item"
                                data-aos="fade-up"
                                data-aos-delay="400"
                            >
                                <p>
                                    <i
                                        class="bx bxs-quote-alt-left quote-icon-left"
                                    ></i>
                                    Quis quorum aliqua sint quem legam fore sunt
                                    eram irure aliqua veniam tempor noster
                                    veniam enim culpa labore duis sunt culpa
                                    nulla illum cillum fugiat legam esse veniam
                                    culpa fore nisi cillum quid.
                                    <i
                                        class="bx bxs-quote-alt-right quote-icon-right"
                                    ></i>
                                </p>
                                <!-- <img
                                    src="assets/img/testimonials/testimonials-5.jpg"
                                    class="testimonial-img"
                                    alt=""
                                /> -->
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                            </div>
                        </div>
                        <!-- End testimonial item -->
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <!-- End Testimonials Section -->

        <!-- ======= Contact Section ======= -->
        <Contact />
        <!-- End Contact Section -->
    </main>
    <!-- End #main -->
    <Footer />
</template>
<script>
import Footer from "../common/Footer.vue";
import Header from "../common/Header.vue";
import About from "../components/About.vue";
import Contact from "../components/Contact.vue";
import Service from "../components/Service.vue";
import Skills from "../components/Skills.vue";
import Resume from "../components/Resume.vue";
export default {
    components: {
        Footer,
        Header,
        About,
        Contact,
        Service,
        Skills,
        Resume,
    },
};
</script>
