<?php
$p1 = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam auctor gravida diam. Donec eget magna nunc. Suspendisse ipsum lacus, pellentesque sit amet lacinia quis, convallis sed ligula. Nullam lobortis sapien et dolor gravida ac convallis erat fermentum. Mauris nec justo lacus. Sed varius varius ligula, sit amet egestas mi blandit dictum. Phasellus sapien tortor, bibendum vitae vehicula a, molestie in odio. Fusce porttitor quam nec libero condimentum eget imperdiet nibh elementum.';
$p2 = 'Suspendisse interdum malesuada mi non dictum. Quisque cursus imperdiet lorem, in posuere quam eleifend non. Integer eros libero, lacinia nec fringilla non, vulputate vitae felis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis ligula sapien, tristique sit amet tempor id, iaculis vel nisl. Maecenas rhoncus facilisis lacus non blandit. Nam quis erat arcu. Suspendisse facilisis venenatis elit, et posuere leo dictum a. Integer at tellus leo, sit amet malesuada orci. Proin placerat nulla vitae diam mattis at volutpat risus pellentesque.';
$p3 = 'Sed malesuada scelerisque semper. Mauris imperdiet nibh eros. Fusce quis vulputate enim. Proin a enim sit amet purus interdum ultricies. In hac habitasse platea dictumst. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut a magna sem, nec placerat nibh. Proin quis metus nunc, at vulputate erat. Etiam quis diam est. Nullam quam turpis, condimentum et iaculis in, pharetra sed enim.'; ?>

<h1>Tabs</h1>

<div class="example">
	<h2>Content Loading</h2>

	<div class="tabs" id="tabs-base">
		<nav>
			<ul>
				<li><a href="#tab-1" class="button">Tab 1 via DOM</a></li>
				<li><a href="#tab-2" class="button">Tab 2 via DOM</a></li>
				<li><a href="ajax/tab.php" class="button">Tab 3 via AJAX</a></li>
			</ul>
		</nav>

		<section id="tab-1" style="display: none"><?php echo $p1; ?></section>
		<section id="tab-2" style="display: none"><?php echo $p2; ?></section>
		<section id="tab-3" style="display: none"><?php echo $p3; ?></section>
	</div>

	<p>Integrate with the button-group module for a slicker navigation.</p>

	<div class="tabs" id="tabs-base2">
		<nav>
			<div class="button-group pill">
				<a href="#tab-10" class="button">Tab 1</a>
				<a href="#tab-20" class="button">Tab 2</a>
				<a href="#tab-30" class="button">Tab 3</a>
			</div>
		</nav>

		<section id="tab-10" style="display: none"><?php echo $p1; ?></section>
		<section id="tab-20" style="display: none"><?php echo $p2; ?></section>
		<section id="tab-30" style="display: none"><?php echo $p3; ?></section>
	</div>
</div>

<div class="example">
	<h2>Effects</h2>

	<p>Hover instead of click, persistent tabs, default 2nd section.</p>

	<div class="tabs" id="tabs-effects">
		<nav>
			<ul>
				<li><a href="#tab-3" class="button">Tab 1 via DOM</a></li>
				<li><a href="#tab-4" class="button">Tab 2 via DOM</a></li>
				<li><a href="ajax/tab.php" class="button">Tab 3 via AJAX</a></li>
			</ul>
		</nav>

		<section id="tab-4" style="display: none"><?php echo $p1; ?></section>
		<section id="tab-5" style="display: none"><?php echo $p2; ?></section>
		<section id="tab-6" style="display: none"><?php echo $p3; ?></section>
	</div>
</div>

<div class="example">
	<h2>Events, Features</h2>

	<p>Custom events, section fading.</p>

	<div class="tabs" id="tabs-events">
		<nav>
			<ul>
				<li><a href="#tab-7" class="button">No Event</a></li>
				<li><a href="#tab-8" class="button">onShow, onHide</a></li>
			</ul>
		</nav>

		<section id="tab-7" style="display: none">No event.</section>
		<section id="tab-8" style="display: none">The activated tab will have a custom class toggled.</section>
	</div>
</div>

<h1>Tabs: Effects</h1>

<div class="example">
	<h2>Left, Right</h2>

	<div class="tabs tabs-left" id="tabs-left">
		<nav>
			<ul>
				<li><a href="#tab-21" class="button">Tab 1</a></li>
				<li><a href="#tab-22" class="button">Tab 2</a></li>
				<li><a href="#tab-23" class="button">Tab 3</a></li>
			</ul>
		</nav>

		<section id="tab-21" style="display: none"><?php echo $p1 . $p1; ?></section>
		<section id="tab-22" style="display: none"><?php echo $p2 . $p2; ?></section>
		<section id="tab-23" style="display: none"><?php echo $p3 . $p3; ?></section>
	</div>

	<div class="tabs tabs-right" id="tabs-right">
		<nav>
			<ul>
				<li><a href="#tab-31" class="button">Tab 1</a></li>
				<li><a href="#tab-32" class="button">Tab 2</a></li>
				<li><a href="#tab-33" class="button">Tab 3</a></li>
			</ul>
		</nav>

		<section id="tab-31" style="display: none"><?php echo $p1 . $p1; ?></section>
		<section id="tab-32" style="display: none"><?php echo $p2 . $p2; ?></section>
		<section id="tab-33" style="display: none"><?php echo $p3 . $p3; ?></section>
	</div>

	<p>The button-group-vertical effect can also be used here.</p>

	<div class="tabs tabs-left" id="tabs-left2">
		<nav>
			<div class="button-group button-group-vertical skew">
				<a href="#tab-24" class="button">Tab 1</a>
				<a href="#tab-25" class="button">Tab 2</a>
				<a href="#tab-26" class="button">Tab 3</a>
			</div>
		</nav>

		<section id="tab-24" style="display: none"><?php echo $p1 . $p1; ?></section>
		<section id="tab-25" style="display: none"><?php echo $p2 . $p2; ?></section>
		<section id="tab-26" style="display: none"><?php echo $p3 . $p3; ?></section>
	</div>

	<div class="tabs tabs-right" id="tabs-right2">
		<nav>
			<div class="button-group button-group-vertical skew-reverse">
				<a href="#tab-34" class="button">Tab 1</a>
				<a href="#tab-35" class="button">Tab 2</a>
				<a href="#tab-36" class="button">Tab 3</a>
			</div>
		</nav>

		<section id="tab-34" style="display: none"><?php echo $p1 . $p1; ?></section>
		<section id="tab-35" style="display: none"><?php echo $p2 . $p2; ?></section>
		<section id="tab-36" style="display: none"><?php echo $p3 . $p3; ?></section>
	</div>
</div>

<script type="text/javascript">
	window.addEvent('domready', function() {
		Titon.Tabs.factory('tabs-base');
		Titon.Tabs.factory('tabs-base2');
		Titon.Tabs.factory('tabs-effects', {
			mode: 'hover',
			persistState: true,
			defaultIndex: 1
		});
		Titon.Tabs.factory('tabs-events', {
			fade: true,
			onShow: function(tab) {
				tab.addClass('success');
			},
			onHide: function(tab) {
				tab.removeClass('success');
			}
		});
		Titon.Tabs.factory('tabs-left');
		Titon.Tabs.factory('tabs-left2');
		Titon.Tabs.factory('tabs-right');
		Titon.Tabs.factory('tabs-right2');
	});
</script>