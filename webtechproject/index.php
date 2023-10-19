<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio Website</title>
    <link rel="stylesheet" href="homestyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="script.js"></script>
 
</head>
<body onbeforeprint="myonbeforeprint()" onafterprint="myonafterprint()">
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Manan<span>Kataria</span></a></div>
            <ul class="menu">
                <li><a href="#home" >Home</a></li>
                <li><a href="#about" >About</a></li>
                <li><a href="#certificate" >Certificates</a></li>
                <li><a href="#demonstration" >Demonstration</a></li>
                <li><a href="#contact" >Contact</a></li>
                <li><a href="login.php" >Login</a></li>
            </ul>
        </div>
    </nav>

    <!-- home section  -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello, my name is</div>
                <div class="text-2">Manan Kataria</div>
                <div class="text-3">And I'm a <span class="typing"></span></div>
                <a href="#contact">Hire me</a>
            </div>
        </div>
    </section>

    <!-- about section  -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="document/profile-1.jpeg" alt="">
                </div>
                <div class="column right">
                    <div class="text">I'm Manan and I'm a <span class="typing-2"></span></div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi ut voluptatum eveniet doloremque autem excepturi eaque, sit laboriosam voluptatem nisi delectus. Facere explicabo hic minus accusamus alias fuga nihil dolorum quae. Explicabo illo unde, odio consequatur ipsam possimus veritatis, placeat, ab molestiae velit inventore exercitationem consequuntur blanditiis omnis beatae. Dolor iste excepturi ratione soluta quas culpa voluptatum repudiandae harum non.</p>
                    <a href="document/resume.pdf" download="resume.pdf">Download CV</a>
                </div>
            </div>
        </div>
    </section>
    <!---certification section-->
    <section class="certificate" id="certificate">
        <div class="max-width">
        <h2 class="title">Certificates</h2>
        <div class="prow">
  <div class="pcolumn">
  <a href="document/certificate.pdf" download="certficate.pdf">
         <img src="document/certficate.png"
         width="320" height="240">
      </a>
  </div>
  <div class="pcolumn">
  <a href="document/certificate.pdf" download="certficate.pdf">
         <img src="document/certficate.png"
         width="320" height="240">
      </a>
  </div>
  <div class="pcolumn">
  <a href="document/certificate.pdf" download="certficate.pdf">
         <img src="document/certficate.png"
         width="320" height="240">
      </a>
  </div>
  <div class="pcolumn">
  <a href="document/certificate.pdf" download="certficate.pdf">
         <img src="document/certficate.png"
         width="320" height="240">
      </a>
  </div>
  <div class="pcolumn">
  <a href="document/certificate.pdf" download="certficate.pdf">
         <img src="document/certficate.png"
         width="320" height="240">
      </a>
  </div>
  <div class="pcolumn">
  <a href="document/certificate.pdf" download="certficate.pdf">
         <img src="document/certficate.png"
         width="320" height="240">
      </a>
  </div>
  

  </div>
</div>

</section>
    <!--demostration section-->
    <section class="demonstration" id="demonstration">
    <div class="max-width">
        <h2 class="title">Demonstration</h2>
        <div class="demonstration-content">
        <body id="body">
            <div class="text">
                <h3>Demo 1</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi ut voluptatum eveniet doloremque autem excepturi eaque, sit laboriosam voluptatem nisi delectus. Facere explicabo hic minus accusamus alias fuga nihil dolorum quae. Explicabo illo unde, odio consequatur ipsam possimus veritatis, placeat, ab molestiae velit inventore exercitationem consequuntur blanditiis omnis beatae. Dolor iste excepturi ratione soluta quas culpa voluptatum repudiandae harum non.</p>
        <button id="demo" class="demo">Event Listener
    </div>
        
  </button>
  <script>
      document.getElementById("demo").addEventListener("click", myFunction);
  </script>

  <div class="text">
      <h3>Demo 2</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi ut voluptatum eveniet doloremque autem excepturi eaque, sit laboriosam voluptatem nisi delectus. Facere explicabo hic minus accusamus alias fuga nihil dolorum quae. Explicabo illo unde, odio consequatur ipsam possimus veritatis, placeat, ab molestiae velit inventore exercitationem consequuntur blanditiis omnis beatae. Dolor iste excepturi ratione soluta quas culpa voluptatum repudiandae harum non.</p>
        <button id="demo" onclick="window.open('functions.php')" class="demo">Array and String Functions</button>   
    </div>

    <div class="text">
      <h3>Demo 3</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi ut voluptatum eveniet doloremque autem excepturi eaque, sit laboriosam voluptatem nisi delectus. Facere explicabo hic minus accusamus alias fuga nihil dolorum quae. Explicabo illo unde, odio consequatur ipsam possimus veritatis, placeat, ab molestiae velit inventore exercitationem consequuntur blanditiis omnis beatae. Dolor iste excepturi ratione soluta quas culpa voluptatum repudiandae harum non.</p>
        <button id="demo" onclick="window.open('php_filehandling.php')" class="demo">File Handling</button>   
    </div>
        
</div>
</div>

    </section>
    <!---contact section -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos harum corporis fuga corrupti. Doloribus quis soluta nesciunt veritatis vitae nobis?</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Manan Kataria</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Mumbai , India</div>
                            </div>
                        </div>
                        <div class="row">
                        <a href="mailto:manan.kataria@somaiya.edu"><i class="far fa-envelope-open"></i></a>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">manan.kataria@somaiya.edu</div>
                            </div>
                            
                        </div>

                        <div class="row">
                        <a href="https://facebook.com"><i class="fab fa-facebook" ></i></a>
                        <a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
                        <a href="https://instagram.com"><i class="fab fa-instagram"></i></a>
                        <a href="https://linkedin.com"><i class="fab fa-linkedin"></i></a>
                        <a href="https://github.com"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form action="insert.php" method="POST">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" name="uname" placeholder="Name required">
                            </div>
                            <div class="field email">
                                <input type="email" name ="email" placeholder="Email required">
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" name= "subject" placeholder="Subject required">
                        </div>
                        <div class="field textarea">
                            <textarea name="message" cols="30" rows="10" placeholder="Message required"></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section  -->
    <footer>
        <span>Created By <a href="#home">Manan</a> | 2021 All rights reserved.</span>
    </footer>

    
</body>
</html>






