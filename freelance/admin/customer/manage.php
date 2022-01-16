<?php if($_settings->chk_flashdata('success')): ?>
<script>
	alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
</script>
<?php endif;?>
<?php 
if(isset($_GET['id'])){
	$qry = $conn->query("SELECT * from message where M_ID = '{$_GET['id']}' ");
	foreach($qry->fetch_array() as $k => $v){
		if(!is_numeric($k)){
			$$k = $v;
		}
	}
}
?>
<div class="col-lg-12">
	<div class="card card-outline card-primary">
		<div class="card-header">
			<h5 class="card-title">Customer Inquiry</h5>
		</div>
		<div class="card-body">

			<form id="work" action="customer/update.php" method="POST">
				<label for="" class="control-label" style="color:Gray; font-size: 3vw;">INQUIRY STATUS: <span style="color:red; font-size: 3vw;"><?php echo isset($M_STATUS) ? $M_STATUS : '' ?></span></label>
				<br></br>
				<label for="" class="control-label" style="color:Gray; font-size: 3vw;">INQUIRY DATE  : <span style="color:red; font-size: 3vw;"><?php echo isset($M_DATE) ? $M_DATE : '' ?></span></label>
				<div class="row" class="details">
					<input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="" class="control-label">Customer Name</label>
							<textarea disabled name="company" cols="30" rows="2" class="form-control"><?php echo isset($M_NAME) ? $M_NAME : '' ?></textarea>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="" class="control-label">Address</label>
							<textarea disabled name="position" cols="30" rows="2" class="form-control"><?php echo isset($M_ADDRESS) ? $M_ADDRESS : '' ?></textarea>
						</div>
					</div>
				</div>

				<div class="row" class="details">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="" class="control-label">Contact Information</label>
							<textarea disabled name="position" cols="30" rows="2" class="form-control"><?php echo isset($M_CONTACT) ? $M_CONTACT : '' ?></textarea>
						</div>
					</div>

					<div class="col-sm-6">
						<div class="form-group">
							<label for="" class="control-label">Organization</label>
							<textarea disabled name="position" cols="30" rows="2" class="form-control"><?php echo isset($M_ORG) ? $M_ORG : '' ?></textarea>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="" class="control-label">Software Type</label>
							<textarea disabled name="position" cols="30" rows="2" class="form-control"><?php echo isset($M_TYPE) ? $M_TYPE : '' ?></textarea>
						</div>
					</div>

					<div class="col-sm-6">
						<div class="form-group">
							<label for="" class="control-label">Software Size</label>
							<textarea disabled name="position" cols="30" rows="2" class="form-control"><?php echo isset($M_SIZE) ? $M_SIZE : '' ?></textarea>
						</div>
					</div>
				</div>


				<div class="row">
					<div class="col-sm-12">
						<div class="form-group">
							<label for="" class="control-label">Description</label>
				             <textarea disabled name="description" id="" cols="30" rows="10" class="form-control "><?php echo (isset($M_MESSAGE)) ? html_entity_decode(($M_MESSAGE)) : '' ?></textarea>
						</div>
					</div>
				</div>

				 <label for="updatestat" style="color:Black;">UPDATE STATUS</label>
	              <select id="updatestat" name="updatestatus" required>
	              	<option value="<?php echo isset($M_STATUS) ? $M_STATUS : '' ?>"><?php echo isset($M_STATUS) ? $M_STATUS : '' ?></option>
	                <option value="Called">Called</option>
	                <option value="Emailed">Emailed</option>
	                <option value="Cancelled">Cancelled</option>
	                <option value="DEALED">DEALED</option>
	                <option value="ON GOING">ON GOING</option>
	                <option value="DONE">DONE</option>
	                <option value="UN READ">UN READ</option>
	                <option value="PENDING">PENDING</option>
	                <option value="IGNORED">IGNORED</option>
	              </select>

          		<input type="submit" value="Submit"></input>
			</form>

		</div>
		<div class="card-footer">
			<a class="btn btn-primary btn-sm" href="./?page=customer">Back</a>
		</div>
	</div>
</div>