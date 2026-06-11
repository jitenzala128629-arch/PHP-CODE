<?php
    const name = "Jiten Zala";
    const ern = "92400527048";
    const sem = "4th Semester";
    const college = "FACULTY OF COMPUTER APPLICATIONS";
    const university = "Marwadi University";

    $sub1_code = "05BC3401"; $sub1_name = "OPERATING SYSTEMS"; $sub1_cr = 4; $sub1_gr = "A+";
    $sub2_code = "05BC3402"; $sub2_name = "COMPUTER NETWORKS"; $sub2_cr = 3; $sub2_gr = "O";
    $sub3_code = "05BC3405"; $sub3_name = "PYTHON PROGRAMMING"; $sub3_cr = 4; $sub3_gr = "O";
    $sub4_code = "05CR0401"; $sub4_name = "LIFE SKILL 2 (PROFESSIONAL SKILLS)"; $sub4_cr = 3; $sub4_gr = "A+";
    $sub5_code = "05BC3404"; $sub5_name = "PROGRAMMING IN C#.NET"; $sub5_cr = 4; $sub5_gr = "O";

    $total_credits = 15;
    $sgpa = 8.39;
    $cgpa = 8.01;
    $result_status = "PASS";

    echo "<h1>Previous Semester Result</h1>";
    echo "<p><strong>Name:</strong> " . name . "</p>";
    echo "<p><strong>Enrollment Number:</strong> " . ern . "</p>";
    echo "<p><strong>Semester:</strong> " . sem . "</p>";
    echo "<p><strong>College:</strong> " . college . "</p>";
    echo "<p><strong>University:</strong> " . university . "</p>";
    echo "<h2>Subjects:</h2>";
    echo "<ul>"; 
    echo "<li>" . $sub1_code . " - " . $sub1_name . " (" . $sub1_cr . " credits) - Grade: " . $sub1_gr . "</li>";
    echo "<li>" . $sub2_code . " - " . $sub2_name . " (" . $sub2_cr . " credits) - Grade: " . $sub2_gr . "</li>";
    echo "<li>" . $sub3_code . " - " . $sub3_name . " (" . $sub3_cr . " credits) - Grade: " . $sub3_gr . "</li>";
    echo "<li>" . $sub4_code . " - " . $sub4_name . " (" . $sub4_cr . " credits) - Grade: " . $sub4_gr . "</li>";
    echo "<li>" . $sub5_code . " - " . $sub5_name . " (" . $sub5_cr . " credits) - Grade: " . $sub5_gr . "</li>";
    echo "</ul>";
    echo "<p><strong>Total Credits:</strong> " . $total_credits . "</p>";
    echo "<p><strong>SGPA:</strong> " . $sgpa . "</p>";
    echo "<p><strong>CGPA:</strong> " . $cgpa . "</p>";
    echo "<p><strong>Result Status:</strong> " . $result_status . "</p>";    
?>