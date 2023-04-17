@php
$portfolio = [
[
'id' => 1,
'title' => 'Lojas Base',
'subtitle' => 'Post Instagram',
'image' => 'assets\img\portfolio\pictures\socialmedia\catalogo-insta-tenis-2023_03.png',
'alt' => 'Post Instagram Lojas Base'
],
[
'id' => 2,
'title' => 'Lojas Base',
'subtitle' => 'Post Instagram',
'image' => 'assets\img\portfolio\pictures\socialmedia\catalogo-insta-tenis-2023_05.png',
'alt' => 'Post Instagram Lojas Base'
],
[
'id' => 3,
'title' => 'Lojas Base',
'subtitle' => 'Post Instagram',
'image' => 'assets\img\portfolio\pictures\socialmedia\post-feed-verao-2023_01.png',
'alt' => 'Post Instagram Lojas Base'
],
[
'id' => 4,
'title' => 'Lojas Base',
'subtitle' => 'Post Instagram',
'image' => 'assets\img\portfolio\pictures\socialmedia\post-feed-verao-2023_03.png',
'alt' => 'Post Instagram Lojas Base'
],
[
'id' => 5,
'title' => 'Lojas Base',
'subtitle' => 'Post Instagram',
'image' => 'assets\img\portfolio\pictures\socialmedia\post-feed-verao-2023_05.png',
'alt' => 'Post Instagram Lojas Base'
],
[
'id' => 6,
'title' => 'Lojas Base',
'subtitle' => 'Post Instagram',
'image' => 'assets\img\portfolio\pictures\socialmedia\post-feed-verao-2023_09.png',
'alt' => 'Post Instagram Lojas Base'
],
[
'id' => 7,
'title' => 'Lojas Base',
'subtitle' => 'Post Instagram',
'image' => 'assets\img\portfolio\pictures\socialmedia\post-verao-2023_01.png',
'alt' => 'Post Instagram Lojas Base'
],
[
'id' => 8,
'title' => 'Lojas Base',
'subtitle' => 'Post Instagram',
'image' => 'assets\img\portfolio\pictures\socialmedia\post-verao-2023_02.png',
'alt' => 'Post Instagram Lojas Base'
],
[
'id' => 9,
'title' => 'Lojas Base',
'subtitle' => 'Post Instagram',
'image' => 'assets\img\portfolio\pictures\socialmedia\post-verao-2023_03.png',
'alt' => 'Post Instagram Lojas Base'
],
[
'id' => 10,
'title' => 'Lojas Base',
'subtitle' => 'Post Instagram',
'image' => 'assets\img\portfolio\pictures\socialmedia\post-verao-2023_05.png',
'alt' => 'Post Instagram Lojas Base'
],
];
@endphp


<section class="ts-block pb-5" id="portfolio" style="    background-color: rgb(248, 248, 255); color: black">
  <div class="container">
    <div class="ts-title">
      <h2>Portfolio</h2>
    </div>
    <div class="card-columns ts-gallery ts-column-count-4">
      @foreach ($portfolio as $item)
      <a href="{{ $item['image'] }}" class="card ts-gallery__item popup-image" data-animate="ts-fadeInUp">
        <div class="ts-gallery__item-description">
          <h6 class="ts-opacity__50">{{ $item['title'] }}</h6>
          <h4>{{ $item['subtitle'] }}</h4>
        </div>
        <img src="{{ $item['image'] }}" class="card-img" alt="{{ $item['alt'] }}">
      </a>
      @endforeach
    </div>
  </div>
</section>