<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	include 'api/connection.php';
	$stmt = $db->prepare("INSERT INTO quote (text, author, genre, image) VALUES (?, ?, ?, ?)");
	$stmt->execute(array($_POST['text'], $_POST['author'], $_POST['genre'], isset($_FILES['image']) ? file_get_contents($_FILES['image']['tmp_name']) : NULL));

	header("Location: quote.php?id={$db->lastInsertId()}", true, 303);
	die();
}

include 'api/top.php';
?>

<div>
	<form method="post" action="add.php" enctype="multipart/form-data">
		<div class="control">
			<label for="text">Please write your quote here: </label>
			<textarea name="text" required></textarea>
		</div>
		<div class="control">
			<label for="author">And who was the author? </label>
			<input name="author" id="author" required>
		</div>
		<div class="control">
			<label for="genre">What Genre?</label>
			<select required name="genre" id="genre">
				<option>Love</option>
				<option>Laughter</option>
				<option>Life</option>
			</select>
		</div>
		<div class="control">
			<label for="image">Choose a background image(Optional): </label>
			<input name="image" id="image" type="file">
		</div>
		<div class="control">
			<input type="submit" value="Add Qoute.">
		</div>

	</form>
</div>

<?php
include 'api/bottom.php';
