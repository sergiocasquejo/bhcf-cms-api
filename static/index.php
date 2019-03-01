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
<body>
<div class="admin-interface">
    <div class="container admin-interface-container">
        <div class="admin-interface-block">
            <div class="admin-interface-sidebar">
                <img class="navbar-logo" src="/dist/images/bhcf-logo.png" alt="">
                <ul>
                    <li class="active"><a href=""><i class="icon-home"></i>Dashboard</a></li>
                    <li><a href=""><i class="icon-team"></i>People</a></li>
                    <li><a href=""><i class="icon-affiliate"></i>Cell Group</a></li>
                    <li><a href=""><i class="icon-writing"></i>Registrations</a></li>
                    <li><a href=""><i class="icon-like"></i>Ministries</a></li>
                    <li><a href=""><i class="icon-event"></i>Events</a></li>
                    <li><a href=""><i class="icon-prayer"></i>Services</a></li>
                    <li><a href=""><i class="icon-plant"></i>Finance</a></li>
                    <li><a href=""><i class="icon-ebook"></i>Booking</a></li>
                    <li><a href=""><i class="icon-trello"></i>Boards</a></li>
                    <li><a href=""><i class="icon-signal-bars"></i>Reports</a></li>
                </ul>
            </div>
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
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <span class="card-meta">1,350</span>
                                                <h5 class="card-title">Total People</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <span class="card-meta">143</span>
                                                <h5 class="card-title">Total Guest / VIP</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <span class="card-meta">1,250</span>
                                                <h5 class="card-title">Total Regular</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <span class="card-meta">342</span>
                                                <h5 class="card-title">Total Cell</h5>
                                            </div>
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