<h2 class="title"><?php print $data['title'] ?></h2>

<?php print $data['table']; ?>


<?php if (isset($data['forms']['create'])): ?>
    <div>
        <?php print $data['forms']['create']; ?>
    </div>
<?php endif; ?>

<div class="nonuser-review">
    <?php if ($data['message']): ?>
        <p><?php print $data['message']; ?></p>
    <?php endif; ?>

    <?php foreach ($data['links'] as $link): ?>
        <span><?php print $link; ?></span>
    <?php endforeach; ?>
</div>

