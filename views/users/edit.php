<?php
$editing = $user->id !== null;
$action = $editing ? '/admin/users/edit?id=' . rawurlencode((string) $user->id) : '/admin/users';
include __DIR__ . '/../partials/header.php';
?>
<main class="container">
    <h1><?= $editing ? 'Edit user' : 'New user' ?></h1>
    <?php if ($error !== null): ?>
        <p class="alert alert-danger" role="alert"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>
    <form action="<?= htmlspecialchars($action) ?>" method="post">
        <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($token) ?>">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input id="name" name="name" type="text" class="form-control" required maxlength="1024"
                   value="<?= htmlspecialchars((string) $user->name) ?>">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input id="email" name="email" type="email" class="form-control" required maxlength="255"
                   value="<?= htmlspecialchars((string) $user->email) ?>">
        </div>
        <?php if (!$editing): ?>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input id="password" name="password" type="password" class="form-control"
                       autocomplete="new-password" required maxlength="72">
            </div>
        <?php endif; ?>
        <button type="submit" class="btn btn-primary"><?= $editing ? 'Save changes' : 'Create user' ?></button>
        <a href="/admin/users" class="btn btn-secondary">Cancel</a>
    </form>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>
