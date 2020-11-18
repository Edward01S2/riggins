<div class="{{ $block->classes }} relative z-30">
  <div class="container px-4 mx-auto sm:px-6 lg:px-8">
    <div class="relative pt-12 pb-8 md:py-16">
      <h3 class="flex items-center justify-center text-3xl italic font-black text-center uppercase align-middle text-c-red-100 md:text-4xl"><span class="mt-2">{!! $title !!}</span></h3>
      <img class="absolute recent-logo md:w-3/4 lg:max-w-xl" src="{!! $logo['url'] !!}" alt="">
    </div>
    <div>
      {!! $script !!}
    </div>
  </div>

</div>
