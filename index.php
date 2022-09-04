<?php

echo __DIR__ ;
print basename($_SERVER['PHP_SELF'], ".php");

 include 'load.php'; ?>






<?=load_templates("head");?>


<?=load_templates("navbar");?>


<?=load_templates("home");?>


<?=load_templates("about");?>


<?=load_templates("skills");?>

<?=load_templates("projects");?>



<?=load_templates("contact");?>

<?=load_templates("form");?>


<?=load_templates("footer");?>

<!-- custom js file link  -->
<?load_templates("script");?>

</body>
</html>

