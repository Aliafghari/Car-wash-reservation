<x-app.layout>
   @foreach ($tickets as $ticket)
    <p>
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample{{$loop->index}}"
            aria-expanded="false" aria-controls="collapseWidthExample{{$loop->index}}">
            اطلاعات قبض شماره {{ $ticket->id }}
        </button>
    </p>
    <div style="min-height: 120px;">
        <div class="collapse collapse-horizontal" id="collapseWidthExample{{$loop->index}}">
            <div class="card card-body mb-4" style="width: 300px;">
                    <x-ticket :ticket="$ticket" />
            </div>
        </div>
    </div>

    @endforeach

</x-app.layout>
