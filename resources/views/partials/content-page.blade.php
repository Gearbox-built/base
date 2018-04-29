<article>
  @if (have_rows('blocks'))
    @while (have_rows('blocks'))
      @php(the_row())
      @include('blocks.' . get_row_layout(), App::getBlockData())
    @endwhile
  @endif
</article>