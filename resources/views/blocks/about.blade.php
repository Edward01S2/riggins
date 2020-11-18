<div id="about" class="{{ $block->classes }} bg-center bg-cover" style="background-image:url('{!! $bg['url'] !!}')">
  <div class="container relative px-4 mx-auto sm:px-6 lg:px-8">
    <div class="mt-4 text-center">
      <a class="inline-block px-8 py-3 pt-4 text-white bg-c-red-100 hover:opacity-75" href="{!! $link['url'] !!}" target="_blank">{!! $link['title'] !!}</a>
    </div>
    <div class="pt-24 pb-16">
      <div class="p-8 bg-white border-4 border-c-red-100 md:px-24 md:py-12 lg:max-w-3xl lg:mx-auto">
        <h2 class="flex items-center justify-center mb-4 text-3xl italic font-black text-center uppercase font-urwdin md:text-4xl">{!! $title !!}</h2>
        <div class="prose text-center max-w-none md:leading-snug">{!! $content !!}</div>
      </div>
    </div>
    <img class="absolute bottom-0 left-0 hidden h-56 md:block md:-ml-20 lg:h-72 lg:-ml-16 xl:h-100" src="{!! $portrait['url'] !!}" alt="">
  </div>

</div>

