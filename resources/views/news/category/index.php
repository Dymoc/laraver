<h2>Список категорий</h2>

<?php foreach ($categoryes as $category): ?>
    <div>
        <h3><a href="category/<?=$category?>"><?=$category?></a></h3>
    </div>
<?php endforeach;?>
