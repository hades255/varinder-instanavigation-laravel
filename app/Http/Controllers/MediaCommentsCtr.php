<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Facebook\Facebook;
use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;

class MediaCommentsCtr extends Controller
{
    function index(Request $request)
    {
        $access_token = env('YOUR_ACCESS_TOKEN', 'YOUR_ACCESS_TOKEN');
        $app_id = env('YOUR_APP_ID', 'YOUR_APP_ID');
        $app_secret = env('YOUR_APP_SECRET', 'YOUR_APP_SECRET');

        // Initialize the Facebook SDK
        $fb = new Facebook([
            'app_id' => $app_id,
            'app_secret' => $app_secret,
            'default_graph_version' => 'v13.0',
        ]);

        try {
            // Make a request to get the media comments
            $response = $fb->get("/{$request->media_id}/comments?fields=created_time,message,from", $access_token);
            $comments = $response->getDecodedBody()['data'];

            $commentsData = [];

            foreach ($comments as $comment) {
                $commentData = [
                    'created_at' => $comment['created_time'],
                    'text' => $comment['message'],
                    'user_name' => $comment['from']['name'],
                    'profile_pic_url' => $this->getUserProfilePic($comment['from']['id']),
                    'child_comments' => $this->getChildComments($comment['id']),
                ];

                $commentsData[] = $commentData;
            }

            return response()->json($commentsData, 200);
        } catch (FacebookResponseException $e) {
            // Handle API response errors
            return $e->getMessage();
        } catch (FacebookSDKException $e) {
            // Handle SDK errors
            return $e->getMessage();
        }
        //  $media_id
        // $data = json_decode('[
        //     {
        //         "created_at": "13 September 2023 02:41:58",
        //         "text": "Pix wandamysantos74@gmail.com",
        //         "user_name": "wdmmendonca",
        //         "profile_pic_url": "aHR0cHM6Ly9zY29udGVudC1mcmEzLTIuY2RuaW5zdGFncmFtLmNvbS92L3Q1MS4yODg1LTE5LzM3NjIzNDk3Ml84NDc4Mzg1NDk4ODM3NjdfNzU4NDY0NDg0MDU4ODMzNDIzNV9uLmpwZz9zdHA9ZHN0LWpwZ19zMTUweDE1MCZfbmNfaHQ9c2NvbnRlbnQtZnJhMy0yLmNkbmluc3RhZ3JhbS5jb20mX25jX2NhdD0xMTEmX25jX29oYz1TMFhKbXpPRS1YOEFYOERnWFYtJmVkbT1BSS1jamJZQkFBQUEmY2NiPTctNSZvaD0wMF9BZkJQYW5ab0VvZzViTEFTS3gyd1hzLVRvWFhqTnp4Vmw1WTRfd0RwcExIdHJ3Jm9lPTY1MDZFQjZDJl9uY19zaWQ9MDk4NWIw",
        //         "child_comments": []
        //     },
        //     {
        //         "created_at": "13 September 2023 02:46:21",
        //         "text": "Steal a golden ball and kill a son",
        //         "user_name": "fengxiao5300",
        //         "profile_pic_url": "aHR0cHM6Ly9zY29udGVudC1mcmEzLTIuY2RuaW5zdGFncmFtLmNvbS92L3Q1MS4yODg1LTE5LzM3NzU1NjA0Nl82NTc2MzI5ODc5MTI5ODY3XzExNzI2Nzg3MDIwMzgyMTc2MzBfbi5qcGc/c3RwPWRzdC1qcGdfczE1MHgxNTAmX25jX2h0PXNjb250ZW50LWZyYTMtMi5jZG5pbnN0YWdyYW0uY29tJl9uY19jYXQ9MTExJl9uY19vaGM9eDVRS0ZWRzJTclFBWC1rUGtTMiZlZG09QUktY2piWUJBQUFBJmNjYj03LTUmb2g9MDBfQWZDdmlHblNveFBXNnB5dFF6X2diaWZCTC1KUmJkXzNia2pPYVk1WXJpbEg5dyZvZT02NTA2OEM5MyZfbmNfc2lkPTA5ODViMA==",
        //         "child_comments": []
        //     },
        //     {
        //         "created_at": "13 September 2023 02:50:14",
        //         "text": "@zakia__sims thts y u came to see messi lmao",
        //         "user_name": "ocea_nic___",
        //         "profile_pic_url": "aHR0cHM6Ly9zY29udGVudC1mcmEzLTEuY2RuaW5zdGFncmFtLmNvbS92L3Q1MS4yODg1LTE5LzM2MjYyNDE4M18xNDc3NTgwNzQ2NDAxNTI5Xzg2Nzc2NjcwOTgxMTYyOTQxMTZfbi5qcGc/c3RwPWRzdC1qcGdfczE1MHgxNTAmX25jX2h0PXNjb250ZW50LWZyYTMtMS5jZG5pbnN0YWdyYW0uY29tJl9uY19jYXQ9MTAxJl9uY19vaGM9bkZFbldJaEM2LU1BWDhPeUFBMSZlZG09QUktY2piWUJBQUFBJmNjYj03LTUmb2g9MDBfQWZCbmNuZWptdnJMaDY3dV9GdWJpMmpHYUdMZ3JDR1owMl93Tm5adWRkZ1F6QSZvZT02NTA2MzJDNCZfbmNfc2lkPTA5ODViMA==",
        //         "child_comments": []
        //     },
        //     {
        //         "created_at": "13 September 2023 03:02:00",
        //         "text": "❤️❤️🇦🇷🇦🇷 belleza!!",
        //         "user_name": "sritagraciel",
        //         "profile_pic_url": "aHR0cHM6Ly9zY29udGVudC1mcmE1LTIuY2RuaW5zdGFncmFtLmNvbS92L3Q1MS4yODg1LTE5LzI3ODkxMTMyXzE1NjY0ODM4MTU4OTcwMV81MjE1MzQ0MzUwNDg1MDIwNjcyX24uanBnP3N0cD1kc3QtanBnX3MxNTB4MTUwJl9uY19odD1zY29udGVudC1mcmE1LTIuY2RuaW5zdGFncmFtLmNvbSZfbmNfY2F0PTEwOSZfbmNfb2hjPXl6UWE3cFI4LUVzQVhfNDRKbjYmZWRtPUFJLWNqYllCQUFBQSZjY2I9Ny01Jm9oPTAwX0FmQTdQRW8wc3NDdzZYWC1zNXNycmpWMTF6SFJqUGxHMkJGbk9JMUV3ZXJqSXcmb2U9NjUwNTU5MTgmX25jX3NpZD0wOTg1YjA=",
        //         "child_comments": []
        //     },
        //     {
        //         "created_at": "13 September 2023 04:18:57",
        //         "text": "Hl campion",
        //         "user_name": "sirpatorres",
        //         "profile_pic_url": "aHR0cHM6Ly9zY29udGVudC1mcmE1LTEuY2RuaW5zdGFncmFtLmNvbS92L3Q1MS4yODg1LTE5LzMyMzExODQ3MV84Mzc1ODg5OTQyMTAzOTJfODMyMjMyOTIwNTg4MTQ1OTg4M19uLmpwZz9zdHA9ZHN0LWpwZ19zMTUweDE1MCZfbmNfaHQ9c2NvbnRlbnQtZnJhNS0xLmNkbmluc3RhZ3JhbS5jb20mX25jX2NhdD0xMDAmX25jX29oYz1Ud29GR2F2R3R0OEFYOUQ3TGdsJmVkbT1BSS1jamJZQkFBQUEmY2NiPTctNSZvaD0wMF9BZkJaeUNBN0NUUHdvVGhfcDBpSUZQcHdIaDY0Nml0MXF1Q0tBM0dDSVF0eDd3Jm9lPTY1MDVFNTk5Jl9uY19zaWQ9MDk4NWIw",
        //         "child_comments": []
        //     },
        //     {
        //         "created_at": "13 September 2023 04:24:21",
        //         "text": "Messi les dejaste para estaba pensando quién es mí corazón q estuvo con tranguilar a tu siempre ahí te quiero ser la Argentina si ganarle a un partido en nos  seguimos a luego piensa las mejores visitar a se jugará en contra Uruguay en River plate original 🇦🇷🇦🇷🇦🇷🏆⚽🔥💪😁🤞😆💯📱",
        //         "user_name": "gustavopaulino860",
        //         "profile_pic_url": "aHR0cHM6Ly9zY29udGVudC1jZGc0LTEuY2RuaW5zdGFncmFtLmNvbS92L3Q1MS4yODg1LTE5LzQ0ODg0MjE4XzM0NTcwNzEwMjg4MjUxOV8yNDQ2MDY5NTg5NzM0MzI2MjcyX24uanBnP19uY19odD1zY29udGVudC1jZGc0LTEuY2RuaW5zdGFncmFtLmNvbSZfbmNfY2F0PTEmX25jX29oYz1JdlNZemJLZFA2c0FYOFZ6Y3psJmVkbT1BQUFBQUFBQkFBQUEmY2NiPTctNSZpZ19jYWNoZV9rZXk9WVc1dmJubHRiM1Z6WDNCeWIyWnBiR1ZmY0dsai4yLWNjYjctNSZvaD0wMF9BZkJFN2VNdTN1Q3lhNExFRUpvQXdiMFV2MWY1NWp0SGlhcUp1dHpqbnhESUVRJm9lPTY1MDY2MTBGJl9uY19zaWQ9MDAwMDAw",
        //         "child_comments": []
        //     },
        //     {
        //         "created_at": "13 September 2023 04:37:29",
        //         "text": "ewwwwww yuck what a disgrace🤢🤢🤮🤮🤮🤢🤮🤢🤮",
        //         "user_name": "hasann_riaz",
        //         "profile_pic_url": "aHR0cHM6Ly9zY29udGVudC1mcmEzLTIuY2RuaW5zdGFncmFtLmNvbS92L3Q1MS4yODg1LTE5LzM3MjA0NTg5OF8xNTQyODkzNDEzMTgzNDIzXzUxNzM4NDE4Mjc4NjA2NTQ1NDVfbi5qcGc/c3RwPWRzdC1qcGdfczE1MHgxNTAmX25jX2h0PXNjb250ZW50LWZyYTMtMi5jZG5pbnN0YWdyYW0uY29tJl9uY19jYXQ9MTA3Jl9uY19vaGM9ZDNfWEZjSG1wVllBWC1MMzZSViZlZG09QUktY2piWUJBQUFBJmNjYj03LTUmb2g9MDBfQWZBUE1hc1J1bGZiZkc0X2RuM1NDMG1iUVlPSmp2d0hSb29PV2RWRnVXcEpGUSZvZT02NTA1RTU2QSZfbmNfc2lkPTA5ODViMA==",
        //         "child_comments": []
        //     },
        //     {
        //         "created_at": "13 September 2023 04:37:41",
        //         "text": "hatao isko niklo",
        //         "user_name": "hasann_riaz",
        //         "profile_pic_url": "aHR0cHM6Ly9zY29udGVudC1mcmEzLTIuY2RuaW5zdGFncmFtLmNvbS92L3Q1MS4yODg1LTE5LzM3MjA0NTg5OF8xNTQyODkzNDEzMTgzNDIzXzUxNzM4NDE4Mjc4NjA2NTQ1NDVfbi5qcGc/c3RwPWRzdC1qcGdfczE1MHgxNTAmX25jX2h0PXNjb250ZW50LWZyYTMtMi5jZG5pbnN0YWdyYW0uY29tJl9uY19jYXQ9MTA3Jl9uY19vaGM9ZDNfWEZjSG1wVllBWC1MMzZSViZlZG09QUktY2piWUJBQUFBJmNjYj03LTUmb2g9MDBfQWZBUE1hc1J1bGZiZkc0X2RuM1NDMG1iUVlPSmp2d0hSb29PV2RWRnVXcEpGUSZvZT02NTA1RTU2QSZfbmNfc2lkPTA5ODViMA==",
        //         "child_comments": []
        //     },
        //     {
        //         "created_at": "13 September 2023 05:02:52",
        //         "text": "🔟 ⭐️⭐️⭐️🐐",
        //         "user_name": "fermingarcia503",
        //         "profile_pic_url": "aHR0cHM6Ly9zY29udGVudC1mcmEzLTEuY2RuaW5zdGFncmFtLmNvbS92L3Q1MS4yODg1LTE5LzM1MDg1NDcwMl82NDI5NzAzNTM5NDUyNDFfNjU1NTY5MDA4NDQzMzI0ODk2Ml9uLmpwZz9zdHA9ZHN0LWpwZ19zMTUweDE1MCZfbmNfaHQ9c2NvbnRlbnQtZnJhMy0xLmNkbmluc3RhZ3JhbS5jb20mX25jX2NhdD0xMDEmX25jX29oYz12c2pfVVVsdGJXQUFYLWoxYm5hJmVkbT1BSS1jamJZQkFBQUEmY2NiPTctNSZvaD0wMF9BZkNNalctbzQxMkVHN3R6ZEc5SERDU05wVEREMG1lN0JsczI1TktIVC11UXhRJm9lPTY1MDVEOTFGJl9uY19zaWQ9MDk4NWIw",
        //         "child_comments": []
        //     },
        //     {
        //         "created_at": "13 September 2023 05:05:57",
        //         "text": "🔥🔥😍😍",
        //         "user_name": "messiamu",
        //         "profile_pic_url": "aHR0cHM6Ly9zY29udGVudC1mcmE1LTEuY2RuaW5zdGFncmFtLmNvbS92L3Q1MS4yODg1LTE5LzMxNjE4NDA1MF84MzgzODAwMzc0NzU5NTBfNjEzODg4NDM0NzAzNjY2NzQ0N19uLmpwZz9zdHA9ZHN0LWpwZ19zMTUweDE1MCZfbmNfaHQ9c2NvbnRlbnQtZnJhNS0xLmNkbmluc3RhZ3JhbS5jb20mX25jX2NhdD0xMTAmX25jX29oYz1CU1M4SUJUcjF3SUFYX3dlQmVlJmVkbT1BSS1jamJZQkFBQUEmY2NiPTctNSZvaD0wMF9BZkNJelhGQ0JQQ2NHbFRUOXhVeGFsLWVkQVM5Z29fUE80aWFmWS1JYlplcUZRJm9lPTY1MDZCNUY0Jl9uY19zaWQ9MDk4NWIw",
        //         "child_comments": []
        //     },
        //     {
        //         "created_at": "13 September 2023 05:29:13",
        //         "text": "👏🔥",
        //         "user_name": "aryan_kulpe__official",
        //         "profile_pic_url": "aHR0cHM6Ly9zY29udGVudC1mcmE1LTIuY2RuaW5zdGFncmFtLmNvbS92L3Q1MS4yODg1LTE5LzM2NTQ0MTcxNl85NzE2ODE5NDczODY5NTRfNjQxNjc5NzM0NzIxMDIyOTg4MV9uLmpwZz9zdHA9ZHN0LWpwZ19zMTUweDE1MCZfbmNfaHQ9c2NvbnRlbnQtZnJhNS0yLmNkbmluc3RhZ3JhbS5jb20mX25jX2NhdD0xMDYmX25jX29oYz1kZkR5bVFSM01ZY0FYLXk5ejlOJmVkbT1BSS1jamJZQkFBQUEmY2NiPTctNSZvaD0wMF9BZkJMTmFKd3pIVXNiNC1hRDg3US1NNVhneFBLbEZKVDNUMkJhUnJ1amtpc1RRJm9lPTY1MDZEMzZEJl9uY19zaWQ9MDk4NWIw",
        //         "child_comments": []
        //     },
        //     {
        //         "created_at": "13 September 2023 05:29:23",
        //         "text": "",
        //         "user_name": "aryan_kulpe__official",
        //         "profile_pic_url": "aHR0cHM6Ly9zY29udGVudC1mcmE1LTIuY2RuaW5zdGFncmFtLmNvbS92L3Q1MS4yODg1LTE5LzM2NTQ0MTcxNl85NzE2ODE5NDczODY5NTRfNjQxNjc5NzM0NzIxMDIyOTg4MV9uLmpwZz9zdHA9ZHN0LWpwZ19zMTUweDE1MCZfbmNfaHQ9c2NvbnRlbnQtZnJhNS0yLmNkbmluc3RhZ3JhbS5jb20mX25jX2NhdD0xMDYmX25jX29oYz1kZkR5bVFSM01ZY0FYLXk5ejlOJmVkbT1BSS1jamJZQkFBQUEmY2NiPTctNSZvaD0wMF9BZkJMTmFKd3pIVXNiNC1hRDg3US1NNVhneFBLbEZKVDNUMkJhUnJ1amtpc1RRJm9lPTY1MDZEMzZEJl9uY19zaWQ9MDk4NWIw",
        //         "child_comments": []
        //     }
        // ]', true);
        // return response()->json($data, 200);
    }
}
