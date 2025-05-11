<div 
    x-data="{ open: @entangle('isOpen') }"
    x-show="open"
    x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    class="fixed inset-0 z-50 overflow-y-auto"
    role="dialog" aria-modal="true"

    <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75"></div>

    <div class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:max-w-md sm:my-8 sm:align-middle">
        <div class="bg-white px-4 pt-5 pb-4">
            <nav class="flex justify-center mb-6">
                <button wire:click="switchForm('login')"
                        class="px-4 py-2 {{ $currentForm == 'login' ? 'bg-blue-600 text-white' : 'text-gray-600' }}
                                rounded-md hover:bg-blue-700 transition-colors">
                    Login
                </button>
                <button wire:click="switchForm('signup')"
                        class="px-4 py-2 {{ $currentForm == 'signup' ? 'bg-blue-600 text-white' : 'text-gray-600' }}
                                rounded-md hover:bg-blue-700 transition-colors">
                    Signup
                </button>
            </nav>

            @include("components.auth.{$currentForm}-form")
            
            <div class="mt-6 flex justify-center text-sm text-gray-600">
                <p class="cursor-pointer" wire:click="closeAuthModal">
                    Cancel
                </p>
            </div>
        </div>
    </div>
</div>