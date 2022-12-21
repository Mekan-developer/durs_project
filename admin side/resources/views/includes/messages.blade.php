<div class="w-[80%] h-full space-y-4">

    @foreach ($messages as $message)


    <div class="w-full h-auto bg-white">
        <div class="h-auto px-4 pt-3 mb-10  text-left">
            {{ $message->text; }}
        </div>
        <address class="h-[80px] text-left px-4">
            <b>Ady:</b>{{ $message->name; }}<br>
            <b>tel:</b>{{ $message->phone_number; }}<br>
            <b>Email:</b>{{ $message->email; }}
        </address>
    </div>
    @endforeach

</div>
