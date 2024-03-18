
{{--! footer --}}
<footer class="relative z-0">
        <div class=" bg-dark w-full h-[51rem] tablet:h-96 laptop:h-115 text-light overflow-hidden ">
            {{--! toogle-up-button --}}
            <a href="#" id="scroll-to-top" class="">
                <img class="tablet:w-32 tablet:h-32 w-[6.5rem] h-[6.5rem] absolute -top-20 z-50
                right-20 transition ease-in-out delay-150 -translate-y-1 hover:scale-110"
                src="{{ asset('assets/img/up-toggle.png') }}" alt="toggle-up">
            </a>
        <div class="relative">

            <div class="mx-auto px-10 pt-8 flex sm-mobile:flex-col tablet:flex-row justify-between">
                {{--! Column One --}}
                <div class="column-one basis-1/4 laptop:basis-1/3 ">
                    <div class="logo">
                        <a href="{{ url('/home') }}" class="w-ful">
                            <img src="{{ asset('assets/img/logo/logo-lenght.png') }}" alt="logo-of-titan's">
                        </a>
                    </div>
                    <div class="paragraph text-sm tablet:text-[9px] laptop:text-xsm">
                        <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Eligendi consequuntur, corporis laboriosam
                            provident dolorem optio voluptate dignissimos
                            quibusdam molestiae nam dolore, totam commodi
                            quis soluta fugit molestias cum, atque quidem.
                        </p>
                    </div>
                    <div class="mt-4 contact">
                        <ul>
                            <li class="my-3">
                                <a href="" class="flex">
                                    <script src="https://cdn.lordicon.com/lordicon.js"></script>
                                    <lord-icon src="https://cdn.lordicon.com/iikoxwld.json" trigger="hover"
                                        colors="primary:#FF731D" style="width:30px;height:30px">
                                    </lord-icon>
                                    <span class="sm-mobile:text-lg tablet:text-[10px] laptop:text-sm font-semibold sm-mobile:mx-1
                                    tablet:mx-1 tablet:mt-2laptop:mx-2 laptop:mt-1 hover:text-primary">
                                        Romano St. Poblacion, Hindang, Leyte
                                    </span>
                                </a>
                            </li>
                            <li class="my-3">
                                <a href="" class="flex">
                                    <script src="https://cdn.lordicon.com/lordicon.js"></script>
                                    <lord-icon src="https://cdn.lordicon.com/xtzvywzp.json" trigger="hover"
                                        colors="primary:#FF731D" style="width:30px;height:30px">
                                    </lord-icon>
                                    <span class="sm-mobile:text-lg tablet:text-[10px] laptop:text-sm font-semibold sm-mobile:mx-1
                                    tablet:mx-1 tablet:mt-2laptop:mx-2 laptop:mt-1 hover:text-primary">
                                        sonararosario@gmail.com
                                    </span>
                                </a>
                            </li>
                            <li class="my-3">
                                <a href="" class="flex">
                                    <a href="" class="flex">
                                        <script src="https://cdn.lordicon.com/lordicon.js"></script>
                                        <lord-icon src="https://cdn.lordicon.com/srsgifqc.json" trigger="hover"
                                            colors="primary:#FF731D" style="width:30px;height:30px">
                                        </lord-icon>
                                        <span class="sm-mobile:text-lg tablet:text-[10px] laptop:text-sm font-semibold sm-mobile:mx-1
                                        tablet:mx-1 tablet:mt-2 laptop:mx-2 laptop:mt-1 hover:text-primary">
                                            0907-753-0219
                                        </span>
                                    </a>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr class="tablet:hidden mt-5 mb-3">
                {{--! Column Two --}}
                <div class="column-two basis-2/5 laptop:basis-1/3 flex justify-evenly tablet:justify-between">
                    {{-- C-two-Column-one --}}
                    <div>
                        <h5 class="font-bold uppercase text-md laptop:text-lg">
                            Quick Links
                        </h5>
                        <ul class="my-2">
                            <li class="my-2">
                                <a href="" class="flex">
                                    <script src="https://cdn.lordicon.com/lordicon.js"></script>
                                    <lord-icon src="https://cdn.lordicon.com/xcrjfuzb.json" colors="primary:#FF731D"
                                        trigger="hover" style="width:30px;height:30px" class="-rotate-90">
                                    </lord-icon>
                                    <span class="text-sm laptop:text-md mx-2 mt-1.5 lattop:mt-1 hover:text-primary">
                                        About Us
                                    </span>
                                </a>
                            </li>
                            <li class="my-2">
                                <a href="" class="flex">
                                    <script src="https://cdn.lordicon.com/lordicon.js"></script>
                                    <lord-icon src="https://cdn.lordicon.com/xcrjfuzb.json" colors="primary:#FF731D"
                                        trigger="hover" style="width:30px;height:30px" class="-rotate-90">
                                    </lord-icon>
                                    <span class="text-sm laptop:text-md mx-2 mt-1.5 lattop:mt-1 hover:text-primary">
                                        Services
                                    </span>
                                </a>
                            </li>
                            <li class="my-2">
                                <a href="" class="flex">
                                    <script src="https://cdn.lordicon.com/lordicon.js"></script>
                                    <lord-icon src="https://cdn.lordicon.com/xcrjfuzb.json" colors="primary:#FF731D"
                                        trigger="hover" style="width:30px;height:30px" class="-rotate-90">
                                    </lord-icon>
                                    <span class="text-sm laptop:text-md mx-2 mt-1.5 lattop:mt-1 hover:text-primary">
                                        Packages
                                    </span>
                                </a>
                            </li>
                            <li class="my-2">
                                <a href="" class="flex">
                                    <script src="https://cdn.lordicon.com/lordicon.js"></script>
                                    <lord-icon src="https://cdn.lordicon.com/xcrjfuzb.json" colors="primary:#FF731D"
                                        trigger="hover" style="width:30px;height:30px" class="-rotate-90">
                                    </lord-icon>
                                    <span class="text-sm laptop:text-md mx-2 mt-1.5 lattop:mt-1 hover:text-primary">
                                        Menu
                                    </span>
                                </a>
                            </li>
                            <li class="my-2">
                                <a href="" class="flex">
                                    <script src="https://cdn.lordicon.com/lordicon.js"></script>
                                    <lord-icon src="https://cdn.lordicon.com/xcrjfuzb.json" colors="primary:#FF731D"
                                        trigger="hover" style="width:30px;height:30px" class="-rotate-90">
                                    </lord-icon>
                                    <span class="text-sm laptop:text-md mx-2 mt-1.5 lattop:mt-1 hover:text-primary">
                                        Contact Us
                                    </span>
                                </a>
                            </li>
                            <li class="my-2">
                                <a href="" class="flex">
                                    <script src="https://cdn.lordicon.com/lordicon.js"></script>
                                    <lord-icon src="https://cdn.lordicon.com/xcrjfuzb.json" colors="primary:#FF731D"
                                        trigger="hover" style="width:30px;height:30px" class="-rotate-90">
                                    </lord-icon>
                                    <span class="text-sm laptop:text-md mx-2 mt-1.5 lattop:mt-1 hover:text-primary">
                                        Home
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    {{-- C-two-Column-two --}}
                    <div>
                        <h5 class="font-bold uppercase text-md laptop:text-lg">
                            Useful Links
                        </h5>
                        <ul>
                            <li class="my-2">
                                <a href="" class="flex">
                                    <script src="https://cdn.lordicon.com/lordicon.js"></script>
                                    <lord-icon src="https://cdn.lordicon.com/xcrjfuzb.json" colors="primary:#FF731D"
                                        trigger="hover" style="width:30px;height:30px" class="-rotate-90">
                                    </lord-icon>
                                    <span class="text-sm laptop:text-md mx-2 mt-1.5 lattop:mt-1 hover:text-primary">
                                        Privacy Policy
                                    </span>
                                </a>
                            </li>
                            <li class="my-2">
                                <a href="" class="flex">
                                    <script src="https://cdn.lordicon.com/lordicon.js"></script>
                                    <lord-icon src="https://cdn.lordicon.com/xcrjfuzb.json" colors="primary:#FF731D"
                                        trigger="hover" style="width:30px;height:30px" class="-rotate-90">
                                    </lord-icon>
                                    <span class="text-sm laptop:text-md mx-2 mt-1.5 lattop:mt-1 hover:text-primary">
                                        Terms and Conditions
                                    </span>
                                </a>
                            </li>
                            <li class="my-2">
                                <a href="" class="flex">
                                    <script src="https://cdn.lordicon.com/lordicon.js"></script>
                                    <lord-icon src="https://cdn.lordicon.com/xcrjfuzb.json" colors="primary:#FF731D"
                                        trigger="hover" style="width:30px;height:30px" class="-rotate-90">
                                    </lord-icon>
                                    <span class="text-sm laptop:text-md mx-2 mt-1.5 lattop:mt-1 hover:text-primary">
                                        Support
                                    </span>
                                </a>
                            </li>
                            <li class="my-2">
                                <a href="" class="flex">
                                    <script src="https://cdn.lordicon.com/lordicon.js"></script>
                                    <lord-icon src="https://cdn.lordicon.com/xcrjfuzb.json" colors="primary:#FF731D"
                                        trigger="hover" style="width:30px;height:30px" class="-rotate-90">
                                    </lord-icon>
                                    <span class="text-sm laptop:text-md mx-2 mt-1.5 lattop:mt-1 hover:text-primary">
                                        Credit
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <h5 class="font-bold uppercase text-md laptop:text-lg mt-5 relative">
                            Social Media
                        </h5>
                        <div class="flex mt-2 z-10">
                            <a href="" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="sm-mobile:w-[25px] tablet:w-[40px] laptop:w-[50px]"
                                    viewBox="0,0,256,256" class="transition ease-in-out delay-100 hover:scale-125">
                                        <g fill="#ff731d" fill-rule="nonzero" stroke="none" stroke-width="1"
                                            stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                            stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                            font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                        <g transform="scale(5.12,5.12)">
                                            <path
                                                d="M25,3c-12.15,0 -22,9.85 -22,22c0,11.03 8.125,20.137 18.712,21.728v-15.897h-5.443v-5.783h5.443v-3.848c0,-6.371 3.104,-9.168 8.399,-9.168c2.536,0 3.877,0.188 4.512,0.274v5.048h-3.612c-2.248,0 -3.033,2.131 -3.033,4.533v3.161h6.588l-0.894,5.783h-5.694v15.944c10.738,-1.457 19.022,-10.638 19.022,-21.775c0,-12.15 -9.85,-22 -22,-22z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            <a href="" class="mx-3 laptop:mx-5 z-10">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="sm-mobile:w-[25px] tablet:w-[40px] laptop:w-[50px]"
                                    viewBox="0,0,256,256" class="transition ease-in-out delay-100 hover:scale-125">
                                        <g fill="#ff731d" fill-rule="nonzero" stroke="none" stroke-width="1"
                                            stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                            stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                            font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                        <g transform="scale(5.12,5.12)">
                                            <path
                                                d="M16,3c-7.16752,0 -13,5.83248 -13,13v18c0,7.16752 5.83248,13 13,13h18c7.16752,0 13,-5.83248 13,-13v-18c0,-7.16752 -5.83248,-13 -13,-13zM16,5h18c6.08648,0 11,4.91352 11,11v18c0,6.08648 -4.91352,11 -11,11h-18c-6.08648,0 -11,-4.91352 -11,-11v-18c0,-6.08648 4.91352,-11 11,-11zM37,11c-1.10457,0 -2,0.89543 -2,2c0,1.10457 0.89543,2 2,2c1.10457,0 2,-0.89543 2,-2c0,-1.10457 -0.89543,-2 -2,-2zM25,14c-6.06329,0 -11,4.93671 -11,11c0,6.06329 4.93671,11 11,11c6.06329,0 11,-4.93671 11,-11c0,-6.06329 -4.93671,-11 -11,-11zM25,16c4.98241,0 9,4.01759 9,9c0,4.98241 -4.01759,9 -9,9c-4.98241,0 -9,-4.01759 -9,-9c0,-4.98241 4.01759,-9 9,-9z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                            <a href="" class=" z-10">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="sm-mobile:w-[25px] tablet:w-[40px] laptop:w-[50px]"
                                    viewBox="0,0,256,256" class="transition ease-in-out delay-100 hover:scale-125 z-10">
                                        <g fill="#ff731d" fill-rule="nonzero" stroke="none" stroke-width="1"
                                            stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                            stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                            font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                        <g transform="scale(10.66667,10.66667)">
                                            <path
                                                d="M2.36719,3l7.0957,10.14063l-6.72266,7.85938h2.64063l5.26367,-6.16992l4.31641,6.16992h6.91016l-7.42187,-10.625l6.29102,-7.375h-2.59961l-4.86914,5.6875l-3.97266,-5.6875zM6.20703,5h2.04883l9.77734,14h-2.03125z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                {{--! Column Three --}}
                <div class="column-three basis-1/6 laptop:basis-1/4">
                    {{--? Leave it Empty --}}
                </div>
            </div>

            {{--! Bottom Details --}}
            <hr class="sm-mobile:mx-10 mt-5 mb-1.5
            text-light tablet:ml-10 tablet:mr-80 tablet:mt-1 tablet:mb-2">
            <div class="text-center flex flex-col tablet:flex-row tablet:justify-between tablet:ml-10
            tablet:mr-80 text-[8.5px] tablet:text-[9px] laptop:text-xsm">
                <p>MLG CL's Capstone Project Catering System Web-Based.</p>
                <p>Copyright © 2024. All Right Reserved.</p>
            </div>

            {{--! Column Shapes (Blobs) --}}
            <img class="absolute hidden tablet:block -bottom-72 right-5 rotate-90 z-0"
                src="{{ asset('assets/img/blob-foot-1.svg') }}" alt="blob-1">

            <img class="absolute hidden z-0 tablet:block w-[650px] h-[850px] laptop:w-[750px] laptop:h-[900px] -bottom-[70%] -right-72 laptop:-bottom-2/4 laptop:-right-80 rotate-45"
            src="{{ asset('assets/img/blob-foot-2.svg') }}" alt="blob-2">
        </div>
    </div>

</footer>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var scrollToTopButton = document.getElementById("scroll-to-top");

        scrollToTopButton.addEventListener("click", function(event) {
            event.preventDefault(); // Prevent default anchor behavior

            var duration = 2000; // Duration of the scroll animation in milliseconds (adjust as needed)
            var start = window.pageYOffset;
            var end = 0; // Scroll to the top of the page
            var startTime = null;

            function scroll(currentTime) {
                if (startTime === null) {
                    startTime = currentTime;
                }
                var timeElapsed = currentTime - startTime;
                var scrollPosition = easeInOutQuad(timeElapsed, start, end - start, duration);
                window.scrollTo(0, scrollPosition);
                if (timeElapsed < duration) {
                    requestAnimationFrame(scroll);
                }
            }

            requestAnimationFrame(scroll);
        });
    });

    // Custom easing function for slow scroll
    function easeInOutQuad(t, b, c, d) {
        t /= d / 2;
        if (t < 1) return c / 2 * t * t + b;
        t--;
        return -c / 2 * (t * (t - 2) - 1) + b;
    }
</script>


