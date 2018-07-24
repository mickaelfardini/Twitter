<!-- Message List -->
<div class="modal fade bd-example-modal-lg" id="messageModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4">
						<div class="modal-header">
							<h5>Message with :</h5>
						</div>
						<ul class="list-group">
							<li class="list-group-item active">Marcel</li>
							<li class="list-group-item">Mere de Marcel</li>
							<li class="list-group-item">Ma femme</li>
							<li class="list-group-item">Satan</li>
							<li class="list-group-item">Paul Boutin</li>
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
		</div>
	</div>
</div>

<!-- Message to someone -->
<div class="modal fade" id="messageToModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">New message</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Recipient:</label>
						<input type="text" class="form-control" id="recipient-name">
					</div>
					<div class="form-group">
						<label for="message-text" class="col-form-label">Message:</label>
						<textarea class="form-control" id="message-text"></textarea>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Send message</button>
			</div>
		</div>
	</div>
</div>