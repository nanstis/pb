@props([
    'title',
])

<div class="border border-gray-300 rounded-sm shadow-sm">
    <section title="status-header" class="p-5 font-ibm">
        <h6 class="mb-2 font-semibold text-lg uppercase">
            {{$title}}
        </h6>

        <div class="inline-flex items-center">
            {{$slot}}
        </div>
    </section>

    <section title="status-actions">
        <div class="flex content-center border-t border-t-gray-300">
            {{$actions}}
        </div>
    </section>
</div>
