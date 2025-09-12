import React from "react";
import ReactDOM from "react-dom";
import { BrowserRouter as Router, Routes, Route } from "react-router-dom";

import Example from "./Example";
import Home from "./Home";
import AddStudents from "./AddStudents";
import ShowStudents from "./ShowStudents";

export default function Routers() {
  return (
    <Router>
      <Routes>
        <Route path="/" element={<Example />} />
        <Route path="/home" element={<Home />} />
        <Route path="/students/add" element={<AddStudents />} />
        <Route path="/students/show" element={<ShowStudents />} />
      </Routes>
    </Router>
  );
}

if (document.getElementById("root")) {
  ReactDOM.render(<Routers />, document.getElementById("root"));
}
