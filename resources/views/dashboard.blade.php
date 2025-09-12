<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite('resources/sass/dashboard.scss')
</head>
<body>
    <div class="dashboard-container">
        <header class="dashboard-header">
            <h1>👋 Welcome, Riemann!</h1>
            <p>You are logged in as <strong>Admin</strong>.</p>
        </header>

        <main class="dashboard-main">
            <a href="{{ route('students') }}" class="card">
                📘 <h2>Students</h2>
                <p>Manage student information and records.</p>
            </a>

            <a href="#" class="card">
                👨‍🏫 <h2>Faculty</h2>
                <p>View and update faculty members.</p>
            </a>

            <a href="#" class="card">
                📝 <h2>Attendance</h2>
                <p>Track and review attendance records.</p>
            </a>

            <a href="#" class="card">
                📚 <h2>Courses</h2>
                <p>Manage available courses and subjects.</p>
            </a>

            <a href="#" class="card">
                🏫 <h2>Departments</h2>
                <p>View and update department details.</p>
            </a>

            <a href="#" class="card">
                ⚙️ <h2>Settings</h2>
                <p>Update account information and preferences.</p>
            </a>
        </main>


    </div>
</body>
</html>
