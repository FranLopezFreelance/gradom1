
<li class="menu-item-has-children">
  <a href="">Productos</a>
  <ul class="sub-menu">
    <li class="menu-item-has-children">
      @forelse($sections as $section)
        @if($section->children == 0 AND $section->section_id == 0)
          <li><a href="/section/{{ $section->id }}">{{ $section->name }}</a></li>
        @else
          @if($section->children == 1)
            <li class="menu-item-has-children">
              <a href="/section/{{ $section->id }}">{{ $section->name }}</a>
              <!-- <ul class="sub-menu">
                @foreach($section->childrens as $childen)
                  <li><a href="/section/{{ $childen->id }}">{{ $childen->name }}</a></li>
                @endforeach
              </ul> -->
            </li>
          @endif
        @endif
      @empty
        <li>No hay secciones en la base</li>
      @endforelse
  </ul>
</li>
