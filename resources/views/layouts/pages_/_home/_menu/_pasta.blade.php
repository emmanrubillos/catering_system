 {{--? Pasta Menu --}}
 <div id="pasta-menu" class="tab-menu hidden">
    <div class="flex flex-wrap gap-3 mt-3">

      <div class="Left-container flex-grow w-80">
        <div class="flex gap-5 p-2 rounded-lg my-5 bg-white shadow-lg
        ring-2 ring-primary ring-opacity-5">
          <div id="img-food" class="img">
            <img class="w-[230px] h-[120px] rounded-xl shadow-lg"
            src="{{ URL::to('assets/img/Menu/pasta/_carbonara.png') }}" alt="chicken-food-1">
          </div>
          <div class="flex flex-col py-3">
            <h1 class="uppercase font-bold text-md text-dark">
              Carbonara
            </h1>
            <p class="text-sm text-dark">
                Savor the creamy goodness of Carbonara - al dente pasta in a rich
                sauce with eggs, cheese, pancetta, and black pepper, for a comforting meal.
            </p>
          </div>
        </div>

      </div>

      <div class="Right-container flex-grow w-80">
        <div class="flex gap-5 p-2 rounded-lg my-5 bg-white shadow-lg
        ring-2 ring-primary ring-opacity-5">
          <div id="img-food" class="img">
            <img class="w-[230px] h-[120px] rounded-xl shadow-lg"
            src="{{ URL::to('assets/img/Menu/pasta/_spag.png') }}" alt="chicken-food-1">
          </div>
          <div class="flex flex-col py-3">
            <h1 class="uppercase font-bold text-md text-dark">
                Sphagetti
            </h1>
            <p class="text-sm text-dark">
                Savor the classic taste of Spaghetti - al dente pasta tossed in a rich tomato
                 sauce, topped with savory meatballs and grated cheese for a comforting meal.
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>
