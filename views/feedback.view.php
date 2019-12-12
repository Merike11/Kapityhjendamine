<?php require('partials/head.php'); ?>

<?php if(!empty($feedback)): ?>
    <ul>
    <?php foreach($feedback as $feedback) : ?>
	    <li><?php echo $feedback->subject; ?>(<?php echo $feedback->added ?>)</li>
    <?php endforeach; ?>
    </ul>
<?php endif; ?>

<h1>Tagasiside</h1>

<table border="1">
  <tr>
      <th>Sisu</th>
      <th>Lisatud</th>
      <th>Muudetud</th>
      <th>Kustutatud</th>
  </tr>
  
<form method="POST" action="/add-feedback">
    <input type="text" name="subject" placeholder="Sisu">
    <textarea name="body" class="form-control"></textarea>
    <button class="btn btn-success" name="action" value="send">Saada</button>
</form>
<?php require('partials/footer.php'); ?>