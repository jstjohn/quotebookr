<?php echo $html->docType('xhtml-trans'); ?>
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<?php echo $html->charset(); ?>
	<title>
		<?php echo $title_for_layout . ' // Quotebookr'; ?>
	</title>
	<?php
		echo $html->meta('icon');

		//echo $html->css('cake.generic');
		echo $html->css('style');
		if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 6'))
			echo $html->css('ie6');
		echo $html->css('app');

		echo $javascript->link('util.js');
		echo $javascript->link('menu.js');

		echo $scripts_for_layout;
	?>
</head>
<body>
<!-- wrap START -->
<div id="wrap">
<!-- container START -->
<div id="container">

<!-- header START -->
<div id="header">

	<div id="caption">
		<h1 id="title">
			<?php echo $html->link('Quotebookr', '/'); ?>
		</h1>
		<div id="tagline">Your personal quote notebook</div>
	</div>

	<!-- navigation START -->
	<div id="navigation">

		<ul id="menus">
			<li class="current_page_item"><?php echo $html->link('Home', '/', array('class' => 'home')); ?></li>
			<li class="page_item"><?php echo $html->link('Quotes', '/quotes'); ?></li>
			<li class="page_item"><?php echo $html->link('Authors', '/authors'); ?></li>
			<li class="page_item"><?php echo $html->link('New', '/quotes/add'); ?></li>
			<li><a class="lastmenu" href="javascript:void(0);"></a></li>
		</ul>

		<!-- searchbox START -->
		<div id="searchbox">
			<form action="http://journal.auzigog.com" method="get">
				<div class="content">
					<input type="text" class="textfield" name="s" size="24" value="" />
					<a class="switcher" >Switcher</a>
				</div>
			</form>
		</div>
		<!-- searchbox END -->


		<div class="fixed"></div>
	</div>
	<!-- navigation END -->

	<div class="fixed"></div>
</div>
<!-- header END -->

<!-- content START -->
<div id="content">

	<!-- main START -->
	<div id="main">

		<div class="content">
		
			<h2><?php echo $title_for_layout; ?></h2>
			<?php $session->flash(); ?>

			<?php echo $content_for_layout ?>
		</div>

		<div class="post" id="post-64">
			<h2><a class="title" href="http://journal.auzigog.com/2008/11/11/quote-archive/" rel="bookmark">Quote Archive</a></h2>
			<div class="info">
				<span class="date">November 11th, 2008</span>
				<div class="act">

					<span class="comments"><a href="http://journal.auzigog.com/2008/11/11/quote-archive/#respond" title="Comment on Quote Archive">No comments</a></span>
					<span class="editpost"><a href="http://journal.auzigog.com/wp-admin/post.php?action=edit&amp;post=64" title="Edit post">Edit</a></span>					<div class="fixed"></div>
				</div>
				<div class="fixed"></div>
			</div>
			<div class="content">
				<p>I wanted to archive some of the quotes that I&#8217;ve collected and put on my Facebook page. I have all of my older quotes from <a href="http://www.quotationspage.com/">quotations page</a> that I collected junior year of high school in a word document. I wanted to make sure I had a copy of all these quotes.</p>

<blockquote><p>
In and of itself, nothing really matters. What matters is that nothing is *ever* &#8220;in and of itself.&#8221;<br />
- Chuck Klosterman in Sex, Drugs and Cocoa Puffs
</p></blockquote>
<blockquote><p>
Things are thieves of time.<br />
- The Eleventh Hour
</p></blockquote>
<blockquote><p>
The devouring impulse in Western culture is comparable to a drug or alcohol addiction: Recycling is an aspirin, alleviating a rather large collective hangover . . . overconsumption.<br />
- William McDonough, Cradle to Cradle
</p></blockquote>
<blockquote><p>

