<!DOCTYPE html>
	<head>
		<title>Flickriffic</title>
		<meta charset="UTF-8"/>
		<link rel='stylesheet' type='text/css' href='./style.css' title='Default Style'/>
	</head>
	<body id='top'>
		<div id='container'>
			<header>
				<h1>Flickriffic</h1>
				<p>A PHP class to display Flickr photos with the JQuery Galleriffic plugin</p>
			</header>
			<nav>
				<ul>
					<li><a href='#what'>What is Flickriffic?</a></li>
					<li><a href='#requirements'>What do I need?</a></li>
					<li><a href='#howto'>How do I use it?</a></li>
					<li><a href='#customise'>Can I customise it?</a></li>
					<li><a href='#download'>Where do I download it?</a></li>
					<li><a href='#examples'>Who uses Flickriffic?</a></li>
					<li><a href='#comments'>Where do I send any comments?</a></li>
				</ul>
			</nav>
			<p class='downloadlink'><a href='./flickriffic.zip'>Download Now</a></p>
			<section id='content'>
				<section id='what'>
					<header>
						<h2>What is Flickriffic?</h2>
						<p class='link'><a href='#top'>Back to top</a></p>
					</header>
					<div class='cols'>
						<p>Flickriffic is a PHP class that uses the Flickr API to access the photographs on your Flickr account and then displays them using the <a href='http://www.twospy.com/galleriffic/'>JQuery Galleriffic plugin</a> by <a href='http://twitter.com/trentfoley'>Trent Foley</a>.</p>
						<p>The default Flickriffic setup also makes use of the <a href='http://code.google.com/p/galleriffic/source/browse/trunk/jalbum-skin/res/jquery.opacityrollover.js'>JQuery Opacity Rollover plugin</a> by <a href='http://twitter.com/trentfoley'>Trent Foley</a> and the <a href='http://www.mikage.to/jquery/jquery_history.html'>JQuery History plugin</a> from <a href='http://mikage.to'>mikage.to</a> (Japanese page).</p>
						<p>The best thing to do is check out the <a href='./demo.php'>live demo</a> and see it in action. The <a href='http://www.flickr.com/photos/just-mark/sets/72157623793683659/'>corresponding set</a> on Flickr may also be useful to see how it works.</p>
					</div>
				</section>
				<section id='requirements'>
					<header>
						<h2>What do I need?</h2>
						<p class='link'><a href='#top'>Back to top</a></p>
					</header>
					<div class='cols'>
						<p></p>
						<ul>
							<li>A <a href='http://www.flickr.com'>Flickr</a> account and <a href='http://www.flickr.com/services/api/misc.api_keys.html'>API key</a></li>
							<li>A <a href='http://www.php.net'>PHP</a>-enabled Server</li>
							<li><a href='http://jquery.com/'>JQuery</a></li>
							<li>The <a href='#download'>Flickriffic Download</a> which includes:
								<ul>
									<li>The Flickriffic PHP class - Flickriffic.php</li>
									<li>The Flickriffic Javascript file - flickriffic.js</li>
									<li>The Flickriffic CSS file - flickriffic.css</li>
									<li><a href='http://phpflickr.com/'>PHPFlickr</a></li>
									<li><a href='http://www.twospy.com/galleriffic/'>JQuery Galleriffic Plugin</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</section>
				<section id='howto'>
					<header>
						<h2>How do I use it?</h2>
						<p class='link'><a href='#top'>Back to top</a></p>	
					</header>
					<div class='cols'>
						<ol>
							<li>
								Unzip the download file to the root of your website (or modify the paths in the next step accordingly). The file structure should look like this:
								<ul>
									<li>
										<code>flickriffic/</code>
										<ul>
											<li><code>Flickriffic.php</code></li>
											<li><code>flickriffic.css</code></li>
											<li><code>js/</code>
												<ul>
													<li><code>flickriffic.js</code></li>
													<li><code>jquery.galleriffic.js</code></li>
													<li><code>jquery.history.js</code></li>
													<li><code>jquery.opacityrollover.js</code></li>
												</ul>
											</li>
											<li><code>phpflickr/</code>
												<ul>
													<li><code>README.txt</code></li>
													<li><code>auth.php</code></li>
													<li><code>example.php</code></li>
													<li><code>getToken.php</code></li>
													<li><code>phpFlickr.php</code></li>
												</ul>
											</li>
											
										</ul>
									</li>
								</ul>
							</li>
							<li>
								Include the <code>Flickriffic.php</code> file:
								<pre><code class='block'>include '/flickriffic/Flickriffic.php';</code></pre>
							</li>
							<li>
								Create a <code>Flickriffic</code> object using your API key, Flickr username and the name of the Flickr set you want to display as the parameters:
