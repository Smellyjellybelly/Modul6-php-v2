<?php 

// en variabel deklareras med inledande $
$name = "Dick Richards";

echo $name;

// variablers namn skrivs som snake_case i PHP, små bokstäver a-z, understreck mellan orddelar
// snake_case
// kebab-case
// camelCase
// PascalCase

// ett förnamn
$first_name = "Fisen";
$fname = "Fisa";

// ett efternamn
$last_name = "Fisberg";
$lname = "Fisson";

// kontrollera vilken datatyp som en variabel har
// gettype
echo "<br>";
echo gettype($first_name);
echo "<br>";

// strängar slås ihop med en punkt
echo "Variabeln med namnet last_name: <b>$last_name</b>, har datatypen:" . gettype($last_name);

// en variabel med namnet comment 
$comment = "PHP är ju kul";

echo "<br>";
// hur många tecken har variabeln - strlen
$number_of_characters = strlen($comment);

echo "Kommentaren <i>$comment</i> har $number_of_characters tecken";

// uppgift 
// för att valideraen variabel kan olika strängmetoder användas
// gör något vettigt med följande metoder
// ta bort eventuella inledande mellanslag med trim
// räkna ord med str_word_count
// repetera eb sträng med str_repeat
// ersätt ett ord i en mening med string_replace




?>