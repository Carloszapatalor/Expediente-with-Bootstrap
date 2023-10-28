@props(['submit'])
<div {{ $attributes->merge(['class' => '']) }}> 
    <div >
        <form  wire:submit="{{ $submit }}">
            <div >
                <div>
                    {{ $form }}
                </div>
            </div>

            @if (isset($actions))
                <div >
                    {{ $actions }}
                </div>
            @endif
        </form>
    </div>
</div>
