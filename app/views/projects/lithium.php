<section class="items-center justify-center ">
  <div class="bg-black text-white mx-14 my-10 text-center">
    <div
      class="mx-auto max-w-screen-xl px-4 pt-32 pb-8 lg:flex lg:items-center"
      >
      <div class="mx-auto max-w-xl text-center">
        <h1 class="text-3xl font-extrabold sm:text-5xl">
          A tiny PHP framework,
          <strong class="h-20 font-extrabold text-6xl bg-clip-text text-transparent bg-gradient-to-l from-pink-500 via-red-500 to-yellow-500 sm:block">
          Lithium
          </strong>
        </h1>
        <img
          src="/api/getAsset/img/lithium"
          alt=" =Lithium"
          class="rounded-lg max-w-xl hidden md:block"
          >
        <div class="mt-8 flex flex-wrap justify-center gap-4">
          <a href="#readmore" class="relative inline-flex items-center justify-center inline-block p-4 px-5 py-3 overflow-hidden font-medium text-indigo-600 rounded-lg shadow-2xl group">
          <span class="absolute top-0 left-0 w-40 h-40 -mt-10 -ml-3 transition-all duration-700 bg-red-500 rounded-full blur-md ease"></span>
          <span class="absolute inset-0 w-full h-full transition duration-700 group-hover:rotate-180 ease">
          <span class="absolute bottom-0 left-0 w-24 h-24 -ml-10 bg-purple-500 rounded-full blur-md"></span>
          <span class="absolute bottom-0 right-0 w-24 h-24 -mr-10 bg-pink-500 rounded-full blur-md"></span>
          </span>
          <span class="relative text-white">Read more</span>
          </a>
          <a href="#download" class="relative inline-flex items-center justify-center inline-block p-4 px-5 py-3 overflow-hidden font-medium text-indigo-600 rounded-lg shadow-2xl group">
          <span class="absolute top-0 left-0 w-40 h-40 -mt-10 -ml-3 transition-all duration-700 bg-purple-500 rounded-full blur-md ease"></span>
          <span class="absolute inset-0 w-full h-full transition duration-700 group-hover:rotate-180 ease">
          <span class="absolute bottom-0 left-0 w-24 h-24 -ml-10 bg-sky-500 rounded-full blur-md"></span>
          <span class="absolute bottom-0 right-0 w-24 h-24 -mr-10 bg-indigo-500 rounded-full blur-md"></span>
          </span>
          <span class="relative text-white">Download</span>
          </a>
        </div>
      </div>
    </div>
    <section>
      <div
        class="mx-auto max-w-screen-xl px-4 py-8 sm:py-12 sm:px-6 lg:py-16 lg:px-8" id="readmore"
        >
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-2 lg:gap-16">
          <div
            class="relative h-64 overflow-hidden py-20 sm:h-80 lg:order-last lg:h-full"
            >
            <div class="px-2 py-2 bg-gray-900 rounded-lg hidden md:block">
              <p class="text-gray-500">// $router = new instance of the router (this part is in /public/index.php)</p>
              <p><span class="text-gray-400">$router</span> = <span class="text-orange-400">new</span> <span class="text-gray-400">\</span>Unified<span class="text-gray-400">\</span>Lithium<span class="">\</span>Router<span class="text-gray-400">\</span><span class="text-sky-400">RouteHandler</span><span class="text-yellow-400">()</span>;</p>
              <br>
              <p class="text-gray-500">// This part should go to /app/routes/web.php</p>
              <p><span class="text-gray-400">$router</span><span class="text-orange-600">→</span><span class="text-orange-400">addRoute</span><span class="text-yellow-300">(</span><span class="text-green-400">'GET'</span>, <span class="text-green-400">'/'</span>, <span class="text-orange-500">function</span>, <span class="text-purple-500">() {</span> <span class="text-red-400">echo</span> <span class="text-green-400">"Hello world!"</span>; <span class="text-purple-500">}</span> <span class="text-yellow-300">)</span>;</p>
              <br>
              <p class="text-gray-500">// Handle the request (this part is in /public/index.php)</p>
              <p><span class="text-gray-400">$router</span> = $_SERVER<span class="text-yellow-400">[</span><span class="text-green-400">'REQUEST_METHOD'</span><span class="text-yellow-400">]</span>;</p>
              <p><span class="text-gray-400">$router</span> = <span class="text-red-400">parse_url</span><span class="text-yellow-400">(</span>$_SERVER<span class="text-yellow-400">[</span><span class="text-green-400">'REQUEST_URI'</span>, <i class="text-red-300">PHP_URL_PATH</i><span class="text-yellow-400">]</span><span class="text-yellow-400">)</span>;</p>
              <p><span class="text-gray-400">$router</span><span class="text-orange-600">→</span><span class="text-orange-400">handle</span><span class="text-yellow-300">(</span>$method, $url<span class="text-yellow-300">)</span>;</p>
            </div>
            <p class="text-xs text-gray-600 hidden md:block">* The snippet above uses the arrow unicode symbol, when using the framework use "->"</p>
          </div>
          <div class="lg:py-24">
            <h2 class="text-3xl font-bold sm:text-4xl">Routing library</h2>
            <p class="mt-4 mb-4 text-gray-300">
              Lithium has an advanced routing library.
              It supports both normal routes, using functions
              to handle the request and MVC(s), using controllers.
              It will also only allow a request to be made by the method specified.<br>
              For example, a POST route will not be accessible with a GET request.
            </p>
            <a
              class="group relative inline-block text-sm font-medium text-white focus:outline-none focus:ring"
              href="#download"
              >
            <span
              class="absolute inset-0 border border-white group-active:border-gray-400"
              ></span>
            <span
              class="block border text-black border-white bg-white px-8 py-2 transition-transform active:border-gray-400 active:bg-gray-400 group-hover:-translate-x-1 group-hover:-translate-y-1"
              >
            Download lithium!
            </span>
            </a>
          </div>
        </div>
      </div>
    </section>
    <div
      class="mx-auto max-w-screen-xl px-4 py-8 lg:flex lg:items-center" id="download"
      >
      <div class="mx-auto max-w-xl text-center">
        <h1 class="text-3xl font-extrabold sm:text-3xl">
          <strong class="text-5xl font-extrabold bg-clip-text text-transparent bg-gradient-to-l from-pink-500 via-red-500 to-yellow-500 sm:block">
          Download lithium
          </strong>
        </h1>
        <div class="py-4">
          <a
            class="group relative inline-block text-sm font-medium text-white focus:outline-none focus:ring active:text-gray-400"
            href="https://github.com/unifiedorg/lithium/releases/tag/v0.5.0"
            >
          <span class="absolute inset-0 border border-current"></span>
          <span
            class="block border border-current bg-black px-8 py-2 transition-transform group-hover:-translate-x-1 group-hover:-translate-y-1"
            >
          v0.5.0 (Outdated)
          </span>
          </a>

          <a
              class="group relative inline-block text-sm font-medium text-white focus:outline-none focus:ring"
              href="https://github.com/unifiedorg/lithium-php/releases/tag/v1.0.0"
              >
            <span
              class="absolute inset-0 border border-white group-active:border-gray-400"
              ></span>
            <span
              class="block border text-black border-white bg-white px-8 py-2 transition-transform active:border-gray-400 active:bg-gray-400 group-hover:-translate-x-1 group-hover:-translate-y-1"
              >
            v1.0.0 (Recommended)
            </span>
            </a>
        </div>
      </div>
    </div>
  </div>
</section>
