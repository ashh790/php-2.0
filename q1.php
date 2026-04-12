<?php 
$demo = "file.txt";

function reading($demo){
    if(file_exists($demo)){
        $data = file_get_contents($demo);
        echo $data;
    } else {
        echo "File does not exist";
    }
}

// reading($demo);
?>

<?php 
$demo = "file.txt";

function writeData($demo, $id, $name, $grade)
{
    $data = $id . "," . $name . "," . $grade . "\n";


    file_put_contents($demo, $data, FILE_APPEND);

    // Print output
    echo $data;
}

// Function call
// writeData($demo, 1, "Rahul", "B");
?>

<?php 
$demo = "file.txt";

function delete($demo){

if (file_exists($demo)){
    unlink ($demo);
}
echo"file deleted";
}

echo "file deleted";
?>
