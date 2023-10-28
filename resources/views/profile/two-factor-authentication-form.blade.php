<x-action-section>
    <x-slot name="content">
        <h6 class="text-gray-900 dark:text-gray-100">
            @if ($this->enabled)
                @if ($showingConfirmation)
                    {{ __('Finish enabling two factor authentication.') }}
                @else
                    {{ __('You have enabled two factor authentication.') }}
                @endif
            @else
                {{ __('You have not enabled two factor authentication.') }}
            @endif
        </h6>
        <p>
            Cuando la autenticación de dos factores esté habilitada, le pediremos un token aleatorio seguro durante la
            autenticación. Puede recuperar este token desde la aplicación Google Authenticator o Authy de su teléfono.
        </p>


        @if ($this->enabled)
            @if ($showingQrCode)
                <div>
                    <p class="font-semibold">
                        @if ($showingConfirmation)
                            {{ __('To finish enabling two factor authentication, scan the following QR code using your phone\'s authenticator application or enter the setup key and provide the generated OTP code.') }}
                        @else
                            {{ __('Two factor authentication is now enabled. Scan the following QR code using your phone\'s authenticator application or enter the setup key.') }}
                        @endif
                    </p>
                </div>

                <div>
                    {!! $this->user->twoFactorQrCodeSvg() !!}
                </div>

                <div>
                    <p class="font-semibold">
                        {{ __('Setup Key') }}: {{ decrypt($this->user->two_factor_secret) }}
                    </p>
                </div>

                @if ($showingConfirmation)
                    {{-- <div>
                                <x-label for="code" value="{{ __('Code') }}" />

                                <x-input 
                                id="code" 
                                type="text" 
                                name="code" 
                                inputmode="numeric" autofocus
                                autocomplete="one-time-code" wire:model="code"
                                wire:keydown.enter="confirmTwoFactorAuthentication" />

                                <x-input-error for="code" class="mt-2" />
                            </div> --}}

                    <div class="mb-3">
                        <label class="small mb-1" for="code">{{ __('Code') }}</label>
                        <input class="form-control" id="code" type="text" name="code" inputmode="numeric"
                            autofocus autocomplete="one-time-code" wire:model="code"
                            wire:keydown.enter="confirmTwoFactorAuthentication" />

                        <x-input-error for="current_password" class="mt-2" />
                    </div>
                @endif
            @endif
            <br>

            @if ($showingRecoveryCodes)
                <div>
                    <p>
                        {{ __('Store these recovery codes in a secure password manager. They can be used to recover access to your account if your two factor authentication device is lost.') }}
                    </p>
                </div>

                <div>
                    @foreach (json_decode(decrypt($this->user->two_factor_recovery_codes), true) as $code)
                        <div>{{ $code }}</div>
                    @endforeach
                </div>
            @endif
            <br>
        @endif

        <div>
            @if (!$this->enabled)
                <x-confirms-password wire:then="enableTwoFactorAuthentication">
                    <x-button type="button" wire:loading.attr="disabled">
                        {{ __('Enable') }}
                    </x-button>
                </x-confirms-password>
            @else
                @if ($showingRecoveryCodes)
                    <x-confirms-password wire:then="regenerateRecoveryCodes">
                        <x-secondary-button>
                            {{ __('Regenerate Recovery Codes') }}
                        </x-secondary-button>
                    </x-confirms-password>
                @elseif ($showingConfirmation)
                    <x-confirms-password wire:then="confirmTwoFactorAuthentication">
                        <x-button type="button" wire:loading.attr="disabled">
                            {{ __('Confirm') }}
                        </x-button>
                    </x-confirms-password>
                @else
                    <x-confirms-password wire:then="showRecoveryCodes">
                        <x-secondary-button>
                            {{ __('Show Recovery Codes') }}
                        </x-secondary-button>

                    </x-confirms-password>
                @endif

                @if ($showingConfirmation)
                    <x-confirms-password wire:then="disableTwoFactorAuthentication">
                        <x-secondary-button wire:loading.attr="disabled">
                            {{ __('Cancel') }}
                        </x-secondary-button>
                    </x-confirms-password>
                @else
                    <x-confirms-password wire:then="disableTwoFactorAuthentication">
                        <x-danger-button wire:loading.attr="disabled">
                            {{ __('Disable') }}
                        </x-danger-button>
                    </x-confirms-password>
                @endif

            @endif

    </x-slot>
</x-action-section>
