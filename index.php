<?php
  echo getenv('ENV');
  echo "-------<hr>";
  for ($i=1;$i<=5;$i++){
    echo "Hello --> $i <br>";
  }

  echo "<hr>";
  $namespace = getenv('OPENSHIFT_BUILD_NAMESPACE');
  $buildname = getenv('OPENSHIFT_BUILD_NAME=web-7');
  $github = getenv('OPENSHIFT_BUILD_SOURCE');
  $src_folder = getenv('HOME');
  $hostname = getenv('HOSTNAME');

  echo "This page is running on $hostname.<br>";
  echo "Pod $hostname is in $namespace project and was built from $github. <br>";

  phpinfo();
?>
