<div class="container w-auto mx-auto ">
    <article class="mb-10 overflow-hidden rounded-lg shadow-lg">

        <a href="#">
            <img alt="Placeholder" class="block w-auto h-auto" src="{{$url}}">
        </a>

        <header class="flex items-center justify-between p-2 leading-tight md:p-4">
            <h1 class="text-lg">
                <a class="text-black no-underline hover:underline" href="{{route('productos.show',$producto) }}">
                    {{$name}}
                </a>
            </h1>
        </header>

        <footer class="flex items-center justify-between p-2 leading-none md:p-4">
            <a class="flex items-center text-black no-underline hover:underline" href="#">
                <img alt="Placeholder" class="block rounded-full" src="https://picsum.photos/32/32/?random">
                <p class="ml-2 text-base">
                    ${{$precio}}
                </p>
            </a>
            <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
                <span class="hidden">Like</span>
                <i class="fa fa-heart "></i>
            </a>
        </footer>

    </article>
</div>