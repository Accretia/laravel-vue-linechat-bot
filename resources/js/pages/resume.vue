<template>
  
  <div>
    <header role="banner">
		<div class="container_16">
				<hgroup>
					<h1>Kittinun Aschasewin</h1>
					<h2>Head of Software development</h2>
				</hgroup>

				<figure>
					<img src="../../../public/images/a.jpg" alt="Kittinun Aschasewin">
				</figure>
		</div>
	</header>
	
	<section role="main" class="container_16 clearfix">
		<div class="grid_16">
			<div class="grid_8 apropos">
				<h3>About me</h3>
				<p>8+ years of software development and 2 years for building development team from zero to hero trusted in scrum and agile methodology.</p>
				
			</div>
			
			<div class="grid_8 competences">
				<h3>Work Skills</h3>
				<ul class="barres">
					<li data-skills="100">Web Development <span style="width: 100%;"></span></li>
					<li data-skills="100">Full Stack<span style="width: 100%;"></span></li>
					<li data-skills="75">DevOps<span style="width: 75%;"></span></li>
					<li data-skills="50">Microservice<span style="width: 50%;"></span></li>
					<li data-skills="75">Team Management<span style="width: 75%;"></span></li>
				</ul>
			</div>
		</div>
		
			<div class="grid_16 experiences">
				<h3>Experience</h3>
				<ul>
					<li>
						<h4><strong>Head of Software Development</strong> Merchant Partners Securities</h4>
						<span class="lieu">Bangkok</span>
						<span class="dates">Oct 2017 – present</span>
						<p>Merchant Partners is stocks brokerage and development team responsibility is 
              change business requirements to software solution and make it happen ,
              I Manage development team (4 members) by using Scrum & Agile for complete target within timeline 
              and provide technology and solution applied to each projects by mainly project 
              is financial products (ex. Private Fund , Mutual Fund)
            </p>
					</li>
					<li>
						<h4><strong>Senior Full Stack Developer</strong> Finnomena</h4>
						<span class="lieu">Bangkok</span>
						<span class="dates">Jun 2016 – Oct 2017</span>
						<p>Finnomena is startup fin-tech use Robo advisor for 
              recommend Mutual Fund best in class for investor. 
              I develop backbone system of this platform like to Fund Super mart system such as Open Account , 
              Order execute / routing and Money settlement. We use agile and kanban for management project.
            </p>
					</li>
          <li>
						<h4><strong>Web Developer</strong> VPLS Thailand</h4>
						<span class="lieu">Bangkok</span>
						<span class="dates">Oct 2014 – Jun 2016</span>
						<p>
              VPLS is cloud service provider use VMware is core of system. 
              I develop part of cloud deployment of www.krypt.com and cloud portal service 
              control such as restart , stop , start , increase or decrease server spec you can do it by yourself.
            </p>
					</li>
          <li>
						<h4><strong>Software Engineer</strong> Fabrinet</h4>
						<span class="lieu">Bangkok</span>
						<span class="dates">Nov 2013 -Oct 2014</span>
						<p>
              Fabrinet is Optical and Electro-Mechanical Assemblies factory . 
              I support vendor unit by use internal data-entry system and create report 
              from user requirement page and try to transform application from VB6 to web app
            </p>
					</li>
          <li>
						<h4><strong>Programmer</strong> ThaiOnline</h4>
						<span class="lieu">Bangkok</span>
						<span class="dates">Dec 2012 -Nov 2013</span>
						<p>
              ThaiOnline is software house company , 
              Mainly task is coding from SA (system analyst)'s requirement and onsite service when deploy system.
            </p>
					</li>
				</ul>
			</div>
		
		
			<div class="grid_16 formations">
				<h3>Educations</h3>
				<ul>
					<li>
						<h4><strong>Bachelor’s Degree in Computer Engineering</strong> Mahanakorn University of technology</h4>
						<span class="lieu">Bangkok</span>
						<span class="dates">2008 – 2011</span>
					</li>
				</ul>
			</div>
		
			<div class="grid_8 loisirs">
				<h3>TECHNICAL</h3>
				<p><strong>Programming Language</strong></p>
        <p>PHP (Laravel , Codigniter) , Javascript (jQuery) , VueJS , React-Native , 
          HTML , CSS ,SQL command (Store Procedure) , Java , C#
        </p>
				<p><strong>DevOps skills</strong></p>
        <p>Microsoft Azure , Docker , Linux , Windows Server , Git , Bitbucket , IIS , nginx , apache
        </p>
        <p><strong>API skills</strong></p>
        <p>Restful , Soap , CURL , JSON , XML , JWT , Oauth
        </p>
        <p><strong>Project Management skills</strong></p>
        <p>JIRA , Slack , Scrum & Agile , OKR , kanban
        </p>
			</div>
		
			<!-- Contact -->
			<div class="grid_8 contact">
				<h3>Contact</h3>
				<ul>
					<li class="lieu">Bangkok, Thailand</li>
					<li class="phone">(+66) 065-441-4429</li>
					<li class="mail"><a href="mailto:kittinun.aschasewin@gmail.com">kittinun.aschasewin@gmail.com</a></li>
					
				</ul>
			</div>
	</section>

  </div>
 
  

