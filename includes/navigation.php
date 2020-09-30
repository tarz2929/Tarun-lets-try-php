<?php
  $navArray = array(
    'Home' => 'index.php',
    'About' => 'about.php'
  );
?><nav>
  <h2>Website Navigation</h2>
  <ul>
    <?php foreach ( $navArray as $pageName => $link ) : ?>
      <li>
        <a href="<?php echo $link; ?>">
          <?php echo $pageName; ?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>
</nav>
