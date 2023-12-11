<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../images/sfaulogo.png">
  <link rel="icon" type="image/png" href="../images/sfaulogo.png">
  <title>
    masterlist
  </title> -->
<!-- <link rel="stylesheet" href="../assets/css/customssc.css"> -->
<!--     Fonts and icons     -->
<!-- <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" /> -->
<!-- Nucleo Icons -->
<!-- <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" /> -->
<!-- Font Awesome Icons -->
<!-- <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script> -->
<!-- Material Icons -->
<!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet"> -->
<!-- CSS Files -->
<!-- <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" /> -->
<!-- Nepcha Analytics (nepcha.com) -->
<!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
<!-- <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script> -->
<?php //include("../dbconfig.php"); 
?>
<!-- </head>

<body class="g-sidenav-show  bg-gray-200">
  <?php //include("./admin_sidenav.php"); 
  ?>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg "> -->
<!-- Navbar -->
<!-- <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-2">
        <nav aria-label="breadcrumb">
          <div class="navbox">
            <img src="../images/sfaulogo.png" class="navbar-brand-img h-50 ms-md-auto pe-md-3 d-flex justify-content-center align-items-center" alt="main_logo">
            <h6 class="cnscsfautitle" class="navbar-brand-img h-50 ms-md-auto pe-md-3 d-flex justify-content-center align-items-center">CAMARINES NORTE STATE COLLEGE SCHOLARSHIP AND FINANCIAL ASSISTANCE UNIT
            </h6>
          </div>
        </nav>
      </div>
      <ul class="navbar-nav  justify-content-end">
        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
          <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </a>
        </li>
      </ul>
    </nav> -->
<!-- End Navbar -->
<!-- <div class="container-fluid py-4">
      <div class="row mt-4">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div>
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
              <div class="input-group input-group-outline">
                <label class="form-label">Search ...</label>
                <input type="text" class="form-control">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title">Masterlist</h5>
        </div>
        <div class="card-body">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th scope="col">SEQ</th>
                <th scope="col">CONTROL NO.</th>
                <th scope="col">LAST NAME</th>
                <th scope="col">FIRST NAME</th>
                <th scope="col">MIDDLE NAME</th>
                <th scope="col">SEX</th>
                <th scope="col">BIRTH DATE</th>
                <th scope="col">COURSE ENROLLED</th>
                <th scope="col">YEAR LEVEL</th>
                <th scope="col">HOUSEHOLD NO.</th>
                <th scope="col">PER CAPITA INCOME</th>
                <th scope="col">STREET & BRGY.</th>
                <th scope="col">TOWN</th>
                <th scope="col">PROVINCE</th>
                <th scope="col">ZIP CODE</th>
                <th scope="col">TOTAL ASSESSMENT</th>
                <th scope="col">GWA</th>
                <th scope="col">DISABILITY</th>
                <th scope="col">CONTACT NUMBER</th>
                <th scope="col">EMAIL ADDRESS</th>
                <th scope="col">GRANT Type</th>
                <th scope="col">DEPARTMENT</th>
                <th scope="col">REMARKS</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody id="firebase-table-body"> -->
<!-- Firebase data will be dynamically added here -->
<?php
/*include("../dbconfig.php");
              $ref_table = 'users';
              $fetchData = $database->getReference($ref_table)->getValue();
              if ($fetchData > 0) {
                $i = 0;
                foreach ($fetchData as $key => $row) {
              */ ?>
<tr>
  <td><?php //$i++; 
      ?></td>
  <td><?php //$row['fname']; 
      ?></td>
  <td><?php //$row['midname']; 
      ?></td>
  <td><?php //$row['lname']; 
      ?></td>
  <td><?php //$row['email']; 
      ?></td>
  <!-- <td><a href="edit.php" class="btn btn-primary btn-sm">Edit</a></td>
                    <td><a href="delete.php" class="btn btn-danger btn-sm">Delete</a></td> -->
</tr>
<?php
//   }
// } else {
?>
<!-- <tr>
                  <td colspan="25">No data found</td>
                </tr> -->
