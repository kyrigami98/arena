<?php

use Phalcon\Mvc\Controller;

use SocketIO\Emitter;


class IndexController extends Controller {

    public function indexAction() {

        
        $notification = 'A message has been received by the server!<br />';

        if ($this->request->isPost()) {

            // Calling PHP Redis from global namespace
            $redis = new \Redis();
            // Connecting on localhost and port 6379
            $redis->connect('127.0.0.1', '6379');
            // Creating Emitter
            $emitter = new Emitter($redis);
            // Emit a notification on channel 'notification'
            $emitter->emit('notification', $notification);
            // Returning status via JsonResponse
            $response = new JsonResponse();
            $response->setData(array(
                'notification' => $notification
            ));
            return $response;
        }
    }

    public function afterAction() {
        
    }

}
