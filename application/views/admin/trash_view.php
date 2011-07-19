<body>
<div id="body-wrapper">
		<?php $this->load->view('admin/template/sidebar'); ?>
		<div id="main-content">
			<div class="content-box"><!-- Start Content Box -->
				<div class="content-box-header">
					<h3>Artigos</h3>
					<?php if ($action == 'list'):?>
					<ul class="content-box-tabs">
						<?php if ($action == 'list'):?><li><a href="#tab1" class="default-tab">Listagem</a></li><?php endif;?> <!-- href must be unique and match the id of target div -->
					</ul>	
					<div class="clear"></div>
				</div> <!-- End .content-box-header -->
				<div class="content-box-content">
					<div class="tab-content <?php if ($action == 'list'):?> default-tab<?php endif;?>" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->	
						<?php if ($this->session->flashdata('flashError')):?>
							<div class="notification error png_bg">
								<a href="#" class="close"><img src="<?=base_url() ?>public/backend/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
								<div>
									<?=$this->session->flashdata('flashError'); ?>
								</div>
							</div>
						<?php endif;?>	
						<?php if ($this->session->flashdata('flashConfirm')):?>
							<div class="notification success png_bg">
								<a href="#" class="close"><img src="<?=base_url() ?>public/backend/images/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
								<div>
									<?=$this->session->flashdata('flashConfirm'); ?>
								</div>
							</div>
						<?php endif;?>			
						<table id="list-elements">
							<thead>
								<tr>
								   <th><input class="check-all" type="checkbox" /></th>
								   <th>ID</th>
								   <th>Nome</th>
								   <th>Status</th>
								   <th>Modificação</th>
								</tr>
							</thead>
							 <tfoot>
								<tr>
									<td colspan="6">
										<div class="bulk-actions align-left">
											<a class="button" href="#">Restaurar selecionados</a>
										</div>
										<?php if(isset($pagination)): ?>
											<div class="pagination">
												<?=$pagination; ?>
											</div>
										<?php endif;?>
										<div class="clear"></div>
									</td>
								</tr>
							</tfoot>
							<tbody>	
							<?php if(isset($records) && is_array($records) && count($records) > 0): ?>
								<?php foreach ($records as $row):?>
									<tr>
										<td><input type="checkbox" /></td>
										<td><?=$row->idarticle; ?></td>
										<td><?=$row->articletitle; ?></td>
										<td><?=$row->articlestatus; ?></td>
										<td><?=$row->articletimestamp; ?></td>
									</tr>
								<?php endforeach;?>
								<?php else :?>
								<?="NÃ£o existem valores a mostrar nesta listagem."; ?>
							<?php  endif;?>
							</tbody>
						</table>
					</div> <!-- End #tab1 -->   
			<?php endif;?>
		</div>
	</div>
</body>