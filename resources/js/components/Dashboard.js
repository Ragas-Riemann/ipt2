import React, { useState } from "react";
import ReactDOM from "react-dom/client";

function Dashboard() {
    const [students, setStudents] = useState([]);
    const [form, setForm] = useState({ firstname: "", lastname: "", age: "" });

    const handleChange = (e) => {
        setForm({ ...form, [e.target.name]: e.target.value });
    };

    const handleSubmit = (e) => {
        e.preventDefault();
        setStudents([...students, form]);
        setForm({ firstname: "", lastname: "", age: "" });
    };

    return (
        <div style={{ padding: "20px", fontFamily: "Arial" }}>
            <nav style={{ marginBottom: "20px", background: "#333", color: "#fff", padding: "10px" }}>
                <a href="#" style={{ marginRight: "15px", color: "#fff" }}>Dashboard</a>
                <a href="#" style={{ marginRight: "15px", color: "#fff" }}>Students</a>
                <a href="#" style={{ marginRight: "15px", color: "#fff" }}>Faculty</a>
                <a href="#" style={{ marginRight: "15px", color: "#fff" }}>Courses</a>
                <a href="#" style={{ marginRight: "15px", color: "#fff" }}>Attendance</a>
                <a href="#" style={{ marginRight: "15px", color: "#fff" }}>Departments</a>
                <a href="#" style={{ marginRight: "15px", color: "#fff" }}>Settings</a>
            </nav>

            <h2>Add Student</h2>
            <form onSubmit={handleSubmit} style={{ marginBottom: "20px" }}>
                <input
                    type="text"
                    name="firstname"
                    value={form.firstname}
                    placeholder="First name"
                    onChange={handleChange}
                    style={{ marginRight: "10px" }}
                />
                <input
                    type="text"
                    name="lastname"
                    value={form.lastname}
                    placeholder="Last name"
                    onChange={handleChange}
                    style={{ marginRight: "10px" }}
                />
                <input
                    type="number"
                    name="age"
                    value={form.age}
                    placeholder="Age"
                    onChange={handleChange}
                    style={{ marginRight: "10px" }}
                />
                <button type="submit">Add</button>
            </form>

            <h2>Student List</h2>
            <table border="1" cellPadding="5">
                <thead>
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Age</th>
                    </tr>
                </thead>
                <tbody>
                    {students.map((s, i) => (
                        <tr key={i}>
                            <td>{s.firstname}</td>
                            <td>{s.lastname}</td>
                            <td>{s.age}</td>
                        </tr>
                    ))}
                </tbody>
            </table>
        </div>
    );
}

// Mount into #app
if (document.getElementById("app")) {
    const root = ReactDOM.createRoot(document.getElementById("app"));
    root.render(<Dashboard />);
}
