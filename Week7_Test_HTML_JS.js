<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Week 7 JavaScript Practice</title>
</head>
<body>

  <h1>Week 7 JavaScript Practice</h1>
  <p>Open the browser console to see the output.</p>

  <script>
    /*************************************************
     * Week 7 JavaScript Practice
     * Course: DEV Web Programming I
     * Student: Sreytouch Lang
     *************************************************/

    /* ================================
       JavaScript Data Types
    ================================ */

    let studentName = "Sreytouch";   // String
    let studentAge = 23;             // Number
    let isEnrolled = true;            // Boolean
    let courses = ["Web Programming", "Databases", "Networking"]; // Array
    let studentInfo = {               // Object
      name: studentName,
      age: studentAge
    };
    let grade;                        // Undefined
    let advisor = null;               // Null

    console.log("Data Types:");
    console.log(typeof studentName); 
    console.log(typeof studentAge);
    console.log(typeof isEnrolled);


    /* ================================
       JavaScript Variables
    ================================ */

    var school = "Westcliff University";
    let program = "MSCS";
    const country = "USA";

    console.log("Variables:");
    console.log(school, program, country);


    /* ================================
       JavaScript Operators
    ================================ */

    let a = 10;
    let b = 5;

    console.log("Operators:");
    console.log(a + b);
    console.log(a - b);
    console.log(a * b);
    console.log(a / b);
    console.log(a > b);
    console.log(a === b);

    a += 5;
    console.log(a);


    /* ================================
       JavaScript Functions
    ================================ */

    function greetStudent(name) {
      return "Hello, " + name + "!";
    }

    console.log("Functions:");
    console.log(greetStudent(studentName));


    /* ================================
       JavaScript Loops
    ================================ */

    console.log("Loop 1:");
    for (let i = 0; i < 3; i++) {
      console.log(i);
    }

    console.log("Loop 2:");
    for (let i = 0; i < courses.length; i++) {
      console.log(courses[i]);
    }

    console.log("Loop 3:");
    for (let course of courses) {
      console.log(course);
    }

    console.log("Loop 4:");
    let count = 0;
    while (count < 2) {
      console.log(count);
      count++;
    }


    /* ================================
       JavaScript Conditionals
    ================================ */

    console.log("Conditionals:");

    if (studentAge >= 18) {
      console.log("Student is an adult");
    }

    if (isEnrolled) {
      console.log("Student is enrolled");
    } else {
      console.log("Student is not enrolled");
    }

  </script>

</body>
</html>
