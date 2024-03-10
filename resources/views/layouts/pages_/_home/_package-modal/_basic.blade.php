 {{--? Basic Wedding Package Modal --}}
 <div id="modal-basic-info" class="hidden">
    <div class="h-screen w-full fixed left-0 top-0 flex justify-center items-center  bg-dark bg-opacity-50 z-40">
      <div class="bg-light rounded shadow-lg w-[70rem]">
        {{--? Modal Header --}}  
        <div class="border-b px-4 py-2 flex justify-between">
          <h1 class="uppercase font-bold text-dark text-xl">BASIC PACKAGE | <span class="text-primary">₱ 120,000.00</span></h1>
          <lord-icon
              src="https://cdn.lordicon.com/zxvuvcnc.json"
              trigger="hover"
              state="hover-cross-2"
              colors="primary:#FF731D"
              style="width:40px;height:40px"
              class="basic-modal-exit">
          </lord-icon>
        </div>
        {{--? Modal Body  --}}
        <div class="px-10 py-5">

          <div class="flex flex-row gap-5">

            {{--? Col-1 --}}
            <div class="basis-3/3 mr-3">
              <h6 class="text-dark font-bold text-sm uppercase">
                Whole Set Entourage Attire
                <lord-icon
                    src="https://cdn.lordicon.com/jnzhohhs.json"
                    trigger="hover"
                    colors="primary:#181d50"
                    style="width:15px;height:15px">
                </lord-icon>
              </h6>
              <ul class="list-disc list-inside text-dark font-semibold text-sm"> 
                <li>Bride Gown</li>
                <li>Groom Suit</li>
                <li>Maid of Honor</li>
                <li>Best Man</li>
                <li class="w-[215px] items-center rounded-md mb-1 bg-primary px-2 py-1 text-xs font-bold text-light">
                  3 Bridesmaids & Flower Girls</li>
                <li class="w-[215px] items-center rounded-md bg-primary px-2 py-1 text-xs font-bold text-light">
                  3 Groomsmen & Bearers</li>
                <li>Ring Bearer</li>
                <li>2 Mother & Father</li>
                <ul class="list-inside">
                  <span class="font-bold">Accessories:</span>
                  <li>- Veils, Pillow, Garter</li>
                  <li>- Cord, Arrhea, Mannequin </li>
                </ul>
              </ul>

              <h6 class="text-dark font-bold text-base uppercase mt-1">
                Bouquet & Corsage
                <lord-icon
                    src="https://cdn.lordicon.com/jnzhohhs.json"
                    trigger="hover"
                    colors="primary:#181d50"
                    style="width:15px;height:15px">
                </lord-icon>
              </h6>
              <ul class="mt-1 list-disc list-inside text-dark font-semibold text-sm"> 
                
                <ul class="list-inside">
                  <span class="font-bold">Bouquet:</span>
                  <li>- Bridal Bouquet</li>
                  <li>- Maid of Honor</li>
                  <li class="w-[125px] items-center rounded-md mb-1 bg-primary px-2 py-1 text-xs font-bold text-light">
                    - 3 Bridesmaids</li>
                  <li class="w-[125px] items-center rounded-md bg-primary px-2 py-1 text-xs font-bold text-light">
                    - 3 Flower Basket</li>
                  <li>- 2 Mothers</li>
                </ul>
                <ul class="list-inside">
                  <span class="font-bold">Corsage:</span>
                  <li>- Groom</li>
                  <li>- Best Man</li>
                  <li class="w-[110px] items-center rounded-md mb-1 bg-primary px-2 py-1 text-xs font-bold text-light">
                    - 3 Groomsmen</li>
                  <li class="w-[80px] items-center rounded-md mb-1 bg-primary px-2 py-1 text-xs font-bold text-light">
                    - 3 Bearers</li>
                  <li>- 2 Fathers</li>
                  <li>- Unli-Principal Sponsors</li>
                </ul>
                

              </ul>

            </div>
            
            {{--? Col-2 --}}
            <div class="basis-[25%]">
              <h6 class="text-dark font-bold text-md uppercase">
                Foods & Catering
                <lord-icon
                    src="https://cdn.lordicon.com/jnzhohhs.json"
                    trigger="hover"
                    colors="primary:#181d50"
                    style="width:15px;height:15px">
                </lord-icon>
              </h6>
              <ul class="mt-1 list-disc list-inside text-dark font-semibold text-sm"> 
                
                <li class="w-[105px] items-center rounded-md mb-1 bg-primary px-2 py-1 text-xs font-bold text-light">
                  3 Main Dish</li>
                <li class="w-[105px] items-center rounded-md bg-primary px-2 py-1 text-xs font-bold text-light">
                  1 Side Dish</li>
                
                  <ul class="list-inside">
                    <span class="font-bold">One Round:</span>
                    <li>- Soft Drink</li>
                    <li>- Dessert</li>
                    <li>- Rice</li>
                  </ul>
                  <ul class="list-inside">
                    <span class="font-bold">Seated Buffet:</span>
                    <li>- Presidential</li>
                  </ul>
                <ul class="list-inside">
                  <span class="font-bold">Table Setup:</span>
                  <li>- Couple Table</li>
                  <li>- Parents Table</li>
                  <li>- Presidential Table</li>
                  <li>- Guest Table</li>
                </ul>
              </ul>
              
              <h6 class="text-dark font-bold text-md uppercase">
                Freebies
                <lord-icon
                    src="https://cdn.lordicon.com/jnzhohhs.json"
                    trigger="hover"
                    colors="primary:#181d50"
                    style="width:15px;height:15px">
                </lord-icon>
              </h6>
              <ul class="mt-1 list-disc list-inside text-dark font-semibold text-sm"> 
                
                <li>Bridal Car</li>
                <li class="w-[130px] items-center rounded-md  bg-primary px-2 py-1 text-xs font-bold text-light">
                  Tiffany Chairs</li>
                <li class="w-[130px] items-center rounded-md my-1 bg-primary px-2 py-1 text-xs font-bold text-light">
                  Wedding Cake</li>
                <li class="w-[130px] items-center rounded-md bg-primary px-2 py-1 text-xs font-bold text-light">
                  1 Bottle of Wine</li>

              </ul>

            </div>

            {{--? Col-3 --}}
            <div class="basis-3/3">
              <h6 class="text-dark font-bold text-base uppercase">
                Church Decoration
                <lord-icon
                    src="https://cdn.lordicon.com/jnzhohhs.json"
                    trigger="hover"
                    colors="primary:#181d50"
                    style="width:15px;height:15px">
                </lord-icon>
              </h6>
              <ul class="mt-1 list-disc list-inside text-dark font-semibold text-sm"> 
                
                <li>Flowers</li>
                <li>Arch Entrance</li>
                <li>Candle for Matrimonial</li>
                <li class="w-[220px] items-center rounded-md my-1 bg-primary px-2 py-1 text-xs font-bold text-light">
                  Flowers Stand for Aisles <span class="text-[9.5px] text-light-mild">(Ordinary)</span>
                </li>
                <li>Red Carpet</li>
                <li>Bridal Car Decoration</li>
                
      
              </ul>
              <h6 class="text-dark font-bold text-base uppercase mt-1">
                Reception Decoration
                <lord-icon
                    src="https://cdn.lordicon.com/jnzhohhs.json"
                    trigger="hover"
                    colors="primary:#181d50"
                    style="width:15px;height:15px">
                </lord-icon>
              </h6>
              <ul class="mt-1 list-disc list-inside text-dark font-semibold text-sm"> 
                
                <li>Presidential Table</li>
                <li>Arch Entrance</li>
                <li>Table Center Pieces</li>
                <li>Backdrop</li>
                <li>Couple Name/Initials</li>
                <li>Love Seat</li>
                <li>Red Carpet</li>                  
      
              </ul>

              <h6 class="text-dark font-bold text-sm uppercase mt-1">
                Program & Entertainment
                <lord-icon
                    src="https://cdn.lordicon.com/jnzhohhs.json"
                    trigger="hover"
                    colors="primary:#181d50"
                    style="width:15px;height:15px">
                </lord-icon>
              </h6>
              <ul class="mt-1 list-disc list-inside text-dark font-semibold text-sm"> 
                
                <li>Church & Reception Host</li>

              </ul>

              <h6 class="text-dark font-bold text-sm uppercase mt-2">
                Full Coordination
                <lord-icon
                    src="https://cdn.lordicon.com/jnzhohhs.json"
                    trigger="hover"
                    colors="primary:#181d50"
                    style="width:15px;height:15px">
                </lord-icon>
              </h6>
              <ul class="mt-1 list-disc list-inside text-dark font-semibold text-sm"> 
                
                <li class="w-[200px] items-center rounded-md bg-primary px-2 py-1 text-xs font-bold text-light">
                  Full Coordination <span class="text-light-dark text-[9.5px]">(on the Day)</span></li>
                <li class="w-[150px] items-center rounded-md my-1 bg-primary px-2 py-1 text-xs font-bold text-light">
                  1 Head Coordinator</li>
                <li class="w-[110px] items-center rounded-md bg-primary px-2 py-1 text-xs font-bold text-light">
                  3 Assistants  </li>

              </ul>
            </div>
            
            {{--? Col-4 --}}
            <div class="basis-3/3">

              <h6 class="text-dark font-bold text-sm uppercase">
                Photographic & Videographic
                <lord-icon
                    src="https://cdn.lordicon.com/jnzhohhs.json"
                    trigger="hover"
                    colors="primary:#181d50"
                    style="width:15px;height:15px">
                </lord-icon>
              </h6>
              <ul class="mt-1 list-disc list-inside text-dark font-semibold text-sm"> 
                <li class="w-[190px] items-center rounded-md mb-1 bg-primary px-2 py-1 text-xs font-bold text-light">
                    Prenup Photo (2-3 Sets)</li>
                <li>Photo & View Coverage</li>
                <li>Wedding Day Photo <br>
                  <span class="text-xsm">(Preparation Reception & Unlimited Shots)</span>
                </li>
                <li>Photo Highlights <br>
                  <span class="text-xsm">(will be uploaded to Facebook)</span>
                </li>
                <li class="w-[190px] my-1 items-center rounded-md bg-primary px-2 py-1 text-xs font-bold text-light">
                  16GB Flash Drive Storage</li>
              </ul>

              <h6 class="text-dark font-bold text-base uppercase mt-1">
                Hair and Make-up
                <lord-icon
                    src="https://cdn.lordicon.com/jnzhohhs.json"
                    trigger="hover"
                    colors="primary:#181d50"
                    style="width:15px;height:15px">
                </lord-icon>
              </h6>
              <ul class="mt-1 list-disc list-inside text-dark font-semibold text-sm"> 
                
                <li>Prenup</li>
                <li>Bride</li>
                <li>Maid of Honor</li>
                <li>2 Mothers</li>
                <li class="w-[125px] items-center rounded-md mb-1 bg-primary px-2 py-1 text-xs font-bold text-light">
                  3 Bridesmaids</li>
                <li class="w-[125px] items-center rounded-md bg-primary px-2 py-1 text-xs font-bold text-light">
                  3 Flower Girls</li>

              </ul>

              <img class="bg-primary p-4 rounded-xl shadow-xl mt-3 w-[200px]"
              src="{{ URL::to('assets/img/package/basic-150px.png') }}" alt="basic-package-img">
            </div>
          </div>

        </div>
  
      </div>
    </div>
  </div>