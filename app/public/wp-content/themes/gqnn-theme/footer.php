<?php wp_footer();?>
<div class="w-auto h-[8vh] flex justify-end text-center align-middle bg-blue-500">
    <?php 
        $href = "#";
        $name = "Contact Us";
        for ($i = 0; $i < 2; $i++){
            if ($i == 1){
            $name = "Private Policy";
        }
        echo '<a href="' . $href . '" class="text-blue-50 text-[1rem] content-center font-bold underline mr-4">' . $name . '</a>';
    } 
    ?>
</div>
</body>
</html>