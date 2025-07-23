<?php get_header(); ?>

<h1 class="text-center text-purple-700 text-[4rem] font-sans font-bold mt-10 mb-0"> GenderQueer News Network </h1>
<h2 class="text-black text-center text-[2rem] font-sans font-bold mt-0 underline">Raising Awareness and Building Community</h2>
<div class="bg-[url('../gqnn-theme/images/hanging-out.jpg')] bg-top bg-size-[1920px 720px] bg-no-repeat h-[50rem] overflow-hidden">
    <div class="w-auto pl-10 pr-10 text-[1.2rem] p-1 mb-2 bg-[rgba(255,255,255,0.7)]">
        <p class=" text-center"> A hub for news and connection in the genderqueer community. Subscribe to keep up with the latest!
        </p>
    </div>
    <div class="flex justify-center mt-8 mb-200">
        <form> 
            <input type="email" placeholder="Enter email..." class="border-1 p-[0.15rem] mr-2">
            <input type="submit" value="Subscribe" class="text-white bg-purple-700 p-2 rounded-full">
        </form>
    </div>
</div>
<div class="mt-8 ">
    <h1 class="text-center text-5xl text-purple-700 mb-8 font-bold underline">UPDATES</h1>
    <div class="grid grid-cols-1 md:grid-cols-2">
        <div class="wrap-break-word ml-4 mr-4 mb-4 bg-[rgba(247,230,255,0.8)] border-purple-800 border-2 p-2">
         <h2 class="text-center text-purple-700 text-3xl pb-1">LATEST POSTS</h2>
            <hr class="border-purple-800 bg-purple-800"/>
            <?php 
                $posts = get_posts(['numberposts' => 3]);
                foreach($posts as $post){
                    setup_postdata($post);
                    $my_content = apply_filters('the_content', get_the_content());
                    // put newest 3 news stories here
                    echo "<div class='flex justify-start mt-2'><a href=" . get_the_permalink() . "><h1 class='pl-4 text-2xl pr-1 hover:text-purple-950'>" . get_the_title() . "</h1></a><p class='pt-[.5rem] text-gray-700'>  by " . get_the_author() . "</p></div>";
                    echo "<p class='pl-4 pt-1 pb-3 mt-0 pr-4 text-purple-800'>" . wp_trim_words($my_content, 30, '...') ." </p>";
                    echo "<hr class= border-purple-800 bg-purple-800 />";
                }
            ?>
        </div>
        <div class="wrap-break-word ml-4 mr-4 mb-4 bg-[rgba(247,230,255,0.8)] border-purple-800 border-2 pb-2 pt-2">
            <h2 class="text-center text-purple-700 text-3xl pb-1">LATEST NEWS</h2>
            <hr class="border-purple-800 bg-purple-800"/>
            <?php 
            $queryString = http_build_query([
                'api_token' => 'e',
                'categories' => 'politics, sports, health',
                'language' => 'en',
                'search' => ''
            ]);

                for ($i = 0; $i < 3; $i++){
                    // put newest 3 news stories here
                    echo "<div class='flex justify-start mt-2'><h1 class='pl-4 text-2xl pr-1'>Title</h1><p class='pt-[.5rem] text-gray-700'> by Author</p></div>";
                    echo "<p class='pl-4 pt-1 pb-3 mt-0 pr-4'> atesfsujdfhsdhiofdsgujsioafjdggjrgnfignfbisgnodjfdsgniojdfbjgiondijfnjdfiodgngifoksginjdfkj
                    oginfkjrgnjkfipgnjkfdginjkgingdfekojgnofijeigbjnwreofnbnrgjfiobjgognbnjffhlfijosafnijslajdijlsfndafanddj
                    afndgsjdlafsghlafnahsafnghbslagnhjsldijsafhuidg </p>";
                    if($i < 2){
                        echo "<hr class= border-purple-800 bg-purple-800 />";
                    }
                }
            ?>
        </div>
    </div>
     <p class="text-center mb-4 text-xl">Want to add to the discussion? Click <a href="#" class="text-purple-700 font-bold">HERE</a> to register.</p>
</div>

<?php get_footer(); ?>