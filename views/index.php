<!DOCTYPE html>
<html class="m-4">
<head>
	<title></title>
	<link rel="stylesheet" href="../style.css">
</head>
<body>
	<div class="flex space-x-4">
		<div class="flex-1 bg-gray-light-100 p-4">
			<h1>Layouts</h1>
			<?php foreach(array_diff(scandir('./layouts'), array('..', '.')) as $file): ?>
				<a target="_blank" class="block my-1 text-blue-500" href="./layouts/<?php echo $file ?>">
					<?php echo $file ?>
				</a>
			<?php endforeach; ?>
		</div>
		<div class="flex-1 bg-gray-light-100 p-4">
			<h1>Pages</h1>
			<?php foreach(array_diff(scandir('./pages'), array('..', '.')) as $file): ?>
				<a target="_blank" class="block my-1 text-blue-500" href="./pages/<?php echo $file ?>">
					<?php echo $file ?>
				</a>
			<?php endforeach; ?>
		</div>
		<div class="flex-1 bg-gray-light-100 p-4">
			<h1>Components</h1>
			<?php foreach(array_diff(scandir('./components'), array('..', '.')) as $file): ?>
				<a target="_blank" class="block my-1 text-blue-500" href="./components/<?php echo $file ?>">
					<?php echo $file ?>
				</a>
			<?php endforeach; ?>
		</div>
		<div class="flex-1 bg-gray-light-100 p-4">
			<h1>Experiments</h1>
			<?php foreach(array_diff(scandir('./experiments'), array('..', '.')) as $file): ?>
				<a target="_blank" class="block my-1 text-blue-500" href="./experiments/<?php echo $file ?>">
					<?php echo $file ?>
				</a>
			<?php endforeach; ?>
		</div>
	</div>
</body>
</html>
