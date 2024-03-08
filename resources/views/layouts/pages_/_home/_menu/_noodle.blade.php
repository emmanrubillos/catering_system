{{--? Noodle Menu --}}
<div id="noodle-menu" class="tab-menu hidden">
    <div class="flex flex-wrap gap-3 mt-3">

      <div class="Left-container flex-grow w-80">
        <div class="flex gap-5 p-2 rounded-lg my-5 bg-white shadow-lg
        ring-2 ring-primary ring-opacity-5">
          <div id="img-food" class="img">
            <img class="w-[230px] h-[120px] rounded-xl shadow-lg"
            src="{{ URL::to('assets/img/Menu/noodles/_bam.png') }}" alt="chicken-food-1">
          </div>
          <div class="flex flex-col py-3">
            <h1 class="uppercase font-bold text-md text-dark">
              Special Bam-I
            </h1>
            <p class="text-sm text-dark">
                Savor the fusion delight of Special Bam-I - a medley of bihon and canton noodles
                with assorted veggies and savory meats for a flavorful dish.
            </p>
          </div>
        </div>

        <div class="flex gap-5 p-2 rounded-lg my-5 bg-white shadow-lg
        ring-2 ring-primary ring-opacity-5">
          <div id="img-food" class="img">
            <img class="w-[230px] h-[120px] rounded-xl shadow-lg"
            src="{{ URL::to('assets/img/Menu/noodles/_bihon.png') }}" alt="chicken-food-1">
          </div>
          <div class="flex flex-col py-3">
            <h1 class="uppercase font-bold text-md text-dark">
               Bihon
            </h1>
            <p class="text-sm text-dark">
                Enjoy the simplicity of Bihon - tender rice noodles stir-fried with
                 vegetables and meat, seasoned to perfection for a delicious meal.
            </p>
          </div>
        </div>

      </div>

      <div class="Right-container flex-grow w-80">
        <div class="flex gap-5 p-2 rounded-lg my-5 bg-white shadow-lg
        ring-2 ring-primary ring-opacity-5">
          <div id="img-food" class="img">
            <img class="w-[230px] h-[120px] rounded-xl shadow-lg"
            src="{{ URL::to('assets/img/Menu/noodles/_sotanghon.png') }}" alt="chicken-food-1">
          </div>
          <div class="flex flex-col py-3">
            <h1 class="uppercase font-bold text-md text-dark">
               Sotanghon
            </h1>
            <p class="text-sm text-dark">
                Savor the delicate flavors of Sotanghon - thin glass noodles cooked
                 with vegetables and meat, creating a light and satisfying dish.
            </p>
          </div>
        </div>

      </div>
    </div>
  </div>
