<?php
$messages = MessageController::getUserMessagesAction();
$contacts = MessageController::getUserContactAction();
// var_dump($messages);
?>

<!-- Message List -->
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				<?php foreach ($contacts as $contact) : ?>
  <a class="nav-link" id="v-pills-<?=$contact?>-tab" data-toggle="pill" aria-selected="true"><?=$contact?></a>
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
  <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div>
  <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
  <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
  <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
</div>
				</div>
			</div>
			<div class="modal-footer text-left">
				<textarea class="form-control" rows="3"></textarea>
			</div>	
		</div>
	</div>
</div>

<!-- 
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
			<div class="modal-header">
				<h5>Message with :</h5>
			</div>
			<ul class="list-group">
				<?php foreach ($contacts as $contact) : ?>
				<li class="list-group-item"><?=$contact?></li>
				<?php endforeach ?>
			</ul>
		</div>
		<div class="col-md-8">
			<div class="modal-header">
				<h5>Objet/Date</h5>
			</div>
			<div class="row">
				<div class="col-md-12 message-content-received">
					<div class="row">
						<b>Marcel :</b>
						Coucou Roget	
					</div>
					<div class="row">
						<b>Roger :</b>
						Coucou Marcel, la forme ?	
					</div>
					<div class="row">
						<b>Marcel :</b>
						Bof, ta femme est enceinte ..	
					</div>
					<div class="row">
						<b>Roger :</b>
						Woah ! C'est fou, la coencidence, ta mère l'est aussi.	
					</div>
				</div>
			</div>
			<div class="modal-footer text-left">
				<textarea class="form-control" rows="3"></textarea>
			</div>	
		</div>
	</div>
</div>
 -->