	<!--/inner_banner-->
	<div class="inner_banner">
	</div>
	<!--//inner_banner-->
	<!-- //banner -->
	<div class="services-breadcrumb">
		<div class="inner_breadcrumb">

			<ul class="short">
				<li><a href="{{ route('hospital') }}">Hospital</a><span>|</span></li>
				<li><a href="{{ route('hospital') }}">Clinic</a><span>|</span></li>
				<li><a href="{{ route('pharmacy') }}">Pharmacy</a><span>|</span></li>
				<li><a href="{{ route('shop') }}">Super market</a><span>|</span></li>
				<li><a href="{{ route('shop') }}">Hardware</a><span>|</span></li>
				<li><a href="{{ route('sacco') }}CO</a><span>|</span></li>
				<li><a href="{{ route('moneyLender') }}">Money Lender</a><span>|</span></li>
				<li><a href="{{ route('bar') }}">Bar & Restaurant</a><span>|</span></li>
				<li><a href="{{ route('bar') }}">Lounge</a><span>|</span></li>
				<li><a href="{{ route('hotel') }}">Hotel</a><span>|</span></li>
				<li><a href="{{ route('manufacturer') }}">Factory</a><span>|</span></li>
				<li><a href="{{ route('manufacturer') }}">Industry</a><span>|</span></li>
				<li><a href="{{ route('property') }}">Property</a><span>|</span></li>
				<li><a href="{{ route('property') }}">Real Estate</a><span>|</span></li>
				<li><a href="{{ route('property') }}">Survey</a></li>
			</ul>
		</div>
	</div>

	<?php
		if(isset($_GET['suc'])){
		if($_GET['suc']=="true"){
		echo'<script type="application/javascript">';
		echo 'alert("Order Successfully Made");';
		echo'</script>';
		}else if($_GET['suc']=="false"){
		echo'<script type="application/javascript">';
		echo 'alert("Order Submission failed");';
		echo'</script>';
		}
		}

		if(isset($_GET['succ'])){
		if($_GET['succ']=="true"){
		echo'<script type="application/javascript">';
		echo 'alert("Comment Successfully Posted");';
		echo'</script>';
		}else if($_GET['succ']=="false"){
		echo'<script type="application/javascript">';
		echo 'alert("Comment Submission failed");';
		echo'</script>';
		}
		}
	?>
	 <!-- Typography-->
    <section class="inner-pages py-5">
        <div class="container py-xl-5 py-sm-3">
           <div class="w3-head-all text-center mb-3">
			<h3>Essential POS (Hotel/ Property)</h3>
		   </div>
		     <div class="typo-section py-4 border-bottom">


                <!-- Live Demo -->

                <!-- Button trigger modal -->

				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Comment
                </button>
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
				Order Now
                </button>
				</div>
            <!-- forms -->
            <div class="typo-section py-4 border-top border-bottom">
			<p>Feel Free to contact us today for a 30 days trial version of this software, which will be delivered right to your email and you will be guided on installation. you can do this by clicking on the order now button or visit our <a href="{{ route('contact') }}">contacts page</a></p>

			<p>Essential POS for Hotels has two separate softwares that is the client end point  and the Administrator Dashboard which is used for settings, other hotelfunctions  and overalll control of what client software displays. the client software is one used by waiters and waitresses to input orders,etc.</p>
			<p>Essential POS Client Dashboard</p>
             <img src="EssentialPOSBar/mainmenu.jpg" style="width:100%;" alt="Essential POS Main Interface">
            </div>
			 <div class="typo-section py-4 border-top border-bottom">
			<p>Essential POS Administrator Dashboard</p>
             <img src="EssentialPOSBar/servermain1.jpg" style="width:100%;" alt="Essential POS Main Interface">
            </div>
            <!--// forms -->


			 <div class="typo-section py-4 border-bottom">
			<h4 class="typo-sub-heading mt-4 mb-3">System Major Functionality</h4>
			   <div class="card-columnss">
                 <div class="card">
				  <div class="card-body">
				<p class="card-text">1.Secure Login.</p>
				<p class="card-text">2.Controlled user Access to Records through Access Rights.</p>
				<p class="card-text">3.Settings to Customize the system according to the Scheme.</p>
				<p class="card-text">4.Human Resource Module that handles staff registration, Attendance Registration and Staff Payroll.</p>
				<p class="card-text">5.Sales Management.</p>
				<p class="card-text">6.Automatic Stock balancing and Reporting.</p>
				<p class="card-text">7.Purchase Entries and purchase records management.</p>
				<p class="card-text">8.Requisition Process Module.</p>
				<p class="card-text">9.Accommodation Management Module.</p>
				<p class="card-text">10.Laundary Management Module.</p>
				</div>
				</div>

				<div class="card">
				 <div class="card-body">
				 <p class="card-text">11.Bouqueting Management Module.</p>
				 <p class="card-text">12.Gym and Sauna Management Module.</p>
				 <p class="card-text">13.Gardens and Conference rooms Management Module.</p>
				 <p class="card-text">14.Client system Credit Accounts Management.</p>
				 <p class="card-text">15.Supplier System Account Management.</p>
				<p class="card-text">16.Invoice Generation(Proforma and Tax Invoice).</p>
				<p class="card-text">17.Accurate Report Generation and Receipting.</p>
				<p class="card-text">18.Sales summaries and Financial Documents Generation.</p>
				<p class="card-text">19.Store and outlet Management with Supplies Distribution tracking.</p>
				<p class="card-text">20.Easy access to system records and Retrieval. </p>
				</div>
				</div>

			</div>
			</div>
            <!-- Modals -->
            <div class="typo-section py-4 border-bottom">

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Order Essential POS</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                           <form action="insertorder.php"  method="post" id="commentsubmit">
                            <div class="modal-body">
							 <input type="hidden" class="form-control" id="clientsystem" name="clientsystem" Value="Essential POS Hotel" >
								 <input type="text" class="form-control" id="clientnames" placeholder="Your Names..." name="clientnames" required>
								<p>&nbsp;</p>
								 <input type="email" class="form-control" id="clientemail" placeholder="Your Email..." name="clientemail" required>
								 <p>&nbsp;</p>
								 <input type="telephone" class="form-control" id="clienttele" placeholder="Telephone e.g +256 787045644" name="clienttele" required>
								 <p>&nbsp;</p>
								 <input type="text" class="form-control" id="clienthospital" placeholder="Your Business Names..." name="clienthospital" required>
								 <p>&nbsp;</p>
								 <input type="text" class="form-control" id="clientperiod" placeholder="License Period..." name="clientperiod" required>
								<p>&nbsp;</p>
								 <textarea class="form-control" id="clientcomment" placeholder="Order Notes..." name="clientcomment" required></textarea>

                            </div>
                             <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" name="submitorder" class="btn btn-primary">Save Order</button>
                            </div>
							</form>

                        </div>
                    </div>
                </div>
                <!--// Live Demo -->


                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Essential POS Comment</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
							<form action="insertcomment.php"  method="post" id="commentsubmit">
                            <div class="modal-body">
							 <input type="hidden" class="form-control" id="clientsystem" name="clientsystem" Value="Essential POS Hotel" >
								 <input type="text" class="form-control" id="clientnames" placeholder="Your Names..." name="clientnames" required>
								<p>&nbsp;</p>
								 <input type="email" class="form-control" id="clientemail" placeholder="Your Email..." name="clientemail" required>
								<p>&nbsp;</p>
								 <textarea class="form-control" id="clientcomment" placeholder="Comment..." name="clientcomment" required></textarea>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" id="submitcomment" name="submitcomment" class="btn btn-primary">Submit Comment</button>
                            </div>
							</form>
                        </div>
                    </div>
                </div>

                <!--// Vertically centered -->
            </div>
            <!--// Modals -->

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
		</aside>
		<!-- /.control-sidebar -->


            <!-- Cards -->
            <div class="typo-section py-4 border-bottom">

                <!-- Card columns -->
                <h4 class="typo-sub-heading mt-4 mb-3">Essential POS Description</h4>
                <div class="card-columns">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="EssentialPOSBar/dinein.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Client Sales Form</h5>
                            <p class="card-text">A form used for entry of sales as ordered by client. but also user can generate a bill, order or receipt for the client or even Send order to the kitchen printer.</p>

                        </div>
                    </div>


                    <div class="card">
                        <img class="card-img-top img-fluid" src="EssentialPOSBar/salesrecord.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Sales Records Form</h5>
                            <p class="card-text">This offers multiple dimensions of accessing sales records that is either by sales date, by product, By client account, etc.</p>

                        </div>
                    </div>

					  <div class="card">
                        <img class="card-img-top img-fluid" src="EssentialPOSBar/requisition.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Requisition Form</h5>
                            <p class="card-text">This form is used by managers to request for purchases and approval s are made accordingly for the final procument to be made.</p>

                        </div>
                    </div>


                    <div class="card">
					<img class="card-img img-fluid" src="EssentialPOSBar/purchases.jpg" alt="Card image">
                        <div class="card-body">
                            <h5 class="card-title">Purchases Form</h5>
                            <p class="card-text">This form is used to enter new purchases but also used to Access payments butons for suppliers and update stock purchases.</p>
                            <p class="card-text">
                                <small class="text-muted">&nbsp;</small>
                            </p>

                        </div>
                    </div>

					<div class="card">
					<img class="card-img img-fluid" src="EssentialPOSBar/salessummary.jpg" alt="Card image">
                        <div class="card-body">
                            <h5 class="card-title">Sales Summary Form</h5>
                            <p class="card-text">This summarises sales for the business in general based on the dates set or even for individual sales staff.</p>
                            <p class="card-text">
                                <small class="text-muted">&nbsp;</small>
                            </p>
                        </div>
                    </div>

					  <div class="card">
                        <img class="card-img-top img-fluid" src="EssentialPOSBar/client.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Client registration Form</h5>
                            <p class="card-text">This form is used to register new clients and assign them IDs which IDs are used for attachment of all bills incurred at facility.</p>

                        </div>
                    </div>

					<div class="card">
					<img class="card-img img-fluid" src="EssentialPOSBar/stockreport.jpg" alt="Card image">
                        <div class="card-body">
                            <h5 class="card-title">Stock Report Form</h5>
                            <p class="card-text">This form is used to access reports on stock for outlets, store or even stock taken at particular dates. this also allows auto summary of the stock value.</p>

                        </div>
                    </div>


					<div class="card">
					<img class="card-img img-fluid" src="EssentialPOSBar/payment.jpg" alt="Card image">
                        <div class="card-body">
                            <h5 class="card-title">Payments Form</h5>
                            <p class="card-text">This form is used in clearing client bills either using direct payment methods(Cash, Mobile money,Bank Deposits) or using client account.</p>
                           <!-- <p class="card-text">
                                <small class="text-muted">User can delete or update the expense provided user has rights.</small>
                            </p>-->
                        </div>
                    </div>

					  <div class="card">
                        <img class="card-img-top img-fluid" src="EssentialPOSBar/laundary.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Laundary Input Form</h5>
                            <p class="card-text">This form is used in entry of all the laundry brought for cleaning by the client.</p>
                              <p class="card-text">
                                <small class="text-muted"> &nbsp;</small>
                            </p>
                        </div>
                    </div>

                </div>
                <!--// Card columns -->
            </div>
            <!--// Cards -->
        </div>
    </section>
