<?php include __DIR__ . '/../partials/header.php'; ?>
<main class="container">
    <h1>Users</h1>
    <a href="/admin/users/create" class="btn btn-primary mb-3">New user</a>
    <?php if (!$users): ?>
        <p>No users found.</p>
    <?php else: ?>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Created</th>
                        <th scope="col">Updated</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <?php $id = rawurlencode((string) $user->id); ?>
                        <tr>
                            <td><?= htmlspecialchars((string) $user->id) ?></td>
                            <td><?= htmlspecialchars($user->name) ?></td>
                            <td><?= htmlspecialchars($user->email) ?></td>
                            <td><?= htmlspecialchars((string) $user->created_at) ?></td>
                            <td><?= htmlspecialchars((string) $user->updated_at) ?></td>
                            <td>
                                <a href="/admin/users/view?id=<?= $id ?>" class="btn btn-sm btn-info">View</a>
                                <a href="/admin/users/edit?id=<?= $id ?>" class="btn btn-sm btn-warning">Edit</a>
                                <form action="/admin/users/delete?id=<?= $id ?>" method="post" class="d-inline"
                                      onsubmit="return confirm('Delete this user?')">
                                    <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($token) ?>">
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
</main>
<?php include __DIR__ . '/../partials/footer.php'; ?>
