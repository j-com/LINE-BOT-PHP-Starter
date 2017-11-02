<?php

/**
 * Copyright 2016 LINE Corporation
 *
 * LINE Corporation licenses this file to you under the Apache License,
 * version 2.0 (the "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at:
 *
 *   https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

//require_once('./LINEBotTiny.php');
include ('LINEBotTiny.php');

$channelAccessToken = '8f6cfd748b65830a8719a4ddc2d584b5";
	$channel_access_token = "OscfTA2RG7Ilr6xCXrsUoKa75HSjkP839FxNZZxBkqS1s8RAZkC2HQIKvodPfXyflO3gSKw/d3x8MWAyiW0ru8nlIeDkgcRMmV2Pu0JBz64ggodG7wR6c4Bq/5xM/SV8DSGMreVGGrK5hIGByqSwXgdB04t89/1O/w1cDnyilFU=';
$channelSecret = '8f6cfd748b65830a8719a4ddc2d584b5';

$client = new LINEBotTiny($channelAccessToken, $channelSecret);
foreach ($client->parseEvents() as $event) {
    switch ($event['type']) {
        case 'message':
            $message = $event['message'];
            switch ($message['type']) {
                case 'text':
                    $client->replyMessage(array(
                        'replyToken' => $event['replyToken'],
                        'messages' => array(
                            array(
                                'type' => 'text',
                                'text' => '1111'
                            )
                        )
                    ));
                    break;
                default:
                    error_log("Unsupporeted message type: " . $message['type']);
                    break;
            }
            break;
        default:
            error_log("Unsupporeted event type: " . $event['type']);
            break;
    }
};
