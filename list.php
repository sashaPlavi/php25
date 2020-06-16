 <?php
    include 'inc/head.php'
    ?>

 <body>

     <?php
        include 'inc/nav.php'
        ?>

     <div class="container">
         <?php
            include "getPost.php";
            include "router.php";
            $path = getPath();
            $pathArr = explode('/', $path);
            $place = count($pathArr) - 1;
            echo $pathArr[$place];
            $posts = getPosts();
            //var_dump($posts);
            //<?php var_dump($posts[$i]['title'])  
            for ($i = 0; $i <= (count($posts) - 1); $i++) : ?>


             <div class="card" style="width: 80% ; background: #f4f4f4 ; padding: 1rem; margin:1rem;">
                 <div class="card-body">
                     <h5 class="card-title"><?php echo $posts[$i]['title'] ?></h5>

                     <p class="card-text"> <?php echo $posts[$i]['content'] ?></p>
                     <small>Created at <?php echo $posts[$i]['created_at'] ?></small>
                     <br>
                     <a href="#" class="card-link">Card link</a>
                     <a href="#" class="card-link">Another link</a>
                 </div>
             </div>
         <?php endfor; ?>

     </div>
 </body>

 </html