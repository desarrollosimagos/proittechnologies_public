<style>
	h1 {
		color: #7C8F79 !important;
	}
	
	#table_areas ul {
		padding-top: 20px;
		padding-right: 20px;
		padding-bottom: 20px;
		padding-left: 40px;
	}

	#table_areas .row {
		padding-top: 50%;
		padding-right: 10px;
		padding-bottom: 10px;
		padding-left: 10px;
	}

	/*section {
		padding-bottom: 0px !important;
	}*/

	.content-wrap {
		padding-top: 50px !important;
		padding-bottom: 50px !important;
	}

	ul {
		padding-bottom: 0px !important;
	}
	
	.icon-ok-sign {
		color: #7C8F79 !important;
	}
</style>

<!-- Page Title ============================================= -->
<section id="page-title" class="page-title-parallax page-title-dark" style="background-image: url('<?php echo assets_url(); ?>images/about/shutterstock_328394111.jpg'); padding: 120px 0;" data-stellar-background-ratio="0.3">
	<div class="container clearfix">
		<h1 style="color:grey !important;"><?php echo $this->lang->line('agriculture_page_title1_h1'); ?></h1>
		<span style="color:grey;"><?php echo $this->lang->line('agriculture_page_title1_span'); ?></span>
		<ol class="breadcrumb">
			<li><a href="/index"><?php echo $this->lang->line('agriculture_page_title1_li1'); ?></a></li>
            <li class="active"><?php echo $this->lang->line('agriculture_page_title1_li2'); ?></li>
            <li class="active"><?php echo $this->lang->line('agriculture_page_title1_li3'); ?></li>
		</ol>
	</div>
</section>
<!-- #page-title end -->

<!-- Content ============================================= -->
<section id="page-title">
	<div class="content-wrap">
<!--- ######################### init ##################### --> 	
		<div class="container clearfix" style="margin-top: -100px;">
			<div class="row clearfix">
				<div class="col-lg-12">
					<div class="heading-block topmargin nobottommargin">
						<h1><?php echo $this->lang->line('agriculture_heading_block1_h1'); ?></h1>
					</div>
					<p class="lead">
                        <?php echo $this->lang->line('agriculture_heading_block1_p1'); ?>
                        <br><br>
                        <?php echo $this->lang->line('agriculture_heading_block1_p2'); ?>
                    </p>
				</div>
				<div class="col-lg-12">
					<div class="ohidden nobottommargin" data-height-lg="426" data-height-md="567" data-height-sm="470" data-height-xs="287" data-height-xxs="183">
						<img src="<?php echo assets_url(); ?>images/smartindustries/agriculture.png
" style="position: absolute; top: 0; left: 0;width:100%;" data-animate="fadeInUp" data-delay="100" alt="">
					</div>
				</div>
			</div>
        </div>

        <!--<div class="container clearfix">
            <div id="section-pricing" class="heading-block title-center nobottomborder page-section">
                <h2><a style="width: 200px;" href="<?php echo assets_url(); ?>images/smartindustries/CEB - Agriculture - Smart Irrigation & Fertigation.pdf" class="button button-3d btn-block nomargin">More</a></h2>
            </div>
        </div>-->

    </div>     
</section>

<!-- Content ============================================= -->
<section id="page-title">
	<div class="content-wrap">
<!--- ######################### init ##################### --> 	
		<div class="container clearfix" style="margin-top: -100px;">
			<div class="row clearfix">
				<div class="col-lg-12">
					<div class="heading-block title-center">
						<h1><?php echo $this->lang->line('agriculture_heading_block2_h1'); ?></h1>
					</div>
					
					<div class="col_half">
						<ul class="iconlist iconlist-large iconlist-color">
							<li><i class="icon-ok-sign"></i> <?php echo $this->lang->line('agriculture_heading_block2_li_1'); ?></li>
							<li><i class="icon-ok-sign"></i> <?php echo $this->lang->line('agriculture_heading_block2_li_2'); ?></li>
							<li><i class="icon-ok-sign"></i> <?php echo $this->lang->line('agriculture_heading_block2_li_3'); ?></li>
						</ul>
					</div>

					<div class="col_half col_last">
						<ul class="iconlist iconlist-large iconlist-color">
							<li><i class="icon-ok-sign"></i> <?php echo $this->lang->line('agriculture_heading_block2_li_4'); ?></li>
							<li><i class="icon-ok-sign"></i> <?php echo $this->lang->line('agriculture_heading_block2_li_5'); ?></li>
							<li><i class="icon-ok-sign"></i> <?php echo $this->lang->line('agriculture_heading_block2_li_6'); ?></li>
							<li><i class="icon-ok-sign"></i> <?php echo $this->lang->line('agriculture_heading_block2_li_7'); ?></li>
						</ul>
					</div>
				</div>
			</div>
        </div>
    </div>     
</section>

<!-- Content ============================================= -->
<section id="page-title">
	<div class="content-wrap">
