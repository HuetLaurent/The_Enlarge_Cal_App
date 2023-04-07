<?php

    // Cal's variable

    $cal_body = "
        <div class='cal_img'>
            <img src='./assets/cal_middle.png'>
        </div>
    ";

    // Page

    echo "
        <!DOCTYPE html>

        <html>

        <head>

            <meta charset='utf-8'>
            <title>Test_PHP</title>
            <link rel='stylesheet' href='css_test.css'>

        </head>

        <body>

            <div class='main_div'>

                <div class='div_btn'>

                    <label>Enlarge the Cal :</label>
                    <button class='plus_btn' id='plus_btn'>+</button>
                    <button class='minus_btn' id='minus_btn'>-</button>

                </div>

                <div class='cal_div'>

                    <div class='cal_img'>

                        <img src='./assets/cal_end.png'>

                    </div>

                    <div class='cal_img' id='cal_event'>
                        
                    </div>

                    <div class='cal_img'>

                        <img src='./assets/cal_top.png'>

                    </div>

                </div>

            </div>

            <script src='./js_test.js' type='text/javascript'></script>
    
        </body>

        </html>
    ";

?>