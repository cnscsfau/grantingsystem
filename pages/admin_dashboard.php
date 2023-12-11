<!--
=========================================================
* Material Dashboard 2 - v3.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
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
    /* Custom styles for aligning navbox on the right side */
    .content-container {
      display: flex;
      justify-content: flex-end;
    }

    .navbox-container {
      width: 200px;
      /* Adjust the width as needed */
      background-color: #f8f9fa;
      /* Set background color for the navbox */
      padding: 20px;
      /* Adjust padding as needed */
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      /* Optional: Add box shadow for styling */
    }
  </style>
</head>

<body class="g-sidenav-show  bg-white-200">
  <?php include("./admin_sidenav.php"); ?>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-lg py-4 px-4 content-container"> <!-- Use container-lg for wider content on large screens -->
        <div class="navbox-container">
          <div class="navbox">
            <img src="../images/sfaulogo.png" class="navbar-brand-img h-50 ms-md-auto pe-md-3 d-flex justify-content-center align-items-center" alt="main_logo">
            <h6 class="cnscsfautitle" class="navbar-brand-imgh-50 ms-md-auto pe-md-3 d-flex justify-content-center align-items-center">CAMARINES NORTE STATE COLLEGE SCHOLARSHIP AND FINANCIAL ASSISTANCE UNIT
            </h6>
          </div>
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
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div>
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
              <label class="form-label"></label>
              <select class="form-select" id="schoolYearSelect">
                <option value="#">Select Academic Year:</option>
                <option value="2020-2021">2020-2021</option>
                <option value="2022-2023">2022-2023</option>
                <option value="2023-2024">2023-2024</option>
                <option value="2025-2026">2025-2026</option>
                <option value="2027-2028">2027-2028</option>
                <option value="2029-2030">2029-2030</option>
                <!-- Add more school year options as needed -->
              </select>
            </div>
          </div>
        </div>
      </div>
      <!-- class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4 align-items-center" id="navbar" -->
      <div class="row mt-4 d-flex justify-content-center">
        <div class="col-lg-4 mt-4 mb-3">
          <div class="card z-index-2 ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                <div class="chart">
                  <canvas id="chart-line-tasks" class="chart-canvas" height="170"></canvas>
                </div>
              </div>
            </div>
            <div class="card-body">
              <!-- <h6 class="mb-0 ">Completed Tasks</h6>
              <p class="text-sm ">Last Campaign Performance</p> -->
              <hr class="dark horizontal">
              <div class="d-flex ">
                <i class="material-icons text-sm my-auto me-1">schedule</i>
                <p class="mb-0 text-sm">just updated</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="row mt-4">
        <!-- <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div>
              <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                <div class="input-group input-group-outline">
                  <label class="form-label">Search ...</label>
                  <input type="text" class="form-control">
                </div>
              </div>
            </div>
          </div> -->
        <div class="row d-flex justify-content-center">
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">person</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Total No. of Grantees</p>
                  <h4 class="mb-0">5,000</h4>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <!-- <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+5% </span>than yesterday</p>
            </div> -->
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">person</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Number of Pendings</p>
                  <h4 class="mb-0">2,300</h4>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <!-- <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p>
            </div> -->
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">person</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Number of Release</p>
                  <h4 class="mb-0">3,462</h4>
                </div>
              </div>
              <hr class="dark horizontal my-0">
              <!-- <div class="card-footer p-3">
              <p class="mb-0"><span class="text-danger text-sm font-weight-bolder">-2%</span> than yesterday</p>
            </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>

    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
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

    var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

    new Chart(ctx3, {
      type: "line",
      data: {
        labels: ["2020", "2021", "2022", "2023", "2024", "2025", "2026", "2027", "2028", "2029", "2030"],
        datasets: [{
          label: "Total Grantees",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 220, 0, 0, 0, 0, 0, 0, 0],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#f8f9fa',
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
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
    // $(document).ready(function() {
    //   // Handle school year select change
    //   $('#schoolYearSelect').on('change', function() {
    //     var selectedYear = $(this).val();

    //     // Reload content based on the selected school year
    //     loadContent(selectedYear);
    //   });

    // Function to load content
    function loadContent(schoolYear) {
      // Use AJAX to load content dynamically
      $.ajax({
        url: '../partials/content.php', // Replace with the actual URL
        type: 'GET',
        data: {
          schoolYear: schoolYear
        }, // Send selected school year as data
        success: function(response) {
          // Update the content of your graph and cards based on the response
          // For simplicity, let's assume the response contains HTML content
          $('.main-content').html(response);
        },
        error: function(error) {
          console.error('Error loading content:', error);
        }
      });
    }
    // });
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>
</body>

</html>