<?php
    (string) $skeletonPage = "";
    (string) $page = "";
    $defaultNavigation = "
        <nav>
            <ul>
                <li><a class='active' href='index.php?page=home'>Home</a>|</li>
                <li><a href='index.php?page=about'>About</a>|</li>
                <li><a href='index.php?page=contact'>Contact</a>|</li>
                <li><a href='index.php?page=projects'>Projects</a>|</li>                            
            </ul>
        </nav>
    ";
    
    require_once "classes/PageData.class.php";
    $pageData = new PageData();
    $pageData->title ="My-portfolio-site";
    $pageData->content = "<h2>This is the home homepage</h2>";
    $pageData->css = "<link rel='stylesheet' href='css/style.css'>";
    $pageData->navigation = $defaultNavigation;

    if(isset($_GET['page'])) {
        $currentPage = $_GET['page'];
        if($currentPage == "home") {
            $pageData->navigation = $defaultNavigation;
            $pageData->content = "<h2>This is the home homepage</h2>";
        } else {
                if($currentPage == "about" | $currentPage == "team" | $currentPage == "projects" | $currentPage == "contact") {
                    require_once "views/$currentPage.php";
                    $pageData->content = $page;
                    $pageData->navigation = $navigation;
                } else {
                    $pageData->navigation = $defaultNavigation;
                    $pageData->content = "<h2>404: Page cannot be found :(</2>";
                }
        }
    } else {
        $currentPage = "projects";
        require_once "views/$currentPage.php";
        $pageData->content = $page;
    }

    include_once "templates/_html.php";
    
    echo $skeletonPage;
?> 