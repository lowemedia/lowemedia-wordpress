<!DOCTYPE html>
<html>
    <head>
        <title><?php wp_title('&laquo', true, 'right'); ?> <?php bloginfo('name'); ?></title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
        <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" />
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.10.2.min.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="Content-Language" content="en-GB">
        <style>
            @font-face {
                font-family: 'alexisregular';
                /* src: url('/fonts/alex.woff-webfont.eot');
                src: url('/fonts/alex.woff-webfont.eot?#iefix') format('embedded-opentype'),
                url('/fonts/alex.woff-webfont.woff') format('woff'),
                url('/fonts/alex.woff-webfont.ttf') format('truetype'),
                url('/fonts/alex.woff-webfont.svg#alexisregular') format('svg');*/
                src: url('fonts/alex.woff-webfont.woff') format('woff'),
                url('fonts/alex.woff-webfont.ttf') format('truetype');
                font-weight: normal;
                font-style: normal;
            }
            body {
                font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;
                font-size: 100%;
                margin: 0;
                padding: 5px;
            }
            
            header {
                width: 100%;
                background-image: -moz-linear-gradient(top, #161a1d, #252525);
                background-image: -ms-linear-gradient(top, #161a1d, #2b2b2b);
                background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#161a1d), to(#2b2b2b));
                background-image: -webkit-linear-gradient(top, #161a1d, #2b2b2b);
                background-image: -o-linear-gradient(top, #161a1d, #2b2b2b);
                background-image: linear-gradient(top, #161a1d, #2b2b2b);
                /*For IE7-8-9*/ 
                filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#161a1d', endColorstr='#2b2b2b');
                border-radius: 5px 5px 0px 0px; 
            }
            
            
            header h1 {
                padding: 5px 25px; 
                margin: 0px 10px;
                color: #ccc;
                height: 25px;
                line-height: 15px;
            }

            .company {
                font-family: alexisregular;
                font-size: 1.2em;
                font-weight: normal;    
                
            }
            
            footer {
                background-image: -moz-linear-gradient(top, #252525, #161a1d);
                background-image: -ms-linear-gradient(top, #161a1d, #2b2b2b);
                background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#161a1d), to(#2b2b2b));
                background-image: -webkit-linear-gradient(top, #161a1d, #2b2b2b);
                background-image: -o-linear-gradient(top, #161a1d, #2b2b2b);
                background-image: linear-gradient(top, #161a1d, #2b2b2b);
                /*For IE7-8-9*/ 
                filter: progid:DXImageTransform.Microsoft.gradient(GradientType=0,startColorstr='#161a1d', endColorstr='#2b2b2b');
                border-radius: 0px 0px 5px 5px; 
                margin: 0;
                padding: 10px;
            }
            footer p {
                margin:0;
                padding: 0;
                font-size: 0.7em;
                line-height: 12px;
                color: #ccc;
            }
            
            div#projects {
                padding: 20px;
            }
            
            div.project {
                border: 1px solid #fff;
                width: 960px;
                height: 300px;
                overflow: hidden;
                margin: 5px;
            }
            
            div.content, div.content h2, div.content p {
                margin: 0;
                padding: 0;
            }
            
            div.content {
                position: relative;
                padding: 10px;
                color: #fff;
                top:-130px;
                left: 20px;
                z-index: 1000;
                background-color: rgba(0,0,0,0.65);
                height: 95px;
            }
            
            nav {
                border-top: 1px solid #a2a2a2;
                border-bottom: 1px solid #a2a2a2;
                padding: 10px 25px;
                margin: 0px 20px;
                height: 15px;
            }
            
            nav ul {
                list-style-type: none;
                padding: 0px;
                margin: 0px;
            }
            
            nav ul li {
                float:left;
                margin: 0px 10px 0px 0px;
                font-size: 0.85em;
            }
            
            nav ul li a {
                color: #fff;
                text-decoration: none;
            }
            
            nav ul li a:hover {
                color: #02f2f2;
            }
            
            
        </style>
        <?php 
        if (is_singular()):
            wp_enqueue_script('comment-reply');
        endif;
        wp_head();
        ?>
        
    </head>
    <body>
        <header>
            <h1><span class="company">Low-Emedia</span></h1>
        </header>
        <div style="background-color: #252525">            
