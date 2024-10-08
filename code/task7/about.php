<?php
include 'functions/layout_function.php';

$current_page = basename($_SERVER['PHP_SELF']);
$layout = new Layouts("task 7 home",  $current_page);


?>



<!DOCTYPE html>
<html lang="en">

<head>

  <?php $layout->header_links(); ?>
</head>

<body>

  <!-- ============= header ============= -->
<?php $layout->navbar() ;?>

  <!-- ============= about us header ============= -->
  <div class="page-header d-flex align-items-center">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>About</h2>
          <p>
            Odio et unde deleniti. Deserunt numquam exercitationem. Officiis
            quo odio sint voluptas consequatur ut a odio voluptatem. Sit
            dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit
            quaerat ipsum dolorem.
          </p>

          <?php $layout->contact_btn();
          ?>
        </div>
      </div>
    </div>
  </div>

  <!-- ============= about us section ============= -->
  <section id="about" class="about">
    <div class="container">
      <div class="row gy-4 justify-content-center">
        <div class="col-lg-4">
          <img src="assets/img/profile-img.jpg" alt="" class="img-fluid" />
        </div>
        <div class="col-lg-5 content">
          <h2>Professional Photographer from New York</h2>
          <p class="fst-italic py-3">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li>
                  <i class="fa-solid fa-chevron-right"></i>
                  <strong>Birthday:</strong>
                  <span>1 May 1995</span>
                </li>
                <li>
                  <i class="fa-solid fa-chevron-right"></i>
                  <strong>Website:</strong>
                  <span>www.example.com</span>
                </li>
                <li>
                  <i class="fa-solid fa-chevron-right"></i>
                  <strong>Phone:</strong>
                  <span>+123 456 7890</span>
                </li>
                <li>
                  <i class="fa-solid fa-chevron-right"></i>
                  <strong>City:</strong>
                  <span>New York, USA</span>
                </li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li>
                  <i class="fa-solid fa-chevron-right"></i>
                  <strong>Age:</strong>
                  <span>30</span>
                </li>
                <li>
                  <i class="fa-solid fa-chevron-right"></i>
                  <strong>Degree:</strong>
                  <span>Master</span>
                </li>
                <li>
                  <i class="fa-solid fa-chevron-right"></i>
                  <strong>Email:</strong><span>email@example.com</span>
                </li>
                <li>
                  <i class="fa-solid fa-chevron-right"></i>
                  <strong>Freelance:</strong>
                  <span>Available</span>
                </li>
              </ul>
            </div>
          </div>
          <p class="py-3">
            Officiis eligendi itaque labore et dolorum mollitia officiis optio
            vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor
            incidunt officia tempore. Et eius omnis. Cupiditate ut dicta
            maxime officiis quidem quia. Sed et consectetur qui quia
            repellendus itaque neque. Aliquid amet quidem ut quaerat
            cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium
            dolores.
          </p>
          <p class="m-0">
            Recusandae est praesentium consequatur eos voluptatem. Vitae
            dolores aliquam itaque odio nihil. Neque ut neque ut quae
            voluptas. Maxime corporis aut ut ipsum consequatur. Repudiandae
            sunt sequi minus qui et. Doloribus molestiae officiis. Soluta
            eligendi fugiat omnis enim. Numquam alias sint possimus eveniet
            ad. Ratione in earum eum magni totam.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- ============= TESTIMONIAL ============= -->
  <?php $layout->testimonials();  ?>




  <?php
  // <!-- ======= Footer ======= -->
  $layout->footerContent();
  // <!-- ======= script ======= -->

  $layout->script();
  ?>


</body>

</html>