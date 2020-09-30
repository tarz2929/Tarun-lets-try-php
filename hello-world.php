This is before my PHP tag!


Note that these new-lines are real, and output in our response!

<?php // All PHP code must be inside the <?php tags!
// (Note: If we have an open tag, and reach the end of the file, we don't need to close it!)

// "Echo" and "print" are functions we can...
// use to output strings as a response.
echo "Hello, World!";

// There are two other styles of comment we can use in PHP. This (//) is single-line.

# This is also a single-line comment.

/* This is our
      (familiar)
          multi-line
  comment! */

// Variable names start with a dollar-sign ($).
// ***NOTE: They ARE case-sensitive.
// (Also, don't start them with numbers or special characters.)
$studentName = "\nFahad";
echo $studentName; // In "" we SEE an actual new-line!

$studentName2 = '\nDanish';
echo $studentName2; // In '' we see the literal \n string!

// Single quotes will NOT evalute special character escapes or
// variable values within the string.
echo '\n\n Two students in TECHCareers are:\n- $studentName\n- $studentName2.';

// Double quotes, WILL though! Careful which one you use for
// your current use-case!
echo "\n\nTwo students in TECHCareers are:\n$studentName\n$studentName2";
