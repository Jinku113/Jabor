<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <title>JABOR</title>
</head>
<body>
    <header class="header" id="top">
        <div class="w3-top">
            <div class="w3-bar w3-black w3-card header">
              <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
              <a href="#top" class="w3-bar-item w3-button w3-padding-large " >JABOR</a>
              <span class="w3-right">

             
              <a href="#home" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Home</a>
              <a href="http://localhost:8000/products" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Gallery</a>
              <a href="#new-arrivals" class="w3-bar-item w3-button w3-padding-large w3-hide-small">New Arrivals</a>
              <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Contact</a>
              <a href="http://localhost:8000/login" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Admin</a>
            </span>
            </div>
          </div>
  
          <!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
          <div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
            <a href="#home" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Home</a>
            <a href="#gallery" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Gallery</a>
            <a href="#new-arrivals" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">New Arrivals</a>
            <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Contact</a>
          </div>
    </header>
<main>
    <div  class="hero-section w3-animate-left " id="home">
        <div class="hero-section-main">
           <div class="hero-section-into-text w3-margin-top">
               <h1 class="w3-text-white">JABOR</h1>
              <p class="w3-right w3-text-white w3-small w3-hide-small hero-qoute ">
               A style for you who want to make your outfit better 
               than ever

              </p>
               <div class="w3-text-white l " style="margin-top:60px">
                 <p >Follow us on Social media</p>
                 <div class="w3-margin-top">

   
              <a href="https://www.instagram.com/rynx_bordir/"><i class="fa fa-instagram w3-hover-opacity icons" ></i></a>   
              </div>
               </div>
               </a>
               
           </div>
        </div>    
        </div>
    
    </div>
  </main>

      <div>
        <div class="w3-container ">
          <h2 class="section-text-header">Get our newly arrived products</h2>
        </div>
        
        
      </div>
      </div>

      
  </section>
  
    <div class="new-arrived-products" id="new-arrivals">
      <div class="new-product ">
         <div class="new-arrived-image">
           <img src="{{asset('assets/img/111.jpg')}}">
         </div>
         <div class="w3-margin-top" style="overflow: hidden; padding:0px 20px;">

         
         <h4 style="text-overflow: ellipsis;overflow: hidden;">KNY Hoodie</h4>
         <p class="w3-small" >gray | white | black</p>
       </div>
      </div>
      <div class="new-product">
       <div class="new-arrived-image">
        <img src="{{asset('assets/img/222.jpg')}}">
      </div>
       <div class="w3-margin-top" style="overflow: hidden; padding:0px 20px;">

       
         <h4 style="text-overflow:ellipsis ;overflow: hidden;">Uncle Scrooge Hoodie</h4>
         <p class="w3-small" >gray | yellow | black</p>
     </div>
     </div>
     <div class="new-product">
       <div class="new-arrived-image">
         <img src="{{asset('assets/img/333.jpg')}}">
     </div>
     <div class="w3-margin-top" style="overflow: hidden;  padding:0px 20px;">
       <h4>Zoro Hoodie</h4>
       <p class="w3-small">gray | green | black</p>
   </div>
     </div>
   </div>

   </div>




   

</div>

<br>
  <div class="w3-center contact" id="contact" >
    <div class=" w3-left-align w3-margin-top contact-info ">
       <h3 style="font-weight: 800;" class="contact-head">GET IN TOUCH</h3> 
       <h4 style="font-weight: 600;">Your styles at low cost 
       </h4>
       <p>We care about our customers<br>you can contact us for any feedback</p>
       <h4 style="font-weight: 600;">Follow Us </h4>
      
      <a href = "https://www.instagram.com/rynx_bordir/">
     <i class="fa fa-instagram w3-hover-opacity icons"></i>
    </div></a>
    <div class="w3-left-align w3-margin-top contact-info" >
          <h3 style="font-weight: 600;">OPENING HOURS</h3>
             <p>Mon - Sat 7am - 9pm:</p>
             
             <p>Delivery only on opening hours</p>
             <br>
             <div class="w3-margin-to  w3-left-align" >
              <h4 style="font-weight: 600;">CONTACT INFO</h4>
              <p> <i class="fa fa-phone " style="margin-right: 8px;font-size: 20px;"></i>081230242052</p>
              <p><i class="fa fa-phone" style="margin-right: 8px;font-size: 20px;"></i>081340214485</p>
              
    
           </div>     
                 
    </div>
    
    
  </div>


  
        
    </script>
</body>
</html>