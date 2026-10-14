<?php include __DIR__ . '/partials/header.php'; ?>

<main class="container">

  <?php if(isset($_GET['name']) && isset($_GET['age'])): ?>
    <h1>Hello <?= $_GET['name'] ?? '' ?>! You are <?= $_GET['age'] ?? '' ?> years old!</h1>
  <?php endif ?>
  <form action="/forms" method="POST">
    <label for="name">Name:</label>
    <input name="name" type="text" id="name" placeholder="Your name">
    <label for="age">Age:</label>
    <input name="age" type="number" id="age" placeholder="Your age">
    <input type="submit" value="Send">
    <button>Send</button>
  </form>
</main>

<?php include __DIR__ . '/partials/footer.php'; ?>