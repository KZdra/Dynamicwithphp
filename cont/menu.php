<?php
if ((@$_GET['menu']=='home')or (@$_GET['menu']=='')) {require 'cont/home.php';}
//pront
elseif (@$_GET['menu']=='profil') {require 'cont/profil.php';}
elseif (@$_GET['menu']=='news') {require 'cont/news.php';}
elseif (@$_GET['menu']=='kontak') {require 'cont/kontak.php';}
elseif (@$_GET['menu']=='biodata') {require 'cont/biodata.php';}
?>