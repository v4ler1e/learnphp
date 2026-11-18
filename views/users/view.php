<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
    <h1>User details</h1>
    <dl class="row">
        <dt class="col-sm-3">ID</dt>
        <dd class="col-sm-9"><?= htmlspecialchars((string) $user->id) ?></dd>
        <dt class="col-sm-3">Name</dt>
        <dd class="col-sm-9"><?= htmlspecialchars($user->name) ?></dd>
        <dt class="col-sm-3">Email</dt>
        <dd class="col-sm-9"><?= htmlspecialchars($user->email) ?></dd>
        <dt class="col-sm-3">Created</dt>
        <dd class="col-sm-9"><?= htmlspecialchars((string) $user->created_at) ?></dd>
        <dt class="col-sm-3">Updated</dt>
        <dd class="col-sm-9"><?= htmlspecialchars((string) $user->updated_at) ?></dd>
    </dl>
    <a href="/admin/users/edit?id=<?= rawurlencode((string) $user->id) ?>" class="btn btn-warning">Edit</a>
    <a href="/admin/users" class="btn btn-secondary">Back to users</a>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>
