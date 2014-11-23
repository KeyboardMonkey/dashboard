<link href="<?=base_url();?>assets/css/main.css" rel="stylesheet">
<<<<<<< HEAD:app/views/pages/track-add.php
<script>
    /*
     * jQuery UI Multiselect
     *
     * Copyright (c) 2008 Michael Aufreiter (quasipartikel.at)
     * Dual licensed under the MIT (MIT-LICENSE.txt)
     * and GPL (GPL-LICENSE.txt) licenses.
     *
     * http://www.quasipartikel.at/multiselect/
     *
     * Depends:
     *	ui.core.js
     *	ui.sortable.js
     */
=======
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
>>>>>>> origin/master:app/views/admin/pages/track-add.php


    (function($) {

        $.widget("ui.multiselect", {
            _init: function() {

                // hide this.element
                this.element.hide();
                this.id = this.element.attr("id");
                this.container = $('<div class="ui-multiselect ui-helper-clearfix"></div>').insertAfter(this.element);
                this.selectedList = $('<ul class="selected"></ul>').appendTo(this.container);
                this.availableList = $('<ul class="available"></ul>').appendTo(this.container);

                var that = this;

                // set dimensions
                this.container.width(this.element.width()+1);
                this.selectedList.width(this.element.width()*0.6);
                this.availableList.width(this.element.width()*0.4);

                this.selectedList.height(this.element.height());
                this.availableList.height(this.element.height());

                this.populateLists();

                // register events
                this.registerAddEvents(this.availableList.find('a.action'));
                this.registerRemoveEvents(this.selectedList.find('a.action'));

                if (this.options.sortable) {
                    // make current selection sortable
                    $(this.selectedList).sortable({
                        containment: 'parent',
                        update: function(event, ui) {
                            // apply the new sort order to the original selectbox
                            that.selectedList.find('li').each(function() {
                                if (this.optionLink) $(this.optionLink).remove().appendTo(that.element);
                            });
                        }
                    });
                }
            },
            destroy: function() {
                this.element.show();
                this.container.remove();

                $.widget.prototype.destroy.apply(this, arguments);
            },
            populateLists: function() {
                this.selectedList.empty();
                this.availableList.empty();

                var that = this;
                this.element.find('option').each(function(i) {

                    var item = $('<li class="ui-state-default"> \
										<span class="ui-icon"/> \
										'+$(this).text()+'\
										<a href="#" class="action"><span class="ui-corner-all ui-icon"/></a> \
										</li>').appendTo(that.availableList);

                    item.appendTo(this.selected ? that.selectedList : that.availableList);

                    // store the index as a property
                    item[0].optionLink = this;
                    that.applyItemState(item[0]);
                });


                this.registerHoverEvents(this.container.find('li'));
            },
            applyItemState: function(item) {
                if (item.optionLink.selected) {
                    $(item).removeClass('ui-priority-secondary');
                    if (this.options.sortable)
                        $(item).find('span:first').addClass('ui-icon-arrowthick-2-n-s').removeClass('ui-helper-hidden').addClass('ui-icon');
                    else
                        $(item).find('span:first').removeClass('ui-icon-arrowthick-2-n-s').addClass('ui-helper-hidden').removeClass('ui-icon');
                    $(item).find('a.action span').addClass('ui-icon-minus').removeClass('ui-icon-plus');
                } else {
                    $(item).addClass('ui-priority-secondary');
                    $(item).find('span:first').removeClass('ui-icon-arrowthick-2-n-s').addClass('ui-helper-hidden').removeClass('ui-icon');
                    $(item).find('a.action span').addClass('ui-icon-plus').removeClass('ui-icon-minus');
                }
            },
            registerHoverEvents: function(elements) {
                // extract this
                elements.removeClass('ui-state-hover');

                elements.mouseover(function() {
                    $(this).addClass('ui-state-hover');
                });

                elements.mouseout(function() {
                    $(this).removeClass('ui-state-hover');
                });
            },
            registerAddEvents: function(elements) {
                var that = this;
                elements.click(function() {
                    // select the corresponding option
                    option = $(this).parent()[0].optionLink;
                    option.selected = true;
                    $(option).remove().appendTo(that.element);

                    // move element to selectedList and reregister events
                    var li = $(this).parent().remove().appendTo(that.selectedList);
                    that.applyItemState(li[0]);

                    that.registerRemoveEvents($(this));
                    that.registerHoverEvents(li);
                    return false;
                });

            },
            registerRemoveEvents: function(elements) {
                var that = this;
                elements.click(function() {

                    // deselect the corresponding option
                    $(this).parent()[0].optionLink.selected = false;
                    // move element to availableList and reregister events
                    var li = $(this).parent().remove().appendTo(that.availableList);
                    that.applyItemState(li[0]);
                    that.registerAddEvents($(this));
                    that.registerHoverEvents(li);
                    return false;
                });
            }
        });

        $.extend($.ui.multiselect, {
            getter: "value",
            defaults: {
                sortable: false
            }
        });

    })(jQuery);
</script>
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


					<select class="course-pool-left" id="category" multiple >
					
						
					</select>
					<button class="course-pool" type="button">&lt;</button><br /><br />
					<button class="course-pool" type="button">&gt;</button>

                    <select id="countries" class="multiselect" multiple="multiple" name="countries[]">
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
                    <script type="text/javascript">
                        $(document).ready(function(){
                            // choose either the full version
                            $(".multiselect").multiselect();
                            // or disable some features
                            $(".multiselect").multiselect({sortable: false, searchable: false});
                        });
                    </script>

					

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
