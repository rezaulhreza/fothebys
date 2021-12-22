@include('livewire.hero')
          
                
          @if ($lotCount>0) 
            
                  @include('livewire.ongoing')
                  @include('livewire.upocming')


          @else 

          <div
                      class="col-span-4 sm:col-span-4 md:col-span-2 lg:col-span-1 xl:col-span-1 flex flex-col text-center justify-center text-2xl items-center"
                    >
                      We are coming up with interesting lots! Stay Tuned
          </div>
                      @endif
