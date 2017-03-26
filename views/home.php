<?php include 'views/includes/header.php'; ?>

    <div class="container">

        <div class="kaamelott-banner jumbotron kaamelott-underline">
            <h1>C'EST PAS FAUX !</h1>
            <p>Les meilleurs citations de la serie-TV Kaamelott</p>
        </div>

        <div class="row">
            <?php foreach ($citations as $citation) { ?>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <div class="img-box">
                            <img class="kaamelott-underline" src="<?php echo $citation['image']; ?>" alt="<?php echo $citation['author']; ?>">
                        </div>
                        <div class="quote">
                            <blockquote>
                                <?php echo $citation['content']; ?>
                            </blockquote>
                            <p class="source">
                                <?php echo $citation['author']; ?>
                                <i><?php echo $citation['chapter']; ?></i>
                            </p>
                            <span class="hider"></span>
                        </div>
                        <p class="item-actions">
                            <a href="index.php?section=edit&id=<?php echo $citation['id']; ?>" class="btn btn-primary" role="button">Editer</a>
                            <a href="index.php?section=delete&id=<?php echo $citation['id']; ?>" class="btn btn-danger" role="button">Supprimer</a>
                            <a href="#" class="btn btn-kaamelott" role="button" data-toggle="modal" data-target="#<?php echo $citation['id']; ?>">Voir plus</a>
                        </p>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="<?php echo $citation['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <blockquote>
                                    <?php echo $citation['content']; ?>
                                </blockquote>
                                <p class="source">
                                    <?php echo $citation['author']; ?>
                                    <i><?php echo $citation['chapter']; ?></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

<?php include 'views/includes/footer.php'; ?>
