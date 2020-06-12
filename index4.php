<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="wrap">
        <div class="container ">
            <div class="row">
                <form method="post" action="user.php">
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
            // get_all_records();
            ?>
        </div>
    </div>
</body>

</html