<div class="slides">
<section class="title">
	<div class="body">
		<h1><?php echo PRESENTATION_TITLE; ?></h1>
		<h2 class="subtitle"><?php echo PRESENTATION_SUBTITLE; ?></h2>
		<div class="byline">Presented by <?php echo PRESENTATION_AUTHOR; ?></div>
	</div>
</section>

<section>
	<?php echo outputHeader(); ?>
	<div class="body">
		<h2><q>Let&rsquo;s Just Get This Over With</q></h2>
		<div class="row-fluid">
			<div class="span12">
				img {animation of acronyms fading in randomly}
			</div>
		</div>
</section>
	
<section>
	<?php echo outputHeader(); ?>
	<div class="body">
		<h1>Making sense of it all</h1>
		<h2>What does what?</h2>
	</div>
</section>

<section>
	<section>
		<?php echo outputHeader(PRESENTATION_TITLE, 'Making sense of it all'); ?>
		<div class="body">
			<h1>The front-end</h1>
			<div class="row-fluid">
				<div class="span6">
					<ul>
						<li class="fragment roll-in">What the user sees</li>
						<li class="fragment roll-in">What the user interacts with</li>
						<li class="fragment roll-in">Runs in the user&rsquo;s browser</li>
					</ul>
				</div>
				<div class="span6">img {person on the computer}</div>
			</div>
		</div>
	</section>
	
	<section>
		<?php echo outputHeader(PRESENTATION_TITLE, 'The front-end'); ?>
		<div class="body">
			<h3>Examples</h3>
			<div class="row-fluid">
				<div class="span6">
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
				<div class="span6">img {person on the computer}</div>
			</div>
		</div>
	</section>
</section>

<section>
	<section>
		<?php echo outputHeader(PRESENTATION_TITLE, 'Making sense of it all'); ?>
		<div class="body">
			<h1>The back-end</h1>
			<div class="row-fluid">
				<div class="span6">
					<ul>
						<li class="fragment roll-in">Stores the user&apos;s data</li>
						<li class="fragment roll-in">Manipulates the user&apos;s data</li>
						<li class="fragment roll-in">Builds and serves the webpage</li>
						<li class="fragment roll-in">Runs on a server, somewhere</li>
					</ul>
				</div>
				<div class="span6">img {picture of horse with arrow pointing to rear}</div>
			</div>
		</div>
	</section>
	
	<section>
		<?php echo outputHeader(PRESENTATION_TITLE, 'The back-end'); ?>
		<div class="body">
			<h3>Examples &ndash; Programming</h3>
			<div class="row-fluid">
				<div class="span6">
					<ul>
						<li>PHP (PHP: Hypertext Preprocessor)</li>
						<li>ASP.NET</li>
						<li>ROR (Ruby on Rails)</li>
						<li>SSI (Server Side Includes)</li>
						<li>Perl</li>
						<li>Java</li>
						<li>Python</li>
					</ul>
				</div>
				<div class="span6">img {picture of horse with arrow pointing to rear}</div>
			</div>
		</div>
	</section>
	
	<section>
		<?php echo outputHeader(PRESENTATION_TITLE, 'The back-end'); ?>
		<div class="body">
			<h3>Examples &ndash; Storage</h3>
			<div class="row-fluid">
				<div class="span6">
					<ul>
						<li>RDBMS (Relational Database Management System)
							<ul>
								<li>MySQL</li>
								<li>SQL Server</li>
								<li>Oracle Database</li>
							</ul>
						</li>
						<li>SQL (Structured Query Language)</li>
						<li>NoSQL
							<ul>
								<li>CouchDB</li>
								<li>MongoDB</li>
							</ul>
						</li>
						<li>XML (Extensible Markup Language)</li>
						<li>INI</li>
					</ul>
				</div>
				<div class="span6">img {picture of horse with arrow pointing to rear}</div>
			</div>
		</div>
	</section>
	
	<section>
		<?php echo outputHeader(PRESENTATION_TITLE, 'The back-end'); ?>
		<div class="body">
			<h3>Examples &ndash; The Server</h3>
			<div class="row-fluid">
				<div class="span6">
					<ul>
						<li>Apache</li>
						<li>IIS (Internet Information Services)</li>
						<li>Nginx (<q>Engine-X</q>)</li>
						<li>Node.js</li>
						<li>crontab</li>
						<li>.htaccess</li>
						<li>LAMP (Linux Apache MySQL PHP)</li>
					</ul>
				</div>
				<div class="span6">img {picture of horse with arrow pointing to rear}</div>
			</div>
		</div>
	</section>
	
	<section>
		<?php echo outputHeader(PRESENTATION_TITLE, 'The back-end'); ?>
		<div class="body">
			<h3>Examples &ndash; Networking</h3>
			<div class="row-fluid">
				<div class="span6">
					<ul>
						<li>HTTP (Hypertext Transfer Protocol)</li>
						<li>FTP (File Transfer Protocol)</li>
						<li>SSL (Secure Sockets Layer)</li>
						<li>TCP/IP (Transmission Control Protocol/Internet Protocol)</li>
						<li>DNS (Domain Name System)
							<ul>
								<li>IP Address</li>
								<li>URL (Uniform Resource Locator)</li>
								<li>URI (Uniform Resource Indicator)</li>
								<li>CNAME (Canonical Name)</li>
								<li>TLD (Top-Level Domain)</li>
								<li>SLD (Second-Level Domain)</li>
								<li>subdomain</li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="span6">img {picture of horse with arrow pointing to rear}</div>
			</div>
		</div>
	</section>
