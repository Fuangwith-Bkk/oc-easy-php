<?php
  echo getenv('ENV');
  echo 'env()->'+env("ENV", '');
  echo "-------<hr>";
  phpinfo();
?>
