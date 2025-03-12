<div
    class="grid gap-6"
>
    <div class="sm:flex-auto">
        <p class="text-sm text-gray-700">
            Details (value props) to display on the White Glove ZipCode Checker widget in the BuyBox.
        </p>
    </div>

    <div class="flex flex-col">
        <div class="overflow-hidden bg-white shadow sm:rounded-md">
            <ul
                role="list"
                class="divide-y divide-gray-200"
            >
                @foreach($this->details as $index => $valueProp)
                    <li
                        class="flex items-center"
                    >
                        <div class="flex items-center px-4 py-4 sm:px-6 w-full">
                            <x-fab::forms.input
                                class="w-full"
                                wire:model.debounce.500ms="details.{{ $index }}"
                            />
                        </div>
                        <x-fab::elements.icon
                            :icon="Helix\Fabrick\Icon::X_CIRCLE"
                            class="w-6 h-6 mr-4 hover:text-red-600 cursor-pointer"
                            wire:click="removeValueProp({{ $index }})"
                        />
                    </li>
                @endforeach
            </ul>
            <div class="px-4 py-3 bg-gray-50 dark:bg-slate-750 justify-between flex sm:px-6 sm:rounded-b-md">
                <x-fab::elements.button
                    wire:click="addValueProp"
                >
                    Add value prop
                </x-fab::elements.button>
            </div>
        </div>
    </div>
</div>
