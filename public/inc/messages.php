<?php
// $messages = MessageController::getUserMessagesAction();
$contacts = MessageController::getUserContactAction();
// var_dump($messages);
?>

<!-- Message List -->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				<?php foreach ($contacts as $contact) : ?>
  <a class="nav-link" id="v-pills-<?=$contact?>-tab" href="#v-pills-<?=$contact?>" data-toggle="pill" aria-selected="true"><?=$contact?></a>
  				<?php endforeach ?>
</div>
		</div>
		<div class="col-md-8">
			<div class="modal-header">
				<h5>Objet/Date</h5>
			</div>
			<div class="row">
				<div class="col-md-12 message-content-received">
					<div class="tab-content" id="v-pills-tabContent">
					<?php foreach($contacts as $contact): ?>
  						<div class="tab-pane fade" id="v-pills-<?=$contact?>" role="tabpanel" aria-labelledby="v-pills-<?=$contact?>-tab"></div>
  					<?php endforeach ?>
  					</div>
				</div>
			</div>
			<div class="modal-footer text-left">
				<textarea class="form-control" rows="3"></textarea>
			</div>	
		</div>
	</div>
</div>

<script src="/Twitter/public/js/message.js"></script>