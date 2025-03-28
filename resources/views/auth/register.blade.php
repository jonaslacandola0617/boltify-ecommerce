<x-guest-layout>
    <x-slot name="sideboard">
        <div class="absolute -top-12 rounded-3xl flex flex-col shadow-xl left-20 bg-white w-3/4 h-[86vh] overflow-hidden">
            <div class="h-full p-8">
                <h1 class="text-2xl font-semibold mb-2">Join GearHub Today!</h1>
                <p class="text-zinc-600">Where quality meets affordability for all your hardware needs.</p>
            </div>
            <div class="self-end">
             <img src="{{asset('images/designlogin.png')}}" alt="" class="aspect-square object-cover object-center rounded-se-[50%]" >
            </div>
        </div>
    </x-slot>

    <form method="POST" action="{{ route('register') }}" class="w-3/4 flex flex-col gap-4">
        @csrf
        <!-- Register Header Title -->
        <h1 class="font-medium text-xl ">{{ __('Register') }}</h1>

        <div id="name-email" class="flex flex-col gap-4">
            <p class="text-sm text-zinc-600">What’s your name and email? Don’t worry, no spam—just vibes!</p>
            
            <!-- Name -->
             <div>
                 <x-input-label for="name" :value="__('Name')" />
                 <x-text-input id="name" class="w-full" type="text" name="name" :value="old('name')" placeholder="Username" required autofocus autocomplete="name" >
                     <i data-feather="user" class="w-[18px] h-[18px]"></i>
                    </x-text-input>
                    <x-input-error :messages="$errors->get('name')"  />
                </div>
                
                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="w-full" type="email" name="email" :value="old('email')" placeholder="Email" required autocomplete="username" >
                        <i data-feather="mail" class="w-[18px] h-[18px]"></i>   
                    </x-text-input>
                    <x-input-error :messages="$errors->get('email')"  />
                </div>
        </div>

        <div id="password-confirm" class="hidden opacity-0 flex-col gap-4">
            <p class="text-sm text-zinc-600">Set a strong password and confirm it—we believe in your creativity!</p>

            <!-- Password -->
            <div>
                <x-input-label for="password" :value="__('Password')" />
                
                <x-text-input id="password" class="w-full" type="password" name="password" placeholder="Password" required autocomplete="new-password" >
                    <i data-feather="lock" class="w-[18px] h-[18px]"></i>   
                </x-text-input>
                
                <x-input-error :messages="$errors->get('password')"  />
            </div>
            
            <!-- Confirm Password -->
            <div>
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="w-full" type="password" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password" >
                    <i data-feather="lock" class="w-[18px] h-[18px]"></i>
                </x-text-input>
                
                <x-input-error :messages="$errors->get('password_confirmation')"  />
            </div>
        </div>

        <div class="flex items-center justify-end my-4">
            <a class="text-sm text-zinc-600 hover:text-zinc-800 rounded-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500" href="{{ route('login') }}">
                {{ __('Already Registered?') }}
            </a>    
        </div>

        <x-primary-button id="submit" class="hidden">
                {{ __('Register') }}
        </x-primary-button>

        <x-primary-button id="next">
                {{ __('Next') }}
        </x-primary-button>
    </form>

    <script type="module">
        import { animate, delay } from "https://cdn.jsdelivr.net/npm/motion@11.11.13/+esm";

        document.addEventListener('DOMContentLoaded', () => {
            const next = document.querySelector('#next');

            function nextHandler(event) {
                event.preventDefault();

                animate('#name-email', { opacity: 0, display: 'none' }, { duration: 1 });
                animate('#next', { opacity: 0, display: 'none' }, { duration: 1 });

                delay(() => {
                    animate('#password-confirm', { opacity: [0, 1] }, { duration: 1 })
                    animate('#submit', { opacity: [0, 1] }, { duration: 1 })
                    document.querySelector('#password-confirm').classList.replace('hidden', 'flex');
                    document.querySelector('#submit').classList.replace('hidden', 'flex');
                }, 1)
            }

            next.addEventListener('click', nextHandler)
        })
    </script>
</x-guest-layout>
