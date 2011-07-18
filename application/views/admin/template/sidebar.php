	<div id="sidebar">
		<div id="sidebar-wrapper">
			<h1 id="sidebar-title"><a href="#">ADMIN</a></h1>
		  
			<!-- Logo (221px wide) -->
			<a href="#"><img id="logo" src="<?=base_url(); ?>public/backend/images/logo.png" alt="Admin logo" /></a>
		  
			<!-- Sidebar Profile links -->
			<div id="profile-links">
				<?php echo $this->lang->line('welcome');?>, <a href="<?=base_url();?>index.php/admin/users/edit/<?=$this->session->userdata('iduser'); ?>" title="Edit your profile"><?=$this->session->userdata('username'); ?></a><br /> 
				<br />
				<a href="#" title="View the Site"><?php echo $this->lang->line('see_website');?></a> | <?=anchor('admin/login/logout', $this->lang->line('logout'), 'title="Sign Out"') ?>
			</div>        
			<ul id="main-nav">
				<li>
					<?php $dashboard = array('class' => 'nav-top-item no-submenu');?>
					<?=anchor('admin/manage', $this->lang->line('dashboard'), $dashboard); ?>     
				</li>
				<li> 
				<?php if(isset($current_page) && $current_page == 'articles'):?>
					<?php $articles = array('class' => 'nav-top-item current');?>
				<?php else:?>
					<?php $articles = array('class' => 'nav-top-item');?>
				<?php endif;?>
					<?=anchor('', $this->lang->line('articles'), $articles); ?>
					<ul>
						<li><?=anchor('admin/articles/add', $this->lang->line('add_article')); ?></li>
						<li><?=anchor('admin/articles', $this->lang->line('view_articles')); ?></li>
					</ul>
				</li>
				<li>
				<?php if(isset($current_page) && $current_page == 'category'):?>
					<?php $menus = array('class' => 'nav-top-item current');?>
				<?php else: ?>
					<?php $menus = array('class' => 'nav-top-item');?>
				<?php endif;?>
					<?=anchor('', $this->lang->line('categories'), $menus); ?>
					<ul>
						<li><?=anchor('admin/category/add', $this->lang->line('add_category')); ?></li>
						<li><?=anchor('admin/category', $this->lang->line('view_categories')); ?></li>
					</ul>
				</li>
				<li>
				<?php if(isset($current_page) && $current_page == 'menus'):?>
						<?php $menus = array('class' => 'nav-top-item current');?>
				<?php else: ?>
						<?php $menus = array('class' => 'nav-top-item');?>
				<?php endif;?>
					<?=anchor('', $this->lang->line('menus'), $menus); ?>
					<ul>
						<li><?=anchor('admin/menus/add', $this->lang->line('add_menu')); ?></li>
						<li><?=anchor('admin/menus', $this->lang->line('view_menus')); ?></li>
					</ul>
				</li>
				
				<li>
					<?php if(isset($current_page) && $current_page == 'users'):?>
						<?php $users = array('class' => 'nav-top-item current');?>
					<?php else:?>
						<?php $users = array('class' => 'nav-top-item');?>
					<?php endif;?>
					<?=anchor('', $this->lang->line('users'), $users); ?>
					<ul>
						<li><?=anchor('admin/users/add', $this->lang->line('add_user')); ?></li>
						<li><?=anchor('admin/users/', $this->lang->line('view_users')); ?></li>
					</ul>
				</li>
				
				<li>
					<?php if(isset($current_page) && $current_page == 'files'):?>
						<?php $files = array('class' => 'nav-top-item current');?>
					<?php else:?>
						<?php $files = array('class' => 'nav-top-item');?>
					<?php endif;?>
						<?=anchor('', $this->lang->line('files'), $files); ?>
					<ul>
						<li><?=anchor('admin/files/', $this->lang->line('manage_files')); ?></li>
					</ul>
				</li>
			</ul> <!-- End #main-nav -->	
		<p style="text-align: right; padding: 5px;">powered by: <a href="http://www.bloo.pt" target="_blank">Bloo</a></p>
		</div>
	</div> <!-- End #sidebar -->