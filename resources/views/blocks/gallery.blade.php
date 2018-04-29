<h1>{{ $variable }}</h1>
<h2>{{ Gallery::action($variable) }}</h2>

<section class="gallery">
  <div class="gallery__image">
    {{-- @foreach ($gallery as $image)
      <img src="{{ $image['sizes']['full'] }}" />
    @endforeach --}}
  </div>
</section>
