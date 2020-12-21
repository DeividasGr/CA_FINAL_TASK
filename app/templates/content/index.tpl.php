<section>
    <div class="header-img"></div>
    <h1 class="title"><?php print $data['title'] ?></h1>
    <div class="content-container">
        <div class="content-list">
            <img src="/media/images/Arena-GYM.png" alt="">
            <h3>Lorum ipsum</h3>
            <p>kasdgkahsdkjasdkbasdk</p>
        </div>
        <div class="content-list">
            <img src="/media/images/Arena-GYM.png" alt="">
            <h3>Lorum ipsum</h3>
            <p>kasdgkahsdkjasdkbasdk</p>
        </div>
        <div class="content-list">
            <img src="/media/images/Arena-GYM.png" alt="">
            <h3>Lorum ipsum</h3>
            <p>kasdgkahsdkjasdkbasdk</p>
        </div>
    </div>
</section>
<section class="map">
    <iframe frameborder="0" scrolling="no"  src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=sauletekio%20al%2015+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
</section>
<footer class="footer">
    <p>&copy; 2020. Deividas Gruzdzevicius, all rights reserved.</p>
</footer>
<!--<h2 class="heading">--><?php //print $data['heading'] ?><!--</h2>-->

<!-- All the pizza items will be generated by JS in this container -->
<section id="pizza-grid-container"></section>

<!-- Create form can be pre-rendered -->
<?php if (isset($data['forms']['create'])): ?>
    <div class="create-form-wrapper">
        <?php print $data['forms']['create']; ?>
    </div>
<?php endif; ?>

<!-- Update Modal (Popup)-->
<?php if (isset($data['forms']['update'])): ?>
    <div id="update-modal" class="modal">
        <div class="wrapper">
            <span class="close">&times;</span>
            <?php print $data['forms']['update']; ?>
        </div>
    </div>
<?php endif; ?>

<?php foreach ($data['links'] as $link): ?>
    <?php print $link; ?>
<?php endforeach; ?>