The important thing to note, however, is that birth control is not the issue. This isn&#8217;t to say that it serves no purpose. Birth control is like recycling. Both are relevant and commendable, but neither one will save us. They&#8217;re like pain-killers; they reduce the effects of the disease and give us a feeling of well being&#8230;while the disease itself continues unchecked.<br />
- Daniel Quinn, <a href="http://www.ishmael.org/Education/Science/carry_capacity.shtml">Essay: Carrying Capacity</a>
</p></blockquote>
<p><a href="http://journal.auzigog.com/2008/11/11/quote-archive/#more-64" class="more-link">Read more&#8230;</a></p>
				<p class="under">
					<span class="categories"><a href="http://journal.auzigog.com/category/book/cradle-to-cradle/" title="View all posts in Cradle-to-Cradle" rel="category tag">Cradle-to-Cradle</a>,  <a href="http://journal.auzigog.com/category/environment/" title="View all posts in Environment" rel="category tag">Environment</a>,  <a href="http://journal.auzigog.com/category/book/ishmael-book/" title="View all posts in Ishmael" rel="category tag">Ishmael</a>,  <a href="http://journal.auzigog.com/category/quotes/" title="View all posts in Quotes" rel="category tag">Quotes</a>,  <a href="http://journal.auzigog.com/category/book/the-power-of-sustainable-thinking/" title="View all posts in The Power of Sustainable Thinking" rel="category tag">The Power of Sustainable Thinking</a>,  <a href="http://journal.auzigog.com/category/thoughts/" title="View all posts in Thoughts" rel="category tag">Thoughts</a></span>					<span class="tags"><a href="http://journal.auzigog.com/tag/barack-obama/" rel="tag">barack obama</a>, <a href="http://journal.auzigog.com/tag/economy/" rel="tag">economy</a>, <a href="http://journal.auzigog.com/tag/environment/" rel="tag">Environment</a>, <a href="http://journal.auzigog.com/tag/global-warming/" rel="tag">global warming</a>, <a href="http://journal.auzigog.com/tag/human-nature/" rel="tag">human nature</a>, <a href="http://journal.auzigog.com/tag/nature/" rel="tag">nature</a>, <a href="http://journal.auzigog.com/tag/quotations/" rel="tag">quotations</a>, <a href="http://journal.auzigog.com/tag/quote-archive/" rel="tag">quote archive</a>, <a href="http://journal.auzigog.com/tag/sustainability/" rel="tag">sustainability</a></span>				</p>

				<div class="fixed"></div>
			</div>
		</div>



		<div id="pagenavi">
			<span class="newer"></span>
			<span class="older"><a href="http://journal.auzigog.com/page/2/">Older Entries</a></span>
			<div class="fixed"></div>
		</div>

	</div>
	<!-- main END -->



<!-- sidebar START -->
<div id="sidebar">

	<div class="section">
		<h3>Navigation</h3>
		<ul>
			<li><a href="#">Google</a></li>
			<li><a href="#">Foo bar</a></li>
			<li><a href="#">Authors</a></li>
		</ul>
	</div>
		<!--
		<div id="meta" class="widget widget_meta">			<h3>Meta</h3>			<ul>
			<li><a href="http://journal.auzigog.com/wp-admin/">Site Admin</a></li>			<li><a href="http://journal.auzigog.com/wp-login.php?action=logout">Log out</a></li>
			<li><a href="http://journal.auzigog.com/feed/?au=b2d8d011f595b91f2b8ad0d9460c09d1983a7d3b" title="Syndicate this site using RSS 2.0">Entries <abbr title="Really Simple Syndication">RSS</abbr></a></li>
			<li><a href="http://journal.auzigog.com/comments/feed/?au=b2d8d011f595b91f2b8ad0d9460c09d1983a7d3b" title="The latest comments to all posts in RSS">Comments <abbr title="Really Simple Syndication">RSS</abbr></a></li>

			<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress.org</a></li>
						</ul>
		</div>
		-->

</div>
<!-- sidebar END -->

<div class="fixed"></div>


</div>
<!-- content END -->

<!-- footer START -->

<div id="footer">
	<a id="gotop" href="#" onclick="MGJS.goTop();return false;">Top</a>

	<div id="copyright">
		cc-by-na 2008
	</div>
	<div id="themeinfo">
		Powered by <a href="http://www.cakephp.org" target="_blank">CakePHP</a>. Valid <a href="http://validator.w3.org/check?uri=referer">XHTML 1.1</a> and <a href="http://jigsaw.w3.org/css-validator/">CSS 3</a>.
	</div>

</div>
<!-- footer END -->

</div>
<!-- container END -->
</div>
<!-- wrap END -->

</body>
</html>