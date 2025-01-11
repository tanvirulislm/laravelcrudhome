<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="assets/img/apple-icon.png"
    />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
    <title>Practice Dashboard</title>
    <!--     Fonts and icons     -->
    <link
      rel="stylesheet"
      type="text/css"
      href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,900"
    />
    <!-- Nucleo Icons -->
    <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script
      src="https://kit.fontawesome.com/42d5adcbca.js"
      crossorigin="anonymous"
    ></script>
    <!-- Material Icons -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@24,400,0,0"
    />
    <!-- CSS Files -->
    <link
      id="pagestyle"
      href="assets/css/material-dashboard.css"
      rel="stylesheet"
    />
  </head>

  <body class="g-sidenav-show bg-gray-100">
    <aside
      class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2 bg-white my-2"
      id="sidenav-main"
    >
      <div class="sidenav-header">
        <i
          class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
          aria-hidden="true"
          id="iconSidenav"
        ></i>
        <a
          class="navbar-brand px-4 py-3 m-0"
          href="#"
          target="_blank"
        >
          <img
            src="assets/img/logo-ct-dark.png"
            class="navbar-brand-img"
            width="26"
            height="26"
            alt="main_logo"
          />
          <span class="ms-1 text-sm text-dark">HikmaTech</span>
        </a>
      </div>
      <hr class="horizontal dark mt-0 mb-2" />
      <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a
              class="nav-link active bg-gradient-dark text-white"
              href="/"
            >
              <i class="material-symbols-rounded opacity-5">dashboard</i>
              <span class="nav-link-text ms-1">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="tables.html">
              <i class="material-symbols-rounded opacity-5">table_view</i>
              <span class="nav-link-text ms-1">Tables</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="billing.html">
              <i class="material-symbols-rounded opacity-5">receipt_long</i>
              <span class="nav-link-text ms-1">Billing</span>
            </a>
          </li>
          <li class="nav-item mt-3">
            <h6
              class="ps-4 ms-2 text-uppercase text-xs text-dark font-weight-bolder opacity-5"
            >
              Account pages
            </h6>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="/profile">
              <i class="material-symbols-rounded opacity-5">person</i>
              <span class="nav-link-text ms-1">Profile</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="/add_student">
              <i class="material-symbols-rounded opacity-5">login</i>
              <span class="nav-link-text ms-1">Add Student</span>
            </a>
          </li>
        </ul>
      </div>
    </aside>
    <main
      class="main-content position-relative max-height-vh-100 h-100 border-radius-lg"
    >
      <!-- Navbar -->
      <nav
        class="navbar navbar-main navbar-expand-lg px-0 mx-3 shadow-none border-radius-xl"
        id="navbarBlur"
        data-scroll="true"
      >
        <div class="container-fluid py-1 px-3">
          <nav aria-label="breadcrumb">
            <ol
              class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5"
            >
              <li class="breadcrumb-item text-sm">
                <a class="opacity-5 text-dark" href="javascript:;">Pages</a>
              </li>
              <li
                class="breadcrumb-item text-sm text-dark active"
                aria-current="page"
              >
                Dashboard
              </li>
            </ol>
          </nav>
          <div
            class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4"
            id="navbar"
          >
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
              <div class="input-group input-group-outline">
                <label class="form-label">Type here...</label>
                <input type="text" class="form-control" />
              </div>
            </div>
            <ul
              class="navbar-nav d-flex align-items-center justify-content-end"
            >
              <li class="nav-item d-flex align-items-center">
                <a
                  class="btn btn-outline-primary btn-sm mb-0 me-3"
                  target="_blank"
                  href="https://www.creative-tim.com/builder?ref=navbar-material-dashboard"
                  >Online Builder</a
                >
              </li>
              <li class="nav-item px-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0">
                  <i class="material-symbols-rounded fixed-plugin-button-nav"
                    >settings</i
                  >
                </a>
              </li>
              <li class="nav-item d-flex align-items-center">
                <a
                  href="/pages/sign-in.html"
                  class="nav-link text-body font-weight-bold px-0"
                >
                  <i class="material-symbols-rounded">account_circle</i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->

      @yield('content')

      
     
            </div>
        </main>
        <div class="fixed-plugin">
            <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
                <i class="material-symbols-rounded py-2">settings</i>
            </a>
            <div class="card shadow-lg">
                <div class="card-header pb-0 pt-3">
                    <div class="float-start">
                        <h5 class="mt-3 mb-0">Material UI Configurator</h5>
                        <p>See our dashboard options.</p>
                    </div>
                    <div class="float-end mt-4">
                        <button
                            class="btn btn-link text-dark p-0 fixed-plugin-close-button"
                        >
                            <i class="material-symbols-rounded">clear</i>
                        </button>
                    </div>
                    <!-- End Toggle Button -->
                </div>
                <hr class="horizontal dark my-1" />
                <div class="card-body pt-sm-3 pt-0">
                    <!-- Sidebar Backgrounds -->
                    <div>
                        <h6 class="mb-0">Sidebar Colors</h6>
                    </div>
                    <a
                        href="javascript:void(0)"
                        class="switch-trigger background-color"
                    >
                        <div class="badge-colors my-2 text-start">
                            <span
                                class="badge filter bg-gradient-primary"
                                data-color="primary"
                                onclick="sidebarColor(this)"
                            ></span>
                            <span
                                class="badge filter bg-gradient-dark active"
                                data-color="dark"
                                onclick="sidebarColor(this)"
                            ></span>
                            <span
                                class="badge filter bg-gradient-info"
                                data-color="info"
                                onclick="sidebarColor(this)"
                            ></span>
                            <span
                                class="badge filter bg-gradient-success"
                                data-color="success"
                                onclick="sidebarColor(this)"
                            ></span>
                            <span
                                class="badge filter bg-gradient-warning"
                                data-color="warning"
                                onclick="sidebarColor(this)"
                            ></span>
                            <span
                                class="badge filter bg-gradient-danger"
                                data-color="danger"
                                onclick="sidebarColor(this)"
                            ></span>
                        </div>
                    </a>
                    <!-- Sidenav Type -->
                    <div class="mt-3">
                        <h6 class="mb-0">Sidenav Type</h6>
                        <p class="text-sm">
                            Choose between different sidenav types.
                        </p>
                    </div>
                    <div class="d-flex">
                        <button
                            class="btn bg-gradient-dark px-3 mb-2"
                            data-class="bg-gradient-dark"
                            onclick="sidebarType(this)"
                        >
                            Dark
                        </button>
                        <button
                            class="btn bg-gradient-dark px-3 mb-2 ms-2"
                            data-class="bg-transparent"
                            onclick="sidebarType(this)"
                        >
                            Transparent
                        </button>
                        <button
                            class="btn bg-gradient-dark px-3 mb-2 active ms-2"
                            data-class="bg-white"
                            onclick="sidebarType(this)"
                        >
                            White
                        </button>
                    </div>
                    <p class="text-sm d-xl-none d-block mt-2">
                        You can change the sidenav type just on desktop view.
                    </p>
                    <!-- Navbar Fixed -->
                    <div class="mt-3 d-flex">
                        <h6 class="mb-0">Navbar Fixed</h6>
                        <div
                            class="form-check form-switch ps-0 ms-auto my-auto"
                        >
                            <input
                                class="form-check-input mt-1 ms-auto"
                                type="checkbox"
                                id="navbarFixed"
                                onclick="navbarFixed(this)"
                            />
                        </div>
                    </div>
                    <hr class="horizontal dark my-3" />
                    <div class="mt-2 d-flex">
                        <h6 class="mb-0">Light / Dark</h6>
                        <div
                            class="form-check form-switch ps-0 ms-auto my-auto"
                        >
                            <input
                                class="form-check-input mt-1 ms-auto"
                                type="checkbox"
                                id="dark-version"
                                onclick="darkMode(this)"
                            />
                        </div>
                    </div>
                    <hr class="horizontal dark my-sm-4" />
                    <a
                        class="btn bg-gradient-info w-100"
                        href="https://www.creative-tim.com/product/material-dashboard-pro"
                        >Free Download</a
                    >
                    <a
                        class="btn btn-outline-dark w-100"
                        href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard"
                        >View documentation</a
                    >
                    <div class="w-100 text-center">
                        <a
                            class="github-button"
                            href="https://github.com/creativetimofficial/material-dashboard"
                            data-icon="octicon-star"
                            data-size="large"
                            data-show-count="true"
                            aria-label="Star creativetimofficial/material-dashboard on GitHub"
                            >Star</a
                        >
                        <h6 class="mt-3">Thank you for sharing!</h6>
                        <a
                            href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard"
                            class="btn btn-dark mb-0 me-2"
                            target="_blank"
                        >
                            <i
                                class="fab fa-twitter me-1"
                                aria-hidden="true"
                            ></i>
                            Tweet
                        </a>
                        <a
                            href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-dashboard"
                            class="btn btn-dark mb-0 me-2"
                            target="_blank"
                        >
                            <i
                                class="fab fa-facebook-square me-1"
                                aria-hidden="true"
                            ></i>
                            Share
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--   Core JS Files   -->
        <script src="assets/js/core/popper.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>
        <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
        <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
        <script src="assets/js/plugins/chartjs.min.js"></script>
        <script>
            var ctx = document.getElementById("chart-bars").getContext("2d");

            new Chart(ctx, {
                type: "bar",
                data: {
                    labels: ["M", "T", "W", "T", "F", "S", "S"],
                    datasets: [
                        {
                            label: "Views",
                            tension: 0.4,
                            borderWidth: 0,
                            borderRadius: 4,
                            borderSkipped: false,
                            backgroundColor: "#43A047",
                            data: [50, 45, 22, 28, 50, 60, 76],
                            barThickness: "flex",
                        },
                    ],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false,
                        },
                    },
                    interaction: {
                        intersect: false,
                        mode: "index",
                    },
                    scales: {
                        y: {
                            grid: {
                                drawBorder: false,
                                display: true,
                                drawOnChartArea: true,
                                drawTicks: false,
                                borderDash: [5, 5],
                                color: "#e5e5e5",
                            },
                            ticks: {
                                suggestedMin: 0,
                                suggestedMax: 500,
                                beginAtZero: true,
                                padding: 10,
                                font: {
                                    size: 14,
                                    lineHeight: 2,
                                },
                                color: "#737373",
                            },
                        },
                        x: {
                            grid: {
                                drawBorder: false,
                                display: false,
                                drawOnChartArea: false,
                                drawTicks: false,
                                borderDash: [5, 5],
                            },
                            ticks: {
                                display: true,
                                color: "#737373",
                                padding: 10,
                                font: {
                                    size: 14,
                                    lineHeight: 2,
                                },
                            },
                        },
                    },
                },
            });

            var ctx2 = document.getElementById("chart-line").getContext("2d");

            new Chart(ctx2, {
                type: "line",
                data: {
                    labels: [
                        "J",
                        "F",
                        "M",
                        "A",
                        "M",
                        "J",
                        "J",
                        "A",
                        "S",
                        "O",
                        "N",
                        "D",
                    ],
                    datasets: [
                        {
                            label: "Sales",
                            tension: 0,
                            borderWidth: 2,
                            pointRadius: 3,
                            pointBackgroundColor: "#43A047",
                            pointBorderColor: "transparent",
                            borderColor: "#43A047",
                            backgroundColor: "transparent",
                            fill: true,
                            data: [
                                120, 230, 130, 440, 250, 360, 270, 180, 90, 300,
                                310, 220,
                            ],
                            maxBarThickness: 6,
                        },
                    ],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false,
                        },
                        tooltip: {
                            callbacks: {
                                title: function (context) {
                                    const fullMonths = [
                                        "January",
                                        "February",
                                        "March",
                                        "April",
                                        "May",
                                        "June",
                                        "July",
                                        "August",
                                        "September",
                                        "October",
                                        "November",
                                        "December",
                                    ];
                                    return fullMonths[context[0].dataIndex];
                                },
                            },
                        },
                    },
                    interaction: {
                        intersect: false,
                        mode: "index",
                    },
                    scales: {
                        y: {
                            grid: {
                                drawBorder: false,
                                display: true,
                                drawOnChartArea: true,
                                drawTicks: false,
                                borderDash: [4, 4],
                                color: "#e5e5e5",
                            },
                            ticks: {
                                display: true,
                                color: "#737373",
                                padding: 10,
                                font: {
                                    size: 12,
                                    lineHeight: 2,
                                },
                            },
                        },
                        x: {
                            grid: {
                                drawBorder: false,
                                display: false,
                                drawOnChartArea: false,
                                drawTicks: false,
                                borderDash: [5, 5],
                            },
                            ticks: {
                                display: true,
                                color: "#737373",
                                padding: 10,
                                font: {
                                    size: 12,
                                    lineHeight: 2,
                                },
                            },
                        },
                    },
                },
            });

            var ctx3 = document
                .getElementById("chart-line-tasks")
                .getContext("2d");

            new Chart(ctx3, {
                type: "line",
                data: {
                    labels: [
                        "Apr",
                        "May",
                        "Jun",
                        "Jul",
                        "Aug",
                        "Sep",
                        "Oct",
                        "Nov",
                        "Dec",
                    ],
                    datasets: [
                        {
                            label: "Tasks",
                            tension: 0,
                            borderWidth: 2,
                            pointRadius: 3,
                            pointBackgroundColor: "#43A047",
                            pointBorderColor: "transparent",
                            borderColor: "#43A047",
                            backgroundColor: "transparent",
                            fill: true,
                            data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                            maxBarThickness: 6,
                        },
                    ],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false,
                        },
                    },
                    interaction: {
                        intersect: false,
                        mode: "index",
                    },
                    scales: {
                        y: {
                            grid: {
                                drawBorder: false,
                                display: true,
                                drawOnChartArea: true,
                                drawTicks: false,
                                borderDash: [4, 4],
                                color: "#e5e5e5",
                            },
                            ticks: {
                                display: true,
                                padding: 10,
                                color: "#737373",
                                font: {
                                    size: 14,
                                    lineHeight: 2,
                                },
                            },
                        },
                        x: {
                            grid: {
                                drawBorder: false,
                                display: false,
                                drawOnChartArea: false,
                                drawTicks: false,
                                borderDash: [4, 4],
                            },
                            ticks: {
                                display: true,
                                color: "#737373",
                                padding: 10,
                                font: {
                                    size: 14,
                                    lineHeight: 2,
                                },
                            },
                        },
                    },
                },
            });
        </script>
        <script>
            var win = navigator.platform.indexOf("Win") > -1;
            if (win && document.querySelector("#sidenav-scrollbar")) {
                var options = {
                    damping: "0.5",
                };
                Scrollbar.init(
                    document.querySelector("#sidenav-scrollbar"),
                    options
                );
            }
        </script>
        <!-- Github buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="assets/js/material-dashboard.min.js?v=3.2.0"></script>
    </body>
</html>
