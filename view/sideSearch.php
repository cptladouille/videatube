<div class="sideSearchContainer">
    <form>
        <div class="containerCircle">
            <section class="iq-features">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="holderCircle">
                            <div class="round">
                                <div class="dotCircle">
                                    <?php
                                    for ($ti = 0; $ti < count($dataThemes); $ti++) { ?>
                                        <span class="itemDot itemDot<?= $ti ?>" data-tab="<?= $ti ?>">
                                            <i class="<?= $dataThemes[$ti]->getThumbnail(); ?>"></i>
                                            <span class="forActive"></span>
                                        </span>
                                        <?php
                                    } ?>
                                </div>
                            </div>
                            <div class="contentCircle">
                                <?php
                                for ($ti = 0; $ti < count($dataThemes); $ti++) { ?>
                                    <div class="CirItem title-box CirItem<?= $ti ?>">
                                        <h2 class="title"><span><?= $dataThemes[$ti]->getTitle(); ?></span></h2>
                                        <p><?= $dataThemes[$ti]->getDescription(); ?></p>
                                        <i class="<?= $dataThemes[$ti]->getThumbnail(); ?>"></i>
                                    </div>
                                    <?php
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class= "form-check-container">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="radio" id="R1" value="option1" checked>
                <label class="form-check-label" for="R1">
                    Toutes les vidéos
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="radio" id="R2" value="option2">
                <label class="form-check-label" for="R2">
                    Gratuites
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="radio" id="R3" value="option3">
                <label class="form-check-label" for="R3">
                    Payantes
                </label>
            </div>
            <br>
            <div class="form-group">
                <input type="text" class="form-control inputSearchArea" id="inputText" placeholder="Rechercher...">
            </div>
            <br>
            <div class="form-group">
                <input class ="btn ButtonSearch" type="submit" class="form-control"  value="Rechercher" >
            </div>
        </div>
    </form>
</div>