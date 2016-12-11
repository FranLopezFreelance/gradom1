@extends('layouts.head-front')

@section('content')
<!-- Slide show -->
<div class="slide-home1">
  <div class="slide-container">
    @forelse($slideImages as $image)
      <img src="/images/sliders/{{ $image->url }}" alt="">
    @empty
      
    @endforelse
  </div>
  <div class="thumbs">
    <?php $i = 0; ?>
    @forelse($slideImages as $image)
      <a data-slide-index="{{ $i }}" href=""><img src="/images/sliders/thumbs/{{ $image->url }}" alt="" /></a>
      <?php $i++; ?>
    @empty

    @endforelse
  </div>
</div>
<div class="main-container no-sidebar no-padding">
  <div class="heading-section style2 text-center margin-top-50 margin-bottom-20" >
    <h3 class="title">
      @if($section->section_id)
        {{ $section->mother->name }} - {{ $section->name }}
      @else
        {{ $section->name }}
      @endif
    </h3>
    <div class="section-description">
      @forelse($section->description() as $text)
        <p>{{ $text }}</p>
      @empty
        <p>No hay descripción de esta sección</p>
      @endforelse
      <p>Para más información de éstos y otros productos contántese con nosotros desde <a href="/contact">aquí</a>.</p>
    </div>
  </div>
</div>
@endsection
