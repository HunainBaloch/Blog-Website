<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Blog Website</title>
</head>

<body>
    <!-- <h1>Hello, world!</h1> -->
    <?php include 'dbconnect.php';?>
    <?php include 'header.php';?>

    <div class="container my-4">
        <div class="row featurette d-flex justify-content-center align-items-center">
            <div class="col-md-7">
                <h2 class="featurette-heading">This is coding blog <span class="text-muted">It'll blow your
                        mind.</span></h2>
                <p class="lead">A platform for developers, that provides you with a personalised 
                    curation service on programming topics. 
                    Use it to write and read quality articles on programming. 
                    Not for content-marketing disguised as programming tutorials.</p>
            </div>
            <div class="col-md-5">
                <img class="img-fluid" src="https://source.unsplash.com/400x400/?coding,code" alt="">
            </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Web Log (Blog) <span class="text-muted">It'll blow your
                        mind.</span></h2>
                <p class="lead">A weblog (blog) is a website that contains a log or diary of information, specific topics or opinions. A blog author (blogger) links to stories or other websites with relevant and interesting information.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="img-fluid" src="https://source.unsplash.com/400x400/?programming,web" alt="">
            </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
            <div class="col-md-7">
                <h2 class="featurette-heading">Blog of coding <span class="text-muted">It'll blow your
                        mind.</span></h2>
                <p class="lead">This is coding.blog. AI- driven personalised, curation service for quality programming content. A platform for developers, that provides you with a personalised curation service on programming topics. Use it to write and read quality articles on programming.</p>
            </div>
            <div class="col-md-5">
                <img class="img-fluid" src="https://source.unsplash.com/400x400/?web development,coding" alt="">
            </div>
        </div>
    </div>

   <?php include 'footer.php';?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>