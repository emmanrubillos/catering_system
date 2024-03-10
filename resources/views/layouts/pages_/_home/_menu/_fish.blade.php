{{--? Fish Menu --}}
<div id="fish-menu" class="tab-menu hidden">
    <div class="flex flex-wrap gap-3 mt-3">
        {{-- Left Container --}}
      <div class="Left-container flex-grow w-80">
        <div class="flex gap-5 p-2 rounded-lg my-5 bg-white shadow-lg
        ring-2 ring-primary ring-opacity-5">
          <div id="img-food" class="img">
            <img class="w-[230px] h-[120px] rounded-xl shadow-lg"
            src="{{ URL::to('assets/img/Menu/fish/_fillet.jpg') }}" alt="chicken-food-1">
          </div>
          <div class="flex flex-col py-3">
            <h1 class="uppercase font-bold text-md text-dark">
              Fish Fillet
            </h1>
            <p class="text-sm text-dark">
                Indulge in the delicate flavor of Fish Fillet - tender fillets of fish,
                lightly seasoned and cooked to perfection for a satisfying meal.
            </p>
          </div>
        </div>

        <div class="flex gap-5 p-2 rounded-lg my-5 bg-white shadow-lg
        ring-2 ring-primary ring-opacity-5">
          <div id="img-food" class="img">
            <img class="w-[230px] h-[120px] rounded-xl shadow-lg"
            src="{{ URL::to('assets/img/Menu/fish/_tausi.jpg') }}" alt="chicken-food-1">
          </div>
          <div class="flex flex-col py-3">
            <h1 class="uppercase font-bold text-md text-dark">
              Fish Tausi
            </h1>
            <p class="text-sm text-dark">
                Savor the savory goodness of Fish with Tausi - tender fish simmered
                in a flavorful black bean sauce, creating a deliciously satisfying dish.
            </p>
          </div>
        </div>
      </div>

      {{-- Right Container --}}
      <div class="Right-container flex-grow w-80">
        <div class="flex gap-5 p-2 rounded-lg my-5 bg-white shadow-lg
        ring-2 ring-primary ring-opacity-5">
          <div id="img-food" class="img">
            <img class="w-[230px] h-[120px] rounded-xl shadow-lg"
            src="{{ URL::to('assets/img/Menu/fish/_eskabetse.jpg') }}" alt="chicken-food-1">
          </div>
          <div class="flex flex-col py-3">
            <h1 class="uppercase font-bold text-md text-dark">
              Fish Eskabetse
            </h1>
            <p class="text-sm text-dark">
                Experience the tangy-sweet goodness of Fish Escabeche - tender fish
                cooked with bell peppers, onions, and carrots in a flavorful sauce.
            </p>
          </div>
        </div>

        <div class="flex gap-5 p-2 rounded-lg my-5 bg-white shadow-lg
        ring-2 ring-primary ring-opacity-5">
          <div id="img-food" class="img">
            <img class="w-[230px] h-[120px] rounded-xl shadow-lg"
            src="{{ URL::to('assets/img/Menu/fish/_mixedSeafoods.png') }}" alt="chicken-food-1">
          </div>
          <div class="flex flex-col py-3">
            <h1 class="uppercase font-bold text-md text-dark">
              Mixed Seafoods
            </h1>
            <p class="text-sm text-dark">
                Savor a delicious mix of seafood - shrimp, squid, fish, and mussels
                cooked to perfection, offering a delightful taste of the ocean..
            </p>
          </div>
        </div>

      </div>
    </div>
  </div>
