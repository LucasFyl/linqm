<?php snippet('head') ?>
<?php snippet('header') ?>

  <main class="main" role="main" id="gallery">

    <div class="half left hide-mobile">

    	<div class="text">
            <div class="vertical-center">
                <h1><?php echo $page->title()->html() ?></h1>
                <?php echo $page->text()->kirbytext() ?>
            </div>
        </div>

    	<div class="gallery-content">
    		<?php foreach($page->children()->visible() as $subpage): ?>
			<div class="text">
                <div class="vertical-center">
                    <h2><?php echo $subpage->title()->html() ?></h2>
                    <?php echo $subpage->text()->kirbytext() ?>
                </div>
	    	</div>
    		<?php endforeach; ?>
    	</div>

        <div class="btn-wrap">
            <a href="<?php echo $page->btnLink() ?>" class="btn red"><?php echo $page->btnText() ?></a>
        </div>
    </div>

    <div class="half right hide-mobile">
		<div class="gallery-nav">
			<ul>
                <?php $i = 01; ?>
				<?php foreach($page->children()->visible() as $subpage): ?>
    			<li><?php echo $subpage->title()->html() ?>
                    <span class="index"><span>0</span><?php echo $i; $i = $i + 1; ?></span>
                </li>
	    		<?php endforeach; ?>
			</ul>
		</div>
    </div>
    
    <div class="gallery-mobile hide-desktop">
        <div class="counter">
            <div class="arrows"></div>
        </div>
        <div class="content">
            <?php $ii = 01; ?>
            <?php foreach($page->children()->visible() as $subpage): ?>
            <article>
                <span class="index"><span>0<?php echo $ii; $ii = $ii + 1; ?></span>/0<?php echo $page->children()->visible()->count() ?></span>
                <h2><?php echo $subpage->title()->html() ?></h2>
                <p><?php echo $subpage->text()->kirbyText() ?></p>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
  </main>

<?php snippet('footer') ?>