<div
    class="grid gap-4 bg-white shadow sm:rounded-md"
>
    <div class="bg-gray-100 dark:bg-slate-700 px-6 py-2 text-left flex justify-between border-b">
        <h1 class="
        text-xs font-medium leading-6 text-gray-700 dark:text-slate-200 uppercase tracking-wider
        ">Modal</h1>
    </div>

    <div class="sm:flex-auto px-6">
        <p class="text-sm text-gray-700">
            Control WG modal and content.
        </p>
    </div>

    <div class="flex flex-col gap-4 px-6">

        <x-fab::forms.checkbox
            label="Show Modal"
            wire:model="modal.show_modal"
            help="If checked, modal and trigger text will be displayed."
        />

        <x-fab::forms.input
            wire:model="modal.label"
            label="Modal label"
            help="CTA to trigger modal."
        />

        <x-fab::forms.editor
            wire:model="modal.content"
            label="Modal Content"
            help="Content to display in modal."
        />
    </div>
    <div class="px-4 py-3 bg-gray-50 dark:bg-slate-750 sm:px-6 sm:rounded-b-md flex items-center justify-end">
        <x-fab::elements.button primary wire:click="save">Save</x-fab::elements.button>
    </div>
</div>