</section>

<section>
	<section>
		<?php echo outputHeader(PRESENTATION_TITLE, 'Making sense of it all'); ?>
		<div class="body">
			<h1>Tying it all together</h1>
			<div class="row-fluid">
				<div class="span6">
					<ul>
						<li class="fragment roll-in">It&apos;s not front-end vs back-end</li>
						<li class="fragment roll-in">It&apos;s not client vs server</li>
						<li class="fragment roll-in green">It&apos;s abstraction</li>
						<li class="fragment roll-in green">It&apos;s communication</li>
						<li class="fragment roll-in green">It&apos;s connection</li>
						<li class="fragment roll-in green">It&apos;s the Internet</li>
					</ul>
				</div>
				<div class="span6"><img src="/assets/img/lectures/lecture1/Internet_map_700.jpg" alt="Map of the Internet"/></div>
			</div>
		</div>
	</section>
	
	<section>
		<?php echo outputHeader(PRESENTATION_TITLE, 'Tying it all together'); ?>
		<div class="body">
			<h3>Examples</h3>
			<div class="row-fluid">
				<div class="span6">
					<ul>
						<li>CMS (Content Management System)</li>
						<li>WYSIWYG (What You See Is What You Get)</li>
						<li>API (Application Programming Interface)</li>
						<li>SaaS (Software as a Service)</li>
						<li>REST (Representational State Transfer)</li>
						<li>SOAP (Simple Object Access Protocol)</li>
						<li>AJAX (Asynchronous JavaScript and XML)</li>
						<li>JSON (JavaScript Object Notation)</li>
						<li>XML (Extensible Markup Language)</li>
						<li>WebSocket</li>
						<li>RSS/Atom</li>
						<li>XSS (Cross-site Scripting)</li>
					</ul>
				</div>
				<div class="span6"><img src="/assets/img/lectures/lecture1/Internet_map_700.jpg" alt="Map of the Internet"/></div>
			</div>
		</div>
	</section>
</section>

