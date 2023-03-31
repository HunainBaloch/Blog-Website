<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
    <style>
        #maincontainer{
            min-height: 443px;
        }
    </style>

    <title>Blog Website</title>
</head>

<body>
    <!-- <h1>Hello, world!</h1> -->
    <?php include 'dbconnect.php';?>
    <?php include 'header.php';?>
     
    <div class="container my-3" id="maincontainer">

        <h1>Search result for <em>"<?php echo $_GET['search']?> "</em></h1>
        <?php
                $noresults = true;
                $query = $_GET["search"];
                $sql = "SELECT * FROM threads WHERE MATCH (thread_tittle, thread_desc) against('$query')";                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                    $tittle = $row['thread_tittle'];
                    $desc = $row['thread_desc']; 
                    $thread_id= $row['thread_id'];
                    $url = "thread.php?threadid=". $thread_id;
                    $noresults = false;

                    //Display result
                    echo ' <div class="result">
                    <h3><a href="'. $url. '" class="text-dark">'. $tittle. '</a></h3>
                    <p>'. $desc .'</p>
                    </div>';
                }
                if ($noresults){
                    echo '<div class="jumbotron jumbotron-fluid">
                            <div class="container">
                                <p class="display-4">No Results Found</p>
                                <p class="lead"> Suggestions: <ul>
                                        <li>Make sure that all words are spelled correctly.</li>
                                        <li>Try different keywords.</li>
                                        <li>Try more general keywords. </li></ul>
                                </p>
                            </div>
                         </div>';
                }
        ?>
    </div>


    <?php include 'footer.php';?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>