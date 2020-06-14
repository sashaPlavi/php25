<?php
include 'inc/head.php'
?>

<body>
    <?php
    include 'inc/nav.php'
    ?>


    <div id="wrap">
        <div class="container ">
            <div class="row">
                <form method="post" action="/php25/models/addPost.php">
                    <div class="form-group ">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title">
                        <small id="emailHelp" class="form-text text-muted">We'll share love.</small>
                    </div>
                    <div class="form-group ">
                        <label for="exampleInputEmail1">Content</label>
                        <input type="textarea" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="content">
                        <small id="emailHelp" class="form-text text-muted">We'll share all the best wishes.</small>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <?php

            ?>
        </div>
    </div>
</body>

</html