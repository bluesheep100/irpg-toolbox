<div class="card bg-black mb-4">
    @if($header)
        <div class="card-header text-center">
            <h4>{{ $header }}</h4>
        </div>
    @endif

    <div class="card-body">
        {{ $slot }}
    </div>
</div>
