<script>
    const tabs = document.querySelectorAll('[data-tab-target]');
    const activeClassBg = 'bg-primary-dark'; // Background Color
    const activeClassCt = 'text-light-mild'; // Text Color

    // Select the Main Dish Class
    tabs[0].classList.add(activeClassBg)
    tabs[0].classList.add(activeClassCt)
    
     // Add event Listener to each tab
     tabs.forEach(tab => {
        tab.addEventListener('click', ()=>{
            const targetContent = document.querySelector(tab.dataset.tabTarget);
            // console.log(targetContent)

            // Remove the active class bg-primary from all button
            document.querySelectorAll('.bg-primary-dark').forEach(activeTab => activeTab.classList.remove(activeClassBg));
            // Add the active class to the click tab button
            tab.classList.add(activeClassBg)

            // Remove the active class text-light from all button
            document.querySelectorAll('.text-light-mild').forEach(activeTab => activeTab.classList.remove(activeClassCt));
            // Add the active class to the click tab button
            tab.classList.add(activeClassCt)

        })
    })

    document.addEventListener("DOMContentLoaded", function() {
        // Show Chicken Menu by default
        document.getElementById("chicken-menu").classList.remove("hidden");
        document.getElementById("chicken-btn").classList.add(activeClassBg);
        document.getElementById("chicken-btn").classList.add(activeClassCt);

        document.getElementById("chicken-pandan").classList.remove("hidden");
        document.getElementById("cp-btn").classList.add(activeClassCt);
        document.getElementById("cp-btn").classList.add(activeClassBg);

        // Add event listeners to header tabs
        document.getElementById("main-dish-tab").addEventListener("click", function() {
            document.getElementById("chicken-btn").classList.add(activeClassBg);
            document.getElementById("chicken-btn").classList.add(activeClassCt);
            document.getElementById("cp-btn").classList.add(activeClassBg);
            document.getElementById("cp-btn").classList.add(activeClassCt);
            showMainDishMenu();
        });

        document.getElementById("appetizer-dish-tab").addEventListener("click", function() {
            document.getElementById("vegetable-btn").classList.add(activeClassBg);
            document.getElementById("vegetable-btn").classList.add(activeClassCt);
            showAppetizerDishMenu();
        });

        // Add event listener to Sub-header tabs for Main Dish
        document.getElementById("chicken-btn").addEventListener("click", function(){
            document.getElementById("main-dish-tab").classList.add(activeClassBg);
            document.getElementById("main-dish-tab").classList.add(activeClassCt);
            document.getElementById("cp-btn").classList.add(activeClassBg);
            document.getElementById("cp-btn").classList.add(activeClassCt);
            document.getElementById("bc-btn").classList.add('bg-white');
            document.getElementById("cp-btn").classList.remove('bg-white');
            showChickenMenu();
        });
        document.getElementById("beef-btn").addEventListener("click", function(){
            document.getElementById("main-dish-tab").classList.add(activeClassBg);
            document.getElementById("main-dish-tab").classList.add(activeClassCt);
            showBeefMenu();
        });
        document.getElementById("pork-btn").addEventListener("click", function(){
            document.getElementById("main-dish-tab").classList.add(activeClassBg);
            document.getElementById("main-dish-tab").classList.add(activeClassCt);
            showPorkMenu();
        });
        document.getElementById("fish-btn").addEventListener("click", function(){
            document.getElementById("main-dish-tab").classList.add(activeClassBg);
            document.getElementById("main-dish-tab").classList.add(activeClassCt);
            showFishMenu();
        });

        // Add event listener to Sub-header tabs for Appetizer Dish 
        document.getElementById("vegetable-btn").addEventListener("click", function(){
            document.getElementById("appetizer-dish-tab").classList.add(activeClassBg);
            document.getElementById("appetizer-dish-tab").classList.add(activeClassCt);
            showVegetableMenu();
        });
        document.getElementById("pasta-btn").addEventListener("click", function(){
            document.getElementById("appetizer-dish-tab").classList.add(activeClassBg);
            document.getElementById("appetizer-dish-tab").classList.add(activeClassCt);
            showPastaMenu();
        });
        document.getElementById("noodle-btn").addEventListener("click", function(){
            document.getElementById("appetizer-dish-tab").classList.add(activeClassBg);
            document.getElementById("appetizer-dish-tab").classList.add(activeClassCt);
            showNoodleMenu();
        });

        document.getElementById("cp-btn").addEventListener("click", function(){
            document.getElementById("main-dish-tab").classList.add(activeClassBg);
            document.getElementById("main-dish-tab").classList.add(activeClassCt);
            document.getElementById("chicken-btn").classList.add(activeClassBg);
            document.getElementById("chicken-btn").classList.add(activeClassCt);
            document.getElementById("cp-btn").classList.add(activeClassBg);
            document.getElementById("cp-btn").classList.add(activeClassCt);
            document.getElementById("bc-btn").classList.add('bg-white');
            document.getElementById("cp-btn").classList.remove('bg-white');
            showCPDetails();
        });

        document.getElementById("bc-btn").addEventListener("click", function(){
            document.getElementById("main-dish-tab").classList.add(activeClassBg);
            document.getElementById("main-dish-tab").classList.add(activeClassCt);
            document.getElementById("chicken-btn").classList.add(activeClassBg);
            document.getElementById("chicken-btn").classList.add(activeClassCt);
            document.getElementById("bc-btn").classList.add(activeClassBg);
            document.getElementById("bc-btn").classList.add(activeClassCt);
            document.getElementById("cp-btn").classList.add('bg-white');
            document.getElementById("bc-btn").classList.remove('bg-white');
            showBCDetails();
        });


    });
    
    function showCPDetails() {
        document.getElementById("chicken-pandan").classList.remove("hidden");
        document.getElementById("baked-chicken").classList.add("hidden");
    }

    function showBCDetails() {
        document.getElementById("baked-chicken").classList.remove("hidden");
        document.getElementById("chicken-pandan").classList.add("hidden");
    }

    function showMainDishMenu() {
        // Show Main Dish sub tabs
        document.getElementById("md-menu").classList.remove("hidden");
        // Hide Appetizer Dish sub tabs
        document.getElementById("ad-menu").classList.add("hidden");

        // Show Chicken Menu content
        document.getElementById("chicken-menu").classList.remove("hidden");
        // Hide other Main Dish content
        document.getElementById("beef-menu").classList.add("hidden");
        document.getElementById("pork-menu").classList.add("hidden");
        document.getElementById("fish-menu").classList.add("hidden");

        //Hide Appetizer Dish content
        document.getElementById("vegetable-menu").classList.add("hidden");
        document.getElementById("pasta-menu").classList.add("hidden");
        document.getElementById("noodle-menu").classList.add("hidden");
    }

    function showAppetizerDishMenu() {
        // Show Appetizer Dish sub tabs
        document.getElementById("ad-menu").classList.remove("hidden");
        // Hide Main Dish sub tabs
        document.getElementById("md-menu").classList.add("hidden");

        // Show Vegetable Menu content
        document.getElementById("vegetable-menu").classList.remove("hidden");
        // Hide other Appetizer Dish content
        document.getElementById("pasta-menu").classList.add("hidden");
        document.getElementById("noodle-menu").classList.add("hidden");

        //Hide Main Dish content
        document.getElementById("chicken-menu").classList.add("hidden");
        document.getElementById("beef-menu").classList.add("hidden");
        document.getElementById("pork-menu").classList.add("hidden");
        document.getElementById("fish-menu").classList.add("hidden");
    }


    function showChickenMenu() {
        // Show Main Dish sub tabs
        document.getElementById("md-menu").classList.remove("hidden");
        // Hide Appetizer Dish sub tabs
        document.getElementById("ad-menu").classList.add("hidden");

        // Show Chicken Menu content
        document.getElementById("chicken-menu").classList.remove("hidden");
        // Hide other Main Dish content
        document.getElementById("beef-menu").classList.add("hidden");
        document.getElementById("pork-menu").classList.add("hidden");
        document.getElementById("fish-menu").classList.add("hidden");

        //Hide Appetizer Dish content
        document.getElementById("vegetable-menu").classList.add("hidden");
        document.getElementById("pasta-menu").classList.add("hidden");
        document.getElementById("noodle-menu").classList.add("hidden");
    }

    function showBeefMenu() {
        // Show Main Dish sub tabs
        document.getElementById("md-menu").classList.remove("hidden");
        // Hide Appetizer Dish sub tabs
        document.getElementById("ad-menu").classList.add("hidden");

        // Show Chicken Menu content
        document.getElementById("beef-menu").classList.remove("hidden");
        // Hide other Main Dish content
        document.getElementById("chicken-menu").classList.add("hidden");
        document.getElementById("pork-menu").classList.add("hidden");
        document.getElementById("fish-menu").classList.add("hidden");

        //Hide Appetizer Dish content
        document.getElementById("vegetable-menu").classList.add("hidden");
        document.getElementById("pasta-menu").classList.add("hidden");
        document.getElementById("noodle-menu").classList.add("hidden");
    }

    function showPorkMenu() {
        // Show Main Dish sub tabs
        document.getElementById("md-menu").classList.remove("hidden");
        // Hide Appetizer Dish sub tabs
        document.getElementById("ad-menu").classList.add("hidden");

        // Show Chicken Menu content
        document.getElementById("pork-menu").classList.remove("hidden");
        // Hide other Main Dish content
        document.getElementById("chicken-menu").classList.add("hidden");
        document.getElementById("beef-menu").classList.add("hidden");
        document.getElementById("fish-menu").classList.add("hidden");

        //Hide Appetizer Dish content
        document.getElementById("vegetable-menu").classList.add("hidden");
        document.getElementById("pasta-menu").classList.add("hidden");
        document.getElementById("noodle-menu").classList.add("hidden");
    }

    function showFishMenu() {
        // Show Main Dish sub tabs
        document.getElementById("md-menu").classList.remove("hidden");
        // Hide Appetizer Dish sub tabs
        document.getElementById("ad-menu").classList.add("hidden");

        // Show Chicken Menu content
        document.getElementById("fish-menu").classList.remove("hidden");
        // Hide other Main Dish content
        document.getElementById("chicken-menu").classList.add("hidden");
        document.getElementById("beef-menu").classList.add("hidden");
        document.getElementById("pork-menu").classList.add("hidden");

        //Hide Appetizer Dish content
        document.getElementById("vegetable-menu").classList.add("hidden");
        document.getElementById("pasta-menu").classList.add("hidden");
        document.getElementById("noodle-menu").classList.add("hidden");
    }

    function showVegetableMenu() {
        // Show Appetizer Dish sub tabs
        document.getElementById("ad-menu").classList.remove("hidden");
        // Hide Main Dish sub tabs
        document.getElementById("md-menu").classList.add("hidden");

        // Show Vegetable Menu content
        document.getElementById("vegetable-menu").classList.remove("hidden");
        // Hide other Appetizer Dish content
        document.getElementById("pasta-menu").classList.add("hidden");
        document.getElementById("noodle-menu").classList.add("hidden");

        //Hide Main Dish content
        document.getElementById("chicken-menu").classList.add("hidden");
        document.getElementById("beef-menu").classList.add("hidden");
        document.getElementById("pork-menu").classList.add("hidden");
        document.getElementById("fish-menu").classList.add("hidden");
    }

    function showPastaMenu() {
        // Show Appetizer Dish sub tabs
        document.getElementById("ad-menu").classList.remove("hidden");
        // Hide Main Dish sub tabs
        document.getElementById("md-menu").classList.add("hidden");

        // Show Vegetable Menu content
        document.getElementById("pasta-menu").classList.remove("hidden");
        // Hide other Appetizer Dish content
        document.getElementById("vegetable-menu").classList.add("hidden");
        document.getElementById("noodle-menu").classList.add("hidden");

        //Hide Main Dish content
        document.getElementById("chicken-menu").classList.add("hidden");
        document.getElementById("beef-menu").classList.add("hidden");
        document.getElementById("pork-menu").classList.add("hidden");
        document.getElementById("fish-menu").classList.add("hidden");
    }

    function showNoodleMenu() {
        // Show Appetizer Dish sub tabs
        document.getElementById("ad-menu").classList.remove("hidden");
        // Hide Main Dish sub tabs
        document.getElementById("md-menu").classList.add("hidden");

        // Show Vegetable Menu content
        document.getElementById("noodle-menu").classList.remove("hidden");
        // Hide other Appetizer Dish content
        document.getElementById("vegetable-menu").classList.add("hidden");
        document.getElementById("pasta-menu").classList.add("hidden");

        //Hide Main Dish content
        document.getElementById("chicken-menu").classList.add("hidden");
        document.getElementById("beef-menu").classList.add("hidden");
        document.getElementById("pork-menu").classList.add("hidden");
        document.getElementById("fish-menu").classList.add("hidden");
    }



</script>