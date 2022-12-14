<?php session_start();

// api endpoint
$chat_url = "http://127.0.0.1:8080/api/form/chat/read.php";

$json_data = file_get_contents($chat_url);

$chat_data = json_decode($json_data);

$chat = $chat_data->body;

$chat = array_splice($chat, 1, 2);


?> 

<div class="chat-section">
    <div class="show-chat-section">
        <!-- <div class="float-mobile-chat">
            <a href="#" class="float-send">
            <svg class="icon icon-float" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.8 14.4H14.4V12H4.8V14.4ZM4.8 10.8H19.2V8.4H4.8V10.8ZM4.8 7.2H19.2V4.8H4.8V7.2ZM0 24V2.4C0 1.74 0.2352 1.1748 0.7056 0.7044C1.1752 0.2348 1.74 0 2.4 0H21.6C22.26 0 22.8252 0.2348 23.2956 0.7044C23.7652 1.1748 24 1.74 24 2.4V16.8C24 17.46 23.7652 18.0252 23.2956 18.4956C22.8252 18.9652 22.26 19.2 21.6 19.2H4.8L0 24Z" fill="" />
            </svg>
            </a>
        </div> -->
        <div class="chat-title">
            <h1>Chat </h1>
        </div>
        <form action="" method="post" class="search-post-form">
            <svg class="icon-search" viewBox="0 0 22.5 22.5" fill="none" version="1.1" id="svg144" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">
                <rect width="1512" height="982" rx="20" fill="#ffffff" id="rect2" x="-371.75" y="-165.75" />
                <rect x="-20.25" y="-20.25" width="286" height="57" rx="4.5" fill="#ffffff" stroke="#a3a5a4" id="rect48" />
                <path d="m 20.75,22.5 -7.875,-7.875 c -0.625,0.5 -1.344,0.896 -2.156,1.187 C 9.906,16.104 9.042,16.25 8.125,16.25 5.854,16.25 3.933,15.464 2.36,13.891 0.787,12.318 0,10.396 0,8.125 0,5.854 0.787,3.932 2.36,2.359 3.933,0.786 5.854,0 8.125,0 c 2.271,0 4.193,0.786 5.766,2.359 1.573,1.573 2.359,3.495 2.359,5.766 0,0.917 -0.146,1.781 -0.438,2.594 -0.291,0.812 -0.687,1.531 -1.187,2.156 L 22.5,20.75 Z M 8.125,13.75 c 1.563,0 2.891,-0.547 3.985,-1.64 1.093,-1.094 1.64,-2.422 1.64,-3.985 C 13.75,6.562 13.203,5.234 12.11,4.14 11.016,3.047 9.688,2.5 8.125,2.5 6.562,2.5 5.234,3.047 4.14,4.14 3.047,5.234 2.5,6.562 2.5,8.125 c 0,1.563 0.547,2.891 1.64,3.985 1.094,1.093 2.422,1.64 3.985,1.64 z" fill="#a3a5a4" id="path56" />
                <defs id="defs142" />
            </svg>
            <input type="text" placeholder="Search inbox" class=" search-input">
        </form>
        <div class="chat-container">
            <!-- chat loop -->
            <div class="chat-profile profile-universal" onclick="getMessage()">
                <img src="/watcher/assets/pic06.jpg" alt="chat profile" class="circle-img chat-image">
                <div class="chat-profile-info">
                    <div class="onactive-chat">
                    <?php
                foreach ($chat as $ch) {
                    echo "<h1>$ch->sender_name</h1>";
                }?>
                        <!-- <div class="chat-active">
                            <div id="active-status">
                            </div>
                            <script>
                                // jquery
                            </script>
                        </div> -->
                    </div>
                    <span>11:00pm</span>
                    <?php
                foreach ($chat as $ch) {
                    echo "<span>$ch->account_type</span>";
                }?>
                </div>
            </div>
            <!-- \end of chat loop -->
        </div>
        <script>
            $('.chat-profile').click().load('./msgComponent.php');
        </script>
    </div>
    <div class="show-msg-section">
        <?Php include './msgComponent.php'; ?>
    </div>
</div>
<style>
    @import '/watcher/Style/chatManagement.css';
</style>