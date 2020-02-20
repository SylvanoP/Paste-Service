<?php
$currPage = 'Raw Code';
include 'app/controller/PageController.php';
$id = $helper->protect($_GET['id']);
$code = $helper->protect($_GET['code']);

if(empty($id)){
    header('Location: '.$helper->url());
    die();
}
?>

<?php if(!empty($code)){ ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.19.0/prism.min.js" integrity="sha256-YZQM6/hLBZYkb01VYf17isoQM4qpaOP+aX96hhYrWhg=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.19.0/themes/prism.min.css" integrity="sha256-cuvic28gVvjQIo3Q4hnRpQSNB0aMw3C+kjkR0i+hrWg=" crossorigin="anonymous" />

    <pre><code class="language-<?= $code; ?>"><?= $helper->protect($paste->getData($id,'paste')); ?></code></pre>
<?php } else { ?>
    <?= $helper->nl2br2($helper->protect($paste->getData($id,'paste'))); ?>
<?php } ?>
