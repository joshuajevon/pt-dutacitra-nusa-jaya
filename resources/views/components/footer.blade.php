<footer class="text-paragraph bg-custom-darker-blue text-custom-white c-container py-8 sm:py-9 md:py-10 text-xs sm:text-sm md:text-base">
    <div class="grid gap-16 grid-cols-1 xl:grid-cols-9">
        <div class="flex flex-col gap-4 col-span-1 xl:col-span-3">
            <div class="flex justify-center sm:justify-start mb-4">
                <a href="{{ route('homeEn') }}" class="flex items-center gap-4">
                    <img src="{{asset('assets/logo/logo-icon-text.png')}}?t={{ env('VERSION_TIME') }}" alt="logo" class="h-10 sm:h-12 xl:h-auto xl:max-h-14">
                </a>
            </div>

            <div>
                <h1 class="font-extrabold text-paragraph">Contact Us</h1>
            </div>

            <div class="flex items-center gap-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 aspect-square flex-none" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                </svg>

                <div class="text-custom-white/70 flex flex-col gap-1">
                    <p>
                        Marketing Office : PJS Tower, Room 805,
                        Jl. Raya Daan Mogot KM 14 No. 1
                    </p>
                    <p>
                        Operational Office : Jl. Utan Jati Ruko Daan Mogot Baru Blok LB 2 No. 15
                    </p>
                </div>

            </div>

            <div class="flex items-center gap-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 aspect-square" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                </svg>
                <p class="text-custom-white/70">+62 8118869677</p>
            </div>

            <div class="flex items-center gap-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 aspect-square" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                </svg>

                <p class="text-custom-white/70">dutacitranusajayaa@gmail.com</p>
            </div>
        </div>

        <div class="col-span-1 xl:col-span-6 grid grid-cols-2 md:grid-cols-3 gap-16 xl:ml-16 2xl:ml-32">
            <div class="col-span-1">
                <div>
                    <h1 class="font-extrabold text-paragraph">Product</h1>
                </div>

                <ul class="mt-6 space-y-4">
                    <li>
                        <a class="text-custom-white/70 hover:text-custom-white transition" href="/">
                            Sliding Doors
                        </a>
                    </li>

                    <li>
                        <a class="text-custom-white/70 hover:text-custom-white transition" href="/">
                            Swing Doors
                        </a>
                    </li>

                    <li>
                        <a class="text-custom-white/70 hover:text-custom-white transition" href="/">
                            Revolving Doors
                        </a>
                    </li>

                    <li>
                        <a class="text-custom-white/70 hover:text-custom-white transition" href="/">
                            Hermetic Doors
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-span-1">
                <div>
                    <h1 class="font-extrabold text-paragraph">Company</h1>
                </div>

                <ul class="mt-6 space-y-4">
                    <li>
                        <a href="{{ route('projectEn') }}" class="text-custom-white/70 hover:text-custom-white transition">
                            Projects
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('projectEn') }}" class="text-custom-white/70 hover:text-custom-white transition">
                            About Us
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('contactEn') }}" class="text-custom-white/70 hover:text-custom-white transition">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>

            <div class="flex flex-col gap-8 md:items-end justify-between col-span-2 md:col-span-1">
                <div class="flex flex-col gap-4">
                    <h1 class="md:text-end font-semibold text-paragraph">FOLLOW US</h1>

                    <div class="text-custom-darker-blue flex gap-4 sm:gap-6 md:gap-7 lg:gap-8">
                        <a href="https://www.instagram.com/automaticdoordutacitra" target="_blank" rel="noopener noreferrer" class="bg-custom-white w-12 sm:w-14 md:w-[3.75rem] lg:w-16 aspect-square p-3 md:p-3.5 flex justify-center items-center rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-full aspect-square" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                            </svg>
                        </a>

                        <a href="" target="_blank" rel="noopener noreferrer" class="bg-custom-white w-12 sm:w-14 md:w-[3.75rem] lg:w-16 aspect-square p-3 md:p-3.5 flex justify-center items-center rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-full aspect-square" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z" />
                            </svg>
                        </a>

                        <a href="mailto:dutacitranusajaya@gmail.com" target="_blank" rel="noopener noreferrer" class="bg-custom-white w-12 sm:w-14 md:w-[3.75rem] lg:w-16 aspect-square p-3 md:p-3.5 flex justify-center items-center rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-full aspect-square" viewBox="0 0 16 16">
                                <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                            </svg>
                        </a>
                    </div>

                </div>

                <div>
                    <a href="">
                        <img src="{{ asset('assets/logo/manusa.png') }}?t={{ env('VERSION_TIME') }}" alt="manusa" class="w-40 sm:w-48 md:w-auto">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-12 border-t border-custom-light-gray pt-6">
        <p class="text-custom-white/70">© 2023 PT. Duta Citra Nusa Jaya</p>
    </div>
</footer>
