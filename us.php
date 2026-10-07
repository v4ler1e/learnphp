<?php

// if(isset($title)) {
//   echo $title;
// } else {
//   echo 'Default title';
// }

// echo isset($title) ? $title : 'Default title';
// echo $title ?? 'Default title';

$posts = [
  [
   'title' => 'Some U.S title 1',
   'date' => 'January 1, 2021',
   'author' => 'Pets',
   'body' => 'Some U.S body 1',
  ],
  [
   'title' => 'Some U.S title 2',
   'date' => 'January 4, 2021',
   'author' => 'Jaanus',
   'body' => 'Some U.S body 2',
  ],
  [
   'title' => 'Some U.S title 3',
   'date' => 'January 6, 2021',
   'author' => 'Tseburaska',
   'body' => 'Some U.S body 3',
  ],
  [
   'title' => 'Some U.S title 4',
   'date' => 'January 8, 2021',
   'author' => 'Gena',
   'body' => 'Some U.S body 4',
  ],
];
?>

<?php include __DIR__ . '/partials/header.php'; ?>

<main class="container">
  <div class="row g-5">
    <div class="col-md-8">
      <?php include __DIR__ . '/partials/posts.php'; ?>
    </div>
    <div class="col-md-4">
      <?php include __DIR__ . '/partials/sidebar.php'; ?>
    </div>
  </div>
</main>
<?php include __DIR__ . '/partials/footer.php'; ?>