<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Chat;

class ChatController extends Controller
{
    public function actionSendMessage($receiverId, $message)
    {
        // Use WebSocket to send message to the receiver
        Yii::$app->websocket->sendToUser($receiverId, $message);
        
        // Save the message to the database
        $senderId = Yii::$app->user->id;
        $chat = new Chat();
        $chat->sender_id = $senderId;
        $chat->receiver_id = $receiverId;
        $chat->message = $message;
        $chat->timestamp = time();
        $chat->save();

        return json_encode(['success' => true]);
    }

    public function actionLoadChatHistory($receiverId)
    {
        // Retrieve chat history from the database
        $senderId = Yii::$app->user->id;
        $chats = Chat::find()
            ->where(['sender_id' => $senderId, 'receiver_id' => $receiverId])
            ->orWhere(['sender_id' => $receiverId, 'receiver_id' => $senderId])
            ->orderBy(['timestamp' => SORT_ASC])
            ->all();

        return json_encode($chats);
    }
}
