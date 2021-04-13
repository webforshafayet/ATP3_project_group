<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/chatbot.css')}}">

    <title>Document</title>

</head>
<body>
    <section class="msger">
        <header class="msger-header">
          <div class="msger-header-title">
            <i class="fas fa-comment-alt"></i> Agropedia
          </div>
          <div class="msger-header-options">
            <span><i class="fas fa-cog"></i></span>
          </div>
        </header>

        <main class="msger-chat">
          <div class="msg left-msg">
            <div
             class="msg-img"
             style="background-image: url(https://image.flaticon.com/icons/svg/327/327779.svg)"
            ></div>

            <div class="msg-bubble">
              <div class="msg-info">
                <div class="msg-info-name">BOT</div>
                <div class="msg-info-time">12:45</div>
              </div>

              <div class="msg-text">
                Hi, welcome to Agropedia! Go ahead and send me a message. 😄
              </div>
            </div>
          </div>

          <div class="msg right-msg">
            <div
             class="msg-img"
             style="background-image: url(https://image.flaticon.com/icons/svg/145/145867.svg)"
            ></div>

            <div class="msg-bubble">
              <div class="msg-info">

              </div>

              <div class="msg-text">

              </div>
            </div>
          </div>
        </main>

        <form class="msger-inputarea">
          <input type="text" class="msger-input" placeholder="Enter your message...">
          <button type="submit" class="msger-send-btn">Send</button>
        </form>
      </section>
      <script type="text/javascript" src="{{asset('js/chatbot.js')}}"></script>
</body>
</html>
