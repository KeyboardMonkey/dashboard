<link href="<?=base_url();?>assets/css/main.css" rel="stylesheet">

<!--main content start-->
<section id="main-content">
	<section class="wrapper site-min-height">
		<h3><i class="fa fa-angle-right"></i> Add New Course</h3>
		<div class="row mt">
			<div class="col-lg-12">

				<section class="content-md form-panel" style="margin: 10px 280px 10px 10px; padding: 20px;" >
					<form class="dashboard">
						<p>
							<label>Course Full Name:</label>
							<input class="name" type="text" name="login" placeholder="Course Full Name" />
						</p>
						<p>
							<label>Course Short Name:</label>
							<input class="name" type="text" name="login" placeholder="Course Short Name" />
						</p>
						<p>
							<label>Category:</label>
							<select id="category">
								<option value="1">one</option>
								<option value="2">two</option>
								<option value="3">three</option>
								<option value="4">four</option>
							</select>
						</p>
						<p>
							<label>Visible:</label>
							<section class="onoffswitch">
								<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
								<label class="onoffswitch-label" for="myonoffswitch">
									<span class="onoffswitch-inner"></span>
									<span class="onoffswitch-switch"></span>
								</label>
							</section>
						</p>
						<p>
							<label>Description:</label>
							<textarea rows="4" cols="50" placeholder="Write Course Summary Here"></textarea>
						</p>
					</form>
					<section class="save-unsave">
						<section class="inline-buttons">
							<a href="">Save</a>
							<a href="">Cancel</a>
						</section>
					</section>
				</section>
				
			</div>
		</div>		
	</section><!-- /wrapper -->
</section><!-- /MAIN CONTENT -->
