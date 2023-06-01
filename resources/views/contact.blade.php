<x-app-layout>
    <!-- ====== Contact Section Start -->
    <section class="bg-neutral-100/50 py-20 lg:py-[120px] overflow-hidden relative z-10">
        <div class="container w-[80%] mx-auto">
            <div class="flex flex-wrap lg:justify-between -mx-4">
                <div class="w-full lg:w-1/2 xl:w-6/12 px-4">
                    <div class="text-center lg:text-start mb-12 lg:mb-0">
                        <span class="block mb-4 text-base text-orange-500 font-semibold">
                            Contactez-nous
                        </span>
                        <h2 class="
                  text-neutral-700
                  mb-6
                  uppercase
                  font-bold
                  text-[32px]
                  sm:text-[40px]
                  lg:text-[36px]
                  xl:text-[40px]
                  ">
                            Des questions?
                        </h2>
                        <p class="text-base text-body-color leading-relaxed mb-9">
                        Avez-vous des questions sur les jeux vidéos de gestion ?<br> 
                        Besoin d'aide pour comprendre certaines mécaniques de jeu ?<br>  
                        Nous sommes là pour vous !<br><br>  
                        N'hésitez pas à nous contacter via notre formulaire de contact ci-contre et notre équipe se fera un plaisir de répondre à toutes vos interrogations.
                        <br><br>Ne restez pas dans l'incertitude et laissez-nous vous guider vers la victoire !
                        </p>

                    </div>
                </div>
                <div class="max-lg:w-full w-2/3 drop-shadow-2xl lg:w-1/2 xl:w-6/12 px-4">
                    <div class="bg-white relative rounded-lg p-8 sm:p-12 shadow-lg">
                        @if(Session::has('success'))
                        <div class="alert alert-success text-green-500">
                            {{Session::get('success')}}
                        </div>
                        @endif
                        <form method="post" action="{{ route('contact.submit') }}">
                            @csrf
                            <div class="mb-6">
                                <x-input-label>Votre nom</x-input-label>
                                <input type="text" placeholder="Nom" class="
                        w-full
                        rounded
                        py-3
                        px-[14px]
                        text-body-color text-base
                        border border-[f0f0f0]
                        focus-visible:outline-none
                        focus:border-orange-500 
                        
                        
                        " name="nom" />
                            </div>
                            <div class="mb-6">
                                <x-input-label>Votre Email</x-input-label>
                                <input type="email" placeholder="Email" class="
                        w-full
                        rounded
                        py-3
                        px-[14px]
                        text-body-color text-base
                        border border-[f0f0f0]
                        outline-none
                        focus-visible:shadow-none
                        focus:border-orange-500
                        " name="email" />
                            </div>
                            <div class="mb-6">
                                <x-input-label>Votre Objet</x-input-label>
                                <input type="text" placeholder="Objet" class="
                        w-full
                        rounded
                        py-3
                        px-[14px]
                        text-body-color text-base
                        border border-[f0f0f0]
                        outline-none
                        focus-visible:shadow-none
                        focus:border-orange-500
                        " name="objet" />
                            </div>
                            <div class="mb-6">
                                <x-input-label>Votre Message</x-input-label>
                                <textarea rows="6" placeholder="Message" class="
                        w-full
                        rounded
                        py-3
                        px-[14px]
                        text-body-color text-base
                        border border-[f0f0f0]
                        resize-none
                        outline-none
                        focus-visible:shadow-none
                        focus:border-orange-500
                        " name="message"></textarea>
                            </div>
                            <div class="flex justify-center">
                                <button type="submit" class="
                        w-auto 
                        text-neutral-800 font-semibold
                        bg-transparent
                        rounded
                        border border-orange-500
                        py-2 px-3
                        transition duration-300
                        hover:bg-orange-500/90
                        ">
                                    Envoyer
                                </button>
                            </div>
                        </form>
                        <div>
                            <span class="absolute -top-10 -right-9 z-[-1]">
                                <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 100C0 44.7715 0 0 0 0C55.2285 0 100 44.7715 100 100C100 100 100 100 0 100Z" fill="#f97316" />
                                </svg>
                            </span>
                            <span class="absolute -right-10 top-[90px] z-[-1]">
                                <svg width="34" height="134" viewBox="0 0 34 134" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="31.9993" cy="132" r="1.66667" transform="rotate(180 31.9993 132)" fill="#737373" />
                                    <circle cx="31.9993" cy="117.333" r="1.66667" transform="rotate(180 31.9993 117.333)" fill="#737373" />
                                    <circle cx="31.9993" cy="102.667" r="1.66667" transform="rotate(180 31.9993 102.667)" fill="#737373" />
                                    <circle cx="31.9993" cy="88" r="1.66667" transform="rotate(180 31.9993 88)" fill="#737373" />
                                    <circle cx="31.9993" cy="73.3333" r="1.66667" transform="rotate(180 31.9993 73.3333)" fill="#737373" />
                                    <circle cx="31.9993" cy="45" r="1.66667" transform="rotate(180 31.9993 45)" fill="#737373" />
                                    <circle cx="31.9993" cy="16" r="1.66667" transform="rotate(180 31.9993 16)" fill="#737373" />
                                    <circle cx="31.9993" cy="59" r="1.66667" transform="rotate(180 31.9993 59)" fill="#737373" />
                                    <circle cx="31.9993" cy="30.6666" r="1.66667" transform="rotate(180 31.9993 30.6666)" fill="#737373" />
                                    <circle cx="31.9993" cy="1.66665" r="1.66667" transform="rotate(180 31.9993 1.66665)" fill="#737373" />
                                    <circle cx="17.3333" cy="132" r="1.66667" transform="rotate(180 17.3333 132)" fill="#737373" />
                                    <circle cx="17.3333" cy="117.333" r="1.66667" transform="rotate(180 17.3333 117.333)" fill="#737373" />
                                    <circle cx="17.3333" cy="102.667" r="1.66667" transform="rotate(180 17.3333 102.667)" fill="#737373" />
                                    <circle cx="17.3333" cy="88" r="1.66667" transform="rotate(180 17.3333 88)" fill="#737373" />
                                    <circle cx="17.3333" cy="73.3333" r="1.66667" transform="rotate(180 17.3333 73.3333)" fill="#737373" />
                                    <circle cx="17.3333" cy="45" r="1.66667" transform="rotate(180 17.3333 45)" fill="#737373" />
                                    <circle cx="17.3333" cy="16" r="1.66667" transform="rotate(180 17.3333 16)" fill="#737373" />
                                    <circle cx="17.3333" cy="59" r="1.66667" transform="rotate(180 17.3333 59)" fill="#737373" />
                                    <circle cx="17.3333" cy="30.6666" r="1.66667" transform="rotate(180 17.3333 30.6666)" fill="#737373" />
                                    <circle cx="17.3333" cy="1.66665" r="1.66667" transform="rotate(180 17.3333 1.66665)" fill="#737373" />
                                    <circle cx="2.66536" cy="132" r="1.66667" transform="rotate(180 2.66536 132)" fill="#737373" />
                                    <circle cx="2.66536" cy="117.333" r="1.66667" transform="rotate(180 2.66536 117.333)" fill="#737373" />
                                    <circle cx="2.66536" cy="102.667" r="1.66667" transform="rotate(180 2.66536 102.667)" fill="#737373" />
                                    <circle cx="2.66536" cy="88" r="1.66667" transform="rotate(180 2.66536 88)" fill="#737373" />
                                    <circle cx="2.66536" cy="73.3333" r="1.66667" transform="rotate(180 2.66536 73.3333)" fill="#737373" />
                                    <circle cx="2.66536" cy="45" r="1.66667" transform="rotate(180 2.66536 45)" fill="#737373" />
                                    <circle cx="2.66536" cy="16" r="1.66667" transform="rotate(180 2.66536 16)" fill="#737373" />
                                    <circle cx="2.66536" cy="59" r="1.66667" transform="rotate(180 2.66536 59)" fill="#737373" />
                                    <circle cx="2.66536" cy="30.6666" r="1.66667" transform="rotate(180 2.66536 30.6666)" fill="#737373" />
                                    <circle cx="2.66536" cy="1.66665" r="1.66667" transform="rotate(180 2.66536 1.66665)" fill="#737373" />
                                </svg>
                            </span>
                            <span class="absolute -left-7 -bottom-7 z-[-1]">
                                <svg width="107" height="134" viewBox="0 0 107 134" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="104.999" cy="132" r="1.66667" transform="rotate(180 104.999 132)" fill="#737373" />
                                    <circle cx="104.999" cy="117.333" r="1.66667" transform="rotate(180 104.999 117.333)" fill="#737373" />
                                    <circle cx="104.999" cy="102.667" r="1.66667" transform="rotate(180 104.999 102.667)" fill="#737373" />
                                    <circle cx="104.999" cy="88" r="1.66667" transform="rotate(180 104.999 88)" fill="#737373" />
                                    <circle cx="104.999" cy="73.3333" r="1.66667" transform="rotate(180 104.999 73.3333)" fill="#737373" />
                                    <circle cx="104.999" cy="45" r="1.66667" transform="rotate(180 104.999 45)" fill="#737373" />
                                    <circle cx="104.999" cy="16" r="1.66667" transform="rotate(180 104.999 16)" fill="#737373" />
                                    <circle cx="104.999" cy="59" r="1.66667" transform="rotate(180 104.999 59)" fill="#737373" />
                                    <circle cx="104.999" cy="30.6666" r="1.66667" transform="rotate(180 104.999 30.6666)" fill="#737373" />
                                    <circle cx="104.999" cy="1.66665" r="1.66667" transform="rotate(180 104.999 1.66665)" fill="#737373" />
                                    <circle cx="90.3333" cy="132" r="1.66667" transform="rotate(180 90.3333 132)" fill="#737373" />
                                    <circle cx="90.3333" cy="117.333" r="1.66667" transform="rotate(180 90.3333 117.333)" fill="#737373" />
                                    <circle cx="90.3333" cy="102.667" r="1.66667" transform="rotate(180 90.3333 102.667)" fill="#737373" />
                                    <circle cx="90.3333" cy="88" r="1.66667" transform="rotate(180 90.3333 88)" fill="#737373" />
                                    <circle cx="90.3333" cy="73.3333" r="1.66667" transform="rotate(180 90.3333 73.3333)" fill="#737373" />
                                    <circle cx="90.3333" cy="45" r="1.66667" transform="rotate(180 90.3333 45)" fill="#737373" />
                                    <circle cx="90.3333" cy="16" r="1.66667" transform="rotate(180 90.3333 16)" fill="#737373" />
                                    <circle cx="90.3333" cy="59" r="1.66667" transform="rotate(180 90.3333 59)" fill="#737373" />
                                    <circle cx="90.3333" cy="30.6666" r="1.66667" transform="rotate(180 90.3333 30.6666)" fill="#737373" />
                                    <circle cx="90.3333" cy="1.66665" r="1.66667" transform="rotate(180 90.3333 1.66665)" fill="#737373" />
                                    <circle cx="75.6654" cy="132" r="1.66667" transform="rotate(180 75.6654 132)" fill="#737373" />
                                    <circle cx="31.9993" cy="132" r="1.66667" transform="rotate(180 31.9993 132)" fill="#737373" />
                                    <circle cx="75.6654" cy="117.333" r="1.66667" transform="rotate(180 75.6654 117.333)" fill="#737373" />
                                    <circle cx="31.9993" cy="117.333" r="1.66667" transform="rotate(180 31.9993 117.333)" fill="#737373" />
                                    <circle cx="75.6654" cy="102.667" r="1.66667" transform="rotate(180 75.6654 102.667)" fill="#737373" />
                                    <circle cx="31.9993" cy="102.667" r="1.66667" transform="rotate(180 31.9993 102.667)" fill="#737373" />
                                    <circle cx="75.6654" cy="88" r="1.66667" transform="rotate(180 75.6654 88)" fill="#737373" />
                                    <circle cx="31.9993" cy="88" r="1.66667" transform="rotate(180 31.9993 88)" fill="#737373" />
                                    <circle cx="75.6654" cy="73.3333" r="1.66667" transform="rotate(180 75.6654 73.3333)" fill="#737373" />
                                    <circle cx="31.9993" cy="73.3333" r="1.66667" transform="rotate(180 31.9993 73.3333)" fill="#737373" />
                                    <circle cx="75.6654" cy="45" r="1.66667" transform="rotate(180 75.6654 45)" fill="#737373" />
                                    <circle cx="31.9993" cy="45" r="1.66667" transform="rotate(180 31.9993 45)" fill="#737373" />
                                    <circle cx="75.6654" cy="16" r="1.66667" transform="rotate(180 75.6654 16)" fill="#737373" />
                                    <circle cx="31.9993" cy="16" r="1.66667" transform="rotate(180 31.9993 16)" fill="#737373" />
                                    <circle cx="75.6654" cy="59" r="1.66667" transform="rotate(180 75.6654 59)" fill="#737373" />
                                    <circle cx="31.9993" cy="59" r="1.66667" transform="rotate(180 31.9993 59)" fill="#737373" />
                                    <circle cx="75.6654" cy="30.6666" r="1.66667" transform="rotate(180 75.6654 30.6666)" fill="#737373" />
                                    <circle cx="31.9993" cy="30.6666" r="1.66667" transform="rotate(180 31.9993 30.6666)" fill="#737373" />
                                    <circle cx="75.6654" cy="1.66665" r="1.66667" transform="rotate(180 75.6654 1.66665)" fill="#737373" />
                                    <circle cx="31.9993" cy="1.66665" r="1.66667" transform="rotate(180 31.9993 1.66665)" fill="#737373" />
                                    <circle cx="60.9993" cy="132" r="1.66667" transform="rotate(180 60.9993 132)" fill="#737373" />
                                    <circle cx="17.3333" cy="132" r="1.66667" transform="rotate(180 17.3333 132)" fill="#737373" />
                                    <circle cx="60.9993" cy="117.333" r="1.66667" transform="rotate(180 60.9993 117.333)" fill="#737373" />
                                    <circle cx="17.3333" cy="117.333" r="1.66667" transform="rotate(180 17.3333 117.333)" fill="#737373" />
                                    <circle cx="60.9993" cy="102.667" r="1.66667" transform="rotate(180 60.9993 102.667)" fill="#737373" />
                                    <circle cx="17.3333" cy="102.667" r="1.66667" transform="rotate(180 17.3333 102.667)" fill="#737373" />
                                    <circle cx="60.9993" cy="88" r="1.66667" transform="rotate(180 60.9993 88)" fill="#737373" />
                                    <circle cx="17.3333" cy="88" r="1.66667" transform="rotate(180 17.3333 88)" fill="#737373" />
                                    <circle cx="60.9993" cy="73.3333" r="1.66667" transform="rotate(180 60.9993 73.3333)" fill="#737373" />
                                    <circle cx="17.3333" cy="73.3333" r="1.66667" transform="rotate(180 17.3333 73.3333)" fill="#737373" />
                                    <circle cx="60.9993" cy="45" r="1.66667" transform="rotate(180 60.9993 45)" fill="#737373" />
                                    <circle cx="17.3333" cy="45" r="1.66667" transform="rotate(180 17.3333 45)" fill="#737373" />
                                    <circle cx="60.9993" cy="16" r="1.66667" transform="rotate(180 60.9993 16)" fill="#737373" />
                                    <circle cx="17.3333" cy="16" r="1.66667" transform="rotate(180 17.3333 16)" fill="#737373" />
                                    <circle cx="60.9993" cy="59" r="1.66667" transform="rotate(180 60.9993 59)" fill="#737373" />
                                    <circle cx="17.3333" cy="59" r="1.66667" transform="rotate(180 17.3333 59)" fill="#737373" />
                                    <circle cx="60.9993" cy="30.6666" r="1.66667" transform="rotate(180 60.9993 30.6666)" fill="#737373" />
                                    <circle cx="17.3333" cy="30.6666" r="1.66667" transform="rotate(180 17.3333 30.6666)" fill="#737373" />
                                    <circle cx="60.9993" cy="1.66665" r="1.66667" transform="rotate(180 60.9993 1.66665)" fill="#737373" />
                                    <circle cx="17.3333" cy="1.66665" r="1.66667" transform="rotate(180 17.3333 1.66665)" fill="#737373" />
                                    <circle cx="46.3333" cy="132" r="1.66667" transform="rotate(180 46.3333 132)" fill="#737373" />
                                    <circle cx="2.66536" cy="132" r="1.66667" transform="rotate(180 2.66536 132)" fill="#737373" />
                                    <circle cx="46.3333" cy="117.333" r="1.66667" transform="rotate(180 46.3333 117.333)" fill="#737373" />
                                    <circle cx="2.66536" cy="117.333" r="1.66667" transform="rotate(180 2.66536 117.333)" fill="#737373" />
                                    <circle cx="46.3333" cy="102.667" r="1.66667" transform="rotate(180 46.3333 102.667)" fill="#737373" />
                                    <circle cx="2.66536" cy="102.667" r="1.66667" transform="rotate(180 2.66536 102.667)" fill="#737373" />
                                    <circle cx="46.3333" cy="88" r="1.66667" transform="rotate(180 46.3333 88)" fill="#737373" />
                                    <circle cx="2.66536" cy="88" r="1.66667" transform="rotate(180 2.66536 88)" fill="#737373" />
                                    <circle cx="46.3333" cy="73.3333" r="1.66667" transform="rotate(180 46.3333 73.3333)" fill="#737373" />
                                    <circle cx="2.66536" cy="73.3333" r="1.66667" transform="rotate(180 2.66536 73.3333)" fill="#737373" />
                                    <circle cx="46.3333" cy="45" r="1.66667" transform="rotate(180 46.3333 45)" fill="#737373" />
                                    <circle cx="2.66536" cy="45" r="1.66667" transform="rotate(180 2.66536 45)" fill="#737373" />
                                    <circle cx="46.3333" cy="16" r="1.66667" transform="rotate(180 46.3333 16)" fill="#737373" />
                                    <circle cx="2.66536" cy="16" r="1.66667" transform="rotate(180 2.66536 16)" fill="#737373" />
                                    <circle cx="46.3333" cy="59" r="1.66667" transform="rotate(180 46.3333 59)" fill="#737373" />
                                    <circle cx="2.66536" cy="59" r="1.66667" transform="rotate(180 2.66536 59)" fill="#737373" />
                                    <circle cx="46.3333" cy="30.6666" r="1.66667" transform="rotate(180 46.3333 30.6666)" fill="#737373" />
                                    <circle cx="2.66536" cy="30.6666" r="1.66667" transform="rotate(180 2.66536 30.6666)" fill="#737373" />
                                    <circle cx="46.3333" cy="1.66665" r="1.66667" transform="rotate(180 46.3333 1.66665)" fill="#737373" />
                                    <circle cx="2.66536" cy="1.66665" r="1.66667" transform="rotate(180 2.66536 1.66665)" fill="#737373" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== Contact Section End -->
</x-app-layout>