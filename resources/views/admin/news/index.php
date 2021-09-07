<h3>Панель администратора</h3>

<h2>Список новостей</h2>

<?php foreach ($newsList as $news): ?>
    <div>
        <h3><a href="/news/<?=$news['id']?>"><?=$news['title']?></a></h3>
        <p><?=$news['description']?></p>
    </div>
<?php endforeach;?>
