
{{--
<x-app.layout>
    <form method="POST">
        @csrf
        <x-input name="phone" label="Phone number" type="tel" value="{{ $phone ?? '' }}" />
        <x-input name="ticket_number" label="Ticket number" type="text" value="{{ $ticket_number ?? '' }}" />
        <x-submit>Find my ticket</x-submit>
    </form>
</x-app.layout> --}}



<x-app.layout>
    <form method="POST">
        @csrf
  <div class="mb-3">
    <x-input name="phone" class="form-control" label="Phone number" type="tel" value="{{ $phone ?? '' }}" />
  </div>
  <div class="mb-3">
    <x-input name="ticket_number" class="form-control" label="Ticket number" type="text" value="{{ $ticket_number ?? '' }}" />
</div>
<x-submit class="btn btn-primary">Find my ticket</x-submit>
</form>
</x-app.layout>



