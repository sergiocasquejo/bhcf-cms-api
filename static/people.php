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
                    <li><a href="/"><i class="icon-home"></i>Dashboard</a></li>
                    <li class="active"><a href="people.php"><i class="icon-team"></i>People</a></li>
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
                            <h1>People</h1>
                            <div class="action-btn">
                                <a href="" class="btn btn-link">Categories</a>
                                <a href="" class="btn btn-success"><i class="icon-add"></i>Add new</a>
                            </div>
                        </div>
                        <div class="table-actions">
                            <div class="table-actions-left">
                                <ul>
                                    <li>
                                        <a href=""><i class="icon-printer-printing-document"></i></a>
                                    </li>
                                    <li>
                                        <a href=""><i class="icon-tag-black-shape"></i></a>
                                    </li>
                                    <li>
                                        <a href=""><i class="icon-garbage"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="table-actions-right">
                                <ul>
                                    <li>
                                        <a href="">1,334 Records</a>
                                    </li>
                                    <li>
                                        <a href=""><i class="icon-setup"></i></a>
                                    </li>
                                    <li>
                                        <a href=""><i class="icon-settings"></i></a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-default table-people">
                                <thead>
                                <tr>
                                    <th scope="col">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Name</label>
                                        </div>

                                    </th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Cell Leader</th>
                                    <th scope="col">Date Created</th>
                                    <th scope="col">Status</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td scope="row">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1"><img src="/dist/images/user-img.jpg" alt="">Pastor Jonathan Nvacilla</label>
                                        </div>
                                    </td>
                                    <td>jhong@gmail.com</td>
                                    <td>Senior Pastor</td>
                                    <td>2/23/2001</td>
                                    <td>Admin <a href="" class="btn btn-gray">Pastor</a></td>
                                    <td>
                                        <div class="dropdown dropdown-action-option">
                                            <a class="btn btn-ternary" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="action-option">&bull;</i>
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">View</a>
                                                <a class="dropdown-item" href="#">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1"><img src="/dist/images/user-img.jpg" alt="">Pastor Jonathan Nvacilla</label>
                                        </div>
                                    </td>
                                    <td>jhong@gmail.com</td>
                                    <td>Senior Pastor</td>
                                    <td>2/23/2001</td>
                                    <td>Admin <a href="" class="btn btn-gray">Pastor</a></td>
                                    <td>
                                        <div class="dropdown dropdown-action-option">
                                            <a class="btn btn-ternary" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="action-option">&bull;</i>
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">View</a>
                                                <a class="dropdown-item" href="#">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1"><img src="/dist/images/user-img.jpg" alt="">Pastor Jonathan Nvacilla</label>
                                        </div>
                                    </td>
                                    <td>jhong@gmail.com</td>
                                    <td>Senior Pastor</td>
                                    <td>2/23/2001</td>
                                    <td>Admin <a href="" class="btn btn-gray">Pastor</a></td>
                                    <td>
                                        <div class="dropdown dropdown-action-option">
                                            <a class="btn btn-ternary" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="action-option">&bull;</i>
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">View</a>
                                                <a class="dropdown-item" href="#">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1"><img src="/dist/images/user-img.jpg" alt="">Pastor Jonathan Nvacilla</label>
                                        </div>
                                    </td>
                                    <td>jhong@gmail.com</td>
                                    <td>Senior Pastor</td>
                                    <td>2/23/2001</td>
                                    <td>Admin <a href="" class="btn btn-gray">Pastor</a></td>
                                    <td>
                                        <div class="dropdown dropdown-action-option">
                                            <a class="btn btn-ternary" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="action-option">&bull;</i>
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">View</a>
                                                <a class="dropdown-item" href="#">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1"><img src="/dist/images/user-img.jpg" alt="">Pastor Jonathan Nvacilla</label>
                                        </div>
                                    </td>
                                    <td>jhong@gmail.com</td>
                                    <td>Senior Pastor</td>
                                    <td>2/23/2001</td>
                                    <td>Admin <a href="" class="btn btn-gray">Pastor</a></td>
                                    <td>
                                        <div class="dropdown dropdown-action-option">
                                            <a class="btn btn-ternary" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="action-option">&bull;</i>
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">View</a>
                                                <a class="dropdown-item" href="#">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1"><img src="/dist/images/user-img.jpg" alt="">Pastor Jonathan Nvacilla</label>
                                        </div>
                                    </td>
                                    <td>jhong@gmail.com</td>
                                    <td>Senior Pastor</td>
                                    <td>2/23/2001</td>
                                    <td>Admin <a href="" class="btn btn-gray">Pastor</a></td>
                                    <td>
                                        <div class="dropdown dropdown-action-option">
                                            <a class="btn btn-ternary" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="action-option">&bull;</i>
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="dropdown-item" href="#">View</a>
                                                <a class="dropdown-item" href="#">Remove</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
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