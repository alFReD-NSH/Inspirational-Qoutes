<?php

function printQuotes($stmt, $randomPictures) {
	echo '<div>';
	foreach ($stmt as $row) {
		$backgroundUrl = $row['image'] ?
			'picture.							php?id=' . $row['id'] :
			"backgrounds/". rand(1, $randomPictures) . ".jpg";

		echo "<a href=\"quote.php?id={$row['id']}\"><blockquote style=\"background-image:url($backgroundUrl)\">";
	?>
			<i class="fa fa-quote-left"></i>
			<p><?php printValue($row['text']) ?></p>
			<i class="fa fa-quote-right"></i>
			<footer>
				Written by <i><?php printValue($row['author']) ?></i>
				about <i><?php printValue($row['genre']) ?></i>
			</footer>
		</blockquote></a>
	<?php
	}
	echo '</div>';
}

function printValue($value) {
	echo htmlspecialchars_decode(stripslashes($value));
}