<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
</head>
<body>
    <h1>Add a Student</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form method="POST" action="{{ route('students.store') }}">
        @csrf
        <label>First Name:</label>
        <input type="text" name="first_name" required><br><br>

        <label>Last Name:</label>
        <input type="text" name="last_name" required><br><br>

        <label>Age:</label>
        <input type="number" name="age" required><br><br>

        <button type="submit">Submit</button>
    </form>

    <br>
    <a href="{{ route('students.show') }}">
        <button>Show Database</button>
    </a>
</body>
</html>
