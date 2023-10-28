@props(['id' => null, 'maxWidth' => null])

<x-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div >
        <div >
            <div >
                <svg >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                </svg>
            </div>

            <div >
                <h3 >
                    {{ $title }}
                </h3>

                <div >
                    {{ $content }}
                </div>
            </div>
        </div>
    </div>

    <div >
        {{ $footer }}
    </div>
</x-modal>
