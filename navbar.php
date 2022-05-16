            <nav class="navbar navbar-expand-lg shadow-lg p-3 mb-5 rounded">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.html">
                        <img src="img/picture.jpg" alt="" width="30" height="24">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <?php function makeLink($id, $text) { ?>
                            <?php global $selected; ?>
                            <li class="nav-item">
                                <a class="nav-link<?php if($selected == $id) { ?> active<?php } ?>" aria-current="page" href="<?php echo $id; ?>.html"><?php echo $text; ?></a>
                            </li>
                            <?php } ?>
                            <?php makeLink('cv', 'CV'); ?>
                            <?php makeLink('teaching', 'TEACHING'); ?>
                            <?php makeLink('aoi', 'AOI'); ?>
                            <?php makeLink('email', 'EMAIL'); ?>
                            <?php makeLink('social', 'SOCIAL'); ?>
                        </ul>
                    </div>
                </div>
            </nav>
