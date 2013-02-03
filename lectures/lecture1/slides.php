<div class="slides">

<section>
	<?php echo outputHeader(); ?>
	<div class="body">
		<h1>Inside Slide 1</h1>
		<h2>Subtitle</h2>
		<div class="row-fluid">
			<div class="span6">column 1</div>
			<div class="span6">column 2</div>
		</div>
	</div>
</section>
<section>
	<section>
		<?php echo outputHeader(); ?>
		<div class="body">
			<h1>Inside Slide 2</h1>
			<p>Slide with sub-slides</p>
		</div>
	</section>
	<section>
		<?php echo outputHeader('The Title', 'Inside Slide 2a'); ?>
		<div class="body">
			<h1>Inside Slide 2.1</h1>
			<p>This is a sub-slide</p>
		</div>
	</section>
</section>

<section class="title">
	<div class="body">
		<h1><?php echo PRESENTATION_TITLE; ?></h1>
		<h2 class="subtitle"><?php echo PRESENTATION_SUBTITLE; ?></h2>
		<div class="byline">Presented by <?php echo PRESENTATION_AUTHOR; ?></div>
	</div>
</section>
	
<section>
	<div class="header">
		<img width="175" height="55" title="Siren Interactive" src="/assets/img/templates/siren-logo.png" class="pull-right"/>
		<h1><?php echo PRESENTATION_TITLE; ?></h1>
	</div>
	<div class="body">
		<h1><em>Let&rsquo;s Just Get This Over With</em></h1>
		row 
			col
				img {animation of acronyms fading in randomly}
</section>
	
<section class="title">
	<div class="header">
		<img width="175" height="55" title="Siren Interactive" src="/assets/img/templates/siren-logo.png" class="pull-right"/>
		<h1><?php echo PRESENTATION_TITLE; ?></h1>
	</div>
	<div class="body">
		<h1>Making sense of it all</h1>
		<h2>What does what?</h2>
	</div>
</section>

<section>
	<section>
		<div class="header">
			<img width="175" height="55" title="Siren Interactive" src="/assets/img/templates/siren-logo.png" class="pull-right"/>
			<h1><?php echo PRESENTATION_TITLE; ?></h1>
		</div>
		<div class="body">
			<h1>Making sense of it all</h1>
			<h2>The front-end</h2>
			<div class="pull-left">
				<ul>
					<li>What the user sees</li>
					<li>What the user interacts with</li>
					<li>Runs in the user&rsquo;s browser</li>
				</ul>
			</div>
			<div class="pull-left">img {person on the computer}</div>
		</div>
	</section>
	
	<section>
		<div class="header">
			<img width="175" height="55" title="Siren Interactive" src="/assets/img/templates/siren-logo.png" class="pull-right"/>
			<h1><?php echo PRESENTATION_TITLE; ?></h1>
		</div>
		<div class="body">
			<h1>Making sense of it all</h1>
			<h2>The front-end</h2>
			<div class="pull-left">
				<h3>Examples</h3>
				<ul>
					<li>HTML (Hypertext Markup Language)</li>
					<li>CSS (Cascading Style Sheets)</li>
					<li>XML (Extensible Markup Language)</li>
					<li>Flash</li>
					<li>JavaScript (+ libraries)</li>
					<li>DOM (Document Object Model)</li>
					<li>The browser</li>
					<li>The client</li>
				</ul>
			</div>
			<div class="pull-left">img {person on the computer}</div>
		</div>
	</section>
</section>

