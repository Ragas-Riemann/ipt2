<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Students</title>
    @vite('resources/sass/students.scss')
</head>
<body>
    <div class="students-page">
        <h1>👨‍🎓 Manage Students</h1>

        @if(session('success'))
            <div class="alert success">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('students.store') }}" class="students-form">
            @csrf

            <label>First Name:</label>
            <input type="text" name="first_name" required>

            <label>Last Name:</label>
            <input type="text" name="last_name" required>

            <label>Age:</label>
            <input type="number" name="age" required>

            <button type="submit" class="btn-primary">➕ Add Student</button>
        </form>

        <div class="actions">
            <a href="{{ route('students.show') }}">
                <button class="btn-secondary">📋 Show Database</button>
            </a>

            <a href="{{ route('dashboard') }}">
                <button class="btn-danger">⬅ Back to Dashboard</button>
            </a>
        </div>
    </div>
</body>
</html>
