<article class="relative group overflow-hidden rounded-lg transition shadow-md hover:shadow-lg w-80">
  <button
    class="absolute end-4 top-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75"
  >
    <span class="sr-only">Wishlist</span>
    <svg
      xmlns="http://www.w3.org/2000/svg"
      fill="none"
      viewBox="0 0 24 24"
      stroke-width="1.5"
      stroke="currentColor"
      class="w-5 h-5"
    >
      <path
        stroke-linecap="round"
        stroke-linejoin="round"
        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"
      />
    </svg>
  </button>

  <img
    alt="Product Image"
    src="https://images.unsplash.com/photo-1524758631624-e2822e304c36?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"
    class="h-52 w-full object-cover transition duration-500 group-hover:scale-105"
  />

  <div class="relative bg-white p-3 sm:p-4 border border-gray-100">
    <div class="flex justify-between items-center">
      <h2 class="text-gray-500">Category</h2>
      <h2 class="text-gray-500 text-right">$20</h2>
    </div>

    <a href="#">
      <h3 class="mt-0.5 text-lg font-medium text-gray-900 line-clamp-1">How to position your furniture for positivity</h3>
    </a>

    <p class="mt-2 text-sm/relaxed text-gray-500 line-clamp-2">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus
      pariatur animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis quidem.
    </p>

    <div class="mt-5 flex items-center text-center space-x-4">
      <a
        href="#"
        class=" text-center rounded px-6 justify-center py-2 text-sm font-medium text-white bg-fuchsia-800 shadow transition hover:bg-fuchsia-700 focus:outline-none focus:ring active:bg-rose-500 flex items-center space-x-2 w-full"
      >
        <span class="text-center">Add to cart</span>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
        </svg>
      </a>
      {{-- <img src="{{ asset('images/heart.png') }}" alt="Heart Icon" class="w-8 h-8 transition hover:scale-110 cursor-pointer" /> --}}
    </div>
  </div>
</article>




{{-- 
<a href="#" class="group relative block overflow-hidden w-80 ">
  <button
    class="absolute end-4 top-4 z-10 rounded-full bg-white p-1.5 text-gray-900 transition hover:text-gray-900/75"
  >
    <span class="sr-only">Wishlist</span>

    <svg
      xmlns="http://www.w3.org/2000/svg"
      fill="none"
      viewBox="0 0 24 24"
      stroke-width="1.5"
      stroke="currentColor"
      class="size-4"
    >
      <path
        stroke-linecap="round"
        stroke-linejoin="round"
        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"
      />
    </svg>
  </button>

  <img
    src="https://images.unsplash.com/photo-1599481238640-4c1288750d7a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2664&q=80"
    alt=""
    class="h-52 w-full object-cover transition duration-500 group-hover:scale-105 sm:h-72"
  />

  <div class="relative border border-gray-100 bg-white p-6">
    <span class="whitespace-nowrap py-1.5 text-xs font-medium"> Category </span>

    <h3 class="mt-4 text-lg font-medium text-gray-900">Robot Toy</h3>

    <p class="mt-1.5 text-sm text-gray-700">$14.99</p>

    <form class="mt-4">
      <button
        class="block w-full rounded bg-yellow-400 p-4 text-sm font-medium transition hover:scale-105"
      >
        Add to Cart
      </button>
    </form>
  </div>
</a> --}}
