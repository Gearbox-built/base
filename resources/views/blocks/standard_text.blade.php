<section class="standard-text">
  <h2>{{ $heading }}</h2>
  <div class="standard-text__content">
    {!! $content !!}
  </div>
  @if (isset($links))
    <div class="standard-text__links">
      @foreach ($links as $link)
        @php($dalink = (object)$link['link'])
        <a href="{{ $dalink->url }}">{{ $dalink->title }}</a>
      @endforeach
    </div>
  @endif
</section>