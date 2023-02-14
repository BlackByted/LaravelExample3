@props(['obj'])
<article>
    <h1><?= $obj->title ?></h1>
    <div>
        <div>
            <label>User</label>
            <label for="name"><?= $obj->user->name ?></label>
        </div>
        <div>
            <label>Status:</label>
            <label for="status"><?= $obj->complet ?></label>
        </div>
    </div>
</article>
