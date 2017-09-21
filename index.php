<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
    <title>I ♥ RENATA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/croppie.css" rel="stylesheet" async="async"/>
    <link href="css/style.css" rel="stylesheet" async="async"/>
    <link href="css/animate.css" rel="stylesheet" async="async"/>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <script src="js/croppie.min.js" async="async"></script>
    <script src="js/app.js" async="async"></script>
    <script src="js/fb.js" async="async"></script>
</head>
<body>
<div id="wrapper">
    <div id="content">

        <a style="text-decoration: none" href="gallery.php"><h3 class="animated rubberBand ">I LOVE RENATA</h3></a>
        <div id="preview">
            <div id="crop-area">
                <img src="images/profile.png" id="profile-pic"/>
            </div>
            <img src="frames/frame-1.png" id="fg" data-design="0"/>
        </div>
        <p style="margin-top: 10px">
            <button id="download" disabled>SHARE WITH RENATA FAMILY</button>
        </p>
        <div id="status"></div>
        <div id="designs">
            <img class="design active" src="frames/frame-0.png" data-design="0"/>
            <img class="design" src="frames/frame-1.png" data-design="1"/>
            <img class="design" src="frames/frame-2.png" data-design="2"/>
            <img class="design" src="frames/frame-3.png" data-design="3"/>
            <img class="design" src="frames/frame-4.png" data-design="4"/>
            <img class="design" src="frames/frame-5.png" data-design="5"/>
            <img class="design" src="frames/frame-6.png" data-design="6"/>
            <img class="design" src="frames/frame-7.png" data-design="7"/>
            <img class="design" src="frames/frame-8.png" data-design="8"/>
            <img class="design" src="frames/frame-9.png" data-design="9"/>
            <img class="design" src="frames/frame-10.png" data-design="10"/>
            <img class="design" src="frames/frame-11.png" data-design="11"/>
            <img class="design" src="frames/frame-12.png" data-design="12"/>
            <img class="design" src="frames/frame-13.png" data-design="13"/>
            <img class="design" src="frames/frame-14.png" data-design="14"/>
            <img class="design" src="frames/frame-15.png" data-design="15"/>
            <img class="design" src="frames/frame-16.png" data-design="16"/>
            <img class="design" src="frames/frame-17.png" data-design="17"/>
            <img class="design" src="frames/frame-18.png" data-design="18"/>
            <img class="design" src="frames/frame-19.png" data-design="19"/>
        </div>


        <input style="margin-left: 22%;margin-top: 10px;max-width: 300px" class="" type="file" name="file"
               onchange="onFileChange(this)">

    </div>
</div>
</body>
</html>