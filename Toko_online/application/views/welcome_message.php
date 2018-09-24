<?php
defined("BASEPATH") or exit('No Direct SCript Case Acces Allowed');
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Toko Online</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url();?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>css/agency.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation Menu-->
    <?php $this->load->view('layout/menu') ?>



    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Welcome To Our Store!</div>
          <div class="intro-heading text-uppercase">Happy Shopping!</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
        </div>
      </div>
    </header>

    

    <!-- Portfolio Grid -->



    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Produk Kami</h2>
            <h3 class="section-subheading text-muted">Produk yang kami jual di sini 100% Original.</h3>
          </div>
        </div>
        <center>
     <div class="row" id="asli"> 
      <h2 class="modal-content  ">SilahKan di beli</h2>
    <?php foreach($products as $product) : ?>
    <div class="col-sm-3 col-md-3">
      <div class="thumbnail">
        <?=img([
          'src'=>'uploads/' . $product->image,
          'style'=>'max-width: 200%; max-height:200%; height:200px'
        ])?>
        <div class="caption">
          <h2 align="center" style="min-height: 60px; font-family: latin wide"><?=$product->nama?></h2>
          <p align="center" style="font-family: moaren Regular"><?=$product->description?></p>
          <p align="center" style="font-family: latin wide" >Rp.<?=$product->price?></p>
          <p align="center">
            <?php echo anchor('welcome/add_to_cart/' . $product->id, 'Buy' , [
              'class' => 'primary-btn cta-btn',
              'role' => 'button'
            ]); ?>
          </p>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
  </div>
  </center>
      </div>
    </section>

    <!-- Team -->
    <section class="bg-light" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Designer</h2>
            <h3 class="section-subheading text-muted">#2019 Ganti presiden.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="team-member">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/2.jpg" alt="">
              <h4>Afifudin</h4>
              <p class="text-muted">Developer Noob</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <p class="large text-muted">Saya Masih Terus Belajar dari Kekurangan :v, Jika Anda Tidak suka dengan Toko ini Saya Mohon Maaf.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Clients -->
    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/envato.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/designmodo.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/themeforest.jpg" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="#">
              <img class="img-fluid d-block mx-auto" src="img/logos/creative-market.jpg" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Contact Us</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; Your Website 2018</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://www.codeigniter.com/user_guide/libraries/encryption.html">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Portfolio Modals -->
    
    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">3SECOND</h2>
                  <p class="item-intro text-muted">Cepetan Order!.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/bro.png" alt="">
                  <p>
					- Warna putih<br>
					- Kerah hoodie dengan tali serut<br>
					- Unlined<br>
					- Regular fit<br>
					
				</p>
                  <ul class="list-inline">
                    <li>price: RP.200.000</li>
                    <li>Ukuran: XL</li>
                    <li>Category: Jaket</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Lanjut Belanja</button>
                    <?php echo anchor('welcome/add_to_cart/' . $product->id, 'Buy' , [
              'class' => 'primary-btn cta-btn',
              'role' => 'button'
            ]); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Brave Soul</h2>
                  <p class="item-intro text-muted">Stok Terbatas.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/2.png" alt="">
                  <p>- Jaket hoodie desain basic nuansa monokrom<br>
				- Warna putih<br>
				- Detail hoodie dengan tali Security<br>		
				- Unlined<br>
				- Regular fit</p>
                  <ul class="list-inline">
                    <li>Harga: RP.750.000</li>
                    <li>Ukuran: L</li>
                    <li>Category: Hoodie</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Lanjut Belanja</button>
					<p align="center">
						<?php echo anchor('welcome/add_to_cart/' . $product->id, 'Buy' , [
							'class' => 'primary-btn cta-btn',
							'role' => 'button'
						]); ?>
					</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Batik Jogja</h2>
                  <p class="item-intro text-muted">Hanya ada di sini Buruan Order!.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/3.png" alt="">
                  <p>- Batik Colat<br>
                  	- Bertabur Emas<br>
                  	- Kancing Premium<br>
                  	- Bahan katun<br></p>
                  <ul class="list-inline">
                    <li>Harga: RP.2000.000</li>
                    <li>Ukuran: L/XL/M</li>
                    <li>Category: Kemeja</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Lanjut Belanja</button>
                    <p align="center">
            <?php echo anchor('welcome/add_to_cart/' . $product->id, 'Buy' , [
              'class' => 'primary-btn cta-btn',
              'role' => 'button'
            ]); ?>
          </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Batik Semarang</h2>
                  <p class="item-intro text-muted">New Arrival.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/4.png" alt="">
                  <p>- Bahan spandex<br>
                  	- Kancing Premium<br>
                  	- Corak Kupu-kupu<br>
                  	- Nyaman di pakai<br></p>
                  <ul class="list-inline">
                    <li>harga: RP.1500.000</li>
                    <li>Ukuran: XL/L/M</li>
                    <li>Category: Kemeja</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Lanjut Belanja</button>
                    <p align="center">
            <?php echo anchor('welcome/add_to_cart/' . $product->id, 'Buy' , [
              'class' => 'primary-btn cta-btn',
              'role' => 'button'
            ]); ?>
          </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Owl high class t-shirt</h2>
                  <p class="item-intro text-muted">Cepetan Order.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/5.png" alt="">
                  <p>- Bahan Katun<br>
                  	- Sablon Premium<br>
                  	- Lengan Pendek<br>	</p>
                  <ul class="list-inline">
                    <li>Harga: Rp.450.000</li>
                    <li>Ukuran: XL/L/M</li>
                    <li>Category: Kaos Lengan Pendek</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Lanjut Belanja</button>
                   <p align="center">
            <?php echo anchor('welcome/add_to_cart/' . $product->id, 'Buy' , [
              'class' => 'primary-btn cta-btn',
              'role' => 'button'
            ]); ?>
          </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">VespTronot Premium T-shirt</h2>
                  <p class="item-intro text-muted">Silahkan Di order.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/6.png" alt="">
                  <p>- Bahan Katun<br>
                  	- Sablon Premium<br>
                  	- Lengan Pendek<br>	</p>
                  <ul class="list-inline">
                    <li>Harga: Rp.500.000</li>
                    <li>Ukuran: XL/L/M</li>
                    <li>Category: Kaos Lengan Pendek</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-times"></i>
                    Lanjut Belanja</button>
                   <p align="center">
            <?php echo anchor('welcome/add_to_cart/' . $product->id, 'Buy' , [
              'class' => 'primary-btn cta-btn',
              'role' => 'button'
            ]); ?>
          </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

  </body>

</html>