<div class="slides">
<section class="title">
	<div class="body">
		<h1><?php echo PRESENTATION_TITLE; ?></h1>
		<h2 class="subtitle"><?php echo PRESENTATION_SUBTITLE; ?></h2>
		<div class="byline">
			Presented by <?php echo PRESENTATION_AUTHOR; ?><br/>
			Updated: <?php printf('%s (v%s)', date('Y-m-d', strtotime(PRESENTATION_DATE_UPDATED)), PRESENTATION_VERSION); ?><br/>
		</div>
		<p><a href="http://xkcd.com/722/" target="_blank"><img src="/assets/img/lectures/lecture1/xkcd_722_computer_problems.jpg" alt="" height="" width=""/></a></p>
	</div>
</section>

<section>
	<?php echo outputHeader(); ?>
	<div class="body">
		<h2><q>Let&rsquo;s Just Get This Over With</q></h2>
		<div class="row-fluid">
			<div class="span12">
				<div class="tag-cloud">
					<div class="moon"></div>
					<div class="layer" id="cloud1"></div>
					<div class="layer" id="cloud2"></div>
					<div class="layer" id="cloud3"></div>
					<div class="layer" id="cloud4"></div>
					<div class="layer" id="cloud5"></div>
				</div>
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
				<div class="span6"><img src="/assets/img/lectures/lecture1/laptop_head_350.jpg" alt=""/></div>
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
						<li>HTML <span class="abbr">(Hypertext Markup Language)</span></li>
						<li>CSS <span class="abbr">(Cascading Style Sheets)</span></li>
						<li>XML <span class="abbr">(Extensible Markup Language)</span></li>
						<li>Flash</li>
						<li>JavaScript (+ libraries)</li>
						<li>DOM <span class="abbr">(Document Object Model)</span></li>
						<li>The browser</li>
						<li>The client</li>
					</ul>
				</div>
				<div class="span6"><img src="/assets/img/lectures/lecture1/laptop_head_350.jpg" alt=""/></div>
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
						<li class="fragment roll-in">Stores the user&rsquo;s data</li>
						<li class="fragment roll-in">Manipulates the user&rsquo;s data</li>
						<li class="fragment roll-in">Builds and serves the webpage</li>
						<li class="fragment roll-in">Runs on a server, somewhere</li>
					</ul>
				</div>
				<div class="span6">
					<img src="/assets/img/lectures/lecture1/matrix_code_350.jpg" alt=""/>
					<div class="copyright">&copy 1999-2003 by Jamie Zawinski</div>
					<?php /*Copyright � 1999-2003 by Jamie Zawinski. Permission to use, copy, modify, distribute, and sell this software and its documentation for any purpose is hereby granted without fee, provided that the above copyright notice appear in all copies and that both that copyright notice and this permission notice appear in supporting documentation. No representations are made about the suitability of this software for any purpose. It is provided "as is" without express or implied warranty." (source: the program's man page) */ ?>
				</div>
			</div>
		</div>
	</section>
	
	<section>
		<?php echo outputHeader(PRESENTATION_TITLE, 'The back-end'); ?>
		<div class="body">
			<h3>Examples &ndash; Programming Languages</h3>
			<div class="row-fluid">
				<div class="span6">
					<ul>
						<li>PHP <span class="abbr">(PHP: Hypertext Preprocessor)</span></li>
						<li>ASP.NET</li>
						<li>ROR <span class="abbr">(Ruby on Rails)</span></li>
						<li>SSI <span class="abbr">(Server Side Includes)</span></li>
						<li>Perl</li>
						<li>Java</li>
						<li>Python</li>
					</ul>
				</div>
				<div class="span6"><img src="/assets/img/lectures/lecture1/matrix_code_350.jpg" alt=""/></div>
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
						<li>INI</li>
						<li>XML <span class="abbr">(Extensible Markup Language)</span></li>
						<li>SQL <span class="abbr">(Structured Query Language)</span></li>
						<li>RDBMS <span class="abbr">(Relational Database Management System)</span>
							<ul>
								<li>MySQL</li>
								<li>SQL Server</li>
								<li>Oracle Database</li>
							</ul>
						</li>
						<li>NoSQL
							<ul>
								<li>CouchDB</li>
								<li>MongoDB</li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="span6"><img src="/assets/img/lectures/lecture1/matrix_code_350.jpg" alt=""/></div>
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
						<li>IIS <span class="abbr">(Internet Information Services)</span></li>
						<li>Nginx <span class="abbr">(<q>Engine-X</q>)</span></li>
						<li>Node.js</li>
						<li>crontab</li>
						<li>.htaccess</li>
						<li>LAMP <span class="abbr">(Linux Apache MySQL PHP)</span></li>
					</ul>
				</div>
				<div class="span6"><img src="/assets/img/lectures/lecture1/matrix_code_350.jpg" alt=""/></div>
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
						<li>HTTP <span class="abbr">(Hypertext Transfer Protocol)</span></li>
						<li>FTP <span class="abbr">(File Transfer Protocol)</span></li>
						<li>SSL <span class="abbr">(Secure Sockets Layer)</span></li>
						<li>TCP/IP <span class="abbr">(Transmission Control Protocol/Internet Protocol)</span></li>
						<li>DNS <span class="abbr">(Domain Name System)</span>
							<ul>
								<li>IP Address</li>
								<li>URL <span class="abbr">(Uniform Resource Locator)</span></li>
								<li>URI <span class="abbr">(Uniform Resource Indicator)</span></li>
								<li>CNAME <span class="abbr">(Canonical Name)</span></li>
								<li>TLD <span class="abbr">(Top-Level Domain)</span></li>
								<li>SLD <span class="abbr">(Second-Level Domain)</span></li>
								<li>subdomain</li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="span6"><img src="/assets/img/lectures/lecture1/matrix_code_350.jpg" alt=""/></div>
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
						<li class="fragment roll-in">It&rsquo;s not front-end vs back-end</li>
						<li class="fragment roll-in">It&rsquo;s not client vs server</li>
						<li class="fragment roll-in green">It&rsquo;s abstraction</li>
						<li class="fragment roll-in green">It&rsquo;s communication</li>
						<li class="fragment roll-in green">It&rsquo;s connection</li>
						<li class="fragment roll-in green">It&rsquo;s the Internet</li>
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
						<li>API <span class="abbr">(Application Programming Interface)</span></li>
						<li>SOA <span class="abbr">(Service-Oriented Architecture)</span></li>
						<li>SaaS <span class="abbr">(Software as a Service)</span></li>
						<li>REST <span class="abbr">(Representational State Transfer)</span></li>
						<li>SOAP <span class="abbr">(Simple Object Access Protocol)</span></li>
						<li>AJAX <span class="abbr">(Asynchronous JavaScript and XML)</span></li>
						<li>JSON <span class="abbr">(JavaScript Object Notation)</span></li>
						<li>XML</li>
						<li>XSS <span class="abbr">(Cross-site Scripting)</span></li>
						<li>WebSocket</li>
						<li>CMS <span class="abbr">(Content Management System)</span></li>
						<li>WYSIWYG <span class="abbr">(What You See Is What You Get)</span></li>
						<li>RSS/Atom</li>
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
			<h1>Developers</h1>
			<div class="row-fluid">
				<div class="span6">
					<ul>
						<li class="fragment roll-in">The source code and project requirements</li>
						<li class="fragment roll-in">Makes everything else possible</li>
						<li class="fragment roll-in">Runs on the developer&rsquo;s computer</li>
					</ul>
				</div>
				<iframe width="480" height="360" src="http://www.youtube-nocookie.com/embed/8To-6VIJZRE" frameborder="0" allowfullscreen seamless></iframe>
			</div>
		</div>
	</section>
	
	<section>
		<?php echo outputHeader(PRESENTATION_TITLE, 'Developers'); ?>
		<div class="body">
			<h3>Examples &ndash; Environment</h3>
			<div class="row-fluid">
				<div class="span6">
					<ul>
						<li>Text editors
							<ul>
								<li>Notepad++</li>
								<li>vi/Vim/Emacs/Pico</li>
							</ul>
						</li>
						<li>IDE <span class="abbr">(Integrated Development Environment)</span>
							<ul>
								<li>Eclipse</li>
								<li>Visual Studio</li>
								<li>NetBeans</li>
							</ul>
						</li>
						<li>Version control
							<ul>
								<li>Git</li>
								<li>SVN <span class="abbr">(Subversion)</span></li>
								<li>Mercurial</li>
							</ul>
						</li>
						<li>Compiler</li>
						<li>SDK <span class="abbr">(Software Development Kit)</span></li>
						<li>XAMPP <span class="abbr">(Cross-platfrom Apache MySQL PHP Perl)</span></li>
						<li>CLI <span class="abbr">(Command Line Interface)</span></li>
						<li>Cygwin</li>
					</ul>
				</div>
				<div class="span6"><iframe width="640" height="360" src="http://www.youtube-nocookie.com/embed/1lqxORnQARw" frameborder="0" allowfullscreen seamless></iframe></div>
			</div>
		</div>
	</section>
	
	<section>
		<?php echo outputHeader(PRESENTATION_TITLE, 'Developers'); ?>
		<div class="body">
			<h3>Examples &ndash; Approaches</h3>
			<div class="row-fluid">
				<div class="span6">
					<ul>
						<li>Paradigms
							<ul>
								<li>OOP <span class="abbr">(Object-oriented programming)</span></li>
								<li>Procedural programming</span></li>
								<li>Event-driven</span></li>
							</ul>
						</li>
						<li>Methodologies
							<ul>
								<li>Agile</li>
								<li>TDD <span class="abbr">(Test-Driven Development)</span></li>
								<li>XP <span class="abbr">(Extreme Programming)</span></li>
								<li>Waterfall method</li>
							</ul>
						</li>
						<li>Methods
							<ul>
								<li>Incremental development</li>
								<li>Pair programming</li>
								<li>Unit tests</li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="span6"><iframe width="640" height="360" src="http://www.youtube-nocookie.com/embed/p9TIeuBF9Ss?" frameborder="0" allowfullscreen seamless></iframe></div>
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
					<h3 class="orange">Rob and Kyle</h3>
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
					<h3 class="orange">Server</h3>
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
					<h3 class="orange">Web 2.0</h3>
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
					<h3 class="orange">Client</h3>
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
		<h2 class="">Key Insights &amp; Questions</h2>
		<p class="fragment align-left">&mdash; The number of technologies in taking an idea, shaping it into a webpage, storing it on a computer, and delivering it to any other computer, anywhere in the world, at any given time, are legion</p>
		<p class="fragment align-left">&mdash; Programming is less about the particular tools chosen for a project, than it is about design patterns, methodologies and technqiues</p>
		<p class="fragment align-left">&mdash; Is it possible to do {insert idea}? <span class="abbr">Yes.</span></p>
		<p class="fragment align-left">&mdash; What about {insert a different idea}? <span class="abbr">Yes.</span></p>

		<h2 class="fragment fade-in">Your Questions</h2>
	</div>
