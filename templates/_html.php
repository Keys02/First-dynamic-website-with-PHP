<?php
    $skeletonPage = "
        <!DOCTYPE html>
        <html lang='en-US'>
            <head>
                <title>$pageData->title</title>
                $pageData->css
                <link rel='icon' type='image/ico' href='../favicon.ico'>
            </head>

            <body>
                <header>
                    $pageData->navigation
                </header>
                <main>
                    $pageData->content
                </main>
                <footer>
                    <p class='my-name'>Keys</p>
                    <p>Copyright <small>&copy; </small>2025</p>
                </footer>
            </body>
        </html>
        ";
?>