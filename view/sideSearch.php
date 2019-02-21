<div>
    <div class = "row">
        <section class="iq-features">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-12"></div>
                    <div class="col-lg-6 col-md-12">
                        <div class="holderCircle">
                            <div class="round"></div>
                            <div class="dotCircle">
                                <?php 
                                for($ti = 0; $ti<count($dataThemes);$ti++)
                                { ?>
                                    <span class="itemDot itemDot<?= $ti ?>" data-tab="<?= $ti ?>">
                                        <i class="<?= $dataThemes[$ti]->getThumbnail(); ?>"></i>
                                        <span class="forActive"></span>
                                    </span>
                                <?php 
                                }  ?>
                            </div>
                            <div class="contentCircle">
                                <?php  
                                for($ti = 0; $ti<count($dataThemes);$ti++)
                                { ?>
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
            </div>
        </section>
    </div>
    <div class="row">
        <form class="searchSide" method = 'post' action ='search'>  
            <div class="search__wrapper">
                <input type="text" name="search" placeholder="Tapez votre recherche..." class="search__field">
                <button type="submit" class="fa fa-search search__icon"></button>
            </div>
        </form>
    </div>
    <div class="row">
    <div class="slidecontainer">
  <input type="range" min="1" max="100" value="50" class="slider" id="myRange">
</div>
    </div>
</div>


