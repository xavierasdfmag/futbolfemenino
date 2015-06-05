<?php

    $host = 'localhost';
    $dbName = 'futbolfemenino_cosmo'; # Database name
    $username = 'root';
    $password = 'a2fN5VQ0rr';
    $prefix = ''; // e.g. cosmo_
    define('FOLDER', 'dev/featuring/'); // /subfolder
    $salt = ')[F9o74^S_^vIJew5fUy58k6xwzoq&8Gd7!>*iIx[/SJXt>ITWZyWW,cZX\i>1"rxp6W?k}$ZTg=Np*9b864*CF@-f6*l+ZBc]j87?t`AN%h0qp`kRrWQ{CV`m0';
    $developerMode = false; // Switching this to true prevents minification/combination of JS/CSS files for better error reporting

    $pdo = new PDO("mysql:host=$host;dbname=$dbName;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $username = null;

?>
