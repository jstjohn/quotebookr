<?php echo $html->docType('xhtml-trans'); ?>
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<?php echo $html->charset(); ?>
	<title>
	<?php echo $title_for_layout . ' // Quotebookr'; ?>
	</title>
	<?php
		echo $html->meta('icon');
		echo $html->css('cake.generic');
		echo $html->css('light-style');
		echo $html->css('app');
		
		echo $scripts_for_layout;
	?>
</head>
<body>
<div id="wrapper">
	<div class="content">
		<div id="menu">
			<ul>
				<li><?php echo $html->link('Home', '/') ?></li>
				<li><?php echo $html->link('Quotes', '/quotes') ?></li>
				<li><?php echo $html->link('Authors', '/authors') ?></li>
				<li><?php echo $html->link('New', '/quotes/add') ?></li>
				<li><?php echo $html->link('About', '/app/about') ?></li>
			</ul>

			<div class="feed">
				<a href="#" title="Subscribe (RSS)"></a>
			</div>
		</div>

		<div id="title">
			<h1 class="title">
				<?php echo $html->link('Quotebookr', '/') ?>
			</h1>
		</div>

		<div id="primary">

			<?php $session->flash(); ?>

			<?php echo $content_for_layout ?>

			<!--
			<div class="post" id="post-64">

				<h1 class="article_title">
					<a href="#" rel="bookmark" title="Permanent Link to Quote Archive">Quote Archive</a>
				</h1>

				<div class="entry">
					<p>I wanted to archive some of the quotes that I&#8217;ve collected and put on my Facebook page. I have all of my older quotes from <a href="http://www.quotationspage.com/">quotations page</a> that I collected junior year of high school in a word document. I wanted to make sure I had a copy of all these quotes.</p>
					<blockquote>
						<p>
							In and of itself, nothing really matters. What matters is that nothing is *ever* &#8220;in and of itself.&#8221;<br />
							- Chuck Klosterman in Sex, Drugs and Cocoa Puffs
						</p>
					</blockquote>
					<blockquote>
						<p>
							Things are thieves of time.<br />
							- The Eleventh Hour
						</p>
					</blockquote>
					<blockquote><p>
					The devouring impulse in Western culture is comparable to a drug or alcohol addiction: Recycling is an aspirin, alleviating a rather large collective hangover . . . overconsumption.<br />
					- William McDonough, Cradle to Cradle
					</p></blockquote>
					<blockquote><p>
					The important thing to note, however, is that birth control is not the issue. This isn&#8217;t to say that it serves no purpose. Birth control is like recycling. Both are relevant and commendable, but neither one will save us. They&#8217;re like pain-killers; they reduce the effects of the disease and give us a feeling of well being&#8230;while the disease itself continues unchecked.<br />

					- Daniel Quinn, <a href="http://www.ishmael.org/Education/Science/carry_capacity.shtml">Essay: Carrying Capacity</a>
					</p></blockquote>
					<p>
						<a href="http://journal.auzigog.com/2008/11/11/quote-archive/#more-64" class="more-link">Read the rest of this entry &raquo;</a>
					</p>
				</div>
				<div class="postmetadata">
					November 11th, 2008 in <a href="http://journal.auzigog.com/category/book/cradle-to-cradle/" title="View all posts in Cradle-to-Cradle" rel="category tag">Cradle-to-Cradle</a>,
					<a href="http://journal.auzigog.com/category/environment/" title="View all posts in Environment" rel="category tag">Environment</a>,
					<a href="http://journal.auzigog.com/category/book/ishmael-book/" title="View all posts in Ishmael" rel="category tag">Ishmael</a>,
					<a href="http://journal.auzigog.com/category/quotes/" title="View all posts in Quotes" rel="category tag">Quotes</a>,
					<a href="http://journal.auzigog.com/category/book/the-power-of-sustainable-thinking/" title="View all posts in The Power of Sustainable Thinking" rel="category tag">The Power of Sustainable Thinking</a>,
					<a href="http://journal.auzigog.com/category/thoughts/" title="View all posts in Thoughts" rel="category tag">Thoughts</a>
					&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
					<a href="http://journal.auzigog.com/2008/11/11/quote-archive/#respond" title="Comment on Quote Archive">No comments</a>
				</div>
			</div>

			<div class="navigation">
				<div class="alignleft">
					<a href="http://journal.auzigog.com/page/2/">Previous Entries</a>
				</div>
				<div class="alignright">
				</div>
			</div>
		</div>
		-->

	</div>
	<div id="search">
		<form method="get" id="searchform" action="#">
			<div>
				<input type="text" value="Search for something, type and hit enter" name="s" id="s" onfocus="if (this.value == 'Search for something, type and hit enter') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search for something, type and hit enter';}" />
			</div>
		</form>
	</div>

	<div id="footer">
		<div class="to_top">
			<a href="#menu" title="Top of Page" />
		</div>
		<p><a href="http://creativecommons.org/licenses/by-nc/3.0/">cc-by-nc 2008</a></p>
	</div>
</div>
</body>
</html>