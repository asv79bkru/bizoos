<?php
include('/templates/header.php');
include('/data/data.php');
?>

<body>
	<div class="main-container">
		<nav></nav>
		<article>
		<?php foreach ($projects as $project):?>
			<div class="project  animated bounceInLeft">
				<div class="preview">
					<img src="<?php echo $project['img']?>" alt="сайт компании">
				<div class="detail balloon hidden"><?php echo $project['detail']?></div>
				</div>
			</div>
	<?php endforeach; ?>
		</article>
	</div>
</body>

<?php
include('/templates/footer.php');
?> 