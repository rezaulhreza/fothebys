<div class="divide-y-4  w-full flex flex-col">
    <section class="text-gray-600 grid place-content-center place-items-center h-screen">
      <section class="flex flex-col gap-12 w-3/4 px-10 py-8 rounded-2xl shadow-xl md:shadow-lg sm:shadow bg-white">
        <h2 class="text-5xl text-center font-semibold">Bulletin</h2>
        <form name="newsletter" class="flex flex-wrap gap-6" action="{{route('newsletter.store')}}" method="post" action="{{route('newsletter.store')}}">
          @csrf
          <div class="w-full py-2 border-b-2 border-gray-400 flex justify-between gap-3">
            <input required type="email" name="email" class="outline-none text-2xl flex-1 px-4 py-3 bg-transparent" placeholder="Enter your email" />
            <button type="submit" class="text-2xl font-semibold text-gray-800 px-4 py-2 rounded-lg hover:bg-gray-300 transition flex items-center justify-center">Sign up</button>
          </div>
          <label class="w-full flex items-baseline gap-3 font-semibold text-lg">
            <input type="checkbox" required value="policy-read" />
            <span>By subscribing to our bulettin, you acknowledge you have read, understood and agree to abide by <a href="#" class="underline">our personal data policy</a>.</span>
          </label>
        </form>
      </section>
    </section>
  </div>