<?php
// } 
?>

</tbody>
</table>
</div>
</div>
</div>

</main>
<!--   Core JS Files   -->
<!-- <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script> -->
<script>
  // Add Firebase data to the table
  // var tableBody = document.getElementById('firebase-table-body');
  // sampleData.forEach(function(data) {
  //   var row = document.createElement('tr');
  //   row.innerHTML = `
  //                 <th scope="row">${data.ID}</th>
  //                 <td>${data.Name}</td>
  //                 <td>${data.Age}</td>
  //             `;
  //   tableBody.appendChild(row);
  // });
</script>
<script>
  // var ctx = document.getElementById("chart-bars").getContext("2d");

  // new Chart(ctx, {
  //   type: "bar",
  //   data: {
  //     labels: ["M", "T", "W", "T", "F", "S", "S"],
  //     datasets: [{
  //       label: "Sales",
  //       tension: 0.4,
  //       borderWidth: 0,
  //       borderRadius: 4,
  //       borderSkipped: false,
  //       backgroundColor: "rgba(255, 255, 255, .8)",
  //       data: [50, 20, 10, 22, 50, 10, 40],
  //       maxBarThickness: 6
  //     }, ],
  //   },
  //   options: {
  //     responsive: true,
  //     maintainAspectRatio: false,
  //     plugins: {
  //       legend: {
  //         display: false,
  //       }
  //     },
  //     interaction: {
  //       intersect: false,
  //       mode: 'index',
  //     },
  //     scales: {
  //       y: {
  //         grid: {
  //           drawBorder: false,
  //           display: true,
  //           drawOnChartArea: true,
  //           drawTicks: false,
  //           borderDash: [5, 5],
  //           color: 'rgba(255, 255, 255, .2)'
  //         },
  //         ticks: {
  //           suggestedMin: 0,
  //           suggestedMax: 500,
  //           beginAtZero: true,
  //           padding: 10,
  //           font: {
  //             size: 14,
  //             weight: 300,
  //             family: "Roboto",
  //             style: 'normal',
  //             lineHeight: 2
  //           },
  //           color: "#fff"
  //         },
  //       },
  //       x: {
  //         grid: {
  //           drawBorder: false,
  //           display: true,
  //           drawOnChartArea: true,
  //           drawTicks: false,
  //           borderDash: [5, 5],
  //           color: 'rgba(255, 255, 255, .2)'
  //         },
  //         ticks: {
  //           display: true,
  //           color: '#f8f9fa',
  //           padding: 10,
  //           font: {
  //             size: 14,
  //             weight: 300,
  //             family: "Roboto",
  //             style: 'normal',
  //             lineHeight: 2
  //           },
  //         }
  //       },
  //     },
  //   },
  // });


  // var ctx2 = document.getElementById("chart-line").getContext("2d");

  // new Chart(ctx2, {
  //   type: "line",
  //   data: {
  //     labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
  //     datasets: [{
  //       label: "Mobile apps",
  //       tension: 0,
  //       borderWidth: 0,
  //       pointRadius: 5,
  //       pointBackgroundColor: "rgba(255, 255, 255, .8)",
  //       pointBorderColor: "transparent",
  //       borderColor: "rgba(255, 255, 255, .8)",
  //       borderColor: "rgba(255, 255, 255, .8)",
  //       borderWidth: 4,
  //       backgroundColor: "transparent",
  //       fill: true,
  //       data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
  //       maxBarThickness: 6

  //     }],
  //   },
  //   options: {
  //     responsive: true,
  //     maintainAspectRatio: false,
  //     plugins: {
  //       legend: {
  //         display: false,
  //       }
  //     },
  //     interaction: {
  //       intersect: false,
  //       mode: 'index',
  //     },
  //     scales: {
  //       y: {
  //         grid: {
  //           drawBorder: false,
  //           display: true,
  //           drawOnChartArea: true,
  //           drawTicks: false,
  //           borderDash: [5, 5],
  //           color: 'rgba(255, 255, 255, .2)'
  //         },
  //         ticks: {
  //           display: true,
  //           color: '#f8f9fa',
  //           padding: 10,
  //           font: {
  //             size: 14,
  //             weight: 300,
  //             family: "Roboto",
  //             style: 'normal',
  //             lineHeight: 2
  //           },
  //         }
  //       },
  //       x: {
  //         grid: {
  //           drawBorder: false,
  //           display: false,
  //           drawOnChartArea: false,
  //           drawTicks: false,
  //           borderDash: [5, 5]
  //         },
  //         ticks: {
  //           display: true,
  //           color: '#f8f9fa',
  //           padding: 10,
  //           font: {
  //             size: 14,
  //             weight: 300,
  //             family: "Roboto",
  //             style: 'normal',
  //             lineHeight: 2
  //           },
  //         }
  //       },
  //     },
  //   },
  // });

  // var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

  // new Chart(ctx3, {
  //   type: "line",
  //   data: {
  //     labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
  //     datasets: [{
  //       label: "Mobile apps",
  //       tension: 0,
  //       borderWidth: 0,
  //       pointRadius: 5,
  //       pointBackgroundColor: "rgba(255, 255, 255, .8)",
  //       pointBorderColor: "transparent",
  //       borderColor: "rgba(255, 255, 255, .8)",
  //       borderWidth: 4,
  //       backgroundColor: "transparent",
  //       fill: true,
  //       data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
  //       maxBarThickness: 6

  //     }],
  //   },
  //   options: {
  //     responsive: true,
  //     maintainAspectRatio: false,
  //     plugins: {
  //       legend: {
  //         display: false,
  //       }
  //     },
  //     interaction: {
  //       intersect: false,
  //       mode: 'index',
  //     },
  //     scales: {
  //       y: {
  //         grid: {
  //           drawBorder: false,
  //           display: true,
  //           drawOnChartArea: true,
  //           drawTicks: false,
  //           borderDash: [5, 5],
  //           color: 'rgba(255, 255, 255, .2)'
  //         },
  //         ticks: {
  //           display: true,
  //           padding: 10,
  //           color: '#f8f9fa',
  //           font: {
  //             size: 14,
  //             weight: 300,
  //             family: "Roboto",
  //             style: 'normal',
  //             lineHeight: 2
  //           },
  //         }
  //       },
  //       x: {
  //         grid: {
  //           drawBorder: false,
  //           display: false,
  //           drawOnChartArea: false,
  //           drawTicks: false,
  //           borderDash: [5, 5]
  //         },
  //         ticks: {
  //           display: true,
  //           color: '#f8f9fa',
  //           padding: 10,
  //           font: {
  //             size: 14,
  //             weight: 300,
  //             family: "Roboto",
  //             style: 'normal',
  //             lineHeight: 2
  //           },
  //         }
  //       },
  //     },
  //   },
  // });
