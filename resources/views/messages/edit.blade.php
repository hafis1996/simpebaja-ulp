{{-- @extends('layouts.skpd.tabler')

@section('content')
    <h1>Edit Message</h1>
    
    <form action="{{ route('messages.update', $message->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="message">Message:</label>
            <textarea name="message" required>{{ $message->message }}</textarea>
        </div>
        
        <button type="submit">Update Message</button>
    </form>
@endsection --}}

@extends('layouts.skpd.tabler')

@section('content')
    <h1>Edit Message</h1>
    
    <form action="{{ route('messages.update', $message->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <!-- Message Field -->
        <div>
            <label for="message">Message:</label>
            <textarea name="message" required>{{ $message->message }}</textarea>
        </div>

        <!-- Status Field -->
        <div>
            <label for="status">Status:</label>
            <select name="status" required>
                <option value="0" {{ $message->status == 0 ? 'selected' : '' }}>Belum evaluasi</option>
                <option value="1" {{ $message->status == 1 ? 'selected' : '' }}>Sudah evaluasi</option>
            </select>
        </div>
        
        <button type="submit">Update Message</button>
    </form>
@endsection

