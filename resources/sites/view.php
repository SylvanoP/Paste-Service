<?php
$currPage = 'front_Startseite';
include 'app/controller/PageController.php';
$id = $helper->protect($_GET['id']);
$code = $helper->protect($_GET['code']);

if(empty($id)){
    header('Location: '.$helper->url());
    die();
}
?>
<main>
    <div class="py-11">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="card-group mb-5">
                        <div class="d-flex align-items-center p-5">
                            <h2 class="flex-grow-1 mr-5 lead">
                                <?= $helper->protect($paste->getData($id,'title')); ?>
                            </h2>
                        </div>

                        <div class="collapse show" id="widgetOne">
                            <div class="card rounded-bottom">
                                <div class="card-body">

                                    <?php if(!empty($code)){ ?>
                                    <ol>
                                        <?php
                                        $paste_array = explode("\n", $paste->getData($id,'paste'));
                                        foreach ($paste_array as $item){
                                            echo '<li><pre style="margin-bottom: -10px!important; margin-top: -10px!important; overflow-x: hidden;"><code class="language-css" style="word-break: break-word; white-space: pre-wrap; -moz-white-space: pre-wrap;">'.$helper->protect($item).'</code></pre></li>';
                                        }
                                        ?>
                                    </ol>
                                    <?php } else { ?>
                                    <ol>
                                        <?php
                                        $paste_array = explode("\n", $paste->getData($id,'paste'));
                                        foreach ($paste_array as $item){
                                            echo '<li><pre style="word-break: break-word; white-space: pre-wrap; -moz-white-space: pre-wrap; overflow-x: hidden;">'.$helper->protect($item).'</pre></li>';
                                        }
                                        ?>
                                    </ol>
                                    <?php } ?>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>