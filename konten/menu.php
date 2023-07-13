<?php
if ((@$_GET['menu']=='home')or (@$_GET['menu']=='')) {require 'konten/home.php';}
//pront
elseif (@$_GET['menu']=='profil') {require 'konten/profil.php';}
elseif (@$_GET['menu']=='news') {require 'konten/news.php';}
elseif (@$_GET['menu']=='kontak') {require 'konten/kontak.php';}
elseif (@$_GET['menu']=='biodata') {require 'konten/biodata.php';}
elseif (@$_GET['menu']=='inbox') {require 'konten/inbox.php';}
elseif (@$_GET['menu']=='abtme') {require 'konten/abtme.php';}
elseif (@$_GET['menu']=='git') {require 'konten/git.php';}
elseif (@$_GET['menu']=='web') {require 'konten/web.php';}
elseif (@$_GET['menu']=='lelang') {require 'konten/lelang.php';}
elseif (@$_GET['menu']=='skl') {require 'konten/skl.php';}
elseif (@$_GET['menu']=='ltree') {require 'konten/ltree.php';}
elseif (@$_GET['menu']=='btm') {require 'konten/btm.php';}
elseif (@$_GET['menu']=='kntk') {require 'konten/kntk.php';}
elseif (@$_GET['menu']=='plst') {require 'konten/plst.php';}
?>