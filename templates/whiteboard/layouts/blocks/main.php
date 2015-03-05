<?php

// No direct access.
defined('_JEXEC') or die;

if($this->getParam("cwidth_position", '') == 'style') {
// main column
    if($this->modules('inset1 and inset2')) {
         $gkInset1 = $this->getParam('inset_column_width', '20'). '%';
         $gkInset2 = $this->getParam('inset2_column_width', '20'). '%';
         $gkComponentWrap = (100 - ($this->getParam('inset_column_width', '20') + $this->getParam('inset2_column_width', '20'))) . '%';
    } elseif($this->modules('inset1 or inset2')) {
         if($this->modules('inset1')) {
              $gkInset1 = $this->getParam('inset_column_width', '20'). '%';
              $gkComponentWrap = (100 - $this->getParam('inset_column_width', '20')) . '%';
         } else {
              $gkInset2 = $this->getParam('inset2_column_width', '20'). '%';
              $gkComponentWrap = (100 - $this->getParam('inset2_column_width', '20')) . '%';
         }
    }
   
    // all columns
    $left_column = $this->modules('left_top + left_bottom + left_left + left_right');	
	$right_column = $this->modules('right_top + right_bottom + right_left + right_right');
	
	JFactory::getApplication()->enqueueMessage($left_column .' - '.$right_column);


    if($left_column && $right_column) {
        $gkContent = (100 - ($this->getParam('left_column_width', '20') + $this->getParam('right_column_width', '20'))). '%';
    } elseif ( $left_column ) {
        $gkContent = (100 - $this->getParam('left_column_width', '20')). '%';
    } elseif ( $right_column ) {
        $gkContent = (100 - $this->getParam('right_column_width', '20')) . '%';
    }

}


?>

