@if($navSection->children == 0 && $navSection->section_id == 0)
  <li
    @if($section->id == $navSection->id)
      class="current-cat"
    @endif
  ><a href="/backend/products/{{ $navSection->id }}">{{ $navSection->name }}</a><span class="count">
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
        > - <a href="/backend/products/{{ $childSection->id }}">{{ $childSection->name }}</a><span class="count">
        </span></li>
      @empty
      @endforelse
  @endif
@endif
