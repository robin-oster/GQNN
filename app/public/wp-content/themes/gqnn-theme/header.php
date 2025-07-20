<!DOCTYPE html>
<html>
<head>
    <?php wp_head(); ?>
</head>
<body class="p-[0] m-[0]">
<div class="w-auto h-[5rem] flex bg-pink-500 pl-4">
    <?php 
    $href = "#";
    $name = "<img src='http://gqnn.local/wp-content/uploads/2025/07/home.png' alt='Home'>";
    for ($i = 0; $i < 3; $i++){
        if ($i == 1){
            $name = "News";
        }
        if ($i == 2){
            $name = "Forums";
        }
        echo '<button type="button" href="' . $href . '" class="w-[4rem] h-[4rem] text-white font-bold bg-purple-700 hover:bg-purple-900 border-purple-900 
        border-6 rounded-full [1rem] mr-4 mt-2">' . $name . '</button>';
    }
    ?>
</div>

