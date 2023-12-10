<!-- appointments/create.blade.php -->
<h1>Create Appointment</h1>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('appointments.store') }}">
    @csrf

    <label for="date">Appointment Date:</label>
    <input type="date" id="date" name="date" required>

    <!-- Other fields for appointment details -->

    <button type="submit">Create Appointment</button>
</form>
