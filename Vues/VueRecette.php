<?php $titre = "Recette";
ob_start();
?>
<h2>Nos recettes</h2>

<div class="accordion-wrap">
	<div class="accordion">
		<a href="#" class="active"><i class="fa fa-user"></i> Profile</a>
		<div class="sub-nav active">
			<div class="html about-me">
				<div class="photo">
					<div class="photo-overlay">
						<span class="plus">+</span>
					</div>
				</div>
				<h4>@khadkamhn</h4>
				<p>Hi, It's me Mohan. I'm a web and graphics designer. Designing is my passion and I have been working on various designing projects.</p>
				<div class="social-link">
					<a class="link link-twitter" href="https://twitter.com/khadkamhn/" target="_blank"><i class="fa fa-twitter"></i></a>
					<a class="link link-codepen" href="https://codepen.io/khadkamhn/" target="_blank"><i class="fa fa-codepen"></i></a>
					<a class="link link-facebook" href="https://facebook.com/khadkamhn/" target="_blank"><i class="fa fa-facebook"></i></a>
					<a class="link link-dribbble" href="http://dribbble.com/khadkamhn" target="_blank"><i class="fa fa-dribbble"></i></a>
				</div>
			</div>
		</div>
		<a href="#"><i class="fa fa-comments"></i> Chat</a>
		<div class="sub-nav">
			<div class="html chat">
				<div class="user user-khadkamhn clearfix">
					<span class="text-msg pull-right">I'm so unhappy :(</span>
				</div>
				<div class="user user-khadkamhn clearfix">
					<span class="text-msg pull-right">I have no invitation in dribbble yet. why?</span>
				</div>
				<div class="user user-dribble clearfix">
					<span class="photo pull-left" data-username="dribbble"><i class="fa fa-dribbble"></i></span>
					<span class="text-msg">Don't worry dude!</span>
				</div>
				<div class="user user-dribble clearfix">
					<span class="photo pull-left" data-username="dribbble"><i class="fa fa-dribbble"></i></span>
					<span class="text-msg">Some awesome people may find you and invite you soon.... :)</span>
				</div>
			</div>
		</div>
		<a href="#"><i class="fa fa-envelope"></i> Messages <span class="pull-right alert-numb">21</span></a>
		<div class="sub-nav">
			<a href="#">Inbox <span class="pull-right alert-numb">11</span></a>
			<a href="#">Important <span class="pull-right alert-numb">10</span></a>
			<a href="#">Sent</a>
			<a href="#">Draft</a>
			<a href="#">Trash</a>
			<a href="#">All messages</a>
		</div>
		<a href="#"><i class="fa fa-dribbble"></i> Dribbble Invite</a>
		<div class="sub-nav">
			<div class="html invite">
				<p>I would like to join <span class="dribbble">dribbble</span> community</p>
				<p>Could you please invite me?</p>
				<a class="btn" href="http://dribbble.com/khadkamhn/" target="_blank">Draft Me</a>
			</div>
		</div>
	</div>
</div>

<?php $contenu = ob_get_clean(); ?>

<?php require 'gabarit.php'; ?>