</script>
<script>
  // var win = navigator.platform.indexOf('Win') > -1;
  // if (win && document.querySelector('#sidenav-scrollbar')) {
  //   var options = {
  //     damping: '0.5'
  //   }
  //   Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  // }
</script>
<!-- Github buttons -->
<!-- <script async defer src="https://buttons.github.io/buttons.js"></script> -->
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<!-- <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script> -->
<!-- </body>

</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../images/sfaulogo.png">
  <link rel="icon" type="image/png" href="../images/sfaulogo.png">
  <title>Masterlist</title>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
  <!-- <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script> -->
  <style>
    /* Apply styles for screens smaller than 760px and iPads */
    @media only screen and (max-width: 760px),
    (min-device-width: 768px) and (max-device-width: 1024px) {

      /* Force table to not be like tables anymore */
      table,
      thead,
      tbody,
      th,
      td,
      tr {
        display: block;
      }

      /* Hide table headers (but not display: none;, for accessibility) */
      thead tr {
        position: absolute;
        top: -9999px;
        left: -9999px;
      }

      tr {
        margin: 0 0 1rem 0;
      }

      tr:nth-child(odd) {
        background: #f2f2f2;
      }

      td {
        /* Behave like a "row" */
        border: none;
        border-bottom: 1px solid #eee;
        position: relative;
        padding-left: 50%;
        margin-top: 2px;
      }

      td:before {
        /* Now like a table header */
        position: absolute;
        /* Top/left values mimic padding */
        top: 0;
        left: 6px;
        width: 45%;
        padding-right: 15px;
        white-space: nowrap;
      }

      /* Label the data */
      td:nth-of-type(1):before {
        content: "ID";
      }

      td:nth-of-type(2):before {
        content: "SEQ";
      }

      td:nth-of-type(3):before {
        content: "CONTROL NO.";
      }

      td:nth-of-type(4):before {
        content: "LAST NAME";
      }

      td:nth-of-type(5):before {
        content: "FIRST NAME";
      }

      td:nth-of-type(6):before {
        content: "MIDDLE NAME";
      }

      td:nth-of-type(7):before {
        content: "SEX";
      }

      td:nth-of-type(8):before {
        content: "BIRTH DATE";
      }

      td:nth-of-type(9):before {
        content: "COURSE ENROLLED";
      }

      td:nth-of-type(10):before {
        content: "YEAR LEVEL";
      }

      td:nth-of-type(11):before {
        content: "HOUSEHOLD NO.";
      }

      td:nth-of-type(12):before {
        content: "PER CAPITA INCOME";
      }

      td:nth-of-type(13):before {
        content: "STREET & BRGY.";
      }

      td:nth-of-type(14):before {
        content: "TOWN";
      }

      td:nth-of-type(15):before {
        content: "PROVINCE";
      }

      td:nth-of-type(16):before {
        content: "ZIP CODE";
      }

      td:nth-of-type(17):before {
        content: "TOTAL ASSESSMENT";
      }

      td:nth-of-type(18):before {
        content: "GWA";
      }

      td:nth-of-type(19):before {
        content: "DISABILITY";
      }

      td:nth-of-type(20):before {
        content: "CONTACT NUMBER";
      }

      td:nth-of-type(21):before {
        content: "EMAIL ADDRESS";
      }

      td:nth-of-type(22):before {
        content: "GRANT TYPE";
      }

      td:nth-of-type(23):before {
        content: "DEPARTMENT";
      }

      td:nth-of-type(24):before {
        content: "REMARKS";
      }

      /* td:nth-of-type(25):before {
        content: "Edit";
      }

      td:nth-of-type(26):before {
        content: "Delete";
      } */
    }
  </style>
  <?php include("../dbconfig.php"); ?>
