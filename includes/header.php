<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VideoTube</title>

    <!--bootstrap css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--project css-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <!--jquery cdn-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!--JS, Popper.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>

    <script src="assets/js/commonActions.js"></script>

</head>
<body>

<div id="pageContainer">

    <div id="mastHeadContainer">
        <button class="navShowHide">

            <img src="assets/images/icons/menu.png" alt="Menu icon">

        </button>

        <a class="logoContainer" href="index.php">

            <img src="assets/images/icons/VideoTubeLogo.png" title="Home page of VideoTube" alt="Site logo">

        </a>

        <div class="searchBarContainer">

            <form action="search.php" method="GET">
                <input type="text" class="searchBar" name="term" placeholder="Search...">
                <button class="searchButton">
                    <img src="assets/images/icons/search.png" alt="Search button">
                </button>
            </form>

        </div>

        <div class="rightIcons">

            <a href="upload.php">
                <img src="assets/images/icons/upload.png" alt="Upload button">
            </a>

            <a href="#">
                <img class="upload" src="assets/images/profilePictures/default.png" alt="Profile picture">
            </a>

        </div>

    </div>

    <div id="sideNavContainer" style="display: none">

    </div>

    <div id="mainSectionContainer">

        <div id="mainContentContainer">