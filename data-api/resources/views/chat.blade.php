<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Đại học Cần Thơ - Chatbot</title>
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/vi/6/6c/Logo_Dai_hoc_Can_Tho.svg" type="image/icon type">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel='stylesheet'
          href='https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.min.css'>
    <link rel="stylesheet" href="./style.css">

</head>

<body>

<div class="chat">
    <div class="chat-title">
        <h1>DHCT - Chatbot</h1>
        <h2>Online</h2>
        <figure class="avatar">
            <img src="https://upload.wikimedia.org/wikipedia/vi/6/6c/Logo_Dai_hoc_Can_Tho.svg" />
        </figure>
    </div>
    <div class="messages">
        <div class="messages-content" id="messages-content"></div>
    </div>
    <div class="message-box">
        <textarea type="text" class="message-input" placeholder="Type message..."></textarea>
        <button type="submit" class="message-submit">Send</button>
    </div>

</div>
<div class="bg"></div>

<!-- <script>
  function sendMessage() {
    document.getElementById("messages-content").innerHTML = "Hello";
  }
</script> -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script
    src='https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.concat.min.js'>
</script>

</body>

</html>
