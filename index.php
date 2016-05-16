<?php
require_once "header.php";
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-offset-2 col-md-8 col-xs-offset-1 col-xs-10 body">
			<div class="row">
				<div class="col-lg-4 col-sm-4 col-xs-12">
					<div class="align-left" style="width:100%">
						<?php require_once "imgswap.php";?>
					</div>
				</div>
				<div class="col-lg-6 col-sm-8 col-xs-12">
					<div class="align-right" style="height: 220px">
						<div class="align-right-text">
							<h3>
								<b>朱詠嘉</b>
								<b>Yeong-Jia Roger, Chu </b>
								<span class="label label-danger">嚴選</span>
							</h3>
							<h4>Email: <a href="mailto: roger9chu@gmail.com">roger9chu@gmail.com</a></h3>
							<h4>Phone Number: <a href="tel:+886989763560">+886989763560</a></h4>
						</div>
					</div>
				</div>
			</div>
			<!--Professional Abilities-->
			<div class="panel panel-success">
				<div class="panel-heading">Professional Competency</div>
				<ul class="list-group">
					<li class="list-group-item">
					<div class="row">
						<div class="col-md-7">
							<div class="row">
								<div class="col-md-8 col-xs-12">
									<h4>Education</h4>
									<p>National Chiao Tung University(NCTU)</p>
									<p>Major in Computer Science</p>
									<p>Sept. 2014 -June. 2018 (expected)</p>
								</div>
								<div class="col-md-3 col-xs-6">
									<a target="blank" href="http://www.cs.nctu.edu.tw/" class="thumbnail">
										<img src="./images/nctu.gif" alt="nctu" title="National Chiao Tung University">
									</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-md-offset-1">
							<h4>Perfromance</h4>
							<p>1st Semester: </p>
							<p>2nd Semester: </p>
							<p>3rd Semester: 4.16</p>
							<p>Total Rank: 10/200 (top 5%)</p>
						</div>
						</li>
						<li class ="list-group-item">
						<h4>Professional Skills</h4>
						<p>C/C++</p>
						<p>html/php/mysql</p>
						<p>basic Linux/FreeBSD operating</p>
						</li>
					</ul>	
				</div>	
				<!--Core Abilities-->
				<div class="panel panel-info">
					<div class="panel-heading">Core Competency</div>
					<ul class="list-group">
						<li class="list-group-item">
						<div class="row">
							<div class="col-md-8 col-sm-12">
								<h4>English Skills</h4>
								<p>TOEIC score: 955/990</p>
							</div>
							<div class="col-md-3 col-sm-4">
								<a href="#" data-toggle="modal" data-target=".pop-up-1">
							      <img class="media-object" src="./images/TOEIC.JPG" alt="..." style="width:100%"-->
								</a>
								<?php require_once "./img_popup.php";?>
						  </div>
						  </div>
						</li>
						<li class="list-group-item">
						<div class="row">
							<div class="col-md-7">
								<div class="row">
									<div class="col-md-8">	
										<h4>Communicating Ability</h4>
										<p>Voluneteer at Center of Counseling, NCTU</p>	
										<p>since Sept. 2014</p>
									</div>
									<div class="col-md-3">
										<a target="_blank" href="http://counsel.sa.nctu.edu.tw/?page_id=1091" class="thumbnail">
											<img src="./images/coun.jpg" alt="nctu" title="NCTU Center of Counseling">
										</a>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-md-offset-1">
								<h4>Duty</h4>
								<p>Receive people who are counseling</p>
								<p>Asist in activities held by Center of Counseling</p>
							</div>
						</div>
						</li>
						<li class="list-group-item">
							<h4>Presentation Skills</h4>
							<p>Lecturer of NCTUCS Camp</p>
							<p>Topic: 3D-printing, Sketchup</p>
						</li>
					</ul>
				</div>
				<!--Administration-->
				<div class="panel panel-warning">
					<div class="panel-heading">Managerial Competency</div>
					<ul class="list-group">
						<li class="list-group-item">
						<h4>Leading Ability</h4>
						<p>Group leader of Computer Maintenance Group of Center of Counseling, NCTU</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
<script>
$(document).ready(function(){
	function photo_right_adjust(){
		$(".align-right").height($(".align-left").height());
	}
	$(window).resize(function(){
		photo_right_adjust();
	});
	photo_right_adjust();
});
</script>
<?php
require_once "footer.php";
?>
