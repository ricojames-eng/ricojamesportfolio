<?php if($_settings->chk_flashdata('success')): ?>
<script>
	alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
</script>
<?php endif;?>
<div class="col-lg-12">
	<div class="card card-outline card-primary">
		<div class="card-header">
			<div class="card-tools">
			</div>
		</div>
		<div class="card-body">
			<table class="table tabe-hover table-bordered table-compact" id="list">
				<colgroup>
					<col width="0%">
					<col width="8%">
					<col width="12%">
					<col width="12%">
					<col width="12%">
					<col width="12%">
					<col width="30%">
					<col width="15%">
				</colgroup>
				<thead>
					<tr>
						<th class="text-center">#</th>
						<th>Date</th>
						<th>Name</th>
						<th>Address</th>
						<th>Contact info</th>
						<th>Software Info</th>
						<th>Inquiry</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 1;
					$qry = $conn->query("SELECT * FROM `message` order by `M_ID` desc");
					while($row= $qry->fetch_assoc()):
					?>
					<tr>
						<th class="text-center"><?php echo $i++ ?></th>
						<td><b class="truncate-1"><?php echo ucwords($row['M_DATE']) ?></b></td>
						<td><b class="truncate-1"><?php echo ucwords($row['M_NAME']) ?></b></td>
						<td><b class="truncate-1"><?php echo ucwords($row['M_ADDRESS']) ?></b></td>
						<td><b class="truncate-1"><?php echo ucwords($row['M_CONTACT']) ?></b></td>
						<td><b class="truncate-1"><?php echo ucwords($row['M_ORG']) ?> : <?php echo ucwords($row['M_TYPE']) ?> : <?php echo ucwords($row['M_SIZE']) ?></b></td>
						<td><b class="truncate-1"><?php echo ucwords($row['M_MESSAGE']) ?></b></td>
						<td><b class="truncate-1"><?php echo ucwords($row['M_STATUS']) ?></b></td>
						<td class="text-center">
		                    <div class="btn-group">
		                        <a href="javascript:void(0)" data-id='<?php echo $row['M_ID'] ?>' class="btn btn-primary btn-flat btn-sm manage_work">
		                          <i class="fas fa-edit"></i>
		                        </a>
	                      </div>
						</td>
					</tr>	
				<?php endwhile; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script>

	$(document).ready(function(){
		$('.new_work').click(function(){
			location.href = _base_url_+"admin/?page=customer/manage";
		})
		$('.manage_work').click(function(){
			location.href = _base_url_+"admin/?page=customer/manage&id="+$(this).attr('data-id')
		})
		$('.delete_work').click(function(){
		_conf("Are you sure to delete this detail?","delete_work",[$(this).attr('data-id')])
		})
		$('#list').dataTable()
	})

/*
	$(document).ready(function(){
		$('.new_work').click(function(){
			location.href = _base_url_+"admin/?page=work/manage";
		})
		$('.manage_work').click(function(){
			location.href = _base_url_+"admin/?page=work/manage&id="+$(this).attr('data-id')
		})
		$('.delete_work').click(function(){
		_conf("Are you sure to delete this detail?","delete_work",[$(this).attr('data-id')])
		})
		$('#list').dataTable()
	})
	function delete_work($id){
		start_loader()
		$.ajax({
			url:_base_url_+'classes/Content.php?f=work_delete',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					location.reload()
				}
			}
		})
	} */
</script>