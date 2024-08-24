<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
        @foreach ($users as $u)
        <tr>
            <td>{{$u->id}}</td>
            <td>{{$u->name}}</td>
            <td>
                <form action="" method="post" onsubmit="return sendEvent(this)">
                    @csrf
                    <input type="hidden" name="id" value="{{$u->id}}">
                    <button type="submit">Send Message</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    <ul id="messages">

    </ul>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/4.1.3/socket.io.js"></script>
    <script>
  
    function sendEvent(form) {
        event.preventDefault();
    
        var message = prompt("Enter message");
        socketIO.emit("sendEvent", {
            "myId": userId,
            "userId": form.id.value,
            "message": message
        });
    }
        var userId = prompt("Enter user ID");
     
        var socketIO = io("http://localhost:3000");
        socketIO.emit("connected", userId);

        socketIO.on("messageReceived", function (data) {
            var html = "<li>" + data + "</li>";
            document.getElementById("messages").innerHTML = html + document.getElementById("messages").innerHTML;
        });
    </script>
</body>
</html>