@props([
    'sessionKey',
    'duration' => 5000,
    'type' => 'success',
])

<input type="hidden" id="duration" value="{{$duration}}">

<div
    x-data="{
        notifications: [],
        add(e) {
            this.notifications.push({
                id: e.timeStamp,
                type: e.detail.type,
                content: e.detail.content
            })
        },
        remove(notification) {
            this.notifications = this.notifications.filter(i => i.id !== notification.id)
        }
    }"
    @notify.window="add($event)"
    class="w-full relative z-50"
    role="status"
    aria-live="polite"
>

    <!-- Notification -->
    <template x-for="notification in notifications" :key="notification.id">
        <div
            x-data="{
                show: false,
                init() {
                    this.$nextTick(() => this.show = true)

                    setTimeout(() => this.transitionOut(), document.getElementById('duration').value)
                },
                transitionOut() {
                    this.show = false

                    setTimeout(() => this.remove(this.notification), 100)
                },
            }"
            x-show="show"
            x-transition.duration.100ms
            class="pointer-events-auto absolute right-0 top-0 m-4 w-full max-w-sm rounded-md border bg-white py-4 pl-6 pr-4 shadow-sm"
            :class="notification.type === 'success' ? 'border-green-600' : 'bg-primary'"
        >
            <div class="inline-flex content-center items-start">
                <!-- Icons -->
                <div x-show="notification.type === 'info'" class="flex-shrink-0">
                    @svg('heroicon-o-information-circle')
                </div>

                <div x-show="notification.type === 'success'" class="flex-shrink-0">
                    @svg('heroicon-o-check-circle', 'text-green-600')
                </div>

                <!-- Text -->
                <div class="ml-3 flex-1">
                    <p x-text="notification.content" class="text-sm font-medium leading-5 text-gray-700"></p>
                </div>
            </div>
        </div>
    </template>
</div>


@if(Session::has($sessionKey))
    <input type="hidden" id="content" value="{{Session::get($sessionKey)}}">
    <input type="hidden" id="type" value="{{$type}}">

    <span x-init="$dispatch('notify', {
        content: document.getElementById('content').value,
        type: document.getElementById('type').value
    })"></span>
@endif


