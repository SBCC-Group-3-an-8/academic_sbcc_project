
<?php
// Connect to your database (replace these values with your actual database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sbcc";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to fetch academic year
$academicYearQuery = "SELECT years FROM academicyear";
$academicYearResult = $conn->query($academicYearQuery);
$academicYear = $academicYearResult->fetch_assoc()['years'];

// Query to fetch semester
$semesterQuery = "SELECT semester FROM sem";
$semesterResult = $conn->query($semesterQuery);
$semester = $semesterResult->fetch_assoc()['semester'];

// Query to fetch department information
$departmentQuery = "SELECT dept_name FROM departments";
$departmentResult = $conn->query($departmentQuery);
$department = $departmentResult->fetch_assoc()['dept_name'];

// Query to fetch Happiness Index and Revision Number
$happinessIndexQuery = "SELECT happiness_index FROM happiness_index_table";
$happinessIndexResult = $conn->query($happinessIndexQuery);
$happinessIndex = $happinessIndexResult->fetch_assoc()['happiness_index'];

$revisionNumberQuery = "SELECT revision_number FROM revisionnumber";
$revisionNumberResult = $conn->query($revisionNumberQuery);
$revisionNumber = $revisionNumberResult->fetch_assoc()['revision_number'];

// Query to fetch Faculty Name
$facultyQuery = "SELECT fname FROM faculties";
$facultyResult = $conn->query($facultyQuery);
$facultyName = $facultyResult->fetch_assoc()['fname'];


//from this need to solve



// Query to fetch Date of Conduction
$dateOfConductionQuery = "SELECT date_of_conduction FROM date_of_conduction_table";
$dateOfConductionResult = $conn->query($dateOfConductionQuery);
$dateOfConduction = $dateOfConductionResult->fetch_assoc()['date_of_conduction'];

// Query to fetch subject details
$subjectQuery = "SELECT subject_name, subject_code FROM subject_table WHERE subject_id = 1"; // Change the WHERE condition as needed
$subjectResult = $conn->query($subjectQuery);
$subject = $subjectResult->fetch_assoc();

// Query to fetch class details
$classQuery = "SELECT class_name, class_division FROM classes_table WHERE class_id = 1"; // Change the WHERE condition as needed
$classResult = $conn->query($classQuery);
$class = $classResult->fetch_assoc();

// Query to fetch questions and happiness values
$questionsQuery = "SELECT * FROM questions_table"; // Update the table name
$questionsResult = $conn->query($questionsQuery);

$happinessQuery = "SELECT * FROM happiness_table"; // Update the table name
$happinessResult = $conn->query($happinessQuery);

// Query to fetch HOD name and department name
$hodQuery = "SELECT * FROM hod_table"; // Replace 'hod_table' with your actual table name
$hodResult = $conn->query($hodQuery);

// Fetch the HOD name and department name
if ($hodRow = $hodResult->fetch_assoc()) {
    $hodName = $hodRow['hod_name'];
    $departmentName = $hodRow['department_name'];
} else {
    $hodName = "HOD Name";
    $departmentName = "Department Name";
}

// Query to fetch suggestions
$suggestionsQuery = "SELECT * FROM suggestions_table"; // Replace 'suggestions_table' with your actual table name
$suggestionsResult = $conn->query($suggestionsQuery);

// Fetch all suggestions into an array
$suggestions = array();
while ($suggestionRow = $suggestionsResult->fetch_assoc()) {
    $suggestions[] = $suggestionRow['suggestion_text'];
}

// Close the database connection
$conn->close();
?>



