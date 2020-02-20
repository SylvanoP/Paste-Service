<?php
$currPage = 'front_Startseite';
include 'app/controller/PageController.php';

if(isset($_POST['createPaste'])){
    $error = null;

    if(empty($_POST['title'])){
        $error = 'Bitte gebe einen Titel an.';
    }

    if(empty($_POST['paste'])){
        $error = 'Bitte gebe einen Text an.';
    }

    if(empty($_POST['public'])){
        $error = 'Bitte wähle einen Status aus.';
    }

    if($_POST['csrf_token'] != $_SESSION['csrf_token']){
        $error = 'Ungültige Anfrage bitte versuche es erneut';
    }

    if(empty($error)){

        $uniqe_id = $helper->generateRandomString(rand(6, 8));

        $SQL = $db->prepare('INSERT INTO `entrys`(`uniqe_id`, `user_addr`, `title`, `paste`, `public`, `code`) VALUES (?,?,?,?,?,?)');
        $SQL->execute(array($uniqe_id, $user->get_ip_address(), $_POST['title'], $_POST['paste'], $_POST['public'], $_POST['code']));

        echo sendSuccess('Dein Paste wurde erfolgreich gespeichert');

    } else {
        echo sendError($error);
    }
}

?>
<main>
    <div class="py-11">
        <div class="container">

            <?php if(!empty($uniqe_id)){ ?>
            <div class="card-group mb-5 d-flex align-items-center p-5" style="background-color: #45963d;">
                <h2 class="flex-grow-1 mr-5 lead">
                    <?php

                    if(isset($_POST['code']) && !empty($_POST['code'])){
                        $link = $helper->url().$uniqe_id.'/'.$_POST['code'];
                    } else {
                        $link = $helper->url().$uniqe_id;
                    }

                    ?>
                    Deinen Paste findest du unter folgendem Link <a href="<?= $link; ?>"><?= $link; ?></a>
                </h2>
            </div>
            <?php } ?>

            <div class="row">
                <div class="col-xl-8">
                    <form method="post">

                        <input name="csrf_token" value="<?php $csrf_token = $helper->generateRandomString(25); echo $csrf_token; $_SESSION['csrf_token'] = $csrf_token; ?>" type="hidden">

                        <div class="row">
                            <div class="col-md-9">
                                <h1 class="mb-5 fs-sm">New Paste</h1>
                            </div>

                            <div class="col-md-3">
                                <button type="submit" name="createPaste" class="btn btn-sm btn-primary ml-4">Erstellen</button>
                            </div>
                        </div>

                        <label style="margin-bottom: 5px;">Titel</label>
                        <input class="form-control" name="title" placeholder="Titel">

                        <label style="margin-bottom: 5px; margin-top: 10px;">Programmiersprache</label>
                        <select class="form-control" name="code">
                            <option value="">Keine Präferenz</option>
                            <?php
                                foreach ($paste->getCodeOptions() as $item) {
                                    echo '<option value="'.$item['option'].'">'.$item['name'].'</option>';
                                }
                            ?>
                        </select>

                        <label style="margin-bottom: 5px; margin-top: 10px;">Öffentlicher Paste?</label>
                        <select class="form-control" name="public">
                            <option value="yes">Ja</option>
                            <option value="no">Nein</option>
                        </select>

                        <br>
                        <textarea class="form-control p-5 rounded" onkeyup="new do_resize(this);" rows="5" name="paste" placeholder="Hier könnte dein Paste text drin sein :)"></textarea>
                    </form>
                </div>
                <div class="col-xl-4">
                    <div class="sticky-lg-top z-index-lower" style="top: 9rem;">
                        <div class="card-group mb-5">
                            <div class="d-flex align-items-center p-5">
                                <h2 class="flex-grow-1 mr-5 lead">
                                    <a href="#">Public Recent Pastes</a>
                                </h2>
                            </div>
                            <div class="collapse show" id="widgetOne">
                                <div class="card rounded-bottom">
                                    <div class="card-body">
                                        <?php $i = 0; foreach ($paste->getLast() as $item) {
                                            if($item['public'] == 'yes'){
                                                if(is_null($item['code'])){
                                                    $link = $helper->url().$item['uniqe_id'];
                                                } else {
                                                    $link = $helper->url().$item['uniqe_id'].'/'.$item['code'];
                                                }
                                        ?>
                                            <div class="mb-5 ml-3">
                                                <a href="<?= $link; ?>"><?= mb_strimwidth($item['title'], 0, 26,'...'); ?></a><br>
                                                <small><?= $time->elapsedFromUNIX($time->getTimestamp($item['created_at'])); ?></small>
                                            </div>
                                            <?php if($i < 3){ echo '<hr>'; } ?>
                                        <?php $i++; } } ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>