<?php /*

slide[4]
	include(template2/header)
	content
		title Making sense of it all
		subtitle The back-end
		row
			col
				block
					li Does everything else
						li Stores the user's data
						li Manipulates the user's data
						li Builds and serves the webpage
					li Runs on a server somewhere
			col
				img {picture of horse with arrow pointing to rear}
	include(template2/footer)
	
	slide[4][1]
		include(template2/header)
		content
			title Making sense of it all
			subtitle The back-end
			row
				col
					heading Examples - Programming
					block
						li PHP (PHP: Hypertext Preprocessor)
						li ASP.NET
						li ROR (Ruby on Rails)
						li SSI (Server Side Includes)
						li Perl
						li Java
						li Python
				col
					img {picture of horse with arrow pointing to rear}
		include(template2/footer)

	slide[4][2]
		include(template2/header)
		content
			title Making sense of it all
			subtitle The back-end
			row
				col
					heading Examples - Storage
					block
						li RDBMS (Relational Database Management System)
							li MySQL
							li SQL Server
							li Oracle Database
						li SQL (Structured Query Language)
						li NoSQL
							li CouchDB
							li MongoDB
						li XML (Extensible Markup Language)
						li INI
				col
					img {picture of horse with arrow pointing to rear}
		include(template2/footer)

	slide[4][3]
		include(template2/header)
		content
			title Making sense of it all
			subtitle The back-end
			row
				col
					heading Examples - The Server
					block
						li Apache
						li IIS (Internet Information Services)
						li Nginx ("Engine-X")
						li Node.js
						li crontab
						li .htaccess
						li LAMP (Linux Apache MySQL PHP)
				col
					img {picture of horse with arrow pointing to rear}
		include(template2/footer)
	
	slide[4][4]
		include(template2/header)
		content
			title Making sense of it all
			subtitle The back-end
			row
				col
					heading Examples - The Web
					block
						li HTTP (Hypertext Transfer Protocol)
						li FTP (File Transfer Protocol)
						li SSL (Secure Sockets Layer)
						li TCP/IP (Transmission Control Protocol/Internet Protocol)
						li DNS (Domain Name System)
							li IP Address
							li URL (Uniform Resource Locator)
							li URI (Uniform Resource Indicator)
							li CNAME (Canonical Name)
							li TLD (Top-Level Domain)
							li SLD (Second-Level Domain)
							li subdomain
				col
					img {picture of horse with arrow pointing to rear}
		include(template2/footer)
		
slide[5]
	include(template2/header)
	content
		title Making sense of it all
		subtitle Tying it all together
		row
			col
				block
					li It's not front-end vs back-end
					li It's not client vs server
					li It's abstraction
					li It's communication
					li It's connection
					li It's the Internet
			col
				img {node graph of Internet connections}
	include(template2/footer)
	
	slide[5][1]
		include(template2/header)
		content
			title Making sense of it all
			subtitle Tying it all together
			row
				col
					heading Examples
					block
						li CMS (Content Management System)
						li WYSIWYG (What You See Is What You Get)
						li API (Application Programming Interface)
						li SaaS (Software as a Service)
						li REST (Representational State Transfer)
						li SOAP (Simple Object Access Protocol)
						li AJAX (Asynchronous JavaScript and XML)
						li JSON (JavaScript Object Notation)
						li XML (Extensible Markup Language)
						li WebSocket
						li RSS/Atom
						li XSS (Cross-site Scripting)
				col
					img {node graph of Internet connections}
		include(template2/footer)

slide[6]
	include(template2/header)
	content
		title Making sense of it all
		subtitle The development
		row
			col
				block
					li Makes everything possible
					li The source code and project requirements
					li Runs on the developer's computer
			col
				img {'developers developers developers' clip}
	include(template2/footer)
	
	slide[6][1]
		include(template2/header)
		content
			title Making sense of it all
			subtitle The development
			row
				col
					heading Examples
					block
						li Environment
							li XAMPP (Cross-platfrom Apache MySQl PHP Perl)
							li Cygwin
							li Version control
						li Coding
							li Text editors
								li Notepad++
								li vi/Vim/Emacs
							li IDE (Integrated Development Environment)
								li Eclipse
								li Visual Studio
								li NetBeans
							li SDK (Software Development Kit)
							li MVC (Model-View-Controller)
				col
					img {'developers developers developers' clip}
		include(template2/footer)

slide[7]
	include(template2/header)
	content
		title What does Siren use?
		row
			col
				heading Rob and Kyle
				li Eclipse
				li Notepad++
				li Adobe Flash
				li Sitecore
				li Firebug and Chrome Developer Tools
				li Git
			col
				heading Server
				li IIS
				li Apache
				li MySQL
				li PHP
				li .NET
			col
				heading Web 2.0
				li AJAX
				li jQuery
				li APIs
					li ExactTarget
					li Google Analytics
					li Social networks
			col
				heading Client
				li HTML
				li CSS
				li JavaScript
				li jQuery
	include(template2/footer)

slide[8]
	include(template2/header)
	content
		title
		block
			heading Key Ideas
			heading Key Questions
			heading Your Questions
	include(template2/footer)

slide[9]
	include(template2/header)
	content
		title Additional Information
		row
			col
				block
					heading See Also
					li This presentation can be viewed at:
						italic {link}
					li Notes and source files also available at:
						italic \\SIRENFS1\Homes\kknox\git\teaching
						italic \\SIRENFS1\Homes\kknox\git\teaching\.git
					li Articles explaining a number of these terms (and more) in detail:
						italic http://www.skillcrush.codim/terms/
					li 72 Essential Acronyms Related to Web Site Development
						italic http://www.solosignal.com/72-essential-acronyms-related-to-web-site-development
			col
				heading Special Thanks
				block
					Presentation platform built with help from:
					li 
						the jQuery community
						italic http://jquery.com/
					li
						Hakim El Hattab's Reveal.js library
						italic https://github.com/hakimel/reveal.js
					li and Google, for making stuff easier to find online
	include(template2/footer)
	*/ ?>
</div>

<?php function outputHeader($title = PRESENTATION_TITLE, $subtitle = null){
	$ret = '<div class="header">
		<img width="175" height="55" title="Siren Interactive" src="/assets/img/templates/siren-logo.png" class="pull-right"/>
		<h1>'.$title.'</h1>';
		
	if ($subtitle != '') {
		$ret .= '<h2 class="subtitle">'.$subtitle.'</h2>';
	}
	
	$ret .= '</div>';
	
	return $ret;
} ?>