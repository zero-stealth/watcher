<?php


$username = $_SESSION["chiefname"];
// api endpoint
$chat_url = "http://127.0.0.1:8080/api/form/chat/read.php";

$json_data = file_get_contents($chat_url);

$chat_data = json_decode($json_data);

$chat = $chat_data->body;

$chat = array_splice($chat, 0, 1);



?>

<div class="universal-msg-comp">
    <div class="msg-component">
        <div class="msg-nav">
            <div class="msg-profile profile-universal">
                <img src="/watcher/assets/special-ops.jpg" alt="msg profile" class="circle-img msg-img">
                <div class="msg-profile-info">
                    <h1><?php echo $username; ?></h1>
                    <span>Admin</span>
                </div>
            </div>
            <div class="msg-timestamp">
                <span>11:00 pm</span>
            </div>
        </div>
        <!-- msg loops here -->
        <div class="msg-container">
            <div class="current-msg">
                <?php
                foreach ($chat as $ch) {
                    echo "<p>$ch->message</p>";
                }
                ?>
            </div>
            <div class="current-reply">
                <p>you wish</p>
            </div>
        </div>
    </div>
    <div class="msg-footer">
        <form action="/watcher/include/chat.inc.php" method="post" class="msg-field">
            <div class="msg-input">
                <input type="text" placeholder="Type a message" name="message" class="msg-reply-input">
            </div>
            <div class="input-controller">
                <div class="input-upload-container">
                    <a href="#" class="upload">
                        <svg class="icon icon-upload" viewBox="0 0 32.655003 32.648998" fill="none" version="1.1" id="svg1038" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
                            <path d="m 21.605,23.965 -6.02,5.962 c -1.76,1.824 -4.11,2.722 -6.4499999,2.722 -2.34,0 -4.68,-0.898 -6.42,-2.722 -3.61999996,-3.512 -3.61999996,-9.31 0,-12.903 l 3.67,-3.701999 -0.02,1.633 c -0.03,1.360999 0.19,2.721999 0.62,3.919999 l 0.14,0.408 -1.09,1.116 c -0.41,0.405 -0.74,0.888 -0.96,1.421 -0.23,0.533 -0.34,1.105 -0.34,1.683 0,0.578 0.11,1.15 0.34,1.683 0.22,0.532 0.55,1.015 0.96,1.42 1.66,1.688 4.5499999,1.688 6.2099999,0 l 5.99,-5.962 c 0.81,-0.844 1.3,-1.96 1.3,-3.13 0,-1.198 -0.49,-2.259999 -1.3,-3.103999 -0.23,-0.22 -0.41,-0.483 -0.53,-0.772 -0.12,-0.29 -0.18,-0.601 -0.18,-0.915 0,-0.314 0.06,-0.625 0.18,-0.915 0.12,-0.29 0.3,-0.553 0.53,-0.773 0.89,-0.898 2.47,-0.871 3.37,0 1.72,1.742 2.67,4.029 2.67,6.478999 0,2.45 -0.95,4.736 -2.67,6.451 z m 8.33,-8.356999 -3.65,3.701999 v -1.633 c 0.03,-1.361 -0.19,-2.721999 -0.62,-3.919999 l -0.14,-0.381 1.09,-1.143 c 0.41,-0.405 0.74,-0.888 0.96,-1.421 0.23,-0.533 0.34,-1.1050001 0.34,-1.6830001 0,-0.578 -0.11,-1.15 -0.34,-1.683 -0.22,-0.532 -0.55,-1.015 -0.96,-1.42 -1.66,-1.688 -4.57,-1.661 -6.21,0 l -5.99,5.9890001 c -0.81,0.817 -1.3,1.933 -1.3,3.103 0,1.197999 0.49,2.259999 1.3,3.103999 0.47,0.435 0.71,1.034 0.71,1.687 0,0.654 -0.24,1.253 -0.71,1.688 -0.22,0.22 -0.48,0.394 -0.77,0.511 -0.29,0.117 -0.6,0.175 -0.91,0.17 -0.6,0 -1.23,-0.218 -1.69,-0.681 -1.7099999,-1.716 -2.6799999,-4.041 -2.6799999,-6.464999 0,-2.424 0.97,-4.75 2.6799999,-6.4650001 l 6.02,-5.962 c 0.83,-0.857 1.84,-1.537 2.94,-2.00200097 1.11,-0.4639995 2.29,-0.70299950049561 3.49,-0.70299950049561 1.2,0 2.39,0.23900000049561 3.49,0.70299950049561 1.11,0.46500097 2.11,1.14500097 2.95,2.00200097 1.77,1.688 2.72,3.974 2.72,6.424 0,2.4500001 -0.95,4.7370001 -2.72,6.4790001 z" fill="#ffffff" id="path1008" />
                            <defs id="defs1036" />
                        </svg>
                    </a>
                </div>
                <div class="input-reply-container">
                    <button type="submit" class="btn btn-reply">
                        <svg class="icon icon-reply" viewBox="0 0 31.961741 29.991489" fill="none" version="1.1" id="svg1038" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
                            <sodipodi:namedview id="namedview1040" pagecolor="#ffffff" bordercolor="#000000" borderopacity="0.25" inkscape:showpageshadow="2" inkscape:pageopacity="0.0" inkscape:pagecheckerboard="0" inkscape:deskcolor="#d1d1d1" showgrid="false" />
                            <g clip-path="url(#clip0_53_603)" id="g948" inkscape:export-filename="..\g948.png" inkscape:export-xdpi="96" inkscape:export-ydpi="96" transform="translate(-1397.7001,-898.5309)">
                                <path d="m 1415.92,927.541 c -0.3,0.562 -0.77,0.883 -1.39,0.964 -0.63,0.082 -1.15,-0.126 -1.57,-0.624 l -4.25,-5.064 c -0.27,-0.317 -0.41,-0.676 -0.44,-1.078 -0.03,-0.401 0.09,-0.769 0.35,-1.103 l 7.8,-10.716 -11.91,5.823 c -0.37,0.198 -0.76,0.248 -1.15,0.151 -0.39,-0.097 -0.71,-0.304 -0.98,-0.621 l -4.25,-5.064 c -0.42,-0.498 -0.53,-1.049 -0.34,-1.652 0.19,-0.603 0.58,-1.003 1.19,-1.202 l 28.35,-8.73 c 0.77,-0.226 1.41,-0.045 1.9,0.544 0.5,0.589 0.56,1.246 0.21,1.971 z" fill="#ffffff" id="path946" />
                            </g>
                            <defs id="defs1036">
                                <clipPath id="clip0_53_603">
                                    <rect width="42.588501" height="42.588501" fill="#ffffff" transform="rotate(-40,1938.7088,-1453.3701)" id="rect1028" x="0" y="0" />
                                </clipPath>
                            </defs>
                        </svg>

                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<style>
    @import '/watcher/Style/msgComponent.css';
</style>