<!DOCTYPE html>
<html>
<head>
    <?php wp_head(); ?>
</head>
<body class="p-[0] m-[0]">
<div class="w-auto h-[5rem] flex justify-center bg-pink-500 pl-4 sticky">
    <?php 
    $href = home_url();
    $imgPath = home_url("/wp-content/themes/gqnn-theme/images/home.svg");
    $name = "Home";
    for ($i = 0; $i < 5; $i++){
        if ($i == 1){
            $name = "About";
            $href = home_url("/about/");
        }
        if ($i == 2){
            $name = "News";
            $href = home_url("/news/");
        }
        if ($i == 3){
            $name = "Connect";
            $href = home_url("/connect/");
        }
        if ($i == 4){
            $name = "Shop";
            $href = home_url("/shop/");
        }
        echo '<a class="w-auto h-[2rem] mr-[2rem] text-white hover:text-pink-200 font-extrabold text-2xl bg-pink-500 border-0 mt-5 no-underline font-sans" href="' . $href . '">' . $name . '</a>';
    }
    ?>
</div>

