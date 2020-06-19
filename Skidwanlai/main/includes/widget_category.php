<!-- ============================================== SIDEBAR ============================================== -->

<!-- ================================== TOP NAVIGATION ================================== -->
<div class="side-menu animate-dropdown outer-bottom-xs">
    <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>
    <nav class="yamm megamenu-horizontal" role="navigation">
        <ul class="nav">
<!-- == SIMULA DITO GALING SA DATABASE YUNG CATEGORY NAMES == -->
	<?php
		$query_category = mysqli_query($con, "SELECT * FROM tbl_category;");
		if ($query_category){
			while($row_category = mysqli_fetch_assoc($query_category)){ ?>
				<li class="dropdown menu-item">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<!--<i class="icon fa fa-desktop fa-fw"></i>-->
				<?php echo $row_category['categoryname'];?>
				</a>

<!-- == DITO SIMULA NG LALABAS SUB CATEGORY == -->
				<ul class="dropdown-menu mega-menu">
					<li class="yamm-content">
						<div class="row">
						<div class="col-sm-12 col-md-3_custom">
							<ul class="links list-unstyled">
							<?php
							$query_brand = mysqli_query($con, "
								SELECT tbl_prod.categoryname, tbl_prod.brandname
								FROM tbl_prod
								WHERE tbl_prod.categoryname = '$row_category[categoryname]'
                GROUP BY tbl_prod.brandname
								ORDER BY tbl_prod.brandname ASC
							;");
							if ($query_brand){
								while ($row_brand = mysqli_fetch_assoc($query_brand)){
							?>	<li><a href="category_brand.php?categoryname=<?php echo $row_category['categoryname']; ?>&brandname=<?php echo $row_brand['brandname']; ?>"><?php echo $row_brand["brandname"]; ?></a></li>
						<?php	}
							}
							?>
							</ul>
						</div><!-- /.col -->
						</div><!-- /.row -->
					</li><!-- /.yamm-content -->
				</ul><!-- /.dropdown-menu -->
<!-- == DITO MATATAPOS ANG SUB CATEGORY == -->
				</li><!-- /.menu-item -->

				<?php
			}
		} ?>
<!-- == DITO TAPOS NG CATEGORY NAMES GALING DATABASE == -->
        </ul><!-- /.nav -->
    </nav><!-- /.megamenu-horizontal -->
</div><!-- /.side-menu -->
<!-- ================================== TOP NAVIGATION : END ================================== -->
<!-- ============================================== COLOR============================================== -->

<!-- ============================================== SIDEBAR : END ============================================== -->
