<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <title>Hello, world!</title>
    <link rel="stylesheet" href="dist/styles/main.css">
</head>
<body class="cbp-spmenu-push">
<div class="admin-interface">
    <?php include 'templates/sidebar-mobile.php'?>
    <div class="container admin-interface-container">
        <div class="admin-interface-block">
            <?php include 'templates/sidebar.php'?>
            <div class="admin-interface-main">
                <div class="admin-interface-main-header">
                    <div class="admin-interface-main-container">
                        <ul>
                            <li>
                                <form>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-link"><i class="icon-search"></i></button>
                                        <input type="text" class="form-control" id="sr" aria-describedby="emailHelp" placeholder="Search">
                                    </div>
                                </form>
                            </li>
                            <li><a href=""><i class="icon-musical-bell-outline"></i></a></li>
                            <li><a href=""><img src="/dist/images/user-img.jpg" alt="">Pastor Jhong <i class="icon-down-arrow"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="admin-interface-main-body">
                    <div class="admin-interface-main-container">
                        <div class="dashboard-overview-header">
                            <h1>Church Overview</h1>
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Week</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Month</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Year</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="row row-overview">
                                    <div class="col-md-6 col-lg-3">
                                        <div class="card card-overview">
                                            <div class="card-body">
                                                <span class="card-meta">1,350</span>
                                                <h5 class="card-title">Total People</h5>
                                                <img src="/dist/images/one.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <div class="card card-overview">
                                            <div class="card-body">
                                                <span class="card-meta">143</span>
                                                <h5 class="card-title">Total Guest / VIP</h5>
                                                <img src="/dist/images/two.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <div class="card card-overview">
                                            <div class="card-body">
                                                <span class="card-meta">1,250</span>
                                                <h5 class="card-title">Total Regular</h5>
                                                <img src="/dist/images/three.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <div class="card card-overview">
                                            <div class="card-body">
                                                <span class="card-meta">342</span>
                                                <h5 class="card-title">Total Cell</h5>
                                                <img src="/dist/images/four.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-growth-activity">
                                    <div class="col-md-12 col-lg-6">
                                        <div class="card card-group-activity growth">
                                            <h2 class="title">2019 Growth</h2>
                                            <img src="dist/images/growth-2019-1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-6">
                                        <div class="card card-group-activity activity">
                                            <h2 class="title">Recent Activity</h2>
                                            <ul>
                                                <li>
                                                    <a href="">
                                                        <span class="details">
                                                            <span class="title">Church Rental</span>
                                                            <span class="meta">
                                                                <span class="time">3:34pm</span>
                                                                <span class="separatetor">-</span>
                                                                <span class="field">Finance</span>
                                                            </span>
                                                        </span>
                                                        <span class="value">-P55,250</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <span class="details">
                                                            <span class="title">Maintenance</span>
                                                            <span class="meta">
                                                                <span class="date">20/20/2019</span>
                                                                <span class="separatetor">-</span>
                                                                <span class="time">1:34pm</span>
                                                                <span class="separatetor">-</span>
                                                                <span class="field">Technical</span>
                                                            </span>
                                                        </span>
                                                        <span class="value">-P25,250</span>
                                                    </a>
                                                </li>
                                                <li class="positive">
                                                    <a href="">
                                                        <span class="details">
                                                            <span class="title">Tithes & Offering</span>
                                                            <span class="meta">
                                                                <span class="date">20/18/2019</span>
                                                                <span class="separatetor">-</span>
                                                                <span class="time">8:34pm</span>
                                                                <span class="separatetor">-</span>
                                                                <span class="field">Finance</span>
                                                            </span>
                                                        </span>
                                                        <span class="value">+P255,250</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <span class="details">
                                                            <span class="title">Pastor's Benefits</span>
                                                            <span class="meta">
                                                                <span class="date">20/18/2019</span>
                                                                <span class="separatetor">-</span>
                                                                <span class="time">8:34pm</span>
                                                                <span class="separatetor">-</span>
                                                                <span class="field">Finance</span>
                                                            </span>
                                                        </span>
                                                        <span class="value">-P75,250</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <span class="details">
                                                            <span class="title">Maintenance</span>
                                                            <span class="meta">
                                                                <span class="date">20/18/2019</span>
                                                                <span class="separatetor">-</span>
                                                                <span class="time">8:34pm</span>
                                                                <span class="separatetor">-</span>
                                                                <span class="field">Music</span>
                                                            </span>
                                                        </span>
                                                        <span class="value">-P15,250</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script src="dist/scripts/jquery.js"></script>
<script src="dist/scripts/main.js"></script>
</body>
</html>