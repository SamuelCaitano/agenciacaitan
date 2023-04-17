@php
    $testimonial = [ 
    [
  'id' => 1,
  'name' => 'Lojas Base',
  'photo' => 'assets/img/testimonial/lojasbase.png',
  'profession' => 'Ecommerce',
  'comment' => 'Tive um ótimo retorno depois que a Agência passou a cuidar dos meus anúncios',
], 
[
  'id' => 2,
  'name' => 'Thallys Nunes',
  'photo' => 'assets/img/testimonial/thallysblackbarber.jpg',
  'profession' => 'Barberio',
  'comment' => 'Com a Agência Caitan subiu em 100% os agendamentos dos meus clientes',
], 
[
  'id' => 3,
  'name' => 'NE Store',
  'photo' => 'assets/img/testimonial/store_ne.jpg',
  'profession' => 'Ecommerce Moda Masculina',
  'comment' => 'Consegui montar minha loja online, e expandi minhas vendas para outras cidades!',
], 
];
@endphp

<section id="testimonials" class="ts-block text-center pb-5" data-bg-color="#f8f8ff" style="color: black">
  <div class="container">
    <div class="ts-title">
      <h2>O que nossos clientes estão dizendo?</h2>
    </div> 
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="owl-carousel" data-owl-dots="1" data-owl-loop="1" data-animate="ts-fadeInUp">          
          @foreach( $testimonial as $item )
          <div class="slide mb-5">
            <figure class="d-inline-block p-3 ts-bg-primary text-white ts-has-talk-arrow">
              <i class="fa fa-quote-right"></i>
            </figure>
            <p class="ts-h5">{{ $item['comment']}}</p>
            <div class="ts-circle__lg mb-3" data-bg-image="{{ $item['photo']}}">
              <img src="{{ $item['photo']}}" alt="{{ "Foto do avaliador" . $item['photo']}}">
            </div>
            <h5>{{ $item['name']}}</h5>
            <h6 class="ts-opacity__40">{{ $item['profession']}}</h6>
          </div>
          @endforeach 
        </div> 
      </div> 
    </div> 
  </div> 
</section> 