@include('site.components.head')

@include('site.components.header')

<div class="ts-page-wrapper" id="page-top">

  @include('site.layouts.home')

  @include('site.components.chat')

  {{-- <div class="teste">
    <div class="header">
      <div class="grp-img">
        <img class="i1"
          src="https://images.unsplash.com/photo-1660476705851-21e527337f9a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxOHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60"
          alt="">
        <img class="i2"
          src="https://images.unsplash.com/photo-1657299143482-4f4ea1ebd71c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxMXx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60"
          alt="">
        <img class="i3"
          src="https://images.unsplash.com/photo-1660481451479-7ad6d6ad0223?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw3fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60"
          alt="">
      </div>

      <div class="grp-info">
        <h3 class="grp-name">
          Samuel, John and more
        </h3>
        <p class="grp-status">
          Already see this video
        </p>
      </div>
    </div>

    

    <div class="chatbox"> 
      <div class="chat">
        <img src="\assets\img\me\vitor_aguiar.jpg" alt="">
        <p class="msg">
          <ion-icon name="caret-back-outline"></ion-icon>
          Hi, Do you want to see my new project?                   
          
        </p>
      </div>

      <div id="answer-chat" class="chat" style="display: none; ">
        <img
          src="\assets\img\cover\person-default.jpg"
          alt="">
        <p class="msg" style="background: #04453B">
          <ion-icon name="caret-back-outline"></ion-icon>
          Yes, I do

          <span id="visibility-icon" style="font-size: 15px;
          color: gray;
          position: absolute;
          bottom: 0;
          right: 0;">
            <i id="saw-1" class="fas fa-check" style="position: relative;
            /* border: 1px solid black; */
            z-index: 4;
            text-shadow: 1px 1px 0px #04453B;"></i>
            <i id="saw-2"  class="fas fa-check" style="position: relative;
            left: -8px;"></i>
          </span> 
        </p>
      </div>

      <div id="video-chat" class="chat" style="display: none">
        <img src="\assets\img\me\vitor_aguiar.jpg" alt="">
        <video class="msg" controls>
          <source src="\assets\img\portfolio\animations\ApresentaçãoNP.mp4" type="video/mp4">
        </video>
      </div>

    </div>

    <div class="policy"> 
      <a href="#" class="agree" onclick="seeVideo()">
        Yes, I do
      </a>
    </div>

    <script>
      function seeVideo() {
 
        setTimeout(function(){ 
          document.getElementById("answer-chat").style.display = "flex";  
        }, 1000);

        setTimeout(function(){ 
          document.getElementById("visibility-icon").style.color = "#1769ff"; 
        }, 2000);
                
        setTimeout(function(){           
          document.getElementById("video-chat").style.display = "block";
        }, 3000);        

      }
    </script>

    <a href="#" class="close">
      <ion-icon name="close-outline"></ion-icon>
    </a>
  </div> --}}

  {{-- <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <style>
    @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap");

    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
      font-family: open sans;
      transition: ease 0.5s;
      text-decoration: none;
      list-style-type: none; 
    } 

    .teste {
      width: 100%;
      max-width: 450px;
      background: #282639;
      margin: 0 auto;
      margin-top: -24px;
      border-radius: 10px;
      position: fixed;
      height: 80%;
      top: 118px;
      right: 30px; 
      box-shadow: #292739 0 10px 20px;
      z-index: 999999;
      background-image: url(/assets/img/cover/cover-whatsapp.jpg);
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      overflow: hidden;
    }

    .header {
      background: #202C33;
      display: flex;
      padding: 15px;
      border-radius: 10px 10px 0 0;
      position: sticky;
      top: 0;
      z-index: 99999;
      height: 20%;
    }

    .grp-img {
      position: relative;
      width: 125px;
      height: 45px;
    }

    .grp-img img {
      width: 45px;
      height: 45px;
      border-radius: 50%;
      object-fit: cover;
      outline: 2px solid white;
      position: absolute;
      top: 0;
      left: 0;
    }

    .grp-img .i1 {
      z-index: 1;
    }

    .grp-img .i2 {
      left: 40px;
    }

    .grp-img .i3 {
      left: 80px;
    }

    .grp-info {
      padding: 0 15px;
    }

    .grp-name {
      font-size: 16px;
      font-weight: 600;
      margin-bottom: 3px;
    }

    .grp-status {
      margin: 0;
      letter-spacing: 1px;
    }

    .chatbox {
      padding: 40px 20px;
      display: flex;
      flex-direction: column;
      gap: 20px;
      overflow: scroll;
      height: -webkit-fill-available;
      height: 80%;
    }

    .chatbox .chat {
      display: flex;
      gap: 15px;
    }

    .chatbox img {
      width: 45px;
      height: 45px;
      border-radius: 50%;
      object-fit: cover;
      outline: 2px solid white;
    }

    .chatbox .msg {
      background: #202C33;
      max-width: 80%;
      padding: 15px;
      border-radius: 10px;
      position: relative;
      font-size: 13px;
    }

    .msg ion-icon {
      font-size: 20px;
      color: #3a384c;
      position: absolute;
      top: 10px;
    }

    .chatbox .chat:nth-child(even) {
      flex-direction: row-reverse;
    }

    .chatbox .chat:nth-child(odd) ion-icon {
      left: -14px;
    }

    .chatbox .chat:nth-child(even) ion-icon {
      right: -14px;
      transform: rotate(180deg);
    }

    .policy {
      background: #26373c;
      padding: 20px 10px;
      border-radius: 0 0 10px 10px;
      width: 100%;
      max-width: 450px;
      height: 20%;
      position: fixed;
    }

    .policy p {
      font-size: 13px;
    }

    .policy p a {
      font-size: 13px;
      color: #ff6969;
      text-decoration: underline;
    }

    .agree {
      display: inline-block;
      color: #ff6969;
      border: solid 2px #ff6969;
      border-radius: 50px;
      padding: 10px 30px;
      font-size: 16px;
      font-weight: 500;
    }

    .agree:hover {
      color: white;
      background: #ff6969;
    }

    .close {
      display: inline-block;
      width: 60px;
      height: 60px;
      border-radius: 50%;
      background: #ff6969;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      position: absolute;
      bottom: -80px;
      right: 0;
    }

    .close:hover {
      box-shadow: #292739 0 0 10px 10px;
    }

    .close:hover ion-icon {
      transform: rotate(360deg);
    }

    .close ion-icon {
      font-size: 40px;
    }
  </style> --}}

  <main id="ts-content" style="position: relative; top: 80px"> 

    @include('site.layouts.services')

    @include('site.layouts.about')

    @include('site.layouts.nextproject')

    {{-- @include('site.layouts.skills') --}}

    @include('site.layouts.portfolio')

    <section class="ts-block" style="background: white; color:black">
      <div class="container ts-promo-numbers">
        <div class="row">
          <div class="col-sm-6 col-md-3">
            <div class="ts-promo-number text-center"> 
                <figure class="odometer" data-odometer-final="15">0</figure>     
                <span style="color: #5b548e; font-weight: 600; font-size: 2.5rem; margin: 0 0 1rem;">+</span>                     
              <h5>Clientes</h5>
            </div>
            <!--end ts-promo-number-->
          </div>
          <!--end col-md-3-->
          <div class="col-sm-6 col-md-3">
            <div class="ts-promo-number text-center">              
              <figure class="odometer" data-odometer-final="200">0</figure>
              <span style="color: #5b548e; font-weight: 600; font-size: 2.5rem; margin: 0 0 1rem;">+</span>
              <h5>Anúncios</h5>
            </div>
            <!--end ts-promo-number-->
          </div>
          <!--end col-md-3-->
          <div class="col-sm-6 col-md-3">
            <div class="ts-promo-number text-center">              
              <figure class="odometer" data-odometer-final="96">0</figure>
              <span style="color: #5b548e; font-weight: 600; font-size: 2.5rem; margin: 0 0 1rem;">%</span>
              <h5>Retorno</h5>
            </div>
            <!--end ts-promo-number-->
          </div>
          <!--end col-md-3--> 
        </div>
      </div>
    </section>

    @include('site.layouts.testimonial')

    @include('site.layouts.contact')

  </main>

  @include('site.components.footer')

</div>

@include('site.components.modal')

@include('site.components.script')