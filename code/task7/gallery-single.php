<?php
include 'functions/layout_function.php';
$current_page = basename($_SERVER['PHP_SELF']);
$layout = new Layouts("task 7 gallery single",$current_page);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php $layout->header_links(); ?>
</head>

<body>

    <!-- ============= header ============= -->
    <?php $layout->navbar();  ?>



    <!-- ============= gallery-single  header ============= -->
    <div class="page-header d-flex align-items-center">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2>Gallery Single</h2>
                    <p>
                        Odio et unde deleniti. Deserunt numquam exercitationem. Officiis
                        quo odio sint voluptas consequatur ut a odio voluptatem. Sit
                        dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit
                        quaerat ipsum dolorem.m 
                        
                    </p>
                    <?php $layout->contact_btn(); ?>
                </div>
            </div>
        </div>
    </div>


    <!-- ============= gallery  section ============= -->

    <section id="gallery-single" class="gallery-single">
        <div class="container">
            <div class="position-relative h-100">
                <div class="gallery-single-slide portfolio-details-slider swiper">
                    <div class="swiper-wrapper align-items-center">

                        <div class="swiper-slide">
                            <img src="assets/img/gallery/gallery-8.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/img/gallery/gallery-9.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/img/gallery/gallery-10.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/img/gallery/gallery-11.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/img/gallery/gallery-12.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/img/gallery/gallery-13.jpg" alt="">
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

            </div>

            <div class="row justify-content-between gy-4 mt-4">

                <div class="col-lg-8">
                    <div class="portfolio-description">
                        <h2>This is an example of portfolio detail</h2>
                        <p>
                            Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore
                            quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim.
                            Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi
                            nulla at esse enim cum deserunt eius.
                        </p>
                        <p>
                            Amet consequatur qui dolore veniam voluptatem voluptatem sit. Non aspernatur atque natus ut
                            cum nam et. Praesentium error dolores rerum minus sequi quia veritatis eum. Eos et doloribus
                            doloremque nesciunt molestiae laboriosam.
                        </p>

                        <div class="testimonial-item">
                            <p>
                                <i class="fa-solid fa-quote-left"></i>
                                Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                legam anim culpa.
                                <i class="fa-solid fa-quote-right"></i>
                            </p>
                            <div>
                                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                            </div>
                        </div>

                        <p>
                            Impedit ipsum quae et aliquid doloribus et voluptatem quasi. Perspiciatis occaecati earum et
                            magnam animi. Quibusdam non qui ea vitae suscipit vitae sunt. Repudiandae incidunt cumque
                            minus deserunt assumenda tempore. Delectus voluptas necessitatibus est.

                        <p>
                            Sunt voluptatum sapiente facilis quo odio aut ipsum repellat debitis. Molestiae et autem
                            libero. Explicabo et quod necessitatibus similique quis dolor eum. Numquam eaque
                            praesentium rem et qui nesciunt.
                        </p>

                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="portfolio-info">
                        <h3>Project information</h3>
                        <ul>
                            <li><strong>Category</strong> <span>Nature Photography</span></li>
                            <li><strong>Client</strong> <span>ASU Company</span></li>
                            <li><strong>Project date</strong> <span>01 March, 2022</span></li>
                            <li><strong>Project URL</strong> <a href="#">www.example.com</a></li>
                            <li><a href="#" class="btn-visit align-self-start">Visit Website</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <?php


    // <!-- ======= Footer Content ======= --> //
    $layout->footerContent();
    // <!--  ======= script ======= --> //
    $layout->script();

    ?>

</body>

</html>