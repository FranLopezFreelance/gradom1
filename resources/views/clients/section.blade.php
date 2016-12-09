@if($navSection->children == 0 && $navSection->section_id == 0)
  <li
    @if($section->id == $navSection->id)
      class="current-cat"
    @endif
  ><a href="/order/newOrder/{{ $navSection->id }}">{{ $navSection->name }}</a><span class="count">
    (<span class="boxSection_{{ $navSection->id }}">{{ $section->productsInOrder($order, $navSection->id) }}</span>)
  </span></li>
@else
  @if($navSection->section_id == 0)
    <li
      @if($section->id == $navSection->id)
        class="current-cat"
      @endif
    >{{ $navSection->name }}</li>
      @forelse($navSection->childrens as $childSection)
        <li
          @if($section->id == $childSection->id)
            class="current-cat"
          @endif
        > - <a href="/order/newOrder/{{ $childSection->id }}">{{ $childSection->name }}</a><span class="count">
          (<span class="boxSection_{{ $childSection->id }}">{{ $section->productsInOrder($order, $childSection->id)}}</span>)
        </span></li>
      @empty
      @endforelse
  @endif
@endif
