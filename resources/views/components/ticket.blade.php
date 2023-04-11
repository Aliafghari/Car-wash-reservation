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
        <br>
        @foreach (json_decode($ticket->Demands, true) as $Demands)
            {{ $Demands }}<br>
        @endforeach
    </p>
    <p class="text-bold text-blue-700 border p-2 m-3 rounded border-purple-400 inline-block bg-success">total expenses:
        <br>
        @php
            
            $totalExpenses = 0;
            
        @endphp


        @foreach (json_decode($ticket->Demands, true) as $Demands)
            @if ($Demands == 'روشویی 15 دقیقه = 25000 تومان')
                @php $totalExpenses += 25000; @endphp
            @endif
            @if ($Demands == 'نظافت داخل 20 دقیقه = 30000 تومان')
                @php $totalExpenses += 30000; @endphp
            @endif
            @if ($Demands == 'صفر شویی 60 دقیقه = 80000 هزار تومان')
                @php $totalExpenses += 80000; @endphp
            @endif
        @endforeach

        {{ $totalExpenses }} تومان
    </p>
    <p class="text-bold text-blue-700 border p-2 m-3 rounded border-purple-400 inline-block bg-danger text-dark">توجه:
        لطفا شماره قبض را برای مراحل بعدی ذخیره کنید.</p>
    {{ $slot }}
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
