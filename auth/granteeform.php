<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../images/sfaulogo.png">
  <link rel="icon" type="image/png" href="../images/sfaulogo.png">
  <title>
    admindash
  </title>
  <link rel="stylesheet" href="../static/customssc.css">
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <!-- <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script> -->
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }

    h1 {
      text-align: center;
    }

    form {
      max-width: 800px;
      margin: 0 auto;
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 15px;
    }

    label {
      display: block;
      margin-top: 10px;
      font-size: 14px;
      margin-left: 30px;
    }

    input,
    select {
      width: 100%;
      padding: 6px;
      margin-top: 5px;
      margin-bottom: 10px;
      box-sizing: border-box;
      font-size: 14px;
    }

    button {
      background-color: #5e0b15;
      color: white;
      padding: 8px 12px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      width: 100%;
      font-size: 16px;
      margin-left: 50px;
    }

    button:hover {
      background-color: #90323d;
    }
  </style>
</head>

<body class="g-sidenav-show  bg-white-200">
  <?php include("../pages/admin_sidenav.php"); ?>
  <h1>Grantee Form</h1>

  <form id="granteeForm" action="../connections/process_grantee_form.php" method="post">
    <label for="seq">SEQ:</label>
    <input type="text" name="seq" id="seq" required>

    <label for="control_no">CONTROL NO.:</label>
    <input type="text" name="control_no" id="control_no" required>

    <label for="last_name">LAST NAME:</label>
    <input type="text" name="last_name" id="last_name" required>

    <label for="first_name">FIRST NAME:</label>
    <input type="text" name="first_name" id="first_name" required>

    <label for="middle_name">MIDDLE NAME:</label>
    <input type="text" name="middle_name" id="middle_name">

    <label for="sex">SEX:</label>
    <select name="sex" id="sex" required>
      <option value="male">Male</option>
      <option value="female">Female</option>
    </select>

    <label for="birthdate">BIRTHDATE:</label>
    <input type="date" name="birthdate" id="birthdate" required>

    <label for="course_enrolled">COURSE ENROLLED:</label>
    <input type="text" name="course_enrolled" id="course_enrolled" required>

    <label for="year_level">YEAR LEVEL:</label>
    <input type="text" name="year_level" id="year_level" required>

    <label for="household_no">HOUSEHOLD NO.:</label>
    <input type="text" name="household_no" id="household_no" required>

    <label for="per_capita_income">PER CAPITA INCOME:</label>
    <input type="number" name="per_capita_income" id="per_capita_income" step="0.01" required>

    <label for="street_brgy">STREET & BRGY.:</label>
    <input type="text" name="street_brgy" id="street_brgy" required>

    <label for="town">TOWN:</label>
    <input type="text" name="town" id="town" required>

    <label for="province">PROVINCE:</label>
    <input type="text" name="province" id="province" required>

    <label for="zip_code">ZIP CODE:</label>
    <input type="text" name="zip_code" id="zip_code" required>

    <label for="total_assessment">TOTAL ASSESSMENT:</label>
    <input type="number" name="total_assessment" id="total_assessment" step="0.01" required>

    <label for="gwa">GWA:</label>
    <input type="number" name="gwa" id="gwa" step="0.01" required>

    <label for="disability">DISABILITY:</label>
    <input type="text" name="disability" id="disability">

    <label for="contact_number">CONTACT NUMBER:</label>
    <input type="tel" name="contact_number" id="contact_number" required>

    <label for="email_address">EMAIL ADDRESS:</label>
    <input type="email" name="email_address" id="email_address" required>

    <label for="grant_type">GRANT TYPE:</label>
    <input type="text" name="grant_type" id="grant_type" required>

    <label for="department">DEPARTMENT:</label>
    <input type="text" name="department" id="department" required>

    <label for="remarks">REMARKS:</label>
    <input type="text" name="remarks" id="remarks">

    <button type="submit">Submit</button>
  </form>

  <!-- Add your JavaScript or link to a JS file here -->
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <script>
    function submitForm() {
      // You can add additional validation or processing here if needed
      alert("Form submitted successfully!"); // Replace with your actual form submission logic
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>
</body>

</html>