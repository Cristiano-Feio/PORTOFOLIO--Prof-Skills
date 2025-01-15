<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documents</title>
    <link rel="stylesheet" href="../PORTOFOLIO--Prof-Skills/CSS/document.css" type="text/css">
</head>
<body>
 <header>
        <div class="left">2024-2025 PORTOFOLIO</div>
        <div class="right">
            <form action="logout.php">
                <button type="Log Out">Log out</button>
            </form>
        </div>
 </header>
 <form method="GET" action="">
    <label for="document">Choose a document:</label>
    <select name="file" id="document" required>
        <option value="" disabled selected>-- Select a document --</option>
        <option value="../PORTOFOLIO--Prof-Skills/DOCUMENTS/Agenda-Atelier 21.11.2024.pdf">Agenda</option>
        <option value="../PORTOFOLIO--Prof-Skills/DOCUMENTS/Evaluation forms Merged.pdf">Evaluation Form</option>
        <option value="../PORTOFOLIO--Prof-Skills/DOCUMENTS/feedback forms period2-merged.pdf">Feedback Period-2</option>
        <option value="../PORTOFOLIO--Prof-Skills/DOCUMENTS/feedback Period1_merged.pdf">Feedback Period-1</option>
        <option value="../PORTOFOLIO--Prof-Skills/DOCUMENTS/Minutes of Meeting.pdf">Minutes of Meeting</option>
        <option value="../PORTOFOLIO--Prof-Skills/DOCUMENTS/Project plan.pdf">Project Plan</option>
        <option value="../PORTOFOLIO--Prof-Skills/DOCUMENTS/Project presentation.pdf">Project presentation P1</option>
        <option value="../PORTOFOLIO--Prof-Skills/DOCUMENTS/semi-structured-interview-IT1G.pdf">Semi structured Interview</option>
        <option value="../PORTOFOLIO--Prof-Skills/DOCUMENTS/Reflection Report.pdf">Reflection Report</option>
        <option value="../PORTOFOLIO--Prof-Skills/DOCUMENTS/.pdf">Digital Presentation</option>
        <option value="../PORTOFOLIO--Prof-Skills/DOCUMENTS/.pdf">Edumundo</option>

    </select>
    <button type="submit">View Document</button>
</form>

<div id="pdf-container">
    <?php
   
    $directory = '../PORTOFOLIO--Prof-Skills/DOCUMENTS';
 
   
    if (isset($_GET['file'])) {
        $file = basename($_GET['file']);
        $filePath = $directory . '/' . $file;
 
       
        if (file_exists($filePath)) {
           
            echo "<iframe src='$filePath#toolbar=0&navpanes=0' frameborder='0'></iframe>";
        } else {
            echo "<p style='color: red;'>File not found. Please select a valid document.</p>";
        }
    } else {
        echo "<p>Select a document from the dropdown to view it here.</p>";
    }
    ?>
</div>

 <footer>
        <div class="footer-left">
            <a href="mailto:cfeio1351@gmail.com">cfeio1351@gmail.com</a>
        </div>
        <div class="footer-right">
            <a href="tel:+1234567890">Tel: +1234567890</a>
        </div>
 </footer>
    
</body>
</html>