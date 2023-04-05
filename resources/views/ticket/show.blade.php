{{-- <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="..." class="rounded me-2" alt="...">
      <strong class="me-auto">Bootstrap</strong>
      <small class="text-body-secondary">11 mins ago</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
        <x-app.layout title="Ticket #{{ $ticket->ticket_number }}">
            <x-ticket :ticket="$ticket" />
        </x-app.layout>
    </div>
  </div> --}}

<x-app.layout title="Ticket #{{ $ticket->ticket_number }}">
    <p>
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample"
            aria-expanded="false" aria-controls="collapseWidthExample">
            اطلاعات قبض شماره {{ $ticket->id }}
        </button>
    </p>
    <div style="min-height: 120px;">
        <div class="collapse collapse-horizontal" id="collapseWidthExample">
            <div class="card card-body" style="width: 300px;">
                <x-ticket :ticket="$ticket" />
            </div>
        </div>
    </div>
</x-app.layout>
