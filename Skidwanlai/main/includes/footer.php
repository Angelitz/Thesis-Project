<!-- ============================================================= FOOTER ============================================================= -->
<?php
	$query_info = mysqli_query($con, "SELECT * FROM tbl_info;");
	$show_info = mysqli_fetch_assoc($query_info);
?>
<footer id="footer" class="footer color-bg">
	<div class="links-social">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-4">
					<!-- ============================================================= CONTACT INFO ============================================================= -->
					<div class="contact-info">
						<div class="footer-logo">
							<div class="logo">
								<a href="index.php">
									<img src="assets/images/logo.png" width="89%">
								</a>
							</div><!-- /.logo -->
						</div><!-- /.footer-logo -->
						<div class="module-body m-t-20">
							<p class="about-us"><?php echo $show_info["m_about"];?></p>
						</div><!-- /.module-body -->
					</div><!-- /.contact-info -->
					<!-- ============================================================= CONTACT INFO : END ============================================================= -->
				</div><!-- /.col -->
					<div class="col-xs-12 col-sm-6 col-md-4">
						<!-- ============================================================= CONTACT TIMING============================================================= -->
						<div class="contact-timing">
							<div class="module-heading">
								<h4 class="module-title">opening time</h4>
							</div><!-- /.module-heading -->
							<div class="module-body outer-top-xs">
								<div class="table-responsive">
									<table class="table">
										<tbody>
											<tr><td>Monday-Friday:</td><td class="pull-right">08:00 AM To 8:00 PM</td></tr>
										</tbody>
									</table>
								</div><!-- /.table-responsive -->
								<p class='contact-number'>Hot Line: <?php echo $show_info['m_contact'];?></p>
							</div><!-- /.module-body -->
						</div><!-- /.contact-timing -->
						<!-- ============================================================= CONTACT TIMING : END ============================================================= -->
					</div><!-- /.col -->
						<div class="col-xs-12 col-sm-6 col-md-4">
							<!-- ============================================================= INFORMATION============================================================= -->
							<div class="contact-information">
								<div class="module-heading">
									<h4 class="module-title">Information</h4>
								</div><!-- /.module-heading -->
								<div class="module-body outer-top-xs">
									<ul class="toggle-footer" style="">
										<li class="media">
											<div class="pull-left">
												<span class="icon fa-stack fa-lg">
													<i class="fa fa-circle fa-stack-2x"></i>
													<i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
												</span>
											</div>
											<div class="media-body">
												<p><?php echo $show_info['m_address'];?>.</p>
											</div>
										</li>
										<li class="media">
											<div class="pull-left">
												<span class="icon fa-stack fa-lg">
													<i class="fa fa-circle fa-stack-2x"></i>
													<i class="fa fa-mobile fa-stack-1x fa-inverse"></i>
												</span>
											</div>
											<div class="media-body">
												<p><?php echo $show_info['m_contact'];?></p>
											</div>
										</li>
										<li class="media">
											<div class="pull-left">
                     <span class="icon fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
                <div class="media-body">
                    <span><a href="#"><?php echo $show_info['m_email'];?></a></span>
                </div>
            </li>

            </ul>
    </div><!-- /.module-body -->
</div><!-- /.contact-timing -->
<!-- ============================================================= INFORMATION : END ============================================================= -->            	</div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.links-social -->

    <div class="copyright-bar">
        <div class="container">
            <div class="col-xs-12 col-sm-6 no-padding">
                <div class="copyright">
                   Copyright © 2016
                    <a href="index.php">Skidwanlai Computer World Tanza.</a>
                    - All rights Reserved
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 no-padding">
                <div class="clearfix payment-methods">
                    <ul>
                        <li><img src="assets/images/payments/1.png" alt=""></li>
                    </ul>
                </div><!-- /.payment-methods -->
            </div>
        </div>
    </div>
</footer>
<!-- ============================================================= FOOTER : END============================================================= -->
	