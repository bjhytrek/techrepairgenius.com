<!--Modal for contact form-->
				<div class="modal fade" id="contact" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h3>Contact Premier Murphy Beds</h3>
							</div>
							<div class="modal-body">
								
							<!--email form on the contact pop-up.-->
								<form  method="post">
									Name: <input class="form-control" type="text" name="name"><br>
									Email: <input class="form-control" type="text" name="email"><br>
									Message: <br><textarea rows="5" name="message" cols="40"></textarea><br>
								</form>
								<!-- PHP code to send an email from the website to the company email address.-->
									<?php
									if(isset($_POST['submit'])){
										//checks whether all form fields are filled, or set.
										if(isset($_POST[$name && $email && $message]))
										{
										$to = "bjhytrek@gmail.com"; //company email address
										$from = $_POST['email']; // Sender's email address
										$name = $_POST['name']; //name of sender
										$subject = "Contact Email";
										$message = $name . " " . "Wrote the Following:" . "/n/n" . $_POST['message'];
										
										$headers = "From:" . $from;
										$headers2 = "From:" . $to;
										mail($to,$subject,$message,$headers);
										mail($from,$subject2,$message2,$headers2);
										break;
										}else {
										echo "<h3> Please enter in your name, email address, and message.</h3>";
										$form_output = "data-toggle="modal"";
										}
									}
									//sends a copy of the message to the sender.
									echo "<h3>mail Sent. Thank you $name, we will contact you shortly. </h3>";
										$form_output = data-dismiss="modal";
									?>
									
									
							</div>
							<div class="modal-footer">
								<a class="btn btn-warning" value="submit" <?php echo $form_output?> >send</a>
							</div>
						</div>
					</div>
				</div>		