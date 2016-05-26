<div id="menu">

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
      <li class="linkedin"><a href="https://www.linkedin.com/company/linqm" target="_blank">LinkedIn</a></li>
      <li class="facebook"><a href="https://www.facebook.com/LINQM/" target="_blank">Facebook</a></li>
      <li class="twitter"><a href="https://twitter.com/AaronRecruiter" target="_blank">Twitter</a></li>
    </ul>
  </div>
  
</div>

