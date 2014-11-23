<link href="<?=base_url();?>assets/css/main.css" rel="stylesheet">
<link href="<?=base_url();?>assets/css/jquery-ui-1.7.1.custom.css" rel="stylesheet">
<style type="text/css">
/* Multiselect
----------------------------------*/

/* multiselect styles */
.multiselect {
	width: 460px !important;
	height: 200px !important;
}

#switcher {
	margin-top: 20px !important;
}


.ui-multiselect { margin:2px 0 30px 10px; border: solid 1px #bbb;}
.ui-multiselect ul.selected { background: #fff; margin: 0; padding: 0; padding-top: 1px; overflow: auto; list-style: none; border: 0; float:left; position: relative; }
.ui-multiselect ul.selected li { line-height: 20px; font-size: 11px; }
.ui-multiselect ul.selected li a { color: #999; text-decoration: none; padding: 0 0 0 20px; display: block; float: left;}
.ui-multiselect ul.available { padding: 0; padding-top: 1px; overflow: auto; background: #fff; margin: 0; list-style: none; border: 0; float:left; position: relative; border-left: 1px solid #bbb;}
.ui-multiselect ul.available li { line-height: 20px; font-size: 11px;}
.ui-multiselect ul.available li a { color: #999; text-decoration: none; padding: 0 0 0 20px; display: block; float: left;}
.ui-state-default { border: none; position: relative; padding-left: 20px; border-bottom: 1px solid #ccc;}
.ui-state-hover { border: none; border-bottom: 1px solid #ccc; }
.ui-multiselect ul li span.ui-icon-arrowthick-2-n-s { position: absolute; left: 2px;}
.ui-multiselect ul li a.action { position: absolute; right: 2px; top: 2px; }
	
</style>


<!-- scripts for multiselect plugin -->
<script type="text/javascript" src="<?=base_url();?>assets/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/jquery-ui-1.7.1.custom.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>assets/js/ui.multiselect.js"></script>

 <script type="text/javascript">
  $(function(){
    // Multiselect
    $(".multiselect").multiselect({sortable: true});
  });
  </script>

<!-- /scripts for multiselect plugin -->

<!--main content start-->
<section id="main-content">
	<section class="wrapper site-min-height">
		<h3><i class="fa fa-angle-right"></i> Mark Summary</h3>
		<div class="row mt">
			<div class="col-lg-12">

				<section class="content-md form-panel" style="margin: 10px 280px 10px 10px; padding: 20px;" >
					
		<?=$message;?>
		<?=validation_errors();?>
		<form method="post">
			<table class="editform">
				<tr>
					<td><label>Track Title</label></td>
					<td><input type="text" name="track_title" /></td>
				</tr>
				<tr>
					<td><label>One Line Intro</label></td>
					<td><input type="text" name="one_line_intro" /></td>
				</tr>
				<tr>
					<td><label>Difficulty Level</label></td>
					<td><input type="radio" name="level" value="Beginner" /> Beginner <input type="radio" name="level" value="Intermediate" /> Intermediate <input type="radio" name="level" value="Advanced" /> Advanced</td>
				</tr>
			</tr>
			<tr>
				<td><label>Course Pool</label></td>
				<td>
					
					<select id="category" class="multiselect" multiple="multiple" name="category[]">
					<?php
							$course = new course();
							$course_list = $this -> course -> get();
							foreach($course_list as $course)
							{
								?>
								<option value="<?=$course -> course_id;?>"><?=$course->full_name;?></option>
								<?php
							}?>
					</select>
				</td>
			</tr>
			<tr>
				<td><label>Track Description</label></td>
				<td><textarea rows="4" cols="50" name="track_description"></textarea></td>
			</tr>
			<tr>
				<td><label>Additional File</label></td>
				<td>
					<input id="teacher-notes" type="text" name="additional_file_title" placeholder="Teacher's Notes" /> Additional File <input type="file" name="additional_file_path" /><button type="button">Upload</button>
					
				</td>
			</tr>

			<tr>
					<td><label>Visible:</label></td>
					<td>
						<section class="onoffswitch">
							<input type="checkbox" name="status" class="onoffswitch-checkbox" id="myonoffswitch" checked>
							<label class="onoffswitch-label" for="myonoffswitch">
								<span class="onoffswitch-inner"></span>
								<span class="onoffswitch-switch"></span>
							</label>
						</section>
					</td>
				</tr>
				
			<tr>
				<td></td>
				<td>
					
					<input type="submit" name="submit" value="Save" />
					<input type="reset" name="reset" value="Reset" />
						
				</td>
			</tr>
		</table>
	</form>


				</section>
				
			</div>
		</div>		
	</section><!-- /wrapper -->
</section><!-- /MAIN CONTENT -->

<section class="clear"></section>

<!-- Multiselect envoke -->

<!-- /Multiselect envoke -->