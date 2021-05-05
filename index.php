<?php 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/autoload.php';
    include("info.php");

    $mail = new PHPMailer(true);
if(isset($_POST['submit'])){
    try {
        $user = getenv('USERNAME');
        $pass = getenv('PASSWORD');
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host =      "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = $user;
        $mail->Password = $password;
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom($email, $name);
        $mail->addAddress('trhomberg3@gmail.com', 'Thomas');

        $mail->wordwrap = 50;
        $mail->isHTML(true);
        $mail->Subject = "Message sent from contact form";
        $mail->Body = $message;
        
        $mail->send();
        header("Location: index.php");
        exit();
    } catch (Exception $e) {
        echo "Message has not been sent.";
        echo "Mailer error: " . $mail->ErrorInfo;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/styles.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
    <title>Portfolio</title>
</head>
<body>

    <header class='container'>
        <nav class='navbar'>
            <img src="assets/images/TR-logo.svg" alt="Logo">
            <ul class='nav-ul'>
                <li><a href="#about" class='nav-link'>About Me</a></li>
                <li><a href="#projects" class='nav-link'>Projects</a></li>
                <li><a href="#contact-form" class='nav-link'>Contact</a></li>
            </ul>
        </nav>

        <div class='hero'>
            <div class='hero-text'>
                <h1>Design.</h1>
                <h1>Develop.</h1>
                <h1>Implement.</h1>
         
                <h4>Professional Front-end Development.</h4>
                <button type='button' class='hero-button'>Resume</button>
            </div>

            <div class='hero-vector'>
                <svg xmlns="http://www.w3.org/2000/svg" width="810.351" height="647.811" viewBox="0 0 810.351 647.811">
                    <g id="hero-image" transform="translate(-998.921 -97.9)">
                      <g id="undraw_building_websites_i78t" transform="translate(998.921 134)">
                        <path id="Path_1" data-name="Path 1" d="M680.374,136.233c6.951,14.792-7.778,18.982-24.65,26.91s-29.5,16.593-36.449,1.8-12.591-44.151,11.278-55.367C655.244,97.974,673.424,121.441,680.374,136.233Z" transform="translate(-213.393 -106.46)" fill="#2f2e41"/>
                        <circle id="Ellipse_1" data-name="Ellipse 1" cx="22.713" cy="22.713" r="22.713" transform="translate(409.845 13.435)" fill="#ffb8b8"/>
                        <path id="Path_2" data-name="Path 2" d="M763.735,252.049c-.786-1.027-1.572-2.035-2.367-3.015q-1.54-1.914-3.1-3.708c-11.772-13.585-24.294-22.139-38.082-23.055h-.018l-.2-.018L692.49,249.034l-9.34,9.1.2.5,5.04,12.549H776.7a217.148,217.148,0,0,0-12.965-19.134Z" transform="translate(-218.651 -115.171)" fill="#2f2e41"/>
                        <path id="Path_3" data-name="Path 3" d="M621.716,152.49h0l8.131-3.821-1.133-11.729,5.437,9.707,3.886-1.826-.661-6.842,3.172,5.662,28.875-13.569h0a24.044,24.044,0,0,0-31.987-11.535l-4.185,1.967a24.044,24.044,0,0,0-11.535,31.987Z" transform="translate(-213.857 -107.197)" fill="#2f2e41"/>
                        <path id="Path_4" data-name="Path 4" d="M785.569,575.928H311.31a15.276,15.276,0,0,1-15.259-15.259V275.7a11.191,11.191,0,0,1,11.179-11.179H789.455a11.385,11.385,0,0,1,11.372,11.372V560.669a15.276,15.276,0,0,1-15.259,15.259Z" transform="translate(-189.53 -118.351)" fill="#f2f2f2"/>
                        <path id="Path_5" data-name="Path 5" d="M327.348,562.677H772.014a14.8,14.8,0,0,0,14.8-14.8V306.009a14.8,14.8,0,0,0-14.8-14.8H327.348a14.8,14.8,0,0,0-14.8,14.8V547.881A14.8,14.8,0,0,0,327.348,562.677Z" transform="translate(-190.771 -120.359)" fill="#fff"/>
                        <path id="Path_6" data-name="Path 6" d="M800.6,273.786H295.82v-7.768a15.327,15.327,0,0,1,15.314-15.3H785.283a15.327,15.327,0,0,1,15.314,15.3Z" transform="translate(-189.512 -117.312)" fill="#d11515"/>
                        <circle id="Ellipse_2" data-name="Ellipse 2" cx="3.961" cy="3.961" r="3.961" transform="translate(130.178 140.999)" fill="#fff"/>
                        <circle id="Ellipse_3" data-name="Ellipse 3" cx="3.961" cy="3.961" r="3.961" transform="translate(145.214 140.999)" fill="#fff"/>
                        <circle id="Ellipse_4" data-name="Ellipse 4" cx="3.961" cy="3.961" r="3.961" transform="translate(160.249 140.999)" fill="#fff"/>
                        <path id="Path_7" data-name="Path 7" d="M580.025,523.375H540.26a8.8,8.8,0,0,1-8.785-8.785V474.825a8.8,8.8,0,0,1,8.785-8.785h39.765a8.8,8.8,0,0,1,8.785,8.785V514.59A8.8,8.8,0,0,1,580.025,523.375ZM540.26,467.889a6.944,6.944,0,0,0-6.936,6.936V514.59a6.944,6.944,0,0,0,6.936,6.936h39.765a6.944,6.944,0,0,0,6.936-6.936V474.825a6.943,6.943,0,0,0-6.936-6.936Z" transform="translate(-207.24 -133.511)" fill="#ccc"/>
                        <path id="Path_8" data-name="Path 8" d="M573.293,513.181H549.249a2.777,2.777,0,0,1-2.774-2.774V480.814a2.777,2.777,0,0,1,2.774-2.774h17.422a2.781,2.781,0,0,1,1.738.612l6.622,5.321a2.76,2.76,0,0,1,1.037,2.162v24.272a2.777,2.777,0,0,1-2.774,2.774Zm-24.044-33.292a.926.926,0,0,0-.925.925v29.593a.926.926,0,0,0,.925.925h24.044a.926.926,0,0,0,.925-.925V486.135a.92.92,0,0,0-.345-.721l-6.622-5.322a.926.926,0,0,0-.579-.2Z" transform="translate(-208.369 -134.414)" fill="#ccc"/>
                        <path id="Path_9" data-name="Path 9" d="M569.2,491.889H554.4a.925.925,0,0,1,0-1.85h14.8a.925.925,0,1,1,0,1.85Z" transform="translate(-208.895 -135.317)" fill="#ccc"/>
                        <path id="Path_10" data-name="Path 10" d="M569.2,497.889H554.4a.925.925,0,0,1,0-1.85h14.8a.925.925,0,1,1,0,1.85Z" transform="translate(-208.895 -135.768)" fill="#ccc"/>
                        <path id="Path_11" data-name="Path 11" d="M569.2,503.889H554.4a.925.925,0,0,1,0-1.85h14.8a.925.925,0,1,1,0,1.85Z" transform="translate(-208.895 -136.219)" fill="#ccc"/>
                        <path id="Path_12" data-name="Path 12" d="M682.025,523.375H642.26a8.8,8.8,0,0,1-8.785-8.785V474.825a8.8,8.8,0,0,1,8.785-8.785h39.765a8.8,8.8,0,0,1,8.785,8.785V514.59A8.8,8.8,0,0,1,682.025,523.375ZM642.26,467.889a6.944,6.944,0,0,0-6.936,6.936V514.59a6.944,6.944,0,0,0,6.936,6.936h39.765a6.944,6.944,0,0,0,6.936-6.936V474.825a6.943,6.943,0,0,0-6.936-6.936Z" transform="translate(-214.914 -133.511)" fill="#ccc"/>
                        <path id="Path_13" data-name="Path 13" d="M676.142,506.385H650.249a2.777,2.777,0,0,1-2.774-2.774v-14.8a2.777,2.777,0,0,1,2.774-2.774h25.894a2.778,2.778,0,0,1,2.774,2.774v14.8a2.777,2.777,0,0,1-2.774,2.774Zm-25.894-18.5a.926.926,0,0,0-.925.925v14.8a.926.926,0,0,0,.925.925h25.894a.926.926,0,0,0,.925-.925v-14.8a.926.926,0,0,0-.925-.925Z" transform="translate(-215.967 -135.016)" fill="#ccc"/>
                        <path id="Path_14" data-name="Path 14" d="M663.2,498.8a2.777,2.777,0,0,1-1.47-.419l-13.816-8.635a.925.925,0,1,1,.981-1.569l13.817,8.635a.93.93,0,0,0,.98,0L677.5,488.18a.925.925,0,1,1,.981,1.569l-13.816,8.635a2.778,2.778,0,0,1-1.471.419Z" transform="translate(-215.967 -135.166)" fill="#ccc"/>
                        <path id="Path_15" data-name="Path 15" d="M478.025,523.375H438.26a8.8,8.8,0,0,1-8.785-8.785V474.825a8.8,8.8,0,0,1,8.785-8.785h39.765a8.8,8.8,0,0,1,8.785,8.785V514.59A8.8,8.8,0,0,1,478.025,523.375ZM438.26,467.889a6.944,6.944,0,0,0-6.936,6.936V514.59a6.944,6.944,0,0,0,6.936,6.936h39.765a6.944,6.944,0,0,0,6.936-6.936V474.825a6.944,6.944,0,0,0-6.936-6.936Z" transform="translate(-199.567 -133.511)" fill="#ccc"/>
                        <path id="Path_16" data-name="Path 16" d="M472.142,506.385H446.249a2.777,2.777,0,0,1-2.774-2.774v-14.8a2.777,2.777,0,0,1,2.774-2.774h25.894a2.777,2.777,0,0,1,2.774,2.774v14.8A2.777,2.777,0,0,1,472.142,506.385Zm-25.894-18.5a.926.926,0,0,0-.925.925v14.8a.926.926,0,0,0,.925.925h25.894a.926.926,0,0,0,.925-.925v-14.8a.926.926,0,0,0-.925-.925Z" transform="translate(-200.62 -135.016)" fill="#ccc"/>
                        <path id="Path_17" data-name="Path 17" d="M468.372,506.949h-18.61a1.849,1.849,0,0,1-1.6-2.774l5.605-9.71a1.85,1.85,0,0,1,3.2,0l3.62,6.271,2.1-3.633a1.85,1.85,0,0,1,3.2,0l4.083,7.072a1.85,1.85,0,0,1-1.6,2.774Zm0-1.85h0l-4.083-7.072-2.9,5.02a.925.925,0,0,1-.8.462h0a.925.925,0,0,1-.8-.462l-4.421-7.658-5.606,9.71Z" transform="translate(-200.954 -135.58)" fill="#ccc"/>
                        <circle id="Ellipse_5" data-name="Ellipse 5" cx="1.85" cy="1.85" r="1.85" transform="translate(266.898 354.723)" fill="#ccc"/>
                        <path id="Path_18" data-name="Path 18" d="M767.464,644.593H756.126l-5.393-43.731h16.733Z" transform="translate(-56.477 -45.202)" fill="#ffb8b8"/>
                        <path id="Path_19" data-name="Path 19" d="M949.842,765.3H913.285v-.462a14.229,14.229,0,0,1,14.229-14.229h22.328Z" transform="translate(-235.964 -154.919)" fill="#2f2e41"/>
                        <path id="Path_20" data-name="Path 20" d="M817.464,644.593H806.126l-5.393-43.731h16.733Z" transform="translate(-60.238 -45.202)" fill="#ffb8b8"/>
                        <path id="Path_21" data-name="Path 21" d="M999.842,765.3H963.285v-.462a14.229,14.229,0,0,1,14.229-14.229h22.328Z" transform="translate(-239.725 -154.919)" fill="#2f2e41"/>
                        <path id="Path_22" data-name="Path 22" d="M990.954,720.437l-10.5-3.194a4.155,4.155,0,0,1-2.928-3.545l-9.79-92.779a.444.444,0,0,0-.443-.414.434.434,0,0,0-.472.378l-16.4,89.887a4.162,4.162,0,0,1-4.933,3.329l-13.42-2.764a4.176,4.176,0,0,1-3.312-4.357l9.974-147.328,67.636-7.3-10.05,164.356a4.157,4.157,0,0,1-5.365,3.728Z" transform="translate(-237.127 -140.005)" fill="#2f2e41"/>
                        <circle id="Ellipse_6" data-name="Ellipse 6" cx="22.713" cy="22.713" r="22.713" transform="translate(731.049 245.921)" fill="#ffb8b8"/>
                        <path id="Path_23" data-name="Path 23" d="M939.433,551.267,954.1,458.928a35.009,35.009,0,0,1,44.394-28.112h0a34.9,34.9,0,0,1,24.6,40.008l-15.343,82.464Z" transform="translate(-237.931 -130.756)" fill="#d11515"/>
                        <g id="Man-left-arm">
                          <path id="Path_24" data-name="Path 24" d="M1001.541,575.5a9.3,9.3,0,0,0,1.616-14.167l15.163-29.363-17.076,1.822-11.781,27.6a9.35,9.35,0,0,0,12.078,14.1Z" transform="translate(-241.508 -138.471)" fill="#ffb8b8"/>
                          <path id="Path_25" data-name="Path 25" d="M1005.473,549.626a4.167,4.167,0,0,1-2.244-1.064l-5.8-5.361a4.175,4.175,0,0,1-1.01-4.674l11.594-27.483-1.645-54.3a13.406,13.406,0,1,1,26.566,3.624l2.812,34.135a42.885,42.885,0,0,1-8.265,29.035L1009.4,547.98a4.166,4.166,0,0,1-2.955,1.668A4.118,4.118,0,0,1,1005.473,549.626Z" transform="translate(-242.193 -131.94)" fill="#d11515"/>
                          <path id="Path_28" data-name="Path 28" d="M833.541,375.652l-.925,29.593-17.036,29.6L829.8,401.858Z" transform="translate(-61.355 -28.26)" opacity="0.1"/>
                        </g>
                        <g id="Man-right-arm" transform="translate(0)">
                          <path id="Path_26" data-name="Path 26" d="M854.491,382.662a9.3,9.3,0,0,0,12.416,7.012l21.127,25.411,4.98-16.435-20.826-21.611a9.35,9.35,0,0,0-17.7,5.623Z" transform="translate(-231.528 -126.403)" fill="#ffb8b8"/>
                          <path id="Path_27" data-name="Path 27" d="M872.353,394.527a4.167,4.167,0,0,1,1.855-1.651l7.2-3.252a4.175,4.175,0,0,1,4.7.893l20.787,21.392,50.646,19.657a13.406,13.406,0,0,1-13.695,23.051l-32.53-10.72A42.885,42.885,0,0,1,887.8,424.965l-15.46-26.181a4.166,4.166,0,0,1-.384-3.371,4.119,4.119,0,0,1,.4-.886Z" transform="translate(-232.84 -127.735)" fill="#d11515"/>
                        </g>
                        <path id="Path_29" data-name="Path 29" d="M990.948,398.927a5.94,5.94,0,0,1-6.5-4.348,9.03,9.03,0,0,0-6.428-6.726c-4.167-.952-9.259,1.009-12.312-2.148a6.138,6.138,0,0,1-1.457-5.4c.562-3.068,2.757-5.385,5.145-7.239a31.5,31.5,0,0,1,17.447-6.52,62.582,62.582,0,0,1,9.822.489,43.469,43.469,0,0,1,10.046,1.836,23.652,23.652,0,0,1,14.8,17.275,27.307,27.307,0,0,1-5.6,22.315,29.317,29.317,0,0,1-11.246,8.562,4.387,4.387,0,0,1-3.335.169c-2.735-1.087-2.288-4.475-1.041-6.735,1.334-2.418,3.388-4.759,2.315-7.7a5.828,5.828,0,0,0-2.892-3.113c-2.719-1.386-5.76-1.058-8.682-.721Z" transform="translate(-239.787 -126.024)" fill="#2f2e41"/>
                        <path id="Path_30" data-name="Path 30" d="M822.187,408.061H541.056A15.276,15.276,0,0,1,525.8,392.8v-60.11a15.276,15.276,0,0,1,15.259-15.259h281.13a15.276,15.276,0,0,1,15.259,15.259V392.8a15.276,15.276,0,0,1-15.259,15.259Z" transform="translate(-206.813 -122.332)" fill="#fff"/>
                        <path id="Path_31" data-name="Path 31" d="M822.149,408.486H541.018A15.739,15.739,0,0,1,525.3,392.764v-60.11a15.739,15.739,0,0,1,15.721-15.721h281.13a15.739,15.739,0,0,1,15.721,15.721v60.11A15.739,15.739,0,0,1,822.149,408.486Zm-281.13-89.7a13.887,13.887,0,0,0-13.872,13.872v60.11a13.887,13.887,0,0,0,13.872,13.872h281.13a13.887,13.887,0,0,0,13.872-13.872v-60.11a13.887,13.887,0,0,0-13.872-13.872Z" transform="translate(-206.776 -122.294)" fill="#3f3d56"/>
                        <path id="Path_32" data-name="Path 32" d="M790.753,394.393h-212.7A15.276,15.276,0,0,1,562.8,379.134V347.692a15.276,15.276,0,0,1,15.259-15.259h212.7a15.276,15.276,0,0,1,15.259,15.259v31.442a15.276,15.276,0,0,1-15.259,15.259Z" transform="translate(-209.597 -123.46)" fill="#f2f2f2"/>
                        <circle id="Ellipse_7" data-name="Ellipse 7" cx="18.248" cy="18.248" r="18.248" transform="translate(395.983 217.49)" fill="#ff6584"/>
                        <path id="Path_33" data-name="Path 33" d="M779.825,393.486l-25.757-21.6-25.312-21.229a3.7,3.7,0,0,0-4.765.009L698.76,371.99,692.6,377.2l-9.292-7.793-28.24-23.684a3.7,3.7,0,0,0-4.765.009l-28.148,23.793-28.591,24.168a.925.925,0,0,0,.6,1.631l58.618-.113,18.555-.036-.182.154,55.308-.107,52.774-.1a.925.925,0,0,0,.592-1.633Z" transform="translate(-211.886 -124.395)" fill="#3f3d56"/>
                        <path id="Path_34" data-name="Path 34" d="M1041.617,767.783H864.061a.925.925,0,0,1,0-1.85h177.556a.925.925,0,0,1,0,1.85Z" transform="translate(-232.191 -156.072)" fill="#ccc"/>
                        <path id="Path_35" data-name="Path 35" d="M777.349,232.643a10.377,10.377,0,0,0-6.7-4.716,9.528,9.528,0,0,0-1.535-.194l-70.459-63a8.337,8.337,0,0,0-5.206-2.488,7.094,7.094,0,0,0-1.174-.037,8.374,8.374,0,0,0-5.512,14.315l26.976,23.517,44.3,38.609a11.017,11.017,0,0,0,.324,2.155,10.419,10.419,0,0,0,8.943,7.74,10.258,10.258,0,0,0,5.6-.925,10.549,10.549,0,0,0,3.588-2.747c.1-.12.194-.231.287-.361a10.443,10.443,0,0,0,.582-11.874Z" transform="translate(-218.735 -110.654)" fill="#ffb8b8"/>
                        <path id="Path_36" data-name="Path 36" d="M653.051,295.713l-.657-26.689-.555-22.148-.379-15.5-.749-30.212a8.365,8.365,0,0,0-14.528-4.855,6.4,6.4,0,0,0-.694.888,8.263,8.263,0,0,0-1.443,5.595l1.646,44.084.823,22.148,1.054,28.252a11.137,11.137,0,0,0-.823,1.3,10.457,10.457,0,1,0,16.3-2.867Z" transform="translate(-214.953 -113.013)" fill="#ffb8b8"/>
                        <path id="Path_37" data-name="Path 37" d="M716.56,217.706,710.022,200,699.442,171.31a14.8,14.8,0,0,0-9.2-8.952c-.166-.055-.342-.111-.508-.157a14.782,14.782,0,0,0-12.244,1.683l-35.632,22.6a14.882,14.882,0,0,0-4.874,20.114,255.525,255.525,0,0,0,14.547,22.37c4.152,5.65,11.883,6.251,13.224,15.5h26.272l26.6-23.878Z" transform="translate(-215.023 -110.606)" fill="#ccc"/>
                        <circle id="Ellipse_8" data-name="Ellipse 8" cx="21.428" cy="21.428" r="21.428" transform="translate(72.126 280.678)" fill="#a0616a"/>
                        <path id="Path_38" data-name="Path 38" d="M334.6,417.024q.317.252.614.534a9.6,9.6,0,0,1-.386,14.319,9,9,0,0,1-.753.567l1.45,48.962a7.455,7.455,0,0,1-5.128,7.275l-.088.019-39.755,4.234a8.229,8.229,0,1,1-1.593-16.381l28.339-2.5,4.9-42.4a9.134,9.134,0,0,1-.9-.916,9.6,9.6,0,0,1,13.3-13.717Z" transform="translate(-188.437 -129.668)" fill="#a0616a"/>
                        <path id="Path_39" data-name="Path 39" d="M139.328,645.818h10.7l5.088-41.257H139.326Z" transform="translate(-10.481 -45.481)" fill="#a0616a"/>
                        <path id="Path_40" data-name="Path 40" d="M317.242,751.858h21.065a13.424,13.424,0,0,1,13.424,13.424v.436H317.243Z" transform="translate(-191.124 -155.013)" fill="#2f2e41"/>
                        <path id="Path_41" data-name="Path 41" d="M24.366,630.3l9.19,5.472,25.48-32.845-13.565-8.076Z" transform="translate(-1.833 -44.75)" fill="#a0616a"/>
                        <path id="Path_42" data-name="Path 42" d="M204.05,734.889l18.1,10.776h0a13.424,13.424,0,0,1,4.666,18.4l-.223.375L196.96,746.8Z" transform="translate(-182.075 -153.737)" fill="#2f2e41"/>
                        <path id="Path_43" data-name="Path 43" d="M325.257,723.874H313.279a3.919,3.919,0,0,1-3.9-3.511L297.3,606.859a1.309,1.309,0,0,0-2.494-.4l-21.783,48.235L234.457,717.58a3.945,3.945,0,0,1-4.928,1.54l-15.407-6.779a3.927,3.927,0,0,1-1.789-5.608l35.453-59.363,10.873-50.016c-3.42-21.691,11.241-53.938,11.389-54.262l.073-.158L310.5,527.151l.2.248c15.926,52.262,25.63,108.505,18.465,192.878A3.953,3.953,0,0,1,325.257,723.874Z" transform="translate(-183.19 -138.109)" fill="#2f2e41"/>
                        <path id="Path_44" data-name="Path 44" d="M271.662,543.481l-.188-.4c-.09-.189-9.069-19.128-15.991-39.369a29.856,29.856,0,0,1,2.07-23.927,30.182,30.182,0,0,1,19.247-14.8h0a30.219,30.219,0,0,1,35.075,18.1c5.491,13.73,3.741,28.385,2.094,39.911l-.033.231-.21.1Z" transform="translate(-186.358 -133.369)" fill="#3f3d56"/>
                        <path id="Path_45" data-name="Path 45" d="M307.356,418.584H273.33V403.752c7.468-2.967,14.776-5.49,19.194,0a14.832,14.832,0,0,1,14.832,14.832Z" transform="translate(-187.82 -128.582)" fill="#2f2e41"/>
                        <path id="Path_46" data-name="Path 46" d="M269.175,401.185c-20.341,0-26.035,25.5-26.035,39.881,0,8.022,3.628,10.891,9.329,11.862l2.013-10.737,4.715,11.2c1.6.008,3.284-.023,5.028-.055l1.6-3.292,3.565,3.233c14.279.021,25.82,2.1,25.82-12.209C295.209,426.682,290.216,401.185,269.175,401.185Z" transform="translate(-185.549 -128.632)" fill="#2f2e41"/>
                        <path id="Path_47" data-name="Path 47" d="M359.345,767.783H181.789a.925.925,0,0,1,0-1.85H359.345a.925.925,0,1,1,0,1.85Z" transform="translate(-180.864 -156.072)" fill="#ccc"/>
                        <path id="Path_48" data-name="Path 48" d="M373.525,434.269H333.76a8.8,8.8,0,0,1-8.785-8.785V385.719a8.8,8.8,0,0,1,8.785-8.785h39.765a8.8,8.8,0,0,1,8.785,8.785v39.765a8.8,8.8,0,0,1-8.785,8.785Z" transform="translate(-191.705 -126.808)" fill="#fff"/>
                        <path id="Path_49" data-name="Path 49" d="M373.525,434.269H333.76a8.8,8.8,0,0,1-8.785-8.785V385.719a8.8,8.8,0,0,1,8.785-8.785h39.765a8.8,8.8,0,0,1,8.785,8.785v39.765a8.8,8.8,0,0,1-8.785,8.785ZM333.76,378.783a6.943,6.943,0,0,0-6.936,6.936v39.765a6.943,6.943,0,0,0,6.936,6.936h39.765a6.943,6.943,0,0,0,6.936-6.936V385.719a6.943,6.943,0,0,0-6.936-6.936Z" transform="translate(-191.705 -126.808)" fill="#3f3d56"/>
                        <path id="Path_50" data-name="Path 50" d="M367.642,419.4H341.749a2.777,2.777,0,0,1-2.774-2.774v-19.42a2.777,2.777,0,0,1,2.774-2.774h7.289a2.757,2.757,0,0,1,2.363,1.32l2.033,3.3h14.208a2.777,2.777,0,0,1,2.774,2.774v14.8a2.777,2.777,0,0,1-2.774,2.774Z" transform="translate(-192.759 -128.124)" fill="#d11515"/>
                        <path id="Path_51" data-name="Path 51" d="M362.894,431.637q.194.355.359.731a9.6,9.6,0,0,1-5.912,13.047,9,9,0,0,1-.914.231l-17.663,45.688a7.455,7.455,0,0,1-7.549,4.715l-.089-.017-38.282-11.525a8.229,8.229,0,1,1,4.889-15.715l27.087,8.7,20.97-37.177a9.13,9.13,0,0,1-.473-1.192,9.6,9.6,0,0,1,17.577-7.483Z" transform="translate(-188.853 -130.548)" fill="#a0616a"/>
                      </g>
                      <g id="text-bubble" transform="translate(1 3)">
                        <g id="layer1" transform="translate(128.887 421.924)">
                          <path id="path2816" d="M404.63,157.628c0,32.46-34.7,72.462-68.244,93.734-2.216,13.062-10.457,36.016,36.41,100.48-28.967-3.514-95.922-66.063-101.621-80.873-12.067,1.566-39.117,4.208-51.914,4.208-102.375,0-185.369-52.63-185.369-117.55s82.991-117.55,185.369-117.55S404.63,92.706,404.63,157.626Z" transform="translate(1170.055 -315.818) rotate(-7)" fill="#fff" stroke="#000" stroke-width="3"/>
                          <text id="Hi_My_name_is_Thomas._Welcome_to_my_Portfolio_" data-name="Hi, 
                  My name is Thomas.
                  Welcome to my 
                  Portfolio!   " transform="translate(1411.114 -233.924)" fill="#d11515" font-size="29" font-family="Poppins-Bold, Poppins" font-weight="700"><tspan x="-22.112" y="0">Hi, </tspan><tspan x="-152.932" y="35">My name is Thomas.</tspan><tspan x="-119.625" y="70">Welcome to my </tspan><tspan x="-77.531" y="105" xml:space="preserve">Portfolio!   </tspan></text>
                        </g>
                      </g>
                    </g>
                  </svg>                  
            </div>
        </div>
        <div class="down-arrow"></div>
    </header>

    <div class="social-icons">
        <!-- Inlcude link to icons8 in footer -->
        <ul>
            <li><a href="https://www.linkedin.com/in/thomasrhombergiii/" target="_blank" class='social-link'><img src="assets/images/icons8-linkedin-50.png" alt="LinkedIn"></a></li>
            <li><a href="https://github.com/trhomberg" target="_blank" class='social-link'><img src="assets/images/icons8-github-50.png" alt="Github"></a></li>
            <li><a href="#contact-form" class='social-link'><img src="assets/images/icons8-envelope-50.png" alt="Contact"></a></li>
        </ul>
    </div>


    <div class='banner'>
        <img src="assets/images/banner.png" alt="banner-image">
    </div>

<div class='projects-position container'>
    <div class="projects-title" id='projects'>
        <h1>Projects</h1>
    </div>
    <div class="card-project-wrapper card-project-wrapper--centered">
        <div class="card-project-carousel">
            <div class="card-project card-project--light card-project--active card-project--1">
                <div class="card-project__content">
                    <div class="card-project__title">IP Address Locator</div>
                    <div class="card-project__details">
                        <ul class='card-project__details-list card-project__details-item'>
                            <li>HTML</li>
                            <li>CSS</li>
                            <li>Javascript/AJAX</li>
                        </ul>
                    </div>
                    <div class="card-project__description">
                        <p>An IP address locator that you input an IP address into the search bar and it will showcase the name of the company/person with the IP address and will show a map of the location of said IP address.</p>
                    </div>
                    <div class="button-container">
                        <button  class='project-buttons__light'><a href="">Live Preview</a></button>
                        <button  class='project-buttons__light'><a href="">Github</a></button>
                    </div>
                </div>
            </div>
            <div class="card-project card-project--dark card-project--2">
                <div class="card-project__content">
                    <div class="card-project__title">YelpCamp</div>
                    <div class="card-project__details">
                        <ul class="card-project__details-item card-project__details-list">
                            <li>HTML</li>
                            <li>CSS</li>
                            <li>Javascript</li>
                            <li>NodeJS</li>
                            <li>ExpressJS</li>
                            <li>MongoDB</li>
                        </ul>
                    </div>
                    <div class="card-project__description">
                        <p>This is a blog web app that allows a user to create a campground and review said campground. It uses CRUD and will showcase all the campgrounds with prices per night.</p>
                    </div>
                    <div class="button-container">
                        <button class='project-buttons__dark'><a href="">Live Preview</a></button>
                        <button class='project-buttons__dark'><a href="">Github</a></button>
                    </div>
                </div>
            </div>
            <div class="card-project card-project--light card-project--3">
                <div class="card-project__content">
                    <div class="card-project__title">API App</div>
                    <div class="card-project__details">
                        <ul class="card-project__details-item card-project__details-list">
                            <li>HTML</li>
                            <li>CSS</li>
                            <li>Javascript</li>
                        </ul>
                    </div>
                    <div class="card-project__description">
                        <p>This is an API app that takes JSON data and dynamically displays it for the user.</p>
                    </div>
                    <div class="button-container">
                        <button class='project-buttons__light'><a href="">Live Preview</a></button>
                        <button class='project-buttons__light'><a href="">Github</a></button>
                    </div>
                </div>
            </div>
            <div class="card-project card-project--dark card-project--4">
                <div class="card-project__content">
                    <div class="card-project__title">Four in a Row</div>
                    <div class="card-project__details">
                        <ul class='card-project__details-list card-project__details-item'>
                            <li>HTML</li>
                            <li>CSS</li>
                            <li>Javascript</li>
                        </ul>
                    </div>
                    <div class="card-project__description">
                        <p>A classic game of four in a row. Using OOP in order to create classes and interwine all elements to allow the user to drop tokens and use game logic to let a user know if they have won.</p>
                    </div>
                    <div class="button-container">
                        <button class='project-buttons__dark'><a href="">Live Preview</a></button>
                        <button class='project-buttons__dark'><a href="">Github</a></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-project-navigation">
            <ul class="card-project-navigation__list" data-navigation>
                <li class="is-active"></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>
</div>

<div class='banner'>
    <img src="assets/images/banner.png" alt="banner-image">
</div>

<section class='about-section container' id='about'>
    <h1 class='about-section__title'>About Me</h1>
    <p class='about-section__paragraph'>
        I am a self-taught web developer located in Overland Park, KS. I enjoy learning about new technologies and have a passion for building exciting and meaningful software. I am proficient in the front-end design and development, but I also have a good understanding of the back-end. When I'm not coding I will typically be in the gym or playing frisbee golf. 
   <h2 class='about-section__skills'>Skills</h2>
   <ul class='about-section__list'>
       <li>HTML</li>
       <li>CSS</li>
       <li>Bootstrap</li>
       <li>Sass</li>
       <li>Javascript</li>
       <li>jQuery</li>
       <li>NodeJS</li>
       <li>ExpressJS</li>
       <li>MongoDB</li>
       <li>Adobe XD</li>
   </ul>
</section>



<section class='contact-section' id='contact-form'>
    <h1 class='contact-section__title'>Contact</h1>
    <form method='POST' class='contact-section__form row' id='form'>
        <div class='form-field col w-50'>
            <input type="text" class='input-text js-input' id='name' name='name' required>
            <label for="name" class='label'>Name</label>
        </div>
        <div class='form-field col w-50'>
            <input type="email" class='input-text js-input' id='email' name='email' required>
            <label for="email" class='label'>E-mail</label>
        </div>
        <div class='form-field col w-100'>
            <input type="text" class='input-text js-input' id='message' name='message' required>
            <label for="message" class='label'>Message</label>
        </div>
        <div class='form-field col w-100'>
            <input type='submit' name='submit' value='Submit' id='submit-btn'>
        </div>
    </form>
</section>

    <script type="text/javascript" src='scripts/app.js'></script>
</body>
</html>