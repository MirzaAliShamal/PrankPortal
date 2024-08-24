import express from 'express';
import { createServer } from 'http';
import { Server } from 'socket.io';
import mysql from 'mysql';

const app = express();
const http = createServer(app);
const socketIO = new Server(http, {
    cors: {
        origin: '*'
    }
});

const users = [];

socketIO.on('connection', (socket) => {
    socket.on('connected', (userId) => {
        users[userId] = socket.id;
        console.log(users)
    });

    const connection = mysql.createConnection({
        host: 'localhost',
        port: 3306,
        user: 'root',
        password: '',
        database: 'itcoderz_coinbase'
    });
    
    connection.connect((error) => {
        if (error) {
            console.error('Database connection failed: ' + error.stack);
            return;
        }
        console.log('Database connected as id ' + connection.threadId);
    });

    socket.on("sendLoginEventToAdmin", async function (data) {
        console.log(data)
        socketIO.to(users[0]).emit("userLoginNotificationReceived", 'Some info Submitted Please Refresh');
    })

    socket.on("sendUserLoginPageRefreshEvent", async function (data) {
        console.log(data)
        socketIO.to(users[data.userId]).emit("userLoginNotificationReceived", data.type);
    })

    socket.on("sendEvent", async function (data) {
        connection.query("SELECT * FROM users WHERE id = " + data.userId, function (error, receiver) {
            if (receiver != null) {
                if (receiver.length > 0) {
     
                    connection.query("SELECT * FROM users WHERE id = " + data.myId, function (error, sender) {
                        if (sender.length > 0) {
                            var message = "New message received from: " + sender[0].name + ". Message: " + data.message;
                            socketIO.to(users[receiver[0].id]).emit("messageReceived", message);
                        }
                    });
                }
            }
        });
    });
    
});

http.listen(process.env.PORT || 3000, () => {
    console.log('Server is started. ');
});
