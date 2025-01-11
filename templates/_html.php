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
                    <section class='wrapper-container'>
                            $pageData->content
                    </section>
                </main>
                <footer>
                    <p class='my-name'>Keys</p>
                    <p>Copyright <small>&copy; </small>2025</p>
                </footer>
            </body>
        </html>
        ";
?>