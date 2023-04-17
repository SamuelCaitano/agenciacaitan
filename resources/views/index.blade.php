@include('site.components.head')

@include('site.components.header')

<div class="ts-page-wrapper" id="page-top">

  @include('site.layouts.home')

  <main id="ts-content" style="position: relative; top: 80px">

    @include('site.layouts.services')

    @include('site.layouts.about')

    @include('site.layouts.nextproject')

    {{-- @include('site.layouts.skills') --}}

    @include('site.layouts.portfolio')

    @include('site.layouts.performed')

    @include('site.layouts.testimonial')

    @include('site.layouts.oftenask')

    @include('site.layouts.contact')

  </main>

  @include('site.components.footer')

</div>

@include('site.components.modal')

@include('site.components.script')