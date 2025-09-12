import React, { useState } from "react";
import ReactDOM from "react-dom/client";
import axios from "axios";

function Students() {
    const [firstname, setFirstname] = useState("");
    const [lastname, setLastname] = useState("");
    const [age, setAge] = useState("");
    const [message, setMessage] = useState("");

    const handleSubmit = async (e) => {
        e.preventDefault();
        try {
            await axios.post("/students", { firstname, lastname, age });
            setMessage("Student added successfully!");
            setFirstname("");
            setLastname("");
            setAge("");
        } catch (err) {
            console.error(err);
            setMessage("Failed to add student.");
        }
    };

    return React.createElement("div", { style: { padding: "20px", fontFamily: "Arial" } },
        React.createElement("h2", null, "Add Student"),
        React.createElement("form", { onSubmit: handleSubmit, style: { marginBottom: "20px" } },
            React.createElement("input", {
                type: "text",
                placeholder: "Firstname",
                value: firstname,
                onChange: (e) => setFirstname(e.target.value),
                style: { marginRight: "10px" }
            }),
            React.createElement("input", {
                type: "text",
                placeholder: "Lastname",
                value: lastname,
                onChange: (e) => setLastname(e.target.value),
                style: { marginRight: "10px" }
            }),
            React.createElement("input", {
                type: "number",
                placeholder: "Age",
                value: age,
                onChange: (e) => setAge(e.target.value),
                style: { marginRight: "10px", width: "60px" }
            }),
            React.createElement("button", { type: "submit" }, "Submit")
        ),
        React.createElement("div", null, message)
    );
}

// Mount to #app
if (document.getElementById("app")) {
    const root = ReactDOM.createRoot(document.getElementById("app"));
    root.render(React.createElement(Students));
}