<!--- ######################### init ##################### --> 	
		<div class="container clearfix" style="margin-top: -100px;">
			<div class="row clearfix">
				<div class="col-lg-12">
					<div class="heading-block title-center">
						<h1><?php echo $this->lang->line('agriculture_heading_block3_h1'); ?></h1>
					</div>
					
					<div class="table-responsive">
						<table class="table table-bordered nobottommargin" id="table_areas">
							<!--<thead>
								<tr>
									<th>Solution Modules</th>
									<th>Featured Products</th>
									<th>City Areas of Applicability</th>
									<th>Energy Savings</th>
									<th>Operational Savings</th>
								</tr>
							</thead>-->
							<tbody>								
								<!-- ## Main Features -->
								
								<tr>
									<td>
										<div class="row">
											<div class="span4"></div>
											<div class="span4" class="text-center">
												<h5 class="text-center"><?php echo $this->lang->line('agriculture_table_tr1_1'); ?></h5>
											</div>
											<div class="span4"></div>
										</div>
									</td>
									<td>
										<div class="text-center">
											<img src="<?php echo assets_url(); ?>images/agriculture_smart_irrigation_fertifation1.png">
										</div>
										<div class="text-center">
											<img src="<?php echo assets_url(); ?>images/bee2crop.png">
											<p><?php echo $this->lang->line('agriculture_table_tr1_2'); ?></p>
										</div>
									</td>
									<td>
										<div class="text-center">
											<img src="<?php echo assets_url(); ?>images/agriculture_smart_irrigation_fertifation2.png">
										</div>
										<div class="text-center">
											<img src="<?php echo assets_url(); ?>images/bee2-05.png">
											<p><?php echo $this->lang->line('agriculture_table_tr1_3'); ?></p>
										</div>
									</td>
									<td>
										<div class="text-center">
											<img src="<?php echo assets_url(); ?>images/agriculture_smart_irrigation_fertifation3.png">
										</div>
										<div class="text-center">
											<img src="<?php echo assets_url(); ?>images/bee2-02.png">
											<p><?php echo $this->lang->line('agriculture_table_tr1_4'); ?></p>
										</div>
									</td>
								</tr>
								
								<!-- ## Remote Control -->
								
								<tr>
									<td>
										<div class="row">
											<div class="span4"></div>
											<div class="span4" class="text-center">
												<h5 class="text-center"> <?php echo $this->lang->line('agriculture_table_tr2_1'); ?> </h5>
											</div>
											<div class="span4"></div>
										</div>
									</td>
									<td>
										<ul>
											<li><?php echo $this->lang->line('agriculture_table_tr2_2_li_1'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr2_2_li_2'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr2_2_li_3'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr2_2_li_4'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr2_2_li_5'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr2_2_li_6'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr2_2_li_7'); ?></li>
										</ul>
									</td>
									<td>
										<ul>
											<li><?php echo $this->lang->line('agriculture_table_tr2_3_li_1'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr2_3_li_2'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr2_3_li_3'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr2_3_li_4'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr2_3_li_5'); ?></li>
										</ul>
									</td>
									<td>
										<ul>
											<li><?php echo $this->lang->line('agriculture_table_tr2_4_li_1'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr2_4_li_2'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr2_4_li_3'); ?></li>
										</ul>
									</td>
								</tr>
								
								<!-- ## Indicators -->
								
								<tr>
									<td>
										<div class="row">
											<div class="span4"></div>
											<div class="span4" class="text-center">
												<h5 class="text-center"> <?php echo $this->lang->line('agriculture_table_tr3_1'); ?> </h5>
											</div>
											<div class="span4"></div>
										</div>
									</td>
									<td>
										<ul>
											<li><?php echo $this->lang->line('agriculture_table_tr3_2_li_1'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr3_2_li_2'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr3_2_li_3'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr3_2_li_4'); ?></li>
										</ul>
									</td>
									<td>
										<ul>
											<li><?php echo $this->lang->line('agriculture_table_tr3_3_li_1'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr3_3_li_2'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr3_3_li_3'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr3_3_li_4'); ?></li>
										</ul>
									</td>
									<td>
										<ul>
											<li><?php echo $this->lang->line('agriculture_table_tr3_4_li_1'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr3_4_li_2'); ?></li>
										</ul>
									</td>
								</tr>
								
								<!-- ## Programming & Settings -->
								
								<tr>
									<td>
										<div class="row">
											<div class="span4"></div>
											<div class="span4" class="text-center">
												<h5 class="text-center"><?php echo $this->lang->line('agriculture_table_tr4_1'); ?></h5>
											</div>
											<div class="span4"></div>
										</div>
									</td>
									<td>
										<ul>
											<li><?php echo $this->lang->line('agriculture_table_tr4_2_li_1'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr4_2_li_2'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr4_2_li_3'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr4_2_li_4'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr4_2_li_5'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr4_2_li_6'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr4_2_li_7'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr4_2_li_8'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr4_2_li_9'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr4_2_li_10'); ?></li>
										</ul>
									</td>
									<td>
										<ul>
											<li><?php echo $this->lang->line('agriculture_table_tr4_3_li_1'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr4_3_li_2'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr4_3_li_3'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr4_3_li_4'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr4_3_li_5'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr4_3_li_6'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr4_3_li_7'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr4_3_li_8'); ?></li>
										</ul>
									</td>
									<td>
										<ul>
											<li><?php echo $this->lang->line('agriculture_table_tr4_4_li_1'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr4_4_li_2'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr4_4_li_3'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr4_4_li_4'); ?></li>
										</ul>
									</td>
								</tr>
								
								<!-- ## Alarms -->
								
								<tr>
									<td>
										<div class="row">
											<div class="span4"></div>
											<div class="span4" class="text-center">
												<h5 class="text-center"><?php echo $this->lang->line('agriculture_table_tr5_1'); ?></h5>
											</div>
											<div class="span4"></div>
										</div>
									</td>
									<td>
										<ul>
											<li><?php echo $this->lang->line('agriculture_table_tr5_2_li_1'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr5_2_li_2'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr5_2_li_3'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr5_2_li_4'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr5_2_li_5'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr5_2_li_6'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr5_2_li_7'); ?></li>
										</ul>
									</td>
									<td>
										<ul>
											<li><?php echo $this->lang->line('agriculture_table_tr5_3_li_1'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr5_3_li_2'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr5_3_li_3'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr5_3_li_4'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr5_3_li_5'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr5_3_li_6'); ?></li>
										</ul>
									</td>
									<td>
										<ul>
											<li><?php echo $this->lang->line('agriculture_table_tr5_4_li_1'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr5_4_li_2'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr5_4_li_3'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr5_4_li_4'); ?></li>
										</ul>
									</td>
								</tr>
								
								<!-- ## Reporting -->
								
								<tr>
									<td>
										<div class="row">
											<div class="span4"></div>
											<div class="span4" class="text-center">
												<h5 class="text-center"> <?php echo $this->lang->line('agriculture_table_tr6_1'); ?> </h5>
											</div>
											<div class="span4"></div>
										</div>
									</td>
									<td>
										<ul>
											<li><?php echo $this->lang->line('agriculture_table_tr6_2_li_1'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr6_2_li_2'); ?></li>
										</ul>
									</td>
									<td>
										<ul>
											<li><?php echo $this->lang->line('agriculture_table_tr6_3_li_1'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr6_3_li_2'); ?></li>
										</ul>
									</td>
									<td>
										<ul>
											<li><?php echo $this->lang->line('agriculture_table_tr6_4_li_1'); ?></li>
											<li><?php echo $this->lang->line('agriculture_table_tr6_4_li_2'); ?></li>
										</ul>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
        </div>
    </div>     
</section>

<!-- Content ============================================= -->
<section id="page-title">
	<div class="content-wrap">
<!--- ######################### init ##################### --> 	
		<div class="container clearfix" style="margin-top: -100px;">
			<div class="row clearfix">
				<div class="col-lg-12">
					<div class="heading-block title-center">
						<h1><?php echo $this->lang->line('agriculture_heading_block4_h1'); ?></h1>
					</div>
					
					<p class="lead title-center">
                        <?php echo $this->lang->line('agriculture_heading_block4_p'); ?>
                    </p>
					
					<div class="col_one_third">
						<ul class="iconlist iconlist-large iconlist-color">
							<li><?php echo $this->lang->line('agriculture_heading_block4_li_1'); ?></li>
							<li><?php echo $this->lang->line('agriculture_heading_block4_li_2'); ?></li>
							<li><?php echo $this->lang->line('agriculture_heading_block4_li_3'); ?></li>
							<li><?php echo $this->lang->line('agriculture_heading_block4_li_4'); ?></li>
						</ul>
					</div>
					
					<div class="col_one_third">
						<ul class="iconlist iconlist-large iconlist-color">
							<li><?php echo $this->lang->line('agriculture_heading_block4_li_5'); ?></li>
							<li><?php echo $this->lang->line('agriculture_heading_block4_li_6'); ?></li>
							<li><?php echo $this->lang->line('agriculture_heading_block4_li_7'); ?></li>
							<li><?php echo $this->lang->line('agriculture_heading_block4_li_8'); ?></li>
						</ul>
					</div>

					<div class="col_one_third col_last">
						<ul class="iconlist iconlist-large iconlist-color">
							<li><?php echo $this->lang->line('agriculture_heading_block4_li_9'); ?></li>
							<li><?php echo $this->lang->line('agriculture_heading_block4_li_10'); ?></li>
							<li><?php echo $this->lang->line('agriculture_heading_block4_li_11'); ?></li>
							<li><?php echo $this->lang->line('agriculture_heading_block4_li_12'); ?></li>
						</ul>
					</div>
				</div>
			</div>
        </div>
    </div>     
</section>
