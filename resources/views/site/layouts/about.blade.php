<section id="about-me" class="ts-block pb-4"  style="background: white; color: black">
  <div class="container">
    <div class="ts-title text-center">
      <h2 aria-labelledby="about-me-desc">Quem somos</h2>
    </div>
    <!--end ts-title-->
    <div class="row ts-align__vertical">
      <div class="col-md-6">
        <img src="\assets\img\cover\empresa.png" alt="Agência Caitan" class="mw-100 mb-5" draggable="false" style="border-radius: 15px;">
      </div>
      <div class="col-md-6" style="overflow-wrap: break-word;">

        {{-- <div class="texto">
          <h4 class="ts-bubble-border" style="background: #0d6efd; color: white; font-weight: 900;">
            <span class="container">
              <span class="word">Seja bem-vindo a nossa agência!</span>
              <span class="word escrit">Aqui você encontra tudo que presica</span>
              <span class="word">para sua empresa</span>
              <span class="word">para seu eccomerce</span>
              <span class="word">ou para seus projetos pessoais</span>
              </span>  
            </h4>
        </div> --}}

        <div class="texto" style="margin-bottom: 20px;">

          <h4 class="ts-bubble-border" style="background: #0d6efd; color: white; font-weight: 900; width: 100%"> 
          <span class="container">
          <span class="word">Seja bem-vindo a nossa agência!</span>
          <span class="word escrit">Aqui você encontra tudo que presica</span>
          <span class="word">para sua empresa</span>
          <span class="word">para seu eccomerce</span>
          <span class="word">ou para seus projetos pessoais</span>
          </span> 
          </h4> 
          
      </div>

        
 
          <script>
            
var words = document.getElementsByClassName('word');
var wordArray = [];
var currentWord = 0;

words[currentWord].style.opacity = 1;
for (var i = 0; i < words.length; i++) {
  splitLetters(words[i]);
}

function changeWord() {
  var cw = wordArray[currentWord];
  var nw = currentWord == words.length-1 ? wordArray[0] : wordArray[currentWord+1];
  for (var i = 0; i < cw.length; i++) {
    animateLetterOut(cw, i);
  }
  
  for (var i = 0; i < nw.length; i++) {
    nw[i].className = 'letter behind';
    nw[0].parentElement.style.opacity = 1;
    animateLetterIn(nw, i);
  }
  
  currentWord = (currentWord == wordArray.length-1) ? 0 : currentWord+1;
}

function animateLetterOut(cw, i) {
  setTimeout(function() {
		cw[i].className = 'letter out';
  }, i*45);
}

function animateLetterIn(nw, i) {
  setTimeout(function() {
		nw[i].className = 'letter in';
  }, 340+(i*45));
}

function splitLetters(word) {
  var content = word.innerHTML;
  word.innerHTML = '';
  var letters = [];
  for (var i = 0; i < content.length; i++) {
    var letter = document.createElement('span');
    letter.className = 'letter';
    letter.innerHTML = content.charAt(i);
    word.appendChild(letter);
    letters.push(letter);
  }
  
  wordArray.push(letters);
}

changeWord();
setInterval(changeWord, 3500);


          </script>


        <p id="about-me-desc">
          Nós já estamos no mercado digital á 1 ano, já ajudamos vários clientes a realizar vendas pela internet, prospectar novos leads, e apresentar de forma eficiente e relevante as pessoas certas os mais de 1000 já anúncios criados!
        </p>
        <dl class="ts-column-count-2">
          <dt>CNPJ:</dt>
          <dd>000000000/0000-00</dd>
          <dt>Phone:</dt>
          <dd>+55 (16) 00000-0000</dd>
          <dt>Email:</dt>
          <dd>atendimento.agenciacaitan.com</dd>
          <dt>Instagram:</dt>
          <dd>@agenciacaitan</dd>
        </dl>
        <hr class="ts-hr-light mb-5">
        <a href="#contact" class="ts-btn-effect mr-2" style="border-radius: 10px">
          <span class="ts-visible btn btn-primary ts-btn-arrow">Contact Us</span>
          <span class="ts-hidden btn ts-btn-arrow" >Contact Us</span>
        </a> 
        <a href="\assets\img\me\curriculo.txt" class="ts-btn-effect mr-2" download="curriculo.pdf" style="border-radius: 10px">
          <span class="ts-visible btn btn-outline-light btn-dark">
            <i class="fa fa-download small mr-2"></i>
            Download CV
          </span>
          <span class="ts-hidden btn btn-light">
            <i class="fa fa-download small mr-2"></i>
            Download CV
          </span>
        </a>
      </div>
    </div>
    <!--end row-->
  </div>
</section>