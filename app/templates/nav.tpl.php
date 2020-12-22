<header>
    <div class="container">
        <nav>
            <ul>
                <div class="nav-left">
                    <?php foreach ($data['left'] as $link => $title): ?>
                        <li class="nav-item">
                            <a
                                    href="<?php print $link; ?>"
                                    class="nav-link<?php $link == $_SERVER['REQUEST_URI'] ?
                                        print '  nav-link-active' : null ?>"><?php print $title; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </div>
                <div class="nav-right">
                    <?php foreach ($data['right'] as $link => $title): ?>
                        <li class="nav-item">
                            <a
                                    href="<?php print $link; ?>"
                                    class="nav-link<?php $link == $_SERVER['REQUEST_URI'] ?
                                        print '  nav-link-active' : null ?>"><?php print $title; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </div>
            </ul>
        </nav>
    </div>
</header>

