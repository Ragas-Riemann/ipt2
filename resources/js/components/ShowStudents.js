import React, { useEffect, useState } from "react";
import ReactDOM from "react-dom/client";
import axios from "axios";

function ShowStudents() {
    const [students, setStudents] = useState([]);

    // Fetch students
    useEffect(() => {
        axios.get("/api/students")
            .then(res => setStudents(res.data))
            .catch(err => console.error(err));
    }, []);

    // Create table rows
    const rows = students.length > 0
        ? students.map(s =>
            React.createElement("tr", { key: s.id },
                React.createElement("td", null, s.id),
                React.createElement("td", null, s.firstname),
                React.createElement("td", null, s.lastname),
                React.createElement("td", null, s.age)
            )
        )
        : React.createElement("tr", null,
            React.createElement("td", { colSpan: 4, style: { textAlign: "center" } }, "No students found")
        );

    // Render the full table
    return React.createElement("div", { style: { padding: "20px", fontFamily: "Arial" } },
        React.createElement("h2", null, "Student List"),
        React.createElement("table", { border: 1, cellPadding: 8, cellSpacing: 0 },
            React.createElement("thead", null,
                React.createElement("tr", { style: { backgroundColor: "#f2f2f2" } },
                    React.createElement("th", null, "ID"),
                    React.createElement("th", null, "Firstname"),
                    React.createElement("th", null, "Lastname"),
                    React.createElement("th", null, "Age")
                )
            ),
            React.createElement("tbody", null, rows)
        )
    );
}

// Mount to #app
if (document.getElementById("app")) {
    const root = ReactDOM.createRoot(document.getElementById("app"));
    root.render(React.createElement(ShowStudents));
}