<pre><code class='block'>&lt;?php
	$apikey = 'YourAPIKey';
	$username = 'Just.Mark';
	$set = 'Flowers';

	$flickriffic = new Flickriffic($apikey, $username, $set);
?>
</code></pre>
							</li>
							<li>
								Link to the <code>flickriffic.css</code> file in your HTML (or copy the CSS code into your stylesheet):
<pre><code class='block'>&lt;link rel='stylesheet' type='text/css' href='./flickriffic/flickriffic.css' title='Default Style'/&gt;
</code></pre>
							</li>
							<li>
								Link to the JQuery library in your HTML:
<pre><code class='block'>&lt;script type="text/javascript" src='http://ajax.microsoft.com/ajax/jquery/jquery-1.4.2.js'&gt;&lt;/script&gt;
</code></pre>
							</li>
							<li>
								Continue writing the rest of your page as normal. When you get to the part where you want a gallery call the <code>simplegallery()</code> function:
<pre><code class='block'>&lt;?=$flickriffic->simplegallery(); ?&gt;
</code></pre>
							</li>
						</ol>
					</div>
				</section>
				<section id='customise'>
					<header>
						<h2>Can I customise it?</h2>
						<p class='link'><a href='#top'>Back to top</a></p>
					</header>
					<div class='cols'>
						<img src='./code-view.png' alt=''/>
						<p>Definitely!</p>
						<p>Flickriffic aims to be easy to get started with while allowing more advanced users the control they want to customise it in any way they want.</p>
						<p>The easiest way to customise Flickriffic is to change the style in the CSS file. The included CSS file is simply a default and you&#39;re free to build upon it or to start from scratch if you wish.</p>
						<p>The structure of HTML created by the <code>simplegallery()</code> function is:
<pre><code class='block'>&lt;div id="gallery" class="gallerycontent"&gt;
	&nbsp;&lt;div id="controls" class="controls"&gt;&lt;/div&gt;
	&nbsp;&lt;div class="slideshow-container"&gt;
		&nbsp;&nbsp;&lt;div id="loading" class="loader"&gt;&lt;/div&gt;
		&nbsp;&nbsp;&lt;div id="slideshow" class="slideshow"&gt;&lt;/div&gt;
	&nbsp;&lt;/div&gt;
	&nbsp;&lt;div id="caption" class="caption-container"&gt;&lt;/div&gt;
&lt;/div&gt;
</code></pre>
						</p>
						<p>If you have more specific needs then Flickriffic provides individual functions for the different divs used. These are:</p>
						<ul>
							<li><code>slideshow()</code></li>
							<li><code>caption()</code></li>
							<li><code>controls()</code></li>
							<li><code>js()</code></li>
							<li><code>thumbs()</code></li>
							<li><code>gallery()</code> - wraps <code>controls()</code>, <code>slideshow()</code> and <code>caption()</code> in a div with id of <code>gallery</code> and class of <code>gallerycontent</code></li>
						</ul>
					</div>
				</section>
				<section id='download'>
					<header>
						<h2>Where do I download it?</h2>
						<p class='link'><a href='#top'>Back to top</a></p>
					</header>
					<div class='cols'>
						<p>Currently the only official place to download Flickriffic is this page. This may change at a later date if it becomes beneficial to host the project on Sourceforge, github, etc but any changes will be mentioned here.</p>
					</div>
						<p class='downloadlink'><a href='./flickriffic.zip'>Download Flickriffic</a></p>
				</section>
				<section id='examples'>
					<header>
						<h2>Who uses Flickriffic?</h2>
						<p class='link'><a href='#top'>Back to top</a></p>
					</header>
					<div class='cols'>
						<p>Below is a list of websites currently using Flickriffic:</p>
						<ul>
							<li><a href='http://www.debbiescakeole.co.uk'>Debbie&#39;s Cake&#39;ole</a></li>
							<li><a href='http://justanothermark.co.cc/alice/'>Alice Marlowe Photography</a></li>
						</ul>
						<p>If you would like to be included on the list feel free to email me on <a href='mailto:markjones1987@hotmail.com'>markjones1987@hotmail.com</a> with the address.</p>
					</div>
				</section>
				<section id='comments'>
					<header>
						<h2>Where do I send any comments?</h2>
						<p class='link'><a href='#top'>Back to top</a></p>
					</header>
					<div class='cols'>
						<p>You can contact me on Twitter (<a href='http://www.twitter.com/JustAnotherMark'>@JustAnotherMark</a>) or via email (<a href='markjones1987@hotmail.com'>markjones1987@hotmail.com</a>) with any of the above.</p>
						<p>News, updates and other projects will be announced on my <a href='http://justmark1987.wordpress.com'>Just Mark blog</a>.</p>
					</div>
				</section>
			</section>
		</div>
	</body>
</html>