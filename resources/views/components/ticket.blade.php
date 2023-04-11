<div>
    <p class="text-bold text-blue-700 border p-2 m-3 rounded border-purple-400 inline-block">Ticket
        #{{ $ticket->ticket_number }}
    </p>
    <p class="text-bold text-blue-700 border p-2 m-3 rounded border-purple-400 inline-block bg-success">Phone Number:
        {{ $ticket->phone }}</p>
    <p class="text-bold text-blue-700 border p-2 m-3 rounded border-purple-400 inline-block bg-success">Full Name:
        {{ $ticket->full_name }}</p>
    <p class="text-bold text-blue-700 border p-2 m-3 rounded border-purple-400 inline-block bg-success">Time of arrival:
        {{ $ticket->time_of_arrival }}</p>
    <p class="text-bold text-blue-700 border p-2 m-3 rounded border-purple-400 inline-block bg-success">Demands:
@dd($ticket->Demands1)</p>
    <p class="text-bold text-blue-700 border p-2 m-3 rounded border-purple-400 inline-block bg-danger text-dark">توجه:
        لطفا شماره قبض را برای مراحل بعدی ذخیره کنید.</p>
    {{ $slot }}
    @dd($ticket)
    <div class="m-3 ">
        <x-link href="/ticket/{{ $ticket->id }}/edit" class="btn btn-outline-info text-dark rounded-lg px-3">
            Edit
        </x-link>
    </div>
    <div class="m-3">
        <form action="/ticket/{{ $ticket->id }}" method="POST" class="inline">
            @csrf
            @method('DELETE')
            <x-submit class="btn btn-outline-info text-dark rounded-lg px-3">
                Delete
            </x-submit>
        </form>
    </div>
