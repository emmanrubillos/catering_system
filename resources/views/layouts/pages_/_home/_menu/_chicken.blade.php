{{--? Chicken Menu --}}
<div id="chicken-menu" class="tab-menu hidden">
  <div class="flex flex-row gap-3 mt-5">

    <div class="Left-container flex flex-col basis-2/5">

      <button id="cp-btn" class="mb-4 flex py-3 px-4 rounded shadow-lg transition ease-in-out hover:border-light
       hover:bg-primary text-dark hover:text-light" data-tab-target="#cp-details">
        <h1 class="before:border-l-4 before:mr-3 before:border-primary-dark text-xxl font-black">
          sample Food
        </h1>
      </button>

      <button id="bc-btn" class="mb-4 flex py-3 px-4 bg-white rounded shadow-lg transition ease-in-out hover:border-light
       hover:bg-primary text-dark hover:text-light" data-tab-target="#bc-details">
        <h1 class="before:border-l-4 before:mr-3 before:border-primary-dark text-xxl font-black">
          Baked Chicken
        </h1>
      </button>

    </div>

    {{-- RIGHT CONTAINER --}}
    <div id="chicken-pandan" class="hidden basis-3/5">
      <div class="Right-container flex flex-col basis-3/5 h-[480px] px-4"> 

        <div class="flex flex-row gap-4">
          <img class="w-[200px] h-[200px] rounded-xl shadow-lg border-primary border-4"
          src="{{ URL::to('assets/img/Menu/chicken/_chickenPandan.png') }}" alt="chicken-food-1">
  
          <div class="flex flex-col self-center">
            <h1 class="before:border-l-8 before:mr-3 before:border-dark text-dark text-[42px] font-black uppercase">
              Chicken Pandan  
            </h1>
            <h4 class="text-dark font-bold text-xl mt-3">
              Dish Type: <span class="bg-primary py-2 px-4 rounded-full text-light text-lg">Chicken</span>
            </h4>
          </div>
        </div>      
  
        <div class="mt-5 h-[250px] overflow-y-scroll pr-3">
          <p class="text-justify text-dark font-bold">
            Chicken Pandan or Pandan Chicken is a delicious Thai chicken dish. Chicken pieces 
            such as drumsticks, wings, and boneless breasts are marinated in a concoction of 
            seasonings and spices then wrapped in Pandan (Screwpine) leaves. This can be cooked 
            in different ways: deep-frying, grilling, and baking.
  
            <br><br>
  
            You might be wondering why the chicken pieces need to be wrapped in Pandan leaves.
            which can increase your appetite level. Have you tried placing Pandan leaves when 
            steaming rice? If you have, that is the same aroma that I’m talking about.
            Aside from looking nice, Pandan leaves provide a sweet enticing aroma to the chicken 
            This Chicken Pandan recipe variation caters more to the Filipino taste; you can call 
            this Pinoy Chicken Pandan, if you want. The secret to a flavorful chicken or meat dish is the marinade. 
            It is important that you let the chicken absorb all the flavors before starting to cook.
            I usually marinate the chicken overnight to infuse all the flavors.
            
            <br><br>
  
            Indulge your taste buds in a culinary adventure with our exquisite Chicken Pandan, 
            where every bite promises a symphony of flavors. Crispy and golden on the outside, 
            yet irresistibly tender on the inside, it's a culinary marvel that tantalizes the senses. 
            Infused with the delicate essence of aromatic pandan leaves, each morsel offers a uniquely
            delightful experience, elevating this dish to new heights of gastronomic excellence. 
            Whether you're a connoisseur of fine dining or simply seeking a memorable meal, our Chicken 
            Pandan is sure to leave a lasting impression, satisfying your cravings and igniting a passion 
            for exquisite cuisine.
          </p>
        </div>
  
      </div>
    </div>

    <div id="baked-chicken" class="hidden basis-3/5">
      <div class="Right-container flex flex-col basis-3/5 h-[480px] px-4">

        <div class="flex flex-row gap-4">
          <img class="w-[200px] h-[200px] rounded-xl shadow-lg border-primary border-4"
          src="{{ URL::to('assets/img/Menu/chicken/_bakedChicken.png') }}" alt="chicken-food-1">
  
          <div class="flex flex-col self-center">
            <h1 class="before:border-l-8 before:mr-3 before:border-dark text-dark text-[42px] font-black uppercase">
              Baked Chicken  
            </h1>
            <h4 class="text-dark font-bold text-xl mt-3">
              Dish Type: <span class="bg-primary py-2 px-4 rounded-full text-light text-lg">Chicken</span>
            </h4>
          </div>
        </div>      
  
        <div class="mt-5 h-[250px] overflow-y-scroll pr-3">
          <p class="text-justify text-dark font-bold">
            Chicken Pandan or Pandan Chicken is a delicious Thai chicken dish. Chicken pieces 
            such as drumsticks, wings, and boneless breasts are marinated in a concoction of 
            seasonings and spices then wrapped in Pandan (Screwpine) leaves. This can be cooked 
            in different ways: deep-frying, grilling, and baking.
  
            <br><br>
  
            You might be wondering why the chicken pieces need to be wrapped in Pandan leaves.
            which can increase your appetite level. Have you tried placing Pandan leaves when 
            steaming rice? If you have, that is the same aroma that I’m talking about.
            Aside from looking nice, Pandan leaves provide a sweet enticing aroma to the chicken 
            This Chicken Pandan recipe variation caters more to the Filipino taste; you can call 
            this Pinoy Chicken Pandan, if you want. The secret to a flavorful chicken or meat dish is the marinade. 
            It is important that you let the chicken absorb all the flavors before starting to cook.
            I usually marinate the chicken overnight to infuse all the flavors.
            
            <br><br>
  
            Indulge your taste buds in a culinary adventure with our exquisite Chicken Pandan, 
            where every bite promises a symphony of flavors. Crispy and golden on the outside, 
            yet irresistibly tender on the inside, it's a culinary marvel that tantalizes the senses. 
            Infused with the delicate essence of aromatic pandan leaves, each morsel offers a uniquely
            delightful experience, elevating this dish to new heights of gastronomic excellence. 
            Whether you're a connoisseur of fine dining or simply seeking a memorable meal, our Chicken 
            Pandan is sure to leave a lasting impression, satisfying your cravings and igniting a passion 
            for exquisite cuisine.
          </p>
        </div>
  
      </div>
    </div>

  </div>
