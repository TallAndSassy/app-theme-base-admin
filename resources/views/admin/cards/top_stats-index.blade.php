<div>
    <h3 class="text-lg leading-6 font-medium text-gray-900">
       @include('tassy::admin.dashboard.top-stats-label')
    </h3>
    <div class="mt-1 grid grid-cols-1 rounded-lg bg-white overflow-hidden shadow md:grid-cols-3">
        <div>
            <livewire:tassy::cards.simple-stat title="Available Courses" qualifier="in course lib" value="2"/>
        </div>

        <div class="border-t border-gray-200 md:border-0 md:border-l">
            <livewire:tassy::cards.num-users/>
        </div>

        <div class="border-t border-gray-200 md:border-0 md:border-l">
            <livewire:tassy::cards.simple-stat title="Offered Classes" qualifier="all" value="4"/>
        </div>
    </div>
</div>
