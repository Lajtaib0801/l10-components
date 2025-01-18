<x-layout>
    <x-section>
        Hali 1!
    </x-section>
    <x-section type="doubtful">
        Hali 2!
    </x-section>
    <x-section type="unsuccessful" class='mt-10'>
        Hali 3!
    </x-section>


    <div class="m-8">
        <x-alert title="Danger" message="Something not ideal might be happening." type="danger">
            <a href="#" class="text-blue-700 underline">Danger URL</a>
        </x-alert>
    </div>
    <div class="m-8">
        <x-alert title="Information" message="Everything is OK." type="success">
            <a href="#" class="text-blue-700 underline">Success URL</a>
        </x-alert>
    </div>
</x-layout>