</div>

{{-- <div id="img-food" class="img">
  <img class="w-[230px] h-[120px] rounded-xl shadow-lg"
  src="{{ URL::to('assets/img/Menu/chicken/_chickenPandan.png') }}" alt="chicken-food-1">
</div>
<div class="flex flex-col py-3">
  <h1 class="uppercase font-bold text-md text-dark">
    Chicken Pandan
  </h1>
  <p class="text-sm text-dark">
      Crispy on the outside, tender on the inside -
      our Chicken Pandan is a flavorful delight,
      infused with aromatic pandan leaves for a uniquely delicious experience.
  </p>
</div> --}}



{{-- <div class="Left-container flex-grow w-80">
  <div class="flex gap-5 p-2 rounded-lg my-5 bg-white shadow-lg
  ring-2 ring-primary ring-opacity-5">
    <div id="img-food" class="img">
      <img class="w-[230px] h-[120px] rounded-xl shadow-lg"
      src="{{ URL::to('assets/img/Menu/chicken/_chickenPandan.png') }}" alt="chicken-food-1">
    </div>
    <div class="flex flex-col py-3">
      <h1 class="uppercase font-bold text-md text-dark">
        Chicken Pandan
      </h1>
      <p class="text-sm text-dark">
          Crispy on the outside, tender on the inside -
          our Chicken Pandan is a flavorful delight,
          infused with aromatic pandan leaves for a uniquely delicious experience.
      </p>
    </div>
  </div>


  <div class="flex gap-5 p-2 rounded-lg my-5 bg-white shadow-lg
  ring-2 ring-primary ring-opacity-5">
    <div id="img-food" class="img">
      <img class="w-[230px] h-[120px] rounded-xl shadow-lg"
      src="{{ URL::to('assets/img/Menu/chicken/_bakedChicken.png') }}" alt="chicken-food-1">
    </div>
    <div class="flex flex-col py-3">
      <h1 class="uppercase font-bold text-md text-dark">
        Baked Chicken
      </h1>
      <p class="text-sm text-dark">
          Experience the mouthwatering delight of our expertly baked chicken –
          tender, flavorful, and irresistibly juicy, it's a true culinary masterpiece.
      </p>
    </div>
  </div>

  <div class="flex gap-5 p-2 rounded-lg my-5 bg-white shadow-lg
  ring-2 ring-primary ring-opacity-5">
    <div id="img-food" class="img">
      <img class="w-[230px] h-[120px] rounded-xl shadow-lg"
      src="{{ URL::to('assets/img/Menu/chicken/_chickenAfritada.png') }}" alt="chicken-food-1">
    </div>
    <div class="flex flex-col py-3">
      <h1 class="uppercase font-bold text-md text-dark">
          Chicken Afritada
      </h1>
      <p class="text-sm text-dark">
          Savor the comforting flavors of Chicken Afritada -
          a delicious Filipino stew simmered with
          tender chicken, vegetables, and savory tomato sauce.
      </p>
    </div>
  </div>

  <div class="flex gap-5 p-2 rounded-lg my-5 bg-white shadow-lg
  ring-2 ring-primary ring-opacity-5">
    <div id="img-food" class="img">
      <img class="w-[230px] h-[120px] rounded-xl shadow-lg"
      src="{{ URL::to('assets/img/Menu/chicken/_chickenGalantana.png') }}" alt="chicken-food-1">
    </div>
    <div class="flex flex-col py-3">
      <h1 class="uppercase font-bold text-md text-dark">
          Chicken Galantana
      </h1>
      <p class="text-sm text-dark">
      Savor the rich flavors of Chicken Galantana,
      a Filipino delicacy of tender chicken infused with
      aromatic spices, delivering a savory delight in every bite.
      </p>
    </div>
  </div>

  <div class="flex gap-5 p-2 rounded-lg my-5 bg-white shadow-lg
  ring-2 ring-primary ring-opacity-5">
    <div id="img-food" class="img">
      <img class="w-[230px] h-[120px] rounded-xl shadow-lg"
      src="{{ URL::to('assets/img/Menu/chicken/_chickenlollipop.png') }}" alt="chicken-food-1">
    </div>
    <div class="flex flex-col py-3">
      <h1 class="uppercase font-bold text-md text-dark">
          Chicken lollipop
      </h1>
      <p class="text-sm text-dark">
          Savor the succulent delight of Chicken Lollipops -
          perfectly seasoned drumettes, fried to perfection,
          and served with a tantalizing dipping sauce.
      </p>
    </div>
  </div>

  <div class="flex gap-5 p-2 rounded-lg my-5 bg-white shadow-lg
  ring-2 ring-primary ring-opacity-5">
    <div id="img-food" class="img">
      <img class="w-[230px] h-[120px] rounded-xl shadow-lg"
      src="{{ URL::to('assets/img/Menu/chicken/_chickenCordonBleu.png') }}" alt="chicken-food-1">
    </div>
    <div class="flex flex-col py-3">
      <h1 class="uppercase font-bold text-md text-dark">
          Chicken Cordon Bleu
      </h1>
      <p class="text-sm text-dark">
          Indulge in the classic delight
          tender chicken breast stuffed with ham and cheese,
          breaded and fried to golden perfection for a decadent dining experience.
      </p>
    </div>
  </div>

  <div class="flex gap-5 p-2 rounded-lg my-5 bg-white shadow-lg
  ring-2 ring-primary ring-opacity-5">
    <div id="img-food" class="img">
      <img class="w-[230px] h-[120px] rounded-xl shadow-lg"
      src="{{ URL::to('assets/img/Menu/chicken/_ChickenCreamyMushroom.png') }}" alt="chicken-food-1">
    </div>
    <div class="flex flex-col py-3">
      <h1 class="uppercase font-bold text-md text-dark">
          Chicken Creamy with Mushroom Sauce
      </h1>
      <p class="text-sm text-dark">
          Enjoy the savory delight of Chicken Creamy with Mushroom Sauce -
            tender chicken bathed in a rich, velvety sauce, delivering a burst of flavor in every bite.
      </p>
    </div>
  </div>




</div> --}}

