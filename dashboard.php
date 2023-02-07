<!DOCTYPE html>
<html lang="en" dir="ltr">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IMS | Dashboard</title>

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="dashboardStyle.css">

        <!-- ===== Boxicons CDN Link ===== -->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        
        <!-- Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet">

    </head>   
    <body>
        <div class="sidebar">
            <div class="logo-content">
                <div class="logo">
                    <i class='bx bx-package'></i>
                    <div class="logo-name">IMS</div>
                </div>
                <i class='bx bx-menu' id="btn" ></i>
            </div>

            <!-- ===== Nav Bar ===== -->
            <ul class="nav-list">

                <!-- Search -->
                <li>
                        <i class='bx bx-search' ></i>
                        <input type="text" placeholder="Search">
                        <span class="tooltip">Search</span>
                </li>

                <!-- Dashboard -->
                <li>
                    <a href="#">
                        <i class='bx bx-grid-alt' ></i>
                        <span class="links-name">Dashboard</span>
                    </a>
                    <span class="tooltip">Dashboard</span>
                </li>

                <!-- User -->
                <li>
                    <a href="#">
                        <i class='bx bx-user' ></i>
                        <span class="links-name">User</span>
                    </a>
                    <span class="tooltip">User</span>
                </li>

                <!-- Messages -->
                <li>
                    <a href="#">
                        <i class='bx bx-chat' ></i>
                        <span class="links-name">Messages</span>
                    </a>
                    <span class="tooltip">Messages</span>
                </li>

                <!-- Analytics -->
                <li>
                    <a href="#">
                        <i class='bx bx-line-chart' ></i>
                        <span class="links-name">Analytics</span>
                    </a>
                    <span class="tooltip">Analytics</span>
                </li>

                <!-- File Manager -->
                <li>
                    <a href="#">
                        <i class='bx bx-folder' ></i>
                        <span class="links-name">File Manager</span>
                    </a>
                    <span class="tooltip">File Manager</span>
                </li>

                <!-- Order -->
                <li>
                    <a href="#">
                        <i class='bx bx-cart-alt' ></i>
                        <span class="links-name">Order</span>
                    </a>
                    <span class="tooltip">Order</span>
                </li>

                <!-- Saved -->
                <li>
                    <a href="#">
                        <i class='bx bx-down-arrow-alt' ></i>
                        <span class="links-name">Saved</span>
                    </a>
                    <span class="tooltip">Saved</span>
                </li>

                <!-- Settings -->
                <li>
                    <a href="#">
                        <i class='bx bx-cog' ></i>
                        <span class="links-name">Settings</span>
                    </a>
                    <span class="tooltip">Settings</span>
                </li>
            </ul>
            <div class="profile-content">
                <div class="profile">
                    <div class="profile-details">
                        <img src="../img/profile1.jpg" alt="CodeLab">
                        <div class="name-job">
                            <div class="name">Todd Jones</div>
                            <div class="job">FrontEnd Development</div>
                        </div>
                    </div>
                    <i class='bx bx-log-out' id="log-out"></i>
                    <span class="tooltip">Logout</span>
                </div>
            </div>
        </div>
        <div class="home-content">
            <div class="text">Home Content</div>
        </div>

    </body>

    <!-- ===== JS ===== -->
    <script>

        let btn = document.querySelector("#btn");
        let sidebar = document.querySelector(".sidebar");
        let searchBtn = document.querySelector(".bx-search");

        btn.onclick = function() {
            sidebar.classList.toggle("active");
        }
        searchBtn.onclick = function() {
            sidebar.classList.toggle("active");
        }

    </script>
</html>    