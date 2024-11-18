<?php

$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];

// Function to check if a date is valid
function isValidDate($day, $month, $year) {
    // Check if day, month, and year are numeric
    if (!is_numeric($day) || !is_numeric($month) || !is_numeric($year)) {
        return false;
    }

    // Convert to integers
    $day = (int)$day;
    $month = (int)$month;
    $year = (int)$year;

    // Validate ranges for day, month, and year
    if ($day < 1 || $day > 31) {
        return false; // Invalid day
    }
    if ($month < 1 || $month > 12) {
        return false; // Invalid month
    }
    if ($year < 1953 || $year > 1998) {
        return false; // Invalid year
    }

    
    return checkdate($month, $day, $year); 
}

// Perform validations
if (empty($day) || empty($month) || empty($year)) {
    echo "Invalid date: All fields are required.";
} elseif (!isValidDate($day, $month, $year)) {
    echo "Invalid date: Please enter a valid date (dd: 1-31, mm: 1-12, yyyy: 1953-1998).";
} else {
    echo "Valid date of birth!";
}
?>
