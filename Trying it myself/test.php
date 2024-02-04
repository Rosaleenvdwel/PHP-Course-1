
<?php

$pet1 = "Fish";
$pet2 = "Cat";
$pet3 = "Dog";

require 'lib/functions.php';
$pets = get_pets();



$pets = array_reverse($pets);

$cleverWelcomeMessage = "Hello there traveller";
$pupCount = count($pets);
$uppercase = strtoupper($cleverWelcomeMessage);
?>



<?php require 'layout/header.php'; ?>

<h1> <?php echo $uppercase ?></h1>

<p>
    Over <?php echo $pupCount ?> pet Friends!
</p>



<?php foreach ($pets as $cutePet){?>

<div class="col-md-4 pet-list-item">
    <h2><?php echo $cutePet['name']; ?></h2>

    <img src="/images/<?php echo $cutePet['filename']; ?>" class="img-rounded"/>


    <blockquote class="pet-details">
        <span class="label label-info"> <?php echo $cutePet['breed']; ?></span>
        <?php
    if(!array_key_exists('age', $cutePet) || $cutePet['age'] == ''){
        echo 'Unknown';
    }elseif ($cutePet['age'] == 'hidden'){
        echo'(contact owner for age)';
    } else{
        echo $cutePet['age'];
    }

        ?>

        <?php echo $cutePet['weight']; ?> lbs
    </blockquote>

    <p>
        <?php echo $cutePet['bio']; ?>
    </p>

</div>

    <?php require 'layout/footer.php'; ?>

<?php } ?>










