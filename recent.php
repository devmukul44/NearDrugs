<?php
		include("connection.php");
		$sql ="Select * from orders where email='$_SESSION[uname]' ORDER BY date DESC";
		$result = mysqli_query($conn, $sql);
?>											
											
											<div class="title-box">
                                            <h3>Recent Orders</h3>
                                        </div>
                                        <hr>
                                        <!-- Table  -->
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered table-responsive text-left my-orders-table">
                                                <thead>
                                                    <tr class="first last">
                                                        <th>#</th>
                                                        <th>Date</th>
                                                        <th>Ship To</th>
                                                        <th class="text-center">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
												<?php
												
													if (mysqli_num_rows($result) > 0) 
													{
													while($row = mysqli_fetch_row($result)) 
													{
												echo '
                                                    <tr>
                                                        <td>'.$row[1].'</td>
                                                        <td>'.$row[5].'</td>
                                                        <td>'.$row[0].'</td>
                                                        <td class="text-center last">
                                                            <div class="btn-group">
                                                                <a href="#" class="btn btn-primary">View Order</a>
                                                            </div>
                                                        </td>
                                                    </tr>
													';
													}
													}
												?>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- /Table  -->