<section>
	<section>
		<?php echo outputHeader(PRESENTATION_TITLE, 'Making sense of it all'); ?>
		<div class="body">
			<h1>Development</h1>
			<div class="row-fluid">
				<div class="span6">
					<ul>
						<li class="fragment roll-in">Makes everything possible</li>
						<li class="fragment roll-in">The source code and project requirements</li>
						<li class="fragment roll-in">Runs on the developer&apos;s computer</li>
					</ul>
				</div>
				<iframe width="480" height="360" src="http://www.youtube-nocookie.com/embed/8To-6VIJZRE" frameborder="0" allowfullscreen seamless></iframe>
			</div>
		</div>
	</section>
	
	<section>
		<?php echo outputHeader(PRESENTATION_TITLE, 'Development'); ?>
		<div class="body">
			<h3>Examples</h3>
			<div class="row-fluid">
				<div class="span6">
					<ul>
						<li>Environment
							<ul>
								<li>XAMPP (Cross-platfrom Apache MySQl PHP Perl)</li>
								<li>Cygwin</li>
								<li>Version control</li>
							</ul>
						</li>
						<li>Coding
							<ul>
								<li>Text editors
									<ul>
										<li>Notepad++</li>
										<li>vi/Vim/Emacs</li>
									</ul>
								</li>
								<li>IDE (Integrated Development Environment)
									<ul>
										<li>Eclipse</li>
										<li>Visual Studio</li>
										<li>NetBeans</li>
									</ul>
								</li>
								<li>SDK (Software Development Kit)</li>
								<li>MVC (Model-View-Controller)</li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="span6"><iframe width="640" height="360" src="http://www.youtube-nocookie.com/embed/1lqxORnQARw" frameborder="0" allowfullscreen seamless></iframe></div>
			</div>
		</div>
	</section>
</section>

<section>
	<?php echo outputHeader(); ?>
	<div class="body">
		<h2>What does Siren use?</h2>
		<div class="row-fluid">
			<div class="span3">
				<div class="fragment">
					<h3>Rob and Kyle</h3>
					<ul>
						<li>Eclipse</li>
						<li>Notepad++</li>
						<li>Adobe Flash</li>
						<li>Sitecore</li>
						<li>Firebug and Chrome Developer Tools</li>
						<li>Git</li>
					</ul>
				</div>
			</div>
			<div class="span3">
				<div class="fragment">
					<h3>Server</h3>
					<ul>
						<li>IIS</li>
						<li>Apache</li>
						<li>MySQL</li>
						<li>PHP</li>
						<li>.NET</li>
					</ul>
				</div>
			</div>
			<div class="span3">
				<div class="fragment">
					<h3>Web 2.0</h3>
					<ul>
						<li>AJAX</li>
						<li>jQuery</li>
						<li>APIs
							<ul>
								<li>ExactTarget</li>
								<li>Google Analytics</li>
								<li>Social networks</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			<div class="span3">
				<div class="fragment">
					<h3>Client</h3>
					<ul>
						<li>HTML</li>
						<li>CSS</li>
						<li>JavaScript</li>
						<li>jQuery</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<?php echo outputHeader(); ?>
	<div class="body">
		<h3 class="fragment highlight-blue">{key ideas}</h3>
		<h3 class="fragment highlight-blue">{key questions}</h3>
		<h3 class="fragment fade-in">{your questions}</h3>
	</div>
</section>

<section>
	<?php echo outputHeader(); ?>
	<div class="body">
		<h2>Additional Information</h2>
		<div class="row-fluid">
			<div class="span6">
				<h3>See Also</h3>
				<ul>
					<li>This presentation can be viewed at:
						<span class="resource">{link}</span>
					</li>
					<li>Notes and source files also available at:
						<span class="resource">\\SIRENFS1\Homes\kknox\git\teaching</span>
						<span class="resource">\\SIRENFS1\Homes\kknox\git\teaching\.git</span>
					</li>
					<li>Articles explaining a number of these terms (and more) in detail
						<a href="#" class="resource">http://www.skillcrush.codim/terms/</a>
					</li>
					<li>72 Essential Acronyms Related to Web Site Development
						<a href="#" class="resource">http://www.solosignal.com/72-essential-acronyms-related-to-web-site-development</a>
					</li>
				</ul>
			</div>
			<div class="span6">
				<h3>Special Thanks</h3>
				<p>Presentation platform built with help from:</p>
				<ul>
					<li>the jQuery community
						<a href="#" class="resource">http://jquery.com/</a>
					</li>
					<li>Hakim El Hattab&apos;s Reveal.js library
						<a href="#" class="resource">https://github.com/hakimel/reveal.js</a>
					</li>
					<li>and Google, for making stuff easier to find online</li>
				</ul>
			</div>
		</div>
	</div>
</section>

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