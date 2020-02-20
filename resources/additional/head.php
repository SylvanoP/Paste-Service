<?php

    if(isset($_COOKIE['theme'])){
        $theme = $_COOKIE['theme'];
    } else {
        $theme = 'dark';
        $helper->setCookie('theme',$theme,'864000','/');
    }

?>
<!doctype html>
<html class="scroll-smooth" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $currPageName; ?> | <?= $helper->siteName(); ?></title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <link rel="stylesheet" href="<?= $helper->cdnUrl(); ?>css/grayshift.min.css">
    <link rel="stylesheet" href="<?= $helper->cdnUrl(); ?>css/shoutout.min.css">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" integrity="sha384-Mujw/rYMLaAmNKgBlyiHh/Vc+p4UU7I/lfQl/X4pICrFJguheK7vZjZmZyTix1HM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8.11.7/dist/sweetalert2.all.min.js" integrity="sha256-n/1OVXs6H2e+wnqINi4kU/UgJyp2OVCT5FHbGbqRqYc=" crossorigin="anonymous"></script>

    <?php
    if(isset($_POST['changeToDark'])){
        $theme = 'dark';
        $helper->setCookie('theme',$theme,'864000','/');
//        echo sendInfo('Deine Codeansicht wurde geändert');
    }

    if(isset($_POST['changeToLight'])){
        $theme = 'light';
        $helper->setCookie('theme',$theme,'864000','/');
//        echo sendInfo('Deine Codeansicht wurde geändert');
    }
    ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.19.0/prism.min.js" integrity="sha256-YZQM6/hLBZYkb01VYf17isoQM4qpaOP+aX96hhYrWhg=" crossorigin="anonymous"></script>
    <?php if($theme == 'dark'){ ?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.19.0/themes/prism-tomorrow.min.css" integrity="sha256-xevuwyBEb2ZYh4nDhj0g3Z/rDBnM569hg9Vq6gEw/Sg=" crossorigin="anonymous" /></head>
    <?php } else { ?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.19.0/themes/prism.min.css" integrity="sha256-cuvic28gVvjQIo3Q4hnRpQSNB0aMw3C+kjkR0i+hrWg=" crossorigin="anonymous" />
    <?php } ?>
<body>