</section>

<section>
	<?php echo outputHeader(); ?>
	<div class="body">
		<h2>Additional Information</h2>
		<div class="row-fluid">
			<div class="span6 align-left">
				<h3>See Also</h3>
				<ul>
					<li>This presentation can be viewed at:
						<span class="resource">//presenter.baxdev.corp.sireninteractive.com</span>
					</li>
					<li>Notes and source files available at:
						<span class="resource">\\SIRENFS1\Homes\kknox\git\teaching</span>
					</li>
					<li>Articles explaining some of these terms in detail:
						<a href="http://www.skillcrush.com/terms/" target="_blank" class="resource">http://www.skillcrush.com/terms/</a>
					</li>
					<li>72 Essential Acronyms Related to Web Site Development:
						<a href="http://www.solosignal.com/72-essential-acronyms-related-to-web-site-development" target="_blank" class="resource">http://www.solosignal.com/72-essential-acronyms-related-to-web-site-development</a>
					</li>
				</ul>
			</div>
			<div class="span6 align-left">
				<h3>This Presentation Utilizes</h3>
				<ul>
					<li>HTML5</li>
					<li>CSS3 (+Bootstrap)
						<a href="http://twitter.github.com/bootstrap/" target="_blank" class="resource">http://twitter.github.com/bootstrap/</a>
					</li>
					<li>PHP</li>
					<li>Apache</li>
					<li>.htaccess</li>
					<li>Git</li>
					<li>JavaScript (+jQuery, Underscore.js and Reveal.js)
						<a href="http://jquery.com" target="_blank" class="resource">http://jquery.com/</a>
						<a href="http://underscorejs.org" target="_blank" class="resource">http://underscorejs.org</a>
						<a href="https://github.com/hakimel/reveal.js" target="_blank" class="resource">https://github.com/hakimel/reveal.js</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>

</div>

<?php function outputHeader($title = PRESENTATION_TITLE, $subtitle = null){
	$ret = '<div class="header">
		<a href="/"><img width="175" height="55" title="Siren Interactive" src="/assets/img/templates/siren-logo.png" class="pull-right"/></a>
		<h1>'.$title.'</h1>';
		
	if ($subtitle != '') {
		$ret .= '<h2 class="subtitle">'.$subtitle.'</h2>';
	}
	
	$ret .= '</div>';
	
	return $ret;
} ?>