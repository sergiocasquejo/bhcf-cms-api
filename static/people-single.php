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
            <div class="admin-interface-main admin-interface-main-single">
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
                        <div class="dashboard-overview-header dashboard-overview-header-single">
                            <div class="profile">
                                <img src="dist/images/prof.jpg" alt="">
                            </div>

                            <div class="profile-details">
                                <div class="profile-name">
                                    <h1>Jaymelenson Judan</h1><a href="" class="btn btn-success">Primary</a>
                                    <a href="" class="btn btn-default"><i class="icon-pencil-edit-button"></i></a>
                                </div>
                                <h2>(Son2x)</h2>
                                <ul>
                                    <li>
                                        <span>Leader:</span>
                                        <span>Jonathan Navacilla</span>
                                    </li>
                                    <li>
                                        <span>Ministry:</span>
                                        <span>Music Team</span>
                                    </li>
                                    <li>
                                        <span>Level</span>
                                        <span>SOL3</span>
                                    </li>
                                    <li>
                                        <span>Group</span>
                                        <span>Blessed Couple</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <nav class="personal-information">
                            <h3>Personal Information</h3>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Network</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Notes</a>
                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Cell Reports</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
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
                                                <a href="">22 Records</a>
                                            </li>
                                            <li>
                                                <a href=""><i class="icon-setup"></i></a>
                                            </li>
                                            <li>
                                                <a href=""><i class="icon-settings"></i></a>
                                            </li>
                                            <li>
                                                <a href="" class="btn btn-success"><i class="icon-add"></i></a>
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
                                            <th scope="col">Ministry</th>
                                            <th scope="col">Level</th>
                                            <th scope="col">Status</th>
                                            <th scope="col"></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td scope="row">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1"><img src="/dist/images/SC.png" alt="">Serge Casquio</label>
                                                </div>
                                            </td>
                                            <td>serge@gmail.com</td>
                                            <td>Music Team</td>
                                            <td>Life Class</td>
                                            <td><span class="level">Regular</span> <a href="" class="btn btn-gray">144 Cell leader</a></td>
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
                                                    <label class="custom-control-label" for="customCheck1"><img src="/dist/images/MA.png" alt="">Marvin de Aquino</label>
                                                </div>
                                            </td>
                                            <td>marvindeaquino@gmail.com</td>
                                            <td>Hospitality</td>
                                            <td>Life Class</td>
                                            <td><span class="level">Regular</span> <a href="" class="btn btn-gray">144 Cell <Leader></Leader></a></td>
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
                                                    <label class="custom-control-label" for="customCheck1"><img src="/dist/images/AH.png" alt="">Arniel Herda</label>
                                                </div>
                                            </td>
                                            <td>arnel@gmail.com</td>
                                            <td></td>
                                            <td>SOL 3</td>
                                            <td>Regualr <a href="" class="btn btn-gray">144</a></td>
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
                                                    <label class="custom-control-label" for="customCheck1"><img src="/dist/images/LM.png" alt="">Jart Castillo</label>
                                                </div>
                                            </td>
                                            <td>jart@gmail.com</td>
                                            <td></td>
                                            <td>SOL 3</td>
                                            <td><span class="level">Regular</span> <a href="" class="btn btn-gray">144</a></td>
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
                                                    <label class="custom-control-label" for="customCheck1"><img src="/dist/images/JJ.png" alt="">Adrian Remedio</label>
                                                </div>
                                            </td>
                                            <td>adrian@gmail.com</td>
                                            <td></td>
                                            <td>SOL 2</td>
                                            <td>Regular <a href="" class="btn btn-gray">144</a></td>
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
                                                    <label class="custom-control-label" for="customCheck1"><img src="/dist/images/MA-1.png" alt="">Haryiel Mejaran</label>
                                                </div>
                                            </td>
                                            <td>haryiel@gmail.com</td>
                                            <td></td>
                                            <td>Encounter</td>
                                            <td>Regular <a href="" class="btn btn-gray">144</a></td>
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
                                                    <label class="custom-control-label" for="customCheck1"><img src="/dist/images/JD.png" alt="">Darryl Dela Cruz</label>
                                                </div>
                                            </td>
                                            <td>daryl@gmail.com</td>
                                            <td></td>
                                            <td>Encounter</td>
                                            <td>Regular <a href="" class="btn btn-gray">144</a></td>
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
                                                    <label class="custom-control-label" for="customCheck1"><img src="/dist/images/RJ.png" alt="">Ahmid Khalifa</label>
                                                </div>
                                            </td>
                                            <td>ahmid@gmail.com</td>
                                            <td></td>
                                            <td>Encounter</td>
                                            <td>Regular <a href="" class="btn btn-gray">144</a></td>
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
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
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