</head>

<body class="g-sidenav-show bg-gray-200">
  <?php include("./admin_sidenav.php"); ?>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-2">
        <nav aria-label="breadcrumb">
          <div class="navbox">
            <img src="../images/sfaulogo.png" class="navbar-brand-img h-50 ms-md-auto pe-md-3 d-flex justify-content-center align-items-center" alt="main_logo">
            <h6 class="cnscsfautitle" class="navbar-brand-img h-50 ms-md-auto pe-md-3 d-flex justify-content-center align-items-center">CAMARINES NORTE STATE COLLEGE SCHOLARSHIP AND FINANCIAL ASSISTANCE UNIT</h6>
          </div>
        </nav>
      </div>
      <ul class="navbar-nav justify-content-end">
        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
          <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid py-4">
      <div class="row mt-4">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
              <label class="form-label">Search ...</label>
              <input type="text" class="form-control">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title">Masterlist</h5>
        </div>
        <div class="card-body">
          <td><a href="../auth/granteeform.php" class="btn btn-primary btn-sm">Add grantee</a></td>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th role="columnheader" scope="col">ID</th>
                  <th role="columnheader" scope="col">SEQ</th>
                  <th role="columnheader" scope="col">CONTROL NO.</th>
                  <th role="columnheader" scope="col">LAST NAME</th>
                  <th role="columnheader" scope="col">FIRST NAME</th>
                  <th role="columnheader" scope="col">MIDDLE NAME</th>
                  <th role="columnheader" scope="col">SEX</th>
                  <th role="columnheader" scope="col">BIRTH DATE</th>
                  <th role="columnheader" scope="col">COURSE ENROLLED</th>
                  <th role="columnheader" scope="col">YEAR LEVEL</th>
                  <th role="columnheader" scope="col">HOUSEHOLD NO.</th>
                  <th role="columnheader" scope="col">PER CAPITA INCOME</th>
                  <th role="columnheader" scope="col">STREET & BRGY.</th>
                  <th role="columnheader" scope="col">TOWN</th>
                  <th role="columnheader" scope="col">PROVINCE</th>
                  <th role="columnheader" scope="col">ZIP CODE</th>
                  <th role="columnheader" scope="col">TOTAL ASSESSMENT</th>
                  <th role="columnheader" scope="col">GWA</th>
                  <th role="columnheader" scope="col">DISABILITY</th>
                  <th role="columnheader" scope="col">CONTACT NUMBER</th>
                  <th role="columnheader" scope="col">EMAIL ADDRESS</th>
                  <th role="columnheader" scope="col">GRANT TYPE</th>
                  <th role="columnheader" scope="col">DEPARTMENT</th>
                  <th role="columnheader" scope="col">REMARKS</th>
                  <th role="columnheader" scope="col">Edit</th>
                  <th role="columnheader" scope="col">Delete</th>
                </tr>
              </thead>
              <tbody role="rowgroup" id="firebase-table-body">
                <!-- Firebase data will be dynamically added here -->
                <?php
                include("../dbconfig.php");
                $ref_table = 'granteeForms';
                $fetchData = $database->getReference($ref_table)->getValue();
                if ($fetchData > 0) {
                  $i = 0;
                  foreach ($fetchData as $key => $row) {
                    // if ($row['role'] !== 'cashier' && $row['role'] !== 'admin') {
                ?>
                    <tr role="row">
                      <td role="cell"><?php echo ++$i; ?></td>
                      <td role="cell"><?php echo $row['seq']; ?></td>
                      <td role="cell"><?php echo $row['control_no']; ?></td>
                      <td role="cell"><?php echo $row['last_name']; ?></td>
                      <td role="cell"><?php echo $row['first_name']; ?></td>
                      <td role="cell"><?php echo $row['middle_name']; ?></td>
                      <td role="cell"><?php echo $row['sex']; ?></td>
                      <td role="cell"><?php echo $row['birthdate']; ?></td>
                      <td role="cell"><?php echo $row['course_enrolled']; ?></td>
                      <td role="cell"><?php echo $row['year_level']; ?></td>
                      <td role="cell"><?php echo $row['household_no']; ?></td>
                      <td role="cell"><?php echo $row['per_capita_income']; ?></td>
                      <td role="cell"><?php echo $row['street_brgy']; ?></td>
                      <td role="cell"><?php echo $row['town']; ?></td>
                      <td role="cell"><?php echo $row['province']; ?></td>
                      <td role="cell"><?php echo $row['zip_code']; ?></td>
                      <td role="cell"><?php echo $row['total_assessment']; ?></td>
                      <td role="cell"><?php echo $row['gwa']; ?></td>
                      <td role="cell"><?php echo $row['disability']; ?></td>
                      <td role="cell"><?php echo $row['contact_number']; ?></td>
                      <td role="cell"><?php echo $row['email_address']; ?></td>
                      <td role="cell"><?php echo $row['grant_type']; ?></td>
                      <td role="cell"><?php echo $row['department']; ?></td>
                      <td role="cell"><?php echo $row['remarks']; ?></td>
                      <td role="cell"><a href="edit.php" class="btn btn-primary btn-sm">Edit</a></td>
                      <td role="cell"><a href="delete.php" class="btn btn-danger btn-sm">Delete</a></td>
                    </tr>
                  <?php
                    // }
                  }
                } else {
                  ?>
                  <tr>
                    <td colspan="26">No data found</td>
                  </tr>
                <?php
                } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </main>

  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>

  <!-- ... (Your existing scripts) ... -->

  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>
</body>

</html>