{{-- <div class="Right-container flex-grow w-80">
  <div class="flex gap-5 p-2 rounded-lg my-5 bg-white shadow-lg
  ring-2 ring-primary ring-opacity-5">
    <div id="img-food" class="img">
      <img class="w-[230px] h-[120px] rounded-xl shadow-lg"
      src="{{ URL::to('assets/img/Menu/chicken/_buffalo.png') }}" alt="chicken-food-1">
    </div>
    <div class="flex flex-col py-3">
      <h1 class="uppercase font-bold text-md text-dark">
          Buffalo Chicken
      </h1>
      <p class="text-sm text-dark">
          Savor the fiery kick of Buffalo Chicken: tender chicken in spicy buffalo sauce,
            served with cool ranch or blue cheese dressing for the perfect balance.
      </p>
    </div>
  </div>


  <div class="flex gap-5 p-2 rounded-lg my-5 bg-white shadow-lg
  ring-2 ring-primary ring-opacity-5">
    <div id="img-food" class="img">
      <img class="w-[230px] h-[120px] rounded-xl shadow-lg"
      src="{{ URL::to('assets/img/Menu/chicken/_butteredchicken.png') }}" alt="chicken-food-1">
    </div>
    <div class="flex flex-col py-3">
      <h1 class="uppercase font-bold text-md text-dark">
        Buttered Chicken
      </h1>
      <p class="text-sm text-dark">
          Savor the indulgent flavor of Buttered Chicken -
          tender chicken pieces cooked in a rich buttery sauce,
          for a mouthwatering experience.
      </p>
    </div>
  </div>

  <div class="flex gap-5 p-2 rounded-lg my-5 bg-white shadow-lg
  ring-2 ring-primary ring-opacity-5">
    <div id="img-food" class="img">
      <img class="w-[230px] h-[120px] rounded-xl shadow-lg"
      src="{{ URL::to('assets/img/Menu/chicken/_chickenCury.png') }}" alt="chicken-food-1">
    </div>
    <div class="flex flex-col py-3">
      <h1 class="uppercase font-bold text-md text-dark">
        Chicken Cury
      </h1>
      <p class="text-sm text-dark">
          Enjoy the comforting taste of Chicken Curry with Gata -
            tender chicken cooked in a creamy coconut milk sauce
            for a rich and flavorful dish.
      </p>
    </div>
  </div>

  <div class="flex gap-5 p-2 rounded-lg my-5 bg-white shadow-lg
  ring-2 ring-primary ring-opacity-5">
    <div id="img-food" class="img">
      <img class="w-[230px] h-[120px] rounded-xl shadow-lg"
      src="{{ URL::to('assets/img/Menu/chicken/_chickenSquare.png') }}" alt="chicken-food-1">
    </div>
    <div class="flex flex-col py-3">
      <h1 class="uppercase font-bold text-md text-dark">
          Chicken Square
      </h1>
      <p class="text-sm text-dark">
          Discover the delightful
          tender, seasoned chicken grilled to perfection, served
            in bite-sized squares for a satisfying snack or meal.
      </p>
    </div>
  </div>

  <div class="flex gap-5 p-2 rounded-lg my-5 bg-white shadow-lg
  ring-2 ring-primary ring-opacity-5">
    <div id="img-food" class="img">
      <img class="w-[230px] h-[120px] rounded-xl shadow-lg"
      src="{{ URL::to('assets/img/Menu/chicken/_chickenRoll.png') }}" alt="chicken-food-1">
    </div>
    <div class="flex flex-col py-3">
      <h1 class="uppercase font-bold text-md text-dark">
          Chicken Roll
      </h1>
      <p class="text-sm text-dark">
          Savor the delicious simplicity of Chicken Roll -
            tender chicken wrapped around savory fillings,
            offering a delightful burst of flavor in every bite.
      </p>
    </div>
  </div>

  <div class="flex gap-5 p-2 rounded-lg my-5 bg-white shadow-lg
  ring-2 ring-primary ring-opacity-5">
    <div id="img-food" class="img">
      <img class="w-[230px] h-[120px] rounded-xl shadow-lg"
      src="{{ URL::to('assets/img/Menu/chicken/_chickenLemonOrange.png') }}" alt="chicken-food-1">
    </div>
    <div class="flex flex-col py-3">
      <h1 class="uppercase font-bold text-md text-dark">
          Chicken Lemon Orange
      </h1>
      <p class="text-sm text-dark">
          Savor the tangy goodness of Chicken Lemon Orange -
          tender chicken infused with zesty lemon and orange flavors for a refreshing twist.
      </p>
    </div>
  </div>


  <div class="flex gap-5 p-2 rounded-lg my-5 bg-white shadow-lg
  ring-2 ring-primary ring-opacity-5">
    <div id="img-food" class="img">
      <img class="w-[230px] h-[120px] rounded-xl shadow-lg"
      src="{{ URL::to('assets/img/Menu/chicken/_chickenGalantina.png') }}" alt="chicken-food-1">
    </div>
    <div class="flex flex-col py-3">
      <h1 class="uppercase font-bold text-md text-dark">
          Chicken Galantina
      </h1>
      <p class="text-sm text-dark">
          Enjoy the savory goodness of Chicken Galantina -
          tender chicken crafted into a flavorful Filipino classic,
          perfect for any occasion.
      </p>
    </div>
  </div>


</div> --}}
