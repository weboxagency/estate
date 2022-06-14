<section class="panel">
	<div class="tabs-custom">
		<ul class="nav nav-tabs">
			<li class="<?=(empty($validation_error) ? 'active' : '') ?>">
				<a href="#list" data-toggle="tab"><i class="fas fa-list-ul"></i> <?=translate('complaints')?></a>
			</li>
		</ul>
		<div class="tab-content">
			<div id="list" class="tab-pane <?=(empty($validation_error) ? 'active' : '')?>">
				<div class="mb-md">
					<table class="table table-bordered table-hover table-condensed mb-none table-export">
						<thead>
							<tr>
								<th width="50"><?=translate('id')?></th>
								<th><?=translate('ads_number')?></th>
								<th><?=translate('complain_category')?></th>
								<th><?=translate('description')?></th>
								<th class="no-sort"><?=translate('action')?></th>
							</tr>
						</thead>
						<tbody>
							<?php 
								$count = 1;
								foreach($complaints as $row):
							?>
							<tr>
								<td><?php echo $count++; ?></td>
								<td><a target="_blank" href="<?= base_url().'elan/'.$row['url_slug'] ?>"><?php echo $row['ads_title'];?></a></td>
								<td><?php echo getComplainCategory($row['complain_category']) ?></td>
								<td>
									<?php echo $row['extra_info']; ?>
								</td>
								<td class="min-w-c">
									<!-- delete link -->
									<?php echo btn_delete('complaints/complain_delete/' . $row['complain_id']);?>
								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>

		</div>
	</div>
</section>