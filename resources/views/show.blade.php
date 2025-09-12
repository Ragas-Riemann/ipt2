<!DOCTYPE html>
<html>
<head>
    <title>Database Records</title>
    @vite('resources/sass/show.scss')
</head>
<body>
    <div class="show-page">
        <h1>👨‍🎓 Students</h1>

        <table class="students-table">
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Created At</th>
            </tr>
            @foreach($people as $person)
            <tr>
                <td>{{ $person->id }}</td>
                <td>{{ $person->first_name }}</td>
                <td>{{ $person->last_name }}</td>
                <td>{{ $person->age }}</td>
                <td>{{ $person->created_at }}</td>
            </tr>
            @endforeach
        </table>

        <a href="{{ route('students') }}">
            <button class="btn-back">⬅ Back to Form</button>
        </a>
    </div>
</body>
</html>
