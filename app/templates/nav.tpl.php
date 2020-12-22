<header>
    <div class="container">
        <nav>
            <ul>
                <div class="nav-left">
                    <?php foreach ($data['left'] as $title => $link): ?>
                        <li class="nav-item">
                            <a href="<?php print $title; ?>" class="nav-link"><?php print $link; ?></a>
                        </li>
                    <?php endforeach; ?>
                </div>
                <div class="nav-right">
                    <?php foreach ($data['right'] as $title => $link): ?>
                        <li class="nav-item">
                            <a href="<?php print $title; ?>" class="nav-link"><?php print $link; ?></a>
                        </li>
                    <?php endforeach; ?>
                </div>
            </ul>
        </nav>
    </div>
</header>