<?php if($this->mainExists('all')) : ?>
<div id="gkMain">
	
	<div style="width:300px; float:left "><jdoc:include type="modules" name="ostlistpage-review" style="<?php echo $this->module_styles['breadcrumb']; ?>" /></div>
	<div style="width:300px ; float:left"><jdoc:include type="modules" name="osttopreview" style="<?php echo $this->module_styles['breadcrumb']; ?>" /></div>
	
	<div style="width:300px; float:left"><jdoc:include type="modules" name="ostmostreview" style="<?php echo $this->module_styles['breadcrumb']; ?>" /></div>
	
	
	
	<?php if($this->modules('breadcrumb')) : ?>
	<div id="gkBreadcrumb">
		<div>
			<?php if($this->modules('breadcrumb')) : ?>
			<jdoc:include type="modules" name="breadcrumb" style="<?php echo $this->module_styles['breadcrumb']; ?>" />
			<?php endif; ?>
		</div>
	</div>
	<?php endif; ?>

	<div id="gkMainBlock" class="gkMain">

		<!-- /**************** -->
		<div class="ost-wraper">

			<div class="ost-top-banner-area">
				<!-- /**************** -->
					<?php if( $this->modules('ost-banner')) : ?>
						<div class="ost-banner">
							<jdoc:include type="modules" name="ost-banner" style="xhtml" />
						</div>
					<?php endif; ?>
				<!-- /**************** -->

				<!-- /**************** -->
					<?php if( $this->modules('ost-banner-add')) : ?>
						<div class="ost-banner-add">
							<div class="box">
								<jdoc:include type="modules" name="ost-banner-add" style="xhtml" />
							</div>
						</div>
					<?php endif; ?>
				<!-- /**************** -->
			</div>

			<div class="ost-contant-area">
				
				<div class="ost-contant-top-area">
					<div class="ost-contant-top-left">
						
						<!-- /**************** -->
							<?php if( $this->modules('ost-top-latest-news')) : ?>
								<div class="ost-top-latest-news">
									<div class="box">
										<jdoc:include type="modules" name="ost-top-latest-news" style="xhtml" />
									</div>
								</div>
							<?php endif; ?>
						<!-- /**************** -->

						<!-- /**************** -->
							<?php if( $this->modules('ost-top-latest-video')) : ?>
								<div class="ost-top-latest-video">
									<div class="box">
										<jdoc:include type="modules" name="ost-top-latest-video" style="xhtml" />
									</div>
								</div>
							<?php endif; ?>
						<!-- /**************** -->

					</div>
					<!--  -->
					<div class="ost-contant-top-right">
						
						<!-- /**************** -->
							<?php if( $this->modules('right_right')) : ?>
								<div class="ost-top-right-area">
									<div class="box">
										<div id="gkRightRight" class="gkMain gkCol" <?php if($this->getParam("cwidth_position", '') == 'style') echo "style=width:".$gkRightRight;  ?>>
			<jdoc:include type="modules" name="right_right" style="<?php echo $this->module_styles['right_right']; ?>" />
		</div>
									</div>
								</div>
							<?php endif; ?>
						<!-- /**************** -->

						<!-- /**************** -->
							<?php if( $this->modules('ost-top-right-login')) : ?>
								<div class="ost-top-right-area">
									<div class="box">
										<div id="gkRightRight" class="gkMain gkCol" <?php if($this->getParam("cwidth_position", '') == 'style') echo "style=width:".$gkRightRight;  ?>>
			<jdoc:include type="modules" name="ost-top-right-login" style="<?php echo $this->module_styles['right_right']; ?>" />
		</div>
									</div>
								</div>
							<?php endif; ?>
						<!-- /**************** -->
						
				

						<!-- /**************** -->
							<?php if( $this->modules('ost-top-right-hotnews')) : ?>
								<div class="ost-top-right-hotnews">
									<div class="box">
										<jdoc:include type="modules" name="ost-top-right-hotnews" style="xhtml" />
									</div>
								</div>
							<?php endif; ?>
						<!-- /**************** -->

					</div>
				</div>

				<!--  -->
				<!-- /**************** -->
					<?php if( $this->modules('ost-video-area')) : ?>
						<div class="ost-video-area">
							<div class="box">
								<jdoc:include type="modules" name="ost-video-area" style="xhtml" />
							</div>
						</div>
					<?php endif; ?>
				<!-- /**************** -->

				<!-- /**************** -->
					<?php if( $this->modules('ost-reviews-area')) : ?>
						<div class="ost-reviews-area">
							<div class="box">
								<jdoc:include type="modules" name="ost-reviews-area" style="xhtml" />
							</div>
						</div>
					<?php endif; ?>
				<!-- /**************** -->

			</div>

			<!--  -->

			<div class="ost-mid-contant-area">
				
				<!-- /**************** -->
					<?php if( $this->modules('ost-mid-left-banner')) : ?>
						<div class="ost-mid-left-banner">
								<jdoc:include type="modules" name="ost-mid-left-banner" style="xhtml" />
						</div>
					<?php endif; ?>
				<!-- /**************** -->

				<!-- /******* Mega comment ********* -->
					<?php if( $this->modules('ost-mid-box-1')) : ?>
						<div class="ost-mid-box-1">
							<div class="box">
								<jdoc:include type="modules" name="ost-mid-box-1" style="xhtml" />
							</div>
						</div>
					<?php endif; ?>
				<!-- /*******END Mega comment ********* -->
				<!-- /**************** -->
					<?php if( $this->modules('ost-mid-box-2')) : ?>
						<div class="ost-mid-box-2">
							<div class="box">
								<jdoc:include type="modules" name="ost-mid-box-2" style="xhtml" />
							</div>
						</div>
					<?php endif; ?>
				<!-- /**************** -->
				<!-- /**************** -->
					<?php if( $this->modules('ost-mid-box-3')) : ?>
						<div class="ost-mid-box-3">
							<div class="box">
								<jdoc:include type="modules" name="ost-mid-box-3" style="xhtml" />
							</div>
						</div>
					<?php endif; ?>
				<!-- /**************** -->
				
			</div>

			<!-- /********* tab *********/ -->

				<!-- /**************** -->
					<?php if( $this->modules('full_content')) : ?>
						<div class="ost-full_content">
							<div class="box">
								<jdoc:include type="modules" name="full_content" style="xhtml" />
							</div>
						</div>
					<?php endif; ?>
				<!-- /**************** -->

			<!-- /********* bottom ********* -->

			<div class="ost-bottom-contant-area">
				
				<!-- /**************** -->
					<?php if( $this->modules('ost-bottom-left-banner')) : ?>
						<div class="ost-bottom-left-banner">
								<jdoc:include type="modules" name="ost-bottom-left-banner" style="xhtml" />
						</div>
					<?php endif; ?>
				<!-- /**************** -->

				<!-- /**************** -->
					<?php if( $this->modules('ost-bottom-box-1')) : ?>
						<div class="ost-bottom-box-1">
							<div class="box">
								<jdoc:include type="modules" name="ost-bottom-box-1" style="xhtml" />
							</div>
						</div>
					<?php endif; ?>
				<!-- /**************** -->
				<!-- /**************** -->
					<?php if( $this->modules('ost-bottom-box-2')) : ?>
						<div class="ost-bottom-box-2">
							<div class="box">
								<jdoc:include type="modules" name="ost-bottom-box-2" style="xhtml" />
							</div>
						</div>
					<?php endif; ?>
				<!-- /**************** -->
				<!-- /**************** -->
					<?php if( $this->modules('ost-bottom-box-3')) : ?>
						<div class="ost-bottom-box-3">
							<div class="box">
								<jdoc:include type="modules" name="ost-bottom-box-3" style="xhtml" />
							</div>
						</div>
					<?php endif; ?>
				<!-- /**************** -->
				
			</div>






				<!-- /********* bottom Down Community Area********* -->

			<div class="ost-bottom-community-area">
				<div class="ost-community-area">
					<?php if( $this->modules('ost-bottom-block-first')) : ?>
					<div style="margin: 10px;"><h3>Community</h3></div>
					<?php endif;?>
				<!-- /**************** -->
					<?php if( $this->modules('ost-bottom-block-first')) : ?>
						<div class="ost-bottom-block-community">
							<div class="box">
								<jdoc:include type="modules" name="ost-bottom-block-first" style="xhtml" />
							</div>
						</div>
					<?php endif; ?>
				<!-- /**************** -->

				<!-- /**************** -->
					<?php if( $this->modules('ost-bottom-block-second')) : ?>
						<div class="ost-bottom-block-community">
							<div class="box">
								<jdoc:include type="modules" name="ost-bottom-block-second" style="xhtml" />
							</div>
						</div>
					<?php endif; ?>
				<!-- /**************** -->
				<!-- /**************** -->
					<?php if( $this->modules('ost-bottom-block-third')) : ?>
						<div class="ost-bottom-block-community">
							<div class="box">
								<jdoc:include type="modules" name="ost-bottom-block-third" style="xhtml" />
							</div>
						</div>
					<?php endif; ?>
				<!-- /**************** -->
				<!-- /**************** -->
					<?php if( $this->modules('ost-bottom-block-forth')) : ?>
						<div class="ost-bottom-block-community">
							<div class="box">
								<jdoc:include type="modules" name="ost-bottom-block-forth" style="xhtml" />
							</div>
						</div>
					<?php endif; ?>
				<!-- /**************** -->
				<!-- /**************** -->
					<?php if( $this->modules('ost-bottom-block-fifth')) : ?>
						<div class="ost-bottom-block-community">
							<div class="box">
								<jdoc:include type="modules" name="ost-bottom-block-fifth" style="xhtml" />
							</div>
						</div>
					<?php endif; ?>
				<!-- /**************** -->
				<!-- /**************** -->
					<?php if( $this->modules('ost-bottom-block-sixth')) : ?>
						<div class="ost-bottom-block-community">
							<div class="box">
								<jdoc:include type="modules" name="ost-bottom-block-sixth" style="xhtml" />
							</div>
						</div>
					<?php endif; ?>
				<!-- /**************** -->
				<!-- /**************** -->
					<?php if( $this->modules('ost-bottom-block-seventh')) : ?>
						<div class="ost-bottom-block-community">
							<div class="box">
								<jdoc:include type="modules" name="ost-bottom-block-seventh" style="xhtml" />
							</div>
						</div>
					<?php endif; ?>
				<!-- /**************** -->
				</div>
			</div>
			
		</div>
		<!-- /**************** -->

		<!-- three different review divs  -->
		<?php if( $_REQUEST['view']!='article' && $_REQUEST['Itemid']==175) { ?> 
			
			<?php if ($this->modules('ost_latest_reviews')) : ?>
			<div class="reviews_col">
			<jdoc:include type="modules" name="ost_latest_reviews" style="xhtml" />
			</div>
			<?php endif; ?>
			<?php if ($this->modules('ost_top_reviews')) : ?>
			<div class="reviews_col">
			<jdoc:include type="modules" name="ost_top_reviews" style="xhtml" />
			</div>
			<?php endif; ?>
			<?php if ($this->modules('ost_userscore_reviews')) : ?>
			<div class="reviews_col">
			<jdoc:include type="modules" name="ost_userscore_reviews" style="xhtml"  />
			</div>
			<?php endif; ?>
			<div  class="jrClear"></div>
			<?php } ?>
			<!-- review divs ends -->

		<?php $this->loadBlock('left'); ?>
	
		<?php if($this->mainExists('content')) : ?>
			
			<?php 
			$request = JRequest::get('request');
			$view =  JRequest::getVar('view');
			$option =  JRequest::getVar('option');
			$Itemid =  JRequest::getVar('Itemid');
			$id =  JRequest::getInt('id');
			$cssnewadd = '';
			if($option=='com_p8pbb') {
				$cssnewadd .= 'gkMainfull ';
			}
			/* kk code for article full width */
			
			if($option=='com_content' && $view=='article') {
				$cssnewadd .= 'gkMainfull ';
			}
			if($option=='com_jreviews' && $Itemid!=175) {
				$cssnewadd .= 'gkMainfull ';
			}
			
			?>
			<?php
			if($_REQUEST['option'] == 'com_p8pbb'){
			?>
		<div id="gkContent" class="gkMain forum-custom <?php echo $cssnewadd;?>gkCol <?php echo $this->generatePadding('gkContentColumn'); ?>" <?php //if($this->getParam("cwidth_position", '') == 'style') echo "style=width:".$gkContent;  ?>>
			<?php }else{ ?>
				
		<div id="gkContent" class="gkMain <?php echo $cssnewadd;?>gkCol <?php echo $this->generatePadding('gkContentColumn'); ?>" <?php //if($this->getParam("cwidth_position", '') == 'style') echo "style=width:".$gkContent;  ?>>
					<?php } ?>
				
			<div>
				<?php if($this->modules('top')) : ?>
				<div id="gkContentTop" class="gkMain">
					<jdoc:include type="modules" name="top" style="<?php echo $this->module_styles['top']; ?>" />
				</div>
				<?php endif; ?>
				
				<?php if($this->mainExists('content_mainbody')) : ?>
				
				<?php
				$ostuser = JFactory::getUser(); 
			
				 if($ostuser->id != 1 &&  $_REQUEST['Itemid']==101)
				 {
				?>
				
				
				<div id="gkContentMainbody" class="gkMain <?php echo $this->generatePadding('gkContentMainbody'); ?>" style="display:none">
				<?php } else{?>
				<div id="gkContentMainbody" class="gkMain <?php echo $this->generatePadding('gkContentMainbody'); ?>">
				<?php } ?>
				
					<?php if($this->modules('inset1')) : ?>
					<div id="gkInset1" class="gkMain gkCol" <?php if($this->getParam("cwidth_position", '') == 'style') echo "style=width:".$gkInset1;  ?>>
						<jdoc:include type="modules" name="inset1" style="<?php echo $this->module_styles['inset1']; ?>" />
					</div>
					<?php endif; ?>			
					
					<?php if($this->mainExists('component_wrap')) : ?>
						<?php 
							$is_column = ($this->modules('inset1 + inset2')) ? 'gkCol' : '';
						?>
						
					<div id="gkComponentWrap" class="gkMain <?php echo $is_column; ?> <?php echo $this->generatePadding('gkComponentWrap'); ?>" <?php if($this->getParam("cwidth_position", '') == 'style') echo "style=width:".$gkComponentWrap;  ?>>	
						<?php if($this->modules('mainbody_top')) : ?>
						<div id="gkMainbodyTop" class="gkMain">
							<jdoc:include type="modules" name="mainbody_top" style="<?php echo $this->module_styles['mainbody_top']; ?>" />
						</div>
						<?php endif; ?>	
						
						<?php $this->messages('message-position-3'); ?>
						
						<?php if(
							($this->isFrontpage() && $this->getParam('mainbody_frontpage', 'only_component') == 'only_mainbody') ||
							($this->isFrontpage() && $this->getParam('mainbody_frontpage', 'only_component') == 'mainbody_before_component') ||
							(!$this->isFrontpage() && $this->getParam('mainbody_subpage', 'only_component') == 'mainbody_before_component')
						) : ?>
						<jdoc:include type="modules" name="mainbody" style="<?php echo $this->module_styles['mainbody']; ?>" />
						<?php endif; ?>
						
						<?php if($this->mainExists('component') && !($this->isFrontpage() && $this->getParam('mainbody_frontpage', 'only_component') == 'only_mainbody')) : ?>
						<div id="gkMainbody" class="gkMain">
							<div id="gkMainbodyWrap">
								<?php if($this->isFrontpage()) : ?>
									<?php if($this->getParam('mainbody_frontpage', 'only_component') == 'only_component') : ?>
									
									<div id="gkComponent" class="1">
										<jdoc:include type="component" />
									</div>


									<?php elseif($this->getParam('mainbody_frontpage', 'only_component') == 'mainbody_before_component') : ?>
									<div id="gkComponent" class="2">
										<jdoc:include type="component" />
									</div>
									<?php else : ?>
									<div id="gkComponent" class="3">
										<jdoc:include type="component" />
									</div>
									<?php endif; ?>
								<?php else : ?>
									<?php if($this->getParam('mainbody_subpage', 'only_component') == 'only_component') : ?>
									<div id="gkComponent" class="4">
										<jdoc:include type="component" />
									</div>
									<?php elseif($this->getParam('mainbody_subpage', 'only_component') == 'mainbody_before_component') : ?>
									<div id="gkComponent" class="5">
										<jdoc:include type="component" />
									</div>
									<?php else : ?>
									<div id="gkComponent" class="6">
										<jdoc:include type="component" />
									</div>
									<?php endif; ?>					
								<?php endif; ?>
							</div>
						</div>
						<?php endif; ?>
						
						<?php if(
							(($this->isFrontpage() && !$this->getParam('mainbody_frontpage', 'only_component') == 'only_component') &&
							($this->isFrontpage() && !$this->getParam('mainbody_frontpage', 'only_component') == 'mainbody_before_component')) ||
							((!$this->isFrontpage() && !$this->getParam('mainbody_subpage', 'only_component') == 'only_component') &&
							(!$this->isFrontpage() && !$this->getParam('mainbody_subpage', 'only_component') == 'mainbody_before_component'))
						) : ?>
						<jdoc:include type="modules" name="mainbody" style="<?php echo $this->module_styles['mainbody']; ?>" />
						<?php endif; ?>
						
						<?php if($this->modules('mainbody_bottom')) : ?>
						<div id="gkMainbodyBottom" class="gkMain">
							<jdoc:include type="modules" name="mainbody_bottom" style="<?php echo $this->module_styles['mainbody_bottom']; ?>" />
						</div>
						<?php endif; ?>
					</div>
					<?php endif; ?>
						
					<?php if($this->modules('inset2')) : ?>
					<div id="gkInset2" class="gkMain gkCol" <?php if($this->getParam("cwidth_position", '') == 'style') echo "style=width:".$gkInset2;  ?>>
						<jdoc:include type="modules" name="inset2" style="<?php echo $this->module_styles['inset2']; ?>" />
					</div>
					<?php endif; ?>	
				</div>
				<?php endif; ?>
				
				<?php if($this->modules('bottom')) : ?>
				<div id="gkContentBottom" class="gkMain">
					<jdoc:include type="modules" name="bottom" style="<?php echo $this->module_styles['bottom']; ?>" />
				</div>
				<?php endif; ?>
			</div>
		</div>
		<?php endif; ?>
	
		<?php //$this->loadBlock('right'); ?>
		<?php /* advance search code */ ?>
		<?php if( $_REQUEST['view']!='article' && $_REQUEST['Itemid']==175) { ?> 
			
			<?php if ($this->modules('ost_advance_search')) : ?>
			<div class="ost_advance_search" >
			<jdoc:include type="modules" name="ost_advance_search" style="xhtml" />
			</div>
			<?php endif; ?>
			<?php }  ?> 
		<?php $this->loadBlock('right'); ?>
			
			<?php /* advance search code ends here */ ?>
	</div>
	
	
	
	   	<div id="gkMainBlock" class="gkMain">
			<div id="gkContentBottom" class="gkMain">
			<?php if($this->modules('bottom_left')) : ?>
				<div style="width:30%;float:left"><jdoc:include type="modules" name="bottom_left" style="<?php echo $this->module_styles['bottom']; ?>" /></div>
			<?php endif; ?>
			</div>
				<?php if($this->modules('bottomd')) : ?>
				<div style="width:30%;float:left"><jdoc:include type="modules" name="bottom" style="<?php echo $this->module_styles['bottom']; ?>" /></div>
			<?php endif; ?>
				<?php if($this->modules('bottom_right')) : ?>
				<div style="width:30%;float:left"><jdoc:include type="modules" name="bottom_right" style="<?php echo $this->module_styles['bottom_right']; ?>" /></div>
			<?php endif; ?>
			
		</div>
		<div id="gkMainBlock" class="gkMain">
		
			
				<?php if($this->modules('full_video')) : ?><div class="full_video">
			<jdoc:include type="modules" name="full_video" style="<?php echo $this->module_styles['full_video']; ?>" />
			</div><?php endif; ?>
			</div>
	
	
</div>
<?php endif; ?>