</template>

<script>
import axios from "axios";
export default {
  
};
</script>
<style>
@import '../../../public/css/reset.css';
@media (max-width: 480px) {
  /***************************************
/* Grille de mise en page pour le mobile
***************************************/
.grid_6,
.grid_8,
.grid_10,
.grid_16,
.container_16 {
	margin: 0 10px;
}

/* 
Nom du thème : Simple Vitae (ou Simple Curriculum ou Simple Resume)
Description : Votre curriculum vitae sur Internet, un moyen supplémentaire de vous faire connaitre. Ce thème correspond à tous les types de métiers.
Créateur : Christophe HERMANN (@chrishrmnn)
*/

/**********
/* Header
**********/
	header[role=banner] {
		background:#fff;
		border-bottom:4px solid #33a4c9;
		padding: 19px 0;
		overflow: hidden;
	}
	
	header figure {
		display: none;
	}
	
	header hgroup {
		text-align: center;
	}
	
	header hgroup h1 {
		color:#555;
		font-family:'DroidSansBold', Arial, sans-serif;
	}
	
	header hgroup h2 {
		color:#cecece;
		font-style: italic;
		line-height: 30px;
		text-shadow: 1px 1px 0 rgba(0,0,0,.3);
	}

/************
/* Contact
************/
	::-webkit-input-placeholder  { color:#fff; }
	input:-moz-placeholder { color:#fff; }
	.placeholder { color: #fff; }

	.contactform {
		background-color: #33a4c9;
		color: #fff;
		display: none;
	}
	
	.contactform > div {
		padding: 21px 0;
	}
	
	.contactform input[type=text], .contactform input[type=email], .contactform textarea {
		background: #2983a0;
		border: 1px solid #226d85;
		border-radius: 2px;
		color: #fff;
		max-width: 100%;
		opacity: .7;
		padding: 10px 10px 9px 10px;
		margin-top: 0;
		position: relative;
		vertical-align: top;
		width: 100%;
	}
	
	.contactform input[type=text], .contactform input[type=email], .contactform textarea {
		margin-bottom: 21px;
	}
	
	.contactform textarea {
		font-family: 'DroidSansRegular', Arial, sans-serif;
		font-size: 14px;
		height: 148px;
	}
	
	.contactform input[type=text]:focus, .contactform input[type=email]:focus, .contactform textarea:focus {
		border: 1px solid #226d85;
		opacity: 1;
		outline: none;
		-o-transition: opacity 1s;
		-ms-transition:opacity 1s;
		-moz-transition: opacity 1s;
		-webkit-transition: opacity 1s;
		transition:opacity 1s;
	}
	
	.contactform input[type=submit] {
		background: #ff9f39;
		border: 1px solid #ff9f39;
		border-radius: 2px;
		color: #fff;
		cursor: pointer;
		font-weight: bold;
		font-size: 14px;
		margin: 0;
		padding: 10px 10px 9px 10px;
		width: 100%;
		-webkit-appearance: none;
	}
	
	.contactform input.error, .contactform textarea.error {
		border: 1px solid red;
	}
	
	.contactform label.error {
		display: none !important;
	}

	/***********************
	/* Message du formulaire
	***********************/
		.messageform { 
			display: none; /* Affiché via jQuery */ 
			border-radius: 2px; 
			font-size: 14px;
			font-weight: bold;
			line-height: 17px;
			padding:10px 10px 9px 10px; 
			margin: 0;
			text-align: center;
			width: 100%; 
		}
		.envoi-valid, .envoi-error { 
			display: inline-block; 
		 }
		.envoi-valid { 
			background-color: #31D869;
			border:1px solid #108D3A; 
			color: #108D3A;
		}
		.envoi-error { 
			background-color: #FF5839;
			border:1px solid #A62913; 
			color: #A62913;
		}
		.envoi-error a {
			color: #A62913;
			text-decoration: underline;
		}
		

/***************
/* Corps - Main
***************/
	section[role=main] {
		padding: 21px 0;
		overflow: hidden;
	}
	
	.apropos, .competences, .experiences, .formations, .loisirs, .contact {
		margin-top: 63px;
	}
	
	section[role=main] h3 {
		border-bottom: 1px solid #e1e1e1;
		padding: 0 0 20px 60px;
		margin-top: 0px;
		position: relative;
 	}
	
	section[role=main] h3:after, h3:before {
		content: ' ';
		display: block;
		height: 50px;
		left: 0;
		position: absolute;
		top: -15px;
		width: 50px;
	}
	
	section[role=main] h3:before {
		background-color: #33a4c9;
		border-radius: 25px;
	}
	
		/***************
		/* Pictos titres
		***************/
		
		section[role=main] h3:after {
			
		}
		
		section[role=main] .competences h3:after {
			background-position: 11px -34px;
		}
	
		section[role=main] .experiences h3:after {
			background-position: 11px -86px;
		}
		
		section[role=main] .formations h3:after {
			background-position: 10px -139px;
		}
		
		section[role=main] .loisirs h3:after {
			background-position: 10px -250px;
		}
		
		section[role=main] .contact h3:after {
			background-position: 11px -194px;
		}
	
	section[role=main] h4 {
		margin-bottom: 0px;
	}
	
	section[role=main] h4 strong {
		color: #147393;
		font-weight: normal;
	}
	
	.experiences li, .formations li {
		margin-bottom: 63px;
	}
	
	.experiences li:last-child, .formations li:last-child {
		margin-bottom: 21px;
	}
	
	/**********************************************
	/* Affichage des compétences sous forme de tags
	**********************************************/
	.competences .tags li {
		background-color:#33a4c9;
		border:1px solid #1b91b7;
		border-radius: 15px;
		color:#fff;
		display: inline-block;
		line-height: 13px;
		margin: 0 7px 17px 0;
		padding: 5px 10px;
	}
	
	/************************************************
	/* Affichage des compétences sous forme de barres
	*************************************************/
	.competences .barres li {
		margin-bottom: 21px;
		position: relative;
	}
	
	.competences .barres li:after {
		background: #e1e1e1;
		bottom: -4px;
		content: ' ';
		display: block;
		height: 5px;
		position: absolute;
		width:100%;
	}
	
	.competences .barres li span {
		background: #33a4c9;
		bottom: -4px;
		content: ' ';
		display: block;
		height: 5px;
		left: 0;
		position: absolute;
		width: inherit;
		z-index: 1;
	}
	
	
	/***********
	/* Pictos
	***********/
	.lieu, .dates, .phone, .mail, .site, .form, .twitter, .facebook, .dribbble, .skype {
		
		padding-left: 25px;
		margin: 0 10px 1px 0;
	}
	
	.lieu {
		background-position: 0 -2px;
		color: #999;
	}
	
	.dates {
		background-position: 0 -22px;
		color: #999;
	}
	
	.phone {
		background-position: 0 -40px;
	}
	
	.mail {
		background-position: 0 -58px;
	}
	
	.site {
		background-position: 0 -80px;
	}
	
	.form {
		background-position: 0 -100px;
	}
	
	.twitter {
		background-position: 0 -122px;
	}
	
	.facebook {
		background-position: 0 -140px;
	}
	
	.dribbble {
		background-position: 0 -160px;
	}
	
	.skype {
		background-position: 0 -180px;
	}
}
@media (min-width: 481px) {
  /**********
/* Grille - 960.gs
**********/
.container_16 {
	max-width: 960px;
	width: 92%;
	margin: 0 auto;
}
.grid_6,
.grid_8,
.grid_10,
.grid_16 {
	display:inline;
	float: left;
	position: relative;
	margin-left: 1%;
	margin-right: 1%;
}

.container_16 .grid_6 {
	width:35.5%;
}

.container_16 .grid_8 {
	width:48.0%;
}

.container_16 .grid_10 {
	width:60.5%;
}

.container_16 .grid_16 {
	width:98.0%;
}

.clearfix:after {
	clear: both;
	content: ' ';
	display: block;
	font-size: 0;
	line-height: 0;
	visibility: hidden;
	width: 0;
	height: 0;
}

.clearfix {
	display: inline-block;
}

* html .clearfix {
	height: 1%;
}

.clearfix {
	display: block;
}



/**********
/* Header
**********/
	header[role=banner] {
		background:#fff;
		border-bottom:4px solid #33a4c9;
		padding: 19px 0;
		overflow: hidden;
	}
	
	header figure {
		border: 3px solid #eee;
		border-radius: 78px;
		float: right;
		height: 156px;
		width: 156px;
	}
	
	header figure img {
		border-radius: 75px;
		height: 150px;
		position: relative;
		width: 150px;
	}
	
	header hgroup {
		float: left;
		padding: 42px 0;
	}
	
	header hgroup h1 {
		color:#555;
		font-family:'DroidSansBold', Arial, sans-serif;
	}
	
	header hgroup h2 {
		color:#cecece;
		font-style: italic;
		text-shadow: 1px 1px 0 rgba(0,0,0,.3);
	}

/************
/* Contact
************/
	::-webkit-input-placeholder  { color:#fff; }
	input:-moz-placeholder { color:#fff; }
	.placeholder { color: #fff; }

	.contactform {
		background-color: #33a4c9;
		color: #fff;
		display: none;
	}
	
	.contactform > div {
		padding: 21px 0;
	}
	
	.contactform input[type=text], .contactform input[type=email], .contactform textarea {
		background: #2983a0;
		border: 1px solid #226d85;
		border-radius: 2px;
		color: #fff;
		max-width: 100%;
		opacity: .7;
		padding: 10px 10px 9px 10px;
		margin-top: 0;
		position: relative;
		vertical-align: top;
		width: 100%;
	}
	
	.contactform input[type=text], .contactform input[type=email] {
		margin-bottom: 21px;
	}
	
	.contactform textarea {
		font-family: 'DroidSansRegular', Arial, sans-serif;
		font-size: 14px;
		height: 148px;
	}
	
	.contactform input[type=text]:focus, .contactform input[type=email]:focus, .contactform textarea:focus {
		border: 1px solid #226d85;
		opacity: 1;
		outline: none;
		-webkit-transition: opacity 1s;
	}
	
	.contactform input[type=submit] {
		background: #ff9f39;
		border: 1px solid #ff9f39;
		border-radius: 2px;
		color: #fff;
		cursor: pointer;
		font-weight: bold;
		font-size: 14px;
		margin: 0;
		padding: 10px 10px 9px 10px;
		width: 100%;
	}
	
	.contactform input.error, .contactform textarea.error {
		border: 1px solid red;
	}
	
	.contactform label.error {
		display: none !important;
	}

	/***********************
	/* Message du formulaire
	***********************/
		.messageform { 
			display: none; /* Affiché via jQuery */ 
			border-radius: 2px; 
			font-size: 14px;
			font-weight: bold;
			line-height: 17px;
			padding:10px 10px 9px 10px; 
			margin: 0;
			text-align: center;
			width: 100%; 
		}
		.envoi-valid, .envoi-error { 
			display: inline-block; 
		 }
		.envoi-valid { 
			background-color: #31D869;
			border:1px solid #108D3A; 
			color: #108D3A;
		}
		.envoi-error { 
			background-color: #FF5839;
			border:1px solid #A62913; 
			color: #A62913;
		}
		.envoi-error a {
			color: #A62913;
			text-decoration: underline;
		}
		

/***************
/* Corps - Main
***************/
	section[role=main] {
		padding: 21px 0;
		overflow: hidden;
	}
	
	section[role=main] > div {
		margin-top: 63px;
	}
	
	section[role=main] h3 {
		border-bottom: 1px solid #e1e1e1;
		padding: 0 0 20px 60px;
		margin-top: 0px;
		position: relative;
 	}
	
	section[role=main] h3:after, h3:before {
		content: ' ';
		display: block;
		height: 50px;
		left: 0;
		position: absolute;
		top: -15px;
		width: 50px;
	}
	
	section[role=main] h3:before {
		background-color: #33a4c9;
		border-radius: 25px;
	}
	
		/***************
		/* Pictos titres
		***************/
		
		section[role=main] h3:after {
			
		}
		
		section[role=main] .competences h3:after {
			background-position: 11px -34px;
		}
	
		section[role=main] .experiences h3:after {
			background-position: 11px -86px;
		}
		
		section[role=main] .formations h3:after {
			background-position: 10px -139px;
		}
		
		section[role=main] .loisirs h3:after {
			background-position: 10px -250px;
		}
		
		section[role=main] .contact h3:after {
			background-position: 11px -194px;
		}
	
	
	.experiences ul, .formations ul {
		margin-left: 60px;
	}
	
	section[role=main] h4 {
		margin-bottom: 0px;
	}
	
	section[role=main] h4 strong {
		color: #147393;
		font-weight: normal;
	}
	
	.experiences li, .formations li {
		margin-bottom: 63px;
	}
	
	.experiences li:last-child, .formations li:last-child {
		margin-bottom: 21px;
	}
	
	.experiences li p, .formations li p {
		margin-left: 30px;
	}
	
	/**********************************************
	/* Affichage des compétences sous forme de tags
	**********************************************/
	.competences .tags li {
		background-color:#33a4c9;
		border:1px solid #1b91b7;
		border-radius: 15px;
		color:#fff;
		display: inline-block;
		line-height: 13px;
		margin: 0 7px 17px 0;
		padding: 5px 10px;
	}
	
	/************************************************
	/* Affichage des compétences sous forme de barres
	*************************************************/
	.competences .barres li {
		margin-bottom: 21px;
		position: relative;
	}
	
	.competences .barres li:after {
		background: #e1e1e1;
		bottom: -4px;
		content: ' ';
		display: block;
		height: 5px;
		position: absolute;
		width:100%;
	}
	
	.competences .barres li span {
		background: #33a4c9;
		bottom: -4px;
		content: ' ';
		display: block;
		height: 5px;
		left: 0;
		position: absolute;
		width: inherit;
		z-index: 1;
	}
	
	
	/***********
	/* Pictos
	***********/
	.lieu, .dates, .phone, .mail, .site, .form, .twitter, .facebook, .dribbble, .skype {
		
		padding-left: 25px;
		margin: 0 10px 1px 10px;
	}
	
	.lieu {
		background-position: 0 -2px;
		color: #999;
	}
	
	.dates {
		background-position: 0 -22px;
		color: #999;
	}
	
	.phone {
		background-position: 0 -40px;
	}
	
	.mail {
		background-position: 0 -58px;
	}
	
	.site {
		background-position: 0 -80px;
	}
	
	.form {
		background-position: 0 -100px;
	}
	
	.twitter {
		background-position: 0 -122px;
	}
	
	.facebook {
		background-position: 0 -140px;
	}
	
	.dribbble {
		background-position: 0 -160px;
	}
	
	.skype {
		background-position: 0 -180px;
	}
}
</style>


