<form action="/" method="get">
    <div class="w-2/3 h-10 pl-3 pr-2 m-2 bg-white border rounded-full flex justify-between items-center relative">
      <input type="search" name="search" id="search" placeholder="Search ongoing auctions"
             class="appearance-none w-full outline-none focus:outline-none active:outline-none"
             value="{{request()->query('search')}}"
             />
      <button type="submit" class="ml-1 outline-none focus:outline-none active:outline-none">
        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
             viewBox="0 0 24 24" class="w-6 h-6">
          <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
        </svg>
      </button>
    </div>
  </form>
  