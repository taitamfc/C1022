<?php
$books = ['Van','Su','Dia'];
?>
<ul>
    <?php
        foreach( $books as $book ){
            echo '<li>'. $book .'</li>';
        }
    ?>
</ul>

<ul>
    <?php foreach( $books as $book ){  ?>
    <li> <?php echo $book; ?> </li>
    <?php } ?>
</ul>

<ul>
    <?php foreach( $books as $book ): ?>
    <li> <?php echo $book; ?> </li>
    <?php endforeach; ?>
</ul>
