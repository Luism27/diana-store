<x-guest-layout>
    <div class="block h-full max-h-full ">
        <x-jet-authentication-card>
            <x-slot name="logo">
                <x-jet-authentication-card-logo />
            </x-slot>
    
            <x-jet-validation-errors class="mb-4" />
            <div class="pb-6">

                <form method="POST" action="{{ route('register') }}" class="">
                    @csrf
                        
                    <div>
                        <x-jet-label for="name" value="{{ __('Nombre') }}" />
                        <x-jet-input placeholder="Ingrese su nombre completo" id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    </div>
        
                    <div class="mt-4">
                        <x-jet-label for="email" value="{{ __('Correo Electrónico') }}" />
                        <x-jet-input placeholder="Ingrese su correo electrónico" id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required />
                    </div>
        
                    <div class="mt-4">
                        <x-jet-label for="password" value="{{ __('Contraseña') }}" />
                        <x-jet-input placeholder="Ingrese una contraseña" id="password" class="block w-full mt-1" type="password" name="password" required autocomplete="new-password" />
                    </div>
        
                    <div class="mt-4">
                        <x-jet-label for="password_confirmation" value="{{ __('Confirmar contraseña') }}" />
                        <x-jet-input placeholder="Ingrese nuevamente la contraseña" id="password_confirmation" class="block w-full mt-1" type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="numero" value="{{ __('Número de celular') }}" />
                        <x-jet-input id="numero" placeholder="Ingrese su número de celular" class="block w-full mt-1" name="numero" required type="number" />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="ciudad" value="{{ __('Ciudad') }}" />
                        <livewire:ciudad-search id="ciudad" />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="departamento" value="{{ __('Departamento') }}" />
                        <livewire:departamento-search id="departamento" />
                    </div>
                    
                    <div class="mt-4">
                        <x-jet-label for="direccion" value="{{ __('direccion') }}" />
                        <x-jet-input id="direccion" placeholder="Ingrese su direccion" class="block w-full mt-1" name="direccion" required type="text" />
                    </div>
        
                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <x-jet-label for="terms">
                                <div class="flex items-center">
                                    <x-jet-checkbox name="terms" id="terms"/>
        
                                    <div class="ml-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="text-sm text-gray-600 underline hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="text-sm text-gray-600 underline hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-jet-label>
                        </div>
                    @endif
        
                    <div class="flex items-center justify-end mt-4">
                        <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('¿Ya se encuentra registrado?') }}
                        </a>
        
                        <x-jet-button class="ml-4">
                            {{ __('Registrar') }}
                        </x-jet-button>
                    </div>
                </form>
            </div>
        </x-jet-authentication-card>
    </div>
</x-guest-layout>
