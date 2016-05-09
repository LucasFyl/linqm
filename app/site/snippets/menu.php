<div id="menu" class="hide">

  <nav role="navigation">
    <ul>
      <?php foreach($pages->visible() as $p): ?>
      <li <?php e($p->isOpen(), ' class="active"') ?>>
        <a href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
      </li>
      <?php endforeach ?>
    </ul>
  </nav>

  <div class="social">
    <ul>
      <li class="linkedin"><a href="">LinkedIn</a></li>
      <li class="facebook"><a href="">Facebook</a></li>
      <li class="twitter"><a href="">Twitter</a></li>
    </ul>
  </div>
  
</div>

