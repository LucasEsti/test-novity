<?php 
include __DIR__.'./../pdo/Formulaire.php';
?>

<?php
    if ($request->isMethod('post')) {
        $form = new Formulaire();
        $form->save($_POST['email'], $_POST['subject'], $_POST['message']);
?>
    <div>
        Message envoyé:
        à : <?php echo htmlspecialchars($_POST['email']); ?><br>
        Sujet: <?php echo htmlspecialchars($_POST['subject']); ?><br>
        Message: <?php echo htmlspecialchars($_POST['message']); ?><br>
    </div>
<?php 
    }
?>
