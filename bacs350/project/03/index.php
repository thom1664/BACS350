<?php

    /*
        render_page -- build a page with custom settings
    */

//                    
    function render_page($site_title, $page_title, $content) {
        
        return '
            <!DOCTYPE html>
            <html lang="en">
                <head>

                    <meta charset="UTF-8">
                    <title>' . $page_title . '</title>

                    <link rel="icon" type="image/x-icon" href="/bacs350/favicon.ico">
                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
                    <link rel="stylesheet" href="/bacs350/unc.css">

                </head>
                <body>
                
                    <header>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h1>' . $site_title . '</h1>
                                    <h2>' . $page_title . '</h2>
                                </div>
                                <div class="logo col-sm-4">
                                    <div class="pull-right">
                                        <img class="img-rounded img-responsive" 
                                        src="/bacs350/images/Bear.200.png" 
                                        alt="UNC Bear" width="150px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>

                    <main>

                        ' . $content . '

                    </main>
                </body>
            </html>
        ';

    }

?>

<?php
    $site_title = 'UNC BACS 350';
    $page_title = 'Superhero Gallery';
    $content = render_card("Captain America", "Classic America hero archtype") .
        render_card("Iron Man", "Billionaire Entrpreneur");
    include 'views.php';
    echo render_page($site_title, $page_title, $content);
?>
