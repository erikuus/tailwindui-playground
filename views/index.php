<!DOCTYPE html>
<html class="m-4">
<head>
	<title></title>
	<link rel="stylesheet" href="../style.css">
</head>
<body>
	<div class="flex space-x-4">
		<div class="flex-1 bg-gray-100 p-4">
			<h1>Elements</h1>
			<?php foreach(array_diff(scandir('./elements'), array('..', '.')) as $file): ?>
				<a target="_blank" class="block mx-10 my-1 text-blue-500" href="./elements/<?php echo $file ?>">
					<?php echo $file ?>
				</a>
			<?php endforeach; ?>
		</div>
		<div class="flex-1 bg-gray-100 p-4">
			<h1>Forms</h1>
			<?php foreach(array_diff(scandir('./forms'), array('..', '.')) as $file): ?>
				<a target="_blank" class="block mx-10 my-1 text-blue-500" href="./forms/<?php echo $file ?>">
					<?php echo $file ?>
				</a>
			<?php endforeach; ?>
		</div>
		<div class="flex-1 bg-gray-100 p-4">
			<h1>Layouts</h1>
			<?php foreach(array_diff(scandir('./layouts'), array('..', '.')) as $file): ?>
				<a target="_blank" class="block mx-10 my-1 text-blue-500" href="./layouts/<?php echo $file ?>">
					<?php echo $file ?>
				</a>
			<?php endforeach; ?>
		</div>
		<div class="flex-1 bg-gray-100 p-4">
			<h1>Navigation</h1>
			<?php foreach(array_diff(scandir('./navigation'), array('..', '.')) as $file): ?>
				<a target="_blank" class="block mx-10 my-1 text-blue-500" href="./navigation/<?php echo $file ?>">
					<?php echo $file ?>
				</a>
			<?php endforeach; ?>
		</div>
	</div>
</body>
</html>
