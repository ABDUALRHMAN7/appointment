<!-- appointments/index.blade.php -->
<h1>Available Appointments</h1>

@if($appointments->count() > 0)
    <ul>
        @foreach($appointments as $appointment)
            <li>
                Appointment Date: {{ $appointment->date }} 
                <form method="POST" action="{{ route('appointments.select') }}">
                    @csrf
                    <input type="hidden" name="appointment_id" value="{{ $appointment->id }}">
                    <button type="submit">Select</button>
                </form>
            </li>
        @endforeach
    </ul>
@else
    <p>No available appointments</p>
@endif
