<footer class="bg-black">
  <div class="container px-4 mx-auto sm:px-6 lg:px-8">
    <div class="flex flex-col px-4">

      <div class="pt-8 pb-4 md:pb-6">
        <div class="flex items-center justify-center">

          @if($social)
            <div class="items-center justify-center space-x-8 md:flex md:flex-row md:py-0 lg:py-0 lg:items-start lg:justify-start">
              @foreach($social as $item)
                <a class="inline-block p-2 rounded-full hover:opacity-50" href="{!! $item['url'] !!}" target="_blank" style="background-color: {!! $item['bg'] !!};">
                  @if($item['icon'])
                    @svg($item['icon']['url'], 'fill-current h-6 w-6 text-white md:h-5 md:w-5')
                  @endif
                  {!! $item['link']['title'] !!}
                </a>
              @endforeach
            </div>
          @endif
        </div>
      </div>

    </div>
  </div>

  <div class="pb-4">
    <div class="container px-4 mx-auto sm:px-6 lg:px-8 lg:max-w-3xl">
      <div class="flex flex-col text-xs tracking-widest text-center text-white md:flex-row md:justify-center">
        <div class="copyright">
          <span>&copy; <?php echo esc_attr( date( 'Y' ) ); ?></span>
          {!! $footer !!}
        </div>
      </div>
    </div>
  </div>
</footer>
