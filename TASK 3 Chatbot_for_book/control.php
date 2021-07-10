<!DOCTYPE HTML>
<html>

<head>
    <title> Control </title>

    <style>
        #h1 {
            text-align: center;
            text-shadow: 2px 2px #1b1b1b;
            color: rgb(8, 8, 8);
            text-transform: capitalize;
        }

        body {
            background-color: #464345;
        }
    </style>


</head>


<body>
    <form action="connect.php" method="post">
        <h1 id="h1">control robot movment</h><br><br><br><br>



            <p style="text-align:center;">
                <button type="submit" name="forward">Forward</button>
            </p>


            <p style="text-align:center;">
                <button type="submit" name="left">Left</button>
                <button type="submit" name="stop">STOP</button>
                <button type="submit" name="right">Right</button>
            </p>

            <p style="text-align:center;">
                <button type="submit" name="backward">Backward</button>
            </p>

    </form>

    <script>
        window.watsonAssistantChatOptions = {
            integrationID: "5241c483-3a01-4a36-91cf-036a76b3f19a", // The ID of this integration.
            region: "eu-de", // The region your integration is hosted in.
            serviceInstanceID: "d8dd78e1-dd49-4e8e-b153-bceb2556f660", // The ID of your service instance.
            onLoad: function(instance) {
                instance.render();
            }
        };
        setTimeout(function() {
            const t = document.createElement('script');
            t.src = "https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
            document.head.appendChild(t);
        });
    </script>

</body>

</html>