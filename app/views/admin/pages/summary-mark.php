<link href="<?=base_url();?>assets/css/main.css" rel="stylesheet">

<!--main content start-->
<section id="main-content">
	<section class="wrapper site-min-height">
		<h3><i class="fa fa-angle-right"></i> Mark Summary</h3>
		<div class="row mt">
			<div class="col-lg-12">

				<section class="content-md form-panel" style="margin: 10px 280px 10px 10px; padding: 20px;" >
					<form action="">
			<table class="editform">
				<tr>
					<td><label>Course Name</label></td>
					<td><label><strong>SQL Injection</strong></label></td>
				</tr>
				<tr>
					<td><label>Username</label></td>
					<td><a href="#"><strong>Ali Afzal</strong></a></td>
				</tr>
				<tr>
					<td><label>Email Address</label></td>
					<td><label>aliafzal@yahoo.com</label></td>
				</tr>
				<tr>
					<td><label>Summary</label></td>
					<td><textarea rows="4" cols="50" name=""></textarea></td>
				</tr>
				<tr>
					<td><label>Marks Obtained</label></td>
					<td><input type="number" name="" id="marks-obt" /><span> /100<span></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<button type="button" class="summary-review">Previous</button>
						<button type="button" class="summary-review">Next</button>
					</td>
				</tr>
			</table>
		</form>
					<section class="save-unsave">
						<section class="inline-buttons">
							<input type="submit" value="Save" />
							<a href="<?=base_url();?>/index.php/summary">Cancel</a>
						</section>
					</section>
				</section>
				
			</div>
		</div>		
	</section><!-- /wrapper -->
</section><!-- /MAIN CONTENT -->

<section class="clear"></section>




