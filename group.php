<!DOCTYPE html>
<html>
	<?php
		$screenName = "chat";
		include 'includes/head.php'; 
	?>
	<body>
		<div class="container">
			<div class="livingScreen">
				<header>
					<?php 
						$pageTitle = "Social";
						include 'includes/nav.php'; 
					?>
				</header>
				<section>
					<div class="groupTimeline">
						<a href="events.php" style="color: white; text-decoration: none;">Meetups</a>
					</div><div class="groupDM active">
						My Groups
					</div>
				</section>
				<section class="groupsContainer">
					<article class="jobsArticle">
						<div class="groupsImage" style="background-image: url(assets/images/vacancy/programmer.jpg);"></div>
						<div class="jobsTitle">
							<h4>
								Programmers 4 Life
							</h4>
							<span class="branchBodySmall branchIT">IT</span> <span class="vacancyDate">Jeffrey (facilitator)</span>
							<p>Anna, Josh, Joris, May, Levi</p>
						</div>
					</article>
					<article class="jobsArticle">
						<div class="groupsImage" style="background-image: url(assets/images/vacancy/programmer.jpg);"></div>
						<div class="jobsTitle">
							<h4>
								1337
							</h4>
							<span class="branchBodySmall branchTechnology">Technology</span> <span class="vacancyDate">Caspar (facilitator)</span>
							<p>Anna, Cedric, Reyansh, Atharv, Vladimir</p>
						</div>
					</article>
					<article class="jobsArticle">
						<div class="groupsImage" style="background-image: url(assets/images/vacancy/programmer.jpg);"></div>
						<div class="jobsTitle">
							<h4>
								Explorers of Eindhoven
							</h4>
							<span class="branchBodySmall branchGeneral">General</span> <span class="vacancyDate">Darwin (facilitator)</span>
							<p>Anna, Dora, Columbus, Alex, Nicki</p>
						</div>
					</article>
				</section>
			</div>
		</div>
	</body>
</html>