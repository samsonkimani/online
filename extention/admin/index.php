<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<title>Dashboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel"stylesheet" href="../fa/svg-with-js/css/fa-svg-with-js.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="css/admin_panel.css">
</head>
<body>
	<header>
        <div class="container-fluid">
            <div class="header-content">
                <div class="side-head">
                    <span class="text-white">Admin panel </span>
                    &nbsp;
                    <i class="fas fa-bars menu-btn"></i>
                </div>

                <div class="header-nav">
                    <ul>
                        <li><a href="#"><i class="fas fa-shopping-basket"></i>Order</a> </li>
                        <li><a href="#"><i class="fas fa-purchase-alt"></i>Delivery</a> </li>
                        <li><a href="#"><i class="fas fa-users"></i>user</a> </li>
                        <li><a href="#"><i class="fas fa-sign-out-alt"></i>logout</a> </li>
                    </ul>
                </div>
            </div>
        </div>
	</header>

	<div class="wrapper">
	    <section class="sidebar">
	        <ul class="nav-bar">
	            <li>
	                <a href="#"><i class="fas fa-tachometer-alt"></i>&nbsp;DASHBOARD</a>
	            </li>
	            <li>
	                <a href="#"><i class='fas fa-users'></i>&nbsp;Brand</a>
	            </li>
	            <li>
	                <a href="#"><i class='fas fa-dolly'></i>&nbsp;Category</a>
	            </li>

	            <li>
	                <a href="#"><i class="fas fa-shopping-basket"></i>&nbsp;Products</a>
	            </li>
	            <li>
	                <a href="#"><i class="fas fa-truck"></i>&nbsp;Orders</a>
	            </li>
	            <li>
	                <a href="#"><i class="fas fa-truck-loading"></i>&nbsp;Delivery</a>
	            </li>
	            <li>
	                <a href="#"><i class="fas fa-images"></i>&nbsp;Slide images</a>
	            </li>
	            <li>
	                <a href="#"><i class="fas fa-cogs"></i>&nbsp;Settings</a>
	            </li>
	            <li>
	                <a href="#"><i class="fas fa-id-badge"></i>&nbsp;Profile</a>
	            </li>
	            <li>
	                <a href="#"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a>
	            </li>
	        </ul>
	    </section>
	    <section class="working-panel">
	        <div class="container-fluid">
	            <h1 class="display-4">Welcome to the dashboard</h1>
	            <hr/>
	            <div class="row">
	                <div class="col-md-3">
	                    <div class="card bg-orange-g text-white">
	                        <div class="card-body">
	                            <h4 class="font-weight-light"><i class="fas fa-cogs"></i>category</h4>
	                            <hr/>
	                            <h5>
	                                <b>12345</b>
	                            </h5>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-md-3">
	                    <div class="card bg-green-g text-white">
	                        <div class="card-body">
	                            <h4 class="font-weight-light"><i class='fas fa-dolly'></i>All brands</h4>
	                            <hr/>
	                            <h5>
	                                <b>1000</b>
	                            </h5>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-md-3">
	                    <div class="card bg-primary text-white">
	                        <div class="card-body">
	                            <h4 class="font-weight-light"><i class="fas fa-users"></i>All users</h4>
	                            <hr/>
	                            <h5>
	                                <b>1900</b>
	                            </h5>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-md-3">
	                    <div class="card bg-golden-g text-white">
	                        <div class="card-body">
	                            <h4 class="font-weight-light"><i class="fas fa-shopping-basket"></i>All Orders</h4>
	                            <hr/>
	                            <h5>
	                                <b>700</b>
	                            </h5>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="all-orders">
	            <h2>New orders</h2>
	            <hr/>
	                <table class="table table-hover">
                      <thead class="bg-primary">
                        <tr>
                          <th scope="col">Order No</th>
                          <th scope="col">Product name</th>
                          <th scope="col">Quantity</th>
                          <th scope="col">Date </th>
                          <th scope="col">Status</th>
                          <th scope="col">Order Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Electric kettle</td>
                          <td>1</td>
                          <td>12-5-2020</td>
                          <td><span class="badge bg-danger">Unpaid</span></td>
                          <td><span class="badge bg-info">Unpaid</span></td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Hp laptop</td>
                          <td>5</td>
                          <td>12-5-2020</td>
                          <td><span class="badge bg-success">Paid</span></td>
                          <td><span class="badge bg-info">Processing</span></td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Sumsang galaxy</td>
                          <td>10</td>
                          <td>12-5-2020</td>
                          <td><span class="badge bg-success">paid</span></td>
                          <td><span class="badge bg-danger">Rejected</span></td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>lenovo Thinkpad</td>
                          <td>10</td>
                          <td>12-5-2020</td>
                          <td><span class="badge bg-success">paid</span></td>
                          <td><span class="badge bg-success">Completed</span></td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Fridge</td>
                          <td>10</td>
                          <td>12-5-2020</td>
                          <td><span class="badge bg-success">paid</span></td>
                          <td><span class="badge bg-danger">Rejected</span></td>
                        </tr>
                      </tbody>
                    </table>
                    <div class="order-pagination">
                        <nav aria-label="Page navigation example">
                          <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                          </ul>
                        </nav>
                    </div>
	            </div>
	        </div>
	    </section>
	</div>

    <script src="../fa/svg-with-js/js/fontawesome-all.js"></script>
	<script src="../js/jquery-3.6.0.min.js"></script>
	<script src="../js/bootstrap.bundle.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
</body>