<!DOCTYPE html>
<html>
<head>
    <title>Database Records</title>
</head>
<body>
    <h1>People Table</h1>

    <table border="1" cellpadding="10">
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

    <br>
    <a href="{{ route('students') }}">
        <button>Back to Form</button>
    </a>
</body>
</html>
