<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shahadat's Portfolio</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
          <a class="navbar-brand" href="index.html"><img width="100px" height="80px" src="app.co.png" alt="logo.png"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#banner">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#expertise">Expertise</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#banner_about">About Me</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#protfolio">Portfolio</a>
              </li>
            </ul>
          </div>
          <a class="collapse navbar-collapse flex-grow-0" href="#contact"><button type="button" class="btn btn-outline-primary">Contact Me</button></a>
        </div>
    </nav>
    <section id="banner">
      <div class="container d-flex align-items-center">
        <div class="row">
            <div class="col-lg-6 col-12 banner_1st">
              <p class="fw-semibold name">Hey, I am Shahadat</p>
              <h1>I create <span style="color: #5E3BEE;">product design</span> and brand experience</h1>
              <p class="description">As a passionate Full Stack Web Developer, I specialize in crafting dynamic and responsive web applications. Proficient in HTML, CSS, and JavaScript, I bring designs to life using React.js for seamless front-end experiences. My backend expertise is anchored in PHP, with a strong focus on Laravel, where I excel at building robust and scalable applications.</p>
              <button class="btn btn-outline-primary">Get In Touch</button>
            </div>
            <div class="col-lg-6 col-10 anima">
              <img src="Yellow Gradient Facebook Profile Picture.png" alt="" width="504px">
            </div>
        </div>
      </div>
    </section>
    <section id="expertise">
      <div class="container">
        <p class="fw-semibold mini_title">My Skills</p>
        <h2 class="fw-bold sub_title">My Expertise</h2>
        <div class="expts_section slider">
          <div class="item_expts">
            <div>
              <img src="programming.png" alt="">
            </div>
            <h4>Laravel</h4>
            <p>Expert in Laravel, building dynamic web applications with clean, secure, and scalable code.</p>
          </div>
          <div class="item_expts">
            <div>
              <img src="physics.png" alt="">
            </div>
            <h4>React.js</h4>
            <p>Skilled in React.js for developing fast, interactive, and responsive user interfaces.</p>
          </div>
          <div class="item_expts">
            <div>
              <img src="mysql.png" alt="">
            </div>
            <h4>MySQL</h4>
            <p>Proficient in MySQL, designing and optimizing databases for efficient data management and integration.</p>
          </div>
          <div class="item_expts">
            <div>
              <img src="php.png" alt="">
            </div>
            <h4>PHP</h4>
            <p>Experienced in PHP, creating dynamic server-side functionalities for enhanced web application performance.</p>
          </div>
          <div class="item_expts">
            <div>
              <img src="js.png" alt="">
            </div>
            <h4>JavaScript</h4>
            <p>Skilled in JavaScript, building dynamic web applications with strong core knowledge and modern tools.</p>
          </div>
        </div>              
      </div>
    </section>
    <section id="banner_about" style="background-color: transparent;">
      <div class="container d-flex align-items-center">
        <div class="row align-items-center banner2">
          <div class="col-lg-6 col-12">
            <img src="56fc4ab4-60aa-4f91-a9b3-aef0ad631927.jpg" alt="">
          </div>
          <div class="col-lg-6 col-12 banner_1st">
            <p class="fw-semibold name">About</p>
            <h2>Full-Stack Web Developer</h2>
            <p class="description">I have successfully completed numerous e-commerce projects, overseeing the entire development process from concept to deployment. With a certified full-stack development background, I am committed to delivering high-quality solutions that meet client needs and enhance user experiences.</p>
          </div>
        </div>
      </div>
    </section>
    <section id="protfolio">
      <div class="container">
        <p class="fw-semibold" style="font-size: 22px;">Recent Projects</p>
        <h2 class="fw-bold sub_title">My Portfolio</h2>
        <div class="port_section">
          <div class="prot_item">
            <img src="the_mart.png" alt="the_mart">
            <h4>The Mart</h4>
            <p>A powerful e-commerce backend solution, ensuring seamless transactions, user management, and robust data security for online shoppers.</p>
            <a href="">View in Github <span style="margin-left: 16px;"><svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4.00004 1.66675H17.3334V15.0001M17.3334 1.66675L1.33337 17.6667L17.3334 1.66675Z" stroke="black" stroke-width="2.66667" stroke-linecap="round" stroke-linejoin="round"/>
              </svg></span></a>
          </div>
          <div class="prot_item">
            <img src="appora.png" alt="appora">
            <h4>Appora</h4>
            <p>Built a responsive app showcase website with sleek UI/UX and a robust back-end user management dashboard.</p>
            <a href="">View in Github <span style="margin-left: 16px;"><svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4.00004 1.66675H17.3334V15.0001M17.3334 1.66675L1.33337 17.6667L17.3334 1.66675Z" stroke="black" stroke-width="2.66667" stroke-linecap="round" stroke-linejoin="round"/>
              </svg></span></a>
          </div>
          <div class="prot_item">
            <img src="orebi_project.png" alt="orebi_project">
            <h4>Orebi</h4>
            <p>This is a React.js e-commerce website built with Firebase, Redux, and Tailwind CSS, featuring a modern UI and seamless functionality.</p>
            <a href="">View in Github <span style="margin-left: 16px;"><svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4.00004 1.66675H17.3334V15.0001M17.3334 1.66675L1.33337 17.6667L17.3334 1.66675Z" stroke="black" stroke-width="2.66667" stroke-linecap="round" stroke-linejoin="round"/>
              </svg></span></a>
          </div>          
        </div>
      </div>
    </section>
    <section id="contact">
      <strong>Get In Touch</strong>
      <h2>Contact Me</h2>
      <?php if (isset($_SESSION['success'])){ ?>
        <div class="alert alert-success text-start mx-auto my-3" role="alert" style="max-width: 50%;">
          <?= $_SESSION['success'] ?>
        </div>
      <?php } elseif (isset($_SESSION['error'])){ ?>        
        <div class="alert alert-danger text-start mx-auto my-3" role="alert" style="max-width: 50%;">
          <?= $_SESSION['error'] ?>
        </div>
      <?php } else{ ?>
        <p>Have a question or want to collaborate? Feel free to reach out, and I’ll get back to you as soon as possible!</p>
      <?php } unset($_SESSION['success']) ?>
      <form action="send_email.php" method="post">
        <div class="row">
          <div class="col-lg-6">
            <label for="" class="form-label">First Name</label>
            <input type="text" class="form-control" name="fname">
          </div>
          <div class="col-lg-6">
            <label for="" class="form-label">Last Name</label>
            <input type="text" class="form-control" name="lname">
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <label for="" class="form-label">Email</label>
            <input type="email" class="form-control" name="email">
          </div>
          <div class="col-lg-6">
            <label for="" class="form-label">Phone Number</label>
            <input type="number" class="form-control" name="number">
          </div>
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Choose a topic</label>
          <select class="form-select" aria-label="Default select example" name="topic">
            <option selected>Open this select menu</option>
            <option value="discuss about project">Discuss About Project</option>
            <option value="hire me">Hire Me</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Massage</label>
          <textarea name="message" id="" class="form-control">Type your message...</textarea>
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
      </form>
    </section>
    <footer>
      <div class="container">
        <div class="list_of_li">
          <img src="" alt="">
          <ul>
            <li>Home</li>
            <li>Portfolio</li>
            <li>About me</li>
            <li>Contact</li>
            <li>Testimonials</li>
          </ul>
          <div>
            <a href="https://www.facebook.com/mdshahadat45" target="_blank">
              <i><svg width="14" height="25" viewBox="0 0 14 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.6667 4.65479H8.66667C7.93027 4.65479 7.33333 5.25175 7.33333 5.98812V9.98812H12.6667C12.8183 9.98476 12.9621 10.0553 13.0523 10.1773C13.1424 10.2993 13.1677 10.4575 13.12 10.6015L12.1333 13.5348C12.0424 13.804 11.7908 13.986 11.5067 13.9881H7.33333V23.9881C7.33333 24.3563 7.0348 24.6548 6.66667 24.6548H3.33333C2.96515 24.6548 2.66667 24.3563 2.66667 23.9881V13.9881H0.666667C0.29848 13.9881 0 13.6896 0 13.3215V10.6548C0 10.2867 0.29848 9.98812 0.666667 9.98812H2.66667V5.98812C2.66667 3.0426 5.05453 0.654785 8 0.654785H12.6667C13.0348 0.654785 13.3333 0.953265 13.3333 1.32145V3.98812C13.3333 4.35631 13.0348 4.65479 12.6667 4.65479Z" fill="black"/>
                </svg></i>
            </a>
            <a href="https://github.com/shahadat-45" target="_blank" rel="noopener noreferrer">
              <i><svg width="28" height="28" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M48.854 0C21.839 0 0 22 0 49.217c0 21.756 13.993 40.172 33.405 46.69 2.427.49 3.316-1.059 3.316-2.362 0-1.141-.08-5.052-.08-9.127-13.59 2.934-16.42-5.867-16.42-5.867-2.184-5.704-5.42-7.17-5.42-7.17-4.448-3.015.324-3.015.324-3.015 4.934.326 7.523 5.052 7.523 5.052 4.367 7.496 11.404 5.378 14.235 4.074.404-3.178 1.699-5.378 3.074-6.6-10.839-1.141-22.243-5.378-22.243-24.283 0-5.378 1.94-9.778 5.014-13.2-.485-1.222-2.184-6.275.486-13.038 0 0 4.125-1.304 13.426 5.052a46.97 46.97 0 0 1 12.214-1.63c4.125 0 8.33.571 12.213 1.63 9.302-6.356 13.427-5.052 13.427-5.052 2.67 6.763.97 11.816.485 13.038 3.155 3.422 5.015 7.822 5.015 13.2 0 18.905-11.404 23.06-22.324 24.283 1.78 1.548 3.316 4.481 3.316 9.126 0 6.6-.08 11.897-.08 13.526 0 1.304.89 2.853 3.316 2.364 19.412-6.52 33.405-24.935 33.405-46.691C97.707 22 75.788 0 48.854 0z" fill="black" transform="scale(0.26)"/>
              </svg>              
              </i>
            </a>
            <a target="_blank" rel="noopener noreferrer">
              <i>
                <svg width="25" height="25" viewBox="0 0 25 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M24.6304 3.61132C24.0112 4.43735 23.2627 5.1579 22.4137 5.74514C22.4137 5.96091 22.4137 6.17668 22.4137 6.40445C22.4205 10.3229 20.8553 14.0803 18.0691 16.8341C15.2827 19.588 11.5083 21.108 7.59207 21.0533C5.32799 21.0609 3.0929 20.544 1.0619 19.5429C0.952376 19.4951 0.881749 19.3868 0.882163 19.2672V19.1353C0.882163 18.9632 1.02164 18.8237 1.1937 18.8237C3.41923 18.7503 5.56536 17.9787 7.32846 16.618C5.31404 16.5773 3.50159 15.384 2.66747 13.5491C2.62535 13.4489 2.63846 13.3339 2.7021 13.2457C2.76572 13.1576 2.87067 13.1091 2.979 13.1176C3.59123 13.1791 4.20958 13.1221 4.80027 12.9497C2.57652 12.4881 0.905616 10.642 0.666483 8.38239C0.657989 8.27399 0.706563 8.16905 0.794669 8.10532C0.882763 8.04172 0.997656 8.02852 1.09784 8.07079C1.69459 8.33412 2.33879 8.47279 2.99099 8.47826C1.04246 7.1994 0.200816 4.76685 0.942069 2.55641C1.01859 2.34163 1.20242 2.18295 1.426 2.13871C1.64958 2.09445 1.87995 2.17116 2.03243 2.34064C4.66186 5.13912 8.27472 6.80674 12.1092 6.99184C12.0111 6.59992 11.9628 6.19713 11.9655 5.79308C12.0013 3.67441 13.3123 1.78707 15.2845 1.01461C17.2567 0.242174 19.4999 0.737495 20.964 2.26871C21.9619 2.07859 22.9267 1.74339 23.8276 1.27373C23.8936 1.23253 23.9773 1.23253 24.0433 1.27373C24.0845 1.33976 24.0845 1.42348 24.0433 1.48951C23.6069 2.48881 22.8697 3.32695 21.9345 3.88704C22.7535 3.79207 23.558 3.59888 24.3309 3.31164C24.396 3.26735 24.4815 3.26735 24.5465 3.31164C24.6011 3.33657 24.6419 3.38427 24.658 3.44201C24.6741 3.49976 24.664 3.56169 24.6304 3.61132Z" fill="black"/>
                </svg></i>                
            </a>
                <a href="https://linkedin.com/in/md-shahadat-b554a8215" target="_blank" rel="noopener noreferrer">
                  <i><svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M3.33341 0.654785H22.0001C23.4729 0.654785 24.6667 1.84869 24.6667 3.32145V21.9881C24.6667 23.4609 23.4729 24.6548 22.0001 24.6548H3.33341C1.86065 24.6548 0.666748 23.4609 0.666748 21.9881V3.32145C0.666748 1.84869 1.86065 0.654785 3.33341 0.654785ZM7.33341 20.6548C7.7016 20.6548 8.00008 20.3563 8.00008 19.9881V10.6548C8.00008 10.2867 7.7016 9.98812 7.33341 9.98812H5.33341C4.96523 9.98812 4.66675 10.2867 4.66675 10.6548V19.9881C4.66675 20.3563 4.96523 20.6548 5.33341 20.6548H7.33341ZM6.33341 8.65479C5.22884 8.65479 4.33341 7.75936 4.33341 6.65479C4.33341 5.55021 5.22884 4.65479 6.33341 4.65479C7.43799 4.65479 8.33341 5.55021 8.33341 6.65479C8.33341 7.75936 7.43799 8.65479 6.33341 8.65479ZM20.0001 20.6548C20.3682 20.6548 20.6667 20.3563 20.6667 19.9881V13.8548C20.7101 11.7359 19.1435 9.92748 17.0401 9.66812C15.5694 9.53379 14.1445 10.2207 13.3334 11.4548V10.6548C13.3334 10.2867 13.0349 9.98812 12.6667 9.98812H10.6667C10.2986 9.98812 10.0001 10.2867 10.0001 10.6548V19.9881C10.0001 20.3563 10.2986 20.6548 10.6667 20.6548H12.6667C13.0349 20.6548 13.3334 20.3563 13.3334 19.9881V14.9881C13.3334 13.8836 14.2289 12.9881 15.3334 12.9881C16.4379 12.9881 17.3334 13.8836 17.3334 14.9881V19.9881C17.3334 20.3563 17.6319 20.6548 18.0001 20.6548H20.0001Z" fill="black"/>
                  </svg></i>                  
                </a>
          </div>
        </div>
        <div class="copyright">
          <!-- <p>Made with 💖 by Airdokan</p> -->
          <p class="text-secondary">© 2024. All Rights Reserved</p>          
        </div>
      </div>
    </footer>
    <script src="fun.js"></script>
    <script src="bootstrap-5.2.3-dist/js/bootstrap.bundle.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>      
      $('a.nav-link').on('click', function(event) {
          event.preventDefault();
          const target = $(this).attr('href');
          $('html, body').animate({
              scrollTop: $(target).offset().top
          }, 300);
      });
    </script>
    <script>    
$(document).ready(function(){
    $('.slider').slick({
        dots: false,
        infinite: true,
        speed: 300,
        autoplay: true,
        arrows: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        adaptiveHeight: true,
        responsive: [          
          {
            breakpoint: 1400,
            settings: {
              slidesToShow: 4,
            }
          },
          {
            breakpoint: 1200,
            settings: {
              slidesToShow: 3,
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 2,
            }
          },
          {
            breakpoint: 576,
            settings: {
              slidesToShow: 1,
            }
          },
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
      });
});   
    </script>
  </body>
</html>