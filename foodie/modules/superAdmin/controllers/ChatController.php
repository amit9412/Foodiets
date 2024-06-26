<?php

namespace app\modules\superAdmin\controllers;

use Yii;
use yii\web\Controller;
use app\models\Chat;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * ChatController implements the Chat actions for Chat model.
 */
class ChatController extends Controller
{
    /**
     * @inheritDoc
     */

    public $layout = '@app/themes/backend/main-layout';

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        //'actions' => ['login', 'error'], // Define specific actions
                        'allow' => true, // Has access
                        'roles' => ['super-admin'], // '@' All logged in users / or your access role e.g. 'admin', 'user'
                    ],
                    [
                        'allow' => false, // Do not have access
                        'roles' => ['?'], // Guests '?'
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }


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
