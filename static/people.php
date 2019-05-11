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
<body class="cbp-spmenu-push page-people">
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
                                    <th>Email</th>
                                    <th>Cell Leader</th>
                                    <th>Date Created</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td scope="row">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1"><img src="/dist/images/user-img.jpg" alt="">Pastor Jonathan Navacilla</label>
                                        </div>
                                    </td>
                                    <td>jhong@gmail.com</td>
                                    <td>Senior Pastor</td>
                                    <td>2/23/2001</td>
                                    <td><span class="member member-admin">Admin</span> <a href="" class="btn btn-gray">Pastor</a></td>
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
                                            <label class="custom-control-label" for="customCheck1"><img src="/dist/images/flor.png" alt="">Pastor Flor Naingue Navacilla</label>
                                        </div>
                                    </td>
                                    <td>flornav@gmail.com</td>
                                    <td>Senior Pastor</td>
                                    <td>2/23/2001</td>
                                    <td><span class="member member-admin">Admin</span> <a href="" class="btn btn-gray">Pastor</a></td>
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
                                            <label class="custom-control-label" for="customCheck1"><img src="/dist/images/jr.png" alt="">Roman Cordova Garay Jr.</label>
                                        </div>
                                    </td>
                                    <td>roman@gmail.com</td>
                                    <td>Jonathan Navacilla</td>
                                    <td>2/23/2001</td>
                                    <td> <a href="" class="btn btn-gray">Primary</a></td>
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
                                            <label class="custom-control-label" for="customCheck1"><span class="img-holder bg-lavender">LM</span>Lorita Maquiling</label>
                                        </div>
                                    </td>
                                    <td>lorita@gmail.com</td>
                                    <td>Flor Naingue Navacilla</td>
                                    <td>2/23/2001</td>
                                    <td><span class="member member-admin">Admin</span> <a href="" class="btn btn-gray">Primary</a></td>
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
                                            <label class="custom-control-label" for="customCheck1"><span class="img-holder bg-pinkred">JJ</span>Jedi Jared Judan</label>
                                        </div>
                                    </td>
                                    <td>jedi@gmail.com</td>
                                    <td>Son2x Judan</td>
                                    <td>2/23/2001</td>
                                    <td><span class="member member-regular">Regular</span> <a href="" class="btn btn-gray">Primary</a></td>
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
                                            <label class="custom-control-label" for="customCheck1"><span class="img-holder bg-lightorange">MD</span>Marvin de Aquino</label>
                                        </div>
                                    </td>
                                    <td>marvindeaquino@gmail.com</td>
                                    <td>Son2x Judan</td>
                                    <td>2/23/2001</td>
                                    <td><span class="member member-regular">Regular</span> <a href="" class="btn btn-gray">144</a></td>
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
                                            <label class="custom-control-label" for="customCheck1"><span class="img-holder bg-darkgray">JD</span>John Deo</label>
                                        </div>
                                    </td>
                                    <td>johndeo@gmail.com</td>
                                    <td>Lindon Maquiling</td>
                                    <td>2/23/2001</td>
                                    <td><span class="member member-vip vip-3">3RD-VIP</span> <a href="" class="btn btn-gray">144</a></td>
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
                                            <label class="custom-control-label" for="customCheck1"><span class="img-holder bg-lavender">RJ</span>Razel Ann Judan</label>
                                        </div>
                                    </td>
                                    <td>razelannjudan@gmail.com</td>
                                    <td>Lorita Maquiling</td>
                                    <td>2/23/2001</td>
                                    <td><span class="member member-vip vip-2">2nd-VIP</span> <a href="" class="btn btn-gray">144</a></td>
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
                                            <label class="custom-control-label" for="customCheck1"><span class="img-holder bg-lightgreen">LM</span>Lindon Maquiling</label>
                                        </div>
                                    </td>
                                    <td>lindonmaquiling@gmail.com</td>
                                    <td>Jonathan Navacilla</td>
                                    <td>2/23/2001</td>
                                    <td> <a href="" class="btn btn-gray">Primary</a></td>
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
                                            <label class="custom-control-label" for="customCheck1"><span class="img-holder bg-lightyellow">MA</span>Michelle Auditor</label>
                                        </div>
                                    </td>
                                    <td>michelleauditor@gmail.com</td>
                                    <td>Lorita Maquiling</td>
                                    <td>2/23/2001</td>
                                    <td><span class="member member-vip vip-1">1ST - VIP</span> <a href="" class="btn btn-gray">144</a></td>
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
                                            <label class="custom-control-label" for="customCheck1"><span class="img-holder bg-lightred">JY</span>James Yellow</label>
                                        </div>
                                    </td>
                                    <td>jamesyellow@gmail.com</td>
                                    <td>Lorita Maquiling</td>
                                    <td>2/23/2001</td>
                                    <td><span class="member member-vip vip-1">1ST - VIP</span> <a href="" class="btn btn-gray">144</a></td>
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
                                            <label class="custom-control-label" for="customCheck1"><span class="img-holder bg-lavender">LM</span>James Brown</label>
                                        </div>
                                    </td>
                                    <td>jamesbrown@gmail.com</td>
                                    <td>Lorita Maquiling</td>
                                    <td>2/23/2001</td>
                                    <td><span class="member member-vip vip-1">1ST - VIP</span> <a href="" class="btn btn-gray">144</a></td>
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