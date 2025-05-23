<x-guest-layout>
    <div class="w-1/2">
        <a href="{{ route('login') }}">Back</a>

        <div class="my-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>
        
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            
            <!-- Email Address -->
            <div>
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="w-full" type="email" name="email" :value="old('email')" required autofocus >
                    <i data-feather="mail" class="w-[18px] h-[18px]"></i>
                </x-text-input>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            
            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="text-sm">
                    {{ __('Email Password Reset Link') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-guest-layout>
