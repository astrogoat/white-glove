<div
    class="grid gap-4 bg-white shadow sm:rounded-md"
>
    <div class="bg-gray-100 dark:bg-slate-700 px-6 py-2 text-left flex justify-between border-b">
        <h1 class="
        text-xs font-medium leading-6 text-gray-700 dark:text-slate-200 uppercase tracking-wider
        ">Icon</h1>
    </div>

    <div class="sm:flex-auto px-6">
        <p class="text-sm text-gray-700">
            Set icon (optional).
        </p>
    </div>

    <div class="px-6">
        <x-fab::elements.button
            wire:click="triggerMediaLibrary"
        >
            {{ $icon ? 'Change' : 'Add' }} icon
        </x-fab::elements.button>
        @if($icon)
            <div class="flex items-center gap-2">
                <img src="{{ $icon }}" alt="Icon" class="w-[26px]" />
                <x-fab::elements.icon
                    :icon="Helix\Fabrick\Icon::X_CIRCLE"
                    class="w-6 h-6 mr-4 hover:text-red-600 cursor-pointer"
                    wire:click="removeIcon"
                />
            </div>
        @endif
    </div>

    <div class="px-4 py-3 bg-gray-50 dark:bg-slate-750 sm:px-6 sm:rounded-b-md flex items-center justify-end">
        <x-fab::elements.button primary wire:click="save">Save</x-fab::elements.button>
    </div>
</div>

@push('styles')
    <link href="{{ asset('vendor/white-glove/css/white-glove.css') }}" rel="stylesheet">
@endpush

@push('overlays')
    @includeIf('lego::livewire.editor.includes.media-providers.' . config('lego.media.provider'))
@endpush