//start here
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>RECORDS</title>
    <meta name="author" content="Shekhar" />
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            text-indent: 0;
        }

        .s1 {
            color: black;
            font-family: Tahoma, sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 9pt;
        }

        .s2 {
            color: black;
            font-family: Tahoma, sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 14pt;
        }

        .s3 {
            color: black;
            font-family: Tahoma, sans-serif;
            font-style: italic;
            font-weight: normal;
            text-decoration: none;
            font-size: 9.5pt;
        }

        .s4 {
            color: black;
            font-family: Tahoma, sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 16pt;
        }

        .s5 {
            color: black;
            font-family: Tahoma, sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        .s7 {
            color: #BEBEBE;
            font-family: Tahoma, sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 11pt;
        }

        .s8 {
            color: #D9D9D9;
            font-family: Tahoma, sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 11pt;
        }

        .s9 {
            color: black;
            font-family: Tahoma, sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 10pt;
        }

        p {
            color: black;
            font-family: "Calibri Light", sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 12pt;
            margin: 0pt;
        }

        .s10 {
            color: black;
            font-family: "Calibri Light", sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 12pt;
        }

        .s11 {
            color: black;
            font-family: "Times New Roman", serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 12pt;
        }

        .s12 {
            color: black;
            font-family: "Times New Roman", serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 12pt;
        }

        .s13 {
            color: black;
            font-family: "Calibri Light", sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 10pt;
        }

        table,
        tbody {
            vertical-align: top;
            overflow: visible;
        }
    </style>
</head>

<body>
    <p style="padding-left: 1pt;text-indent: 0pt;line-height: 6pt;text-align: left;" />
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <table style="border-collapse:collapse;margin-left:5.89pt" cellspacing="0">
        <tr style="height:47pt">

            <td style="width:439pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                colspan="3">
                
                <p style="text-indent: 0pt;text-align: left;"><span>
                        <table border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td><img width="80" height="50" style="margin-top: 7pt;margin-left: 8pt;"
                                        src="data:image/jpeg;base64,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" />
                                </td>
                            </tr>
                        </table>
                    </span></p>
                
                <p class="s1"
                    style="padding-top: 4pt;padding-left: 52pt;padding-right: 11pt;text-indent: 0pt;line-height: 11pt;text-align: center;margin-top: -40pt; margin-right: 1pt;">
                    Sanjivani Rural Education Society's</p>
                <p class="s2"
                    style="padding-left: 52pt;padding-right: 11pt;text-indent: 0pt;line-height: 17pt;text-align: center;margin-right: -15pt;">
                    Sanjivani College of Engineering, Kopargaon-423603</p>
                <p class="s3"
                    style="padding-left: 52pt;padding-right: 11pt;text-indent: 0pt;line-height: 11pt;text-align: center;margin-right: 1pt;">
                    (An Autonomous Institute affiliated with SPPU, Pune)</p>
            </td>
            <td
                style="width:100pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s4" style="padding-top: 4pt;padding-left: 6pt;text-indent: 1pt;text-align: left;">Happiness
                    Index (HI)</p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td style="width:154pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5" style="padding-left: 5pt;text-indent: 0pt;line-height: 12pt;text-align: left;">
                    Academic Year: <b><?php echo $academicYear; ?></b></p>
            </td>
            <td style="width:97pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5" style="padding-left: 9pt;padding-right: 9pt;text-indent: 0pt;line-height: 12pt;text-align: center;">
                    Semester: <b><?php echo $semester; ?></b></p>
            </td>
            <td style="width:288pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" rowspan="2">
                <p class="s2" style="padding-left: 4pt;padding-right: 4pt;text-indent: 0pt;line-height: 17pt;text-align: center;">
                    Department of <?php echo $department['department_name']; ?></p>
                <p class="s9" style="padding-left: 4pt;padding-right: 4pt;text-indent: 0pt;line-height: 11pt;text-align: center;">
                    (NBA Accredited-UG Program)</p>
            </td>
        </tr>
        <tr style="height:16pt">
            <td style="width:154pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Happiness Index: <b><?php echo $happinessIndex; ?></b></p>
            </td>
            <td style="width:97pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5" style="padding-left: 9pt;padding-right: 9pt;text-indent: 0pt;text-align: center;">Rev. No: <?php echo $revisionNumber; ?></p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td style="width:369pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt" colspan="3">
                <p class="s5" style="padding-left: 5pt;text-indent: 0pt;line-height: 12pt;text-align: left;">Faculty Name: <?php echo $facultyName; ?></p>
            </td>
            <td style="width:170pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s5" style="padding-left: 9pt;text-indent: 0pt;line-height: 12pt;text-align: left;">Date of Conduction: <?php echo $dateOfConduction; ?></p>
            </td>
        </tr>
        
    </table>
    <br>
    <p style="padding-top: 2pt;padding-left: 18pt;text-indent: 0pt;text-align: left;">Dear Sir/Madam,</p>
    <p style="padding-top: 1pt;padding-left: 18pt;text-indent: 0pt;text-align: left;">Your feedback for academic year
        2023-24 Semester-I is as below:</p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p style="padding-left: 18pt;text-indent: 0pt;line-height: 107%;text-align: left;">
        <b>Subject Name: <?php echo $subject['subject_name']; ?> &nbsp;&nbsp;&nbsp;&nbsp;
        Class: <?php echo $class['class_name']; ?>-<?php echo $class['class_division']; ?> &nbsp;&nbsp;&nbsp;&nbsp;
        Subject Code: <?php echo $subject['subject_code']; ?></b>
    </p>
    <table style="border-collapse:collapse;margin-left:13.21pt" cellspacing="0">
        <tr style="height:16pt">
            <td style="width:434pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                colspan="2">
                <p class="s10"
                    style="padding-left: 191pt;padding-right: 190pt;text-indent: 0pt;line-height: 15pt;text-align: center;">
                    Particulars</p>
            </td>
            <td
                style="width:96pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s10"
                    style="padding-left: 9pt;padding-right: 9pt;text-indent: 0pt;line-height: 15pt;text-align: center;">
                    % of Happiness</p>
            </td>
        </tr>
        <?php
        // Loop through each question and happiness value
        while ($question = $questionsResult->fetch_assoc()) {
            $happiness = $happinessResult->fetch_assoc();
        ?>
        //1
        <tr style="height:48pt">
            <td
                style="width:34pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p style="text-indent: 0pt;text-align: left;"><br /></p>
                <p class="s10" style="padding-left: 4pt;padding-right: 4pt;text-indent: 0pt;text-align: center;"><?php echo $question['question_id']; ?></p>
            </td>
            <td
                style="width:400pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s10" style="padding-left: 5pt;text-indent: 0pt;line-height: 15pt;text-align: left;"><?php echo $question['question_text']; ?></p>
            </td>
            <td
                style="width:96pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s11"
                    style="padding-left: 9pt;padding-right: 9pt;text-indent: 0pt;line-height: 14pt;text-align: center;">
                    <?php echo $happiness['happiness_value']; ?></p>
            </td>
        </tr>
        //2
        <tr style="height:16pt">
            <td
                style="width:34pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s10"
                    style="padding-left: 4pt;padding-right: 4pt;text-indent: 0pt;line-height: 15pt;text-align: center;">
                    <?php echo $question['question_id']; ?></p>
            </td>
            <td
                style="width:400pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s10" style="padding-left: 5pt;text-indent: 0pt;line-height: 15pt;text-align: left;"><?php echo $question['question_text']; ?></p>
            </td>
            <td
                style="width:96pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s11"
                    style="padding-left: 9pt;padding-right: 9pt;text-indent: 0pt;line-height: 14pt;text-align: center;">
                    <?php echo $happiness['happiness_value']; ?></p>
            </td>
        </tr>
        //3
        <tr style="height:32pt">
            <td
                style="width:34pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s10"
                    style="padding-top: 7pt;padding-left: 4pt;padding-right: 4pt;text-indent: 0pt;text-align: center;">
                    <?php echo $question['question_id']; ?></p>
            </td>
            <td
                style="width:400pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s10" style="padding-left: 5pt;text-indent: 0pt;line-height: 15pt;text-align: left;"><?php echo $question['question_text']; ?></p>
            </td>
            <td
                style="width:96pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s11"
                    style="padding-left: 9pt;padding-right: 9pt;text-indent: 0pt;line-height: 14pt;text-align: center;">
                    <?php echo $happiness['happiness_value']; ?></p>
            </td>
        </tr>
        //4
        <tr style="height:32pt">
            <td
                style="width:34pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s10"
                    style="padding-top: 7pt;padding-left: 4pt;padding-right: 4pt;text-indent: 0pt;text-align: center;">
                    <?php echo $question['question_id']; ?></p>
            </td>
            <td
                style="width:400pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s10" style="padding-left: 5pt;text-indent: 0pt;line-height: 15pt;text-align: left;"><?php echo $question['question_text']; ?></p>
            </td>
            <td
                style="width:96pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s11"
                    style="padding-left: 9pt;padding-right: 9pt;text-indent: 0pt;line-height: 14pt;text-align: center;">
                    <?php echo $happiness['happiness_value']; ?></p>
            </td>
        </tr>
        //5
        <tr style="height:16pt">
            <td
                style="width:34pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s10"
                    style="padding-left: 4pt;padding-right: 4pt;text-indent: 0pt;line-height: 15pt;text-align: center;">
                    <?php echo $question['question_id']; ?></p>
            </td>
            <td
                style="width:400pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s10" style="padding-left: 5pt;text-indent: 0pt;line-height: 15pt;text-align: left;"><?php echo $question['question_text']; ?></p>
            </td>
            <td
                style="width:96pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s11"
                    style="padding-left: 9pt;padding-right: 9pt;text-indent: 0pt;line-height: 14pt;text-align: center;">
                    <?php echo $happiness['happiness_value']; ?></p>
            </td>
        </tr>
        //6
        <tr style="height:32pt">
            <td
                style="width:34pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s10"
                    style="padding-top: 7pt;padding-left: 4pt;padding-right: 4pt;text-indent: 0pt;text-align: center;">
                    <?php echo $question['question_id']; ?></p>
            </td>
            <td
                style="width:400pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s10" style="padding-left: 5pt;text-indent: 0pt;line-height: 15pt;text-align: left;"><?php echo $question['question_text']; ?></p>
            </td>
            <td
                style="width:96pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s11"
                    style="padding-left: 9pt;padding-right: 9pt;text-indent: 0pt;line-height: 14pt;text-align: center;">
                    <?php echo $happiness['happiness_value']; ?></p>
            </td>
        </tr>
        //7
        <tr style="height:16pt">
            <td
                style="width:34pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s10"
                    style="padding-left: 4pt;padding-right: 4pt;text-indent: 0pt;line-height: 15pt;text-align: center;">
                    <?php echo $question['question_id']; ?></p>
            </td>
            <td
                style="width:400pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s10" style="padding-left: 5pt;text-indent: 0pt;line-height: 15pt;text-align: left;"><?php echo $question['question_text']; ?></p>
            </td>
            <td
                style="width:96pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s11"
                    style="padding-left: 9pt;padding-right: 9pt;text-indent: 0pt;line-height: 14pt;text-align: center;">
                    <?php echo $happiness['happiness_value']; ?></p>
            </td>
        </tr>
        //8
        <tr style="height:16pt">
            <td
                style="width:34pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s10"
                    style="padding-left: 4pt;padding-right: 4pt;text-indent: 0pt;line-height: 15pt;text-align: center;">
                    <?php echo $question['question_id']; ?></p>
            </td>
            <td
                style="width:400pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s10" style="padding-left: 5pt;text-indent: 0pt;line-height: 15pt;text-align: left;"><?php echo $question['question_text']; ?></p>
            </td>
            <td
                style="width:96pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s11"
                    style="padding-left: 9pt;padding-right: 9pt;text-indent: 0pt;line-height: 14pt;text-align: center;">
                    <?php echo $happiness['happiness_value']; ?></p>
            </td>
        </tr>
        //9
        <tr style="height:16pt">
            <td
                style="width:34pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s10"
                    style="padding-left: 4pt;padding-right: 4pt;text-indent: 0pt;line-height: 15pt;text-align: center;">
                    <?php echo $question['question_id']; ?></p>
            </td>
            <td
                style="width:400pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s10" style="padding-left: 5pt;text-indent: 0pt;line-height: 15pt;text-align: left;"><?php echo $question['question_text']; ?></p>
            </td>
            <td
                style="width:96pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s11"
                    style="padding-left: 9pt;padding-right: 9pt;text-indent: 0pt;line-height: 14pt;text-align: center;">
                    <?php echo $happiness['happiness_value']; ?></p>
            </td>
        </tr>
        //10
        <tr style="height:32pt">
            <td
                style="width:34pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s10"
                    style="padding-top: 7pt;padding-left: 4pt;padding-right: 4pt;text-indent: 0pt;text-align: center;">
                    <?php echo $question['question_id']; ?></p>
            </td>
            <td
                style="width:400pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s10" style="padding-left: 5pt;text-indent: 0pt;line-height: 15pt;text-align: left;"><?php echo $question['question_text']; ?></p>
            </td>
            <td
                style="width:96pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s11"
                    style="padding-left: 9pt;padding-right: 9pt;text-indent: 0pt;line-height: 14pt;text-align: center;">
                    <?php echo $happiness['happiness_value']; ?></p>
            </td>
        </tr>

        <?php
        }
        ?>
        <tr style="height:15pt">
            <td style="width:434pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt"
                colspan="2">
                <p class="s12" style="padding-right: 4pt;text-indent: 0pt;text-align: right;">OVERALL HI (%)</p>
            </td>
            <td
                style="width:96pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">
                <p class="s11"
                    style="padding-left: 9pt;padding-right: 9pt;text-indent: 0pt;line-height: 14pt;text-align: center;">
                    <?php /* Calculate overall happiness value here */ ?></p>
            </td>
        </tr>
    </table>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p style="padding-left: 25pt;text-indent: 0pt;line-height: 107%;text-align: left;">Kindly Look into feedback /
    Happiness Index given by the student as well as suggestions given by the students. (enclosed as the separate
    sheet here).</p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <table style="border-collapse:collapse;margin-left:345.33pt" cellspacing="0">
        <tr style="height:14pt">
            <td style="width:158pt">
                <p class="s10" style="text-indent: 0pt;line-height: 12pt;text-align: center;"><b><?php echo $hodName; ?></b></p>
            </td>
        </tr>
        <tr style="height:14pt">
            <td style="width:158pt">
                <p class="s10" style="text-indent: 0pt;line-height: 12pt;text-align: center;"><b><?php echo $departmentName; ?></b></p>
            </td>
        </tr>
    </table>
    <p style="padding-left: 18pt;text-indent: 0pt;text-align: left;"><b>Undertaking by the Faculty:</b></p>
    <p style="padding-top: 1pt;padding-left: 18pt;text-indent: 0pt;text-align: left;">I accept this feedback and will
        not be discussing anything about the contents of the same with the students. I shall try to improve my
        performance wherever the shortcomings are and will take immediate corrective actions for the same.</p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p style="padding-left: 101pt;text-indent: 0pt;line-height: 15pt;text-align: left;"><b>Signature of Faculty</b></p>
    <p style="padding-left: 18pt;text-indent: 0pt;line-height: 15pt;text-align: left;"><b>Enclosed:</b> Happiness Index &amp;
        Suggestions given by the students.</p>
    <p style="text-indent: 0pt;text-align: left;" />
    <p class="s13" style="padding-top: 1pt;padding-left: 18pt;text-indent: 0pt;text-align: left;"><b>[Dean Academics office
        Rev.00]</b></p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p style="padding-left: 1pt;text-indent: 0pt;line-height: 6pt;text-align: left;" />
    <p style="padding-left: 1pt;text-indent: 0pt;line-height: 6pt;text-align: left;" />
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p style="text-indent: 0pt;text-align: left;" />
    <p style="padding-top: 2pt;padding-left: 18pt;text-indent: 0pt;text-align: left;"><b>Suggestions given by the students:
    </b></p>
    <p style="text-indent: 0pt;text-align: left;" />
    <p style="padding-top: 1pt;padding-left: 18pt;text-indent: 0pt;text-align: left;"><b> Name: <?php echo $subject['subject_name']; ?> &nbsp;
        &nbsp; Subject Code: <?php echo $subject['subject_code']; ?>&nbsp;
        &nbsp; Class:<?php echo $class['class_name']; ?>-<?php echo $class['class_division']; ?> </b></p>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>

    <table style="border-collapse:collapse;margin-left:34.09pt" cellspacing="0">
    <?php
    // Loop through each row in the table
    foreach ($suggestions as $key => $suggestion) {
        $rowNumber = $key + 1;
        echo '<tr style="height:22pt">';
        echo '<td style="width:28pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">';
        echo '<p class="s10" style="padding-top: 3pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">' . $rowNumber . '.</p>';
        echo '</td>';
        echo '<td style="width:482pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">';
        echo '<p style="text-indent: 0pt;text-align: left;"><br />' . $suggestion . '</p>';
        echo '</td>';
        echo '</tr>';
    }
    ?>
    </table>
    <p style="text-indent: 0pt;text-align: left;"><br /></p>
    <p style="padding-left: 1pt;text-indent: 0pt;line-height: 6pt;text-align: left;" />
</body>
</html>