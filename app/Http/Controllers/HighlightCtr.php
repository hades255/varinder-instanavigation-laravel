<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HighlightCtr extends Controller
{
    function index() {
        // $highlightId
        $data=json_decode('[
            {
                "type": "image",
                "createdTime": "2019-04-09 20:04:46",
                "thumbnailUrl": "aHR0cHM6Ly9zY29udGVudC1mbWwyMC0xLmNkbmluc3RhZ3JhbS5jb20vdi90NTEuMTI0NDItMTUvNTY1NTYwMzlfOTg4MDg3MTg4MDYxNzM4Xzc2ODE5MDMzMTkzNDE3NTk4MjBfbi5qcGc/c3RwPWRzdC1qcGdfZTM1Jl9uY19odD1zY29udGVudC1mbWwyMC0xLmNkbmluc3RhZ3JhbS5jb20mX25jX2NhdD0xMTAmX25jX29oYz1wVmhjcXhFM1JLMEFYOE11ZFhZJmVkbT1BSGxmWkh3QkFBQUEmY2NiPTctNSZvaD0wMF9BZkRRMGlHaUdjRHZQMUtyb3Voa085enpsZ1k0M2dpcmU3RU5fS0tET0t0ZzJBJm9lPTY1MDY1NTdEJl9uY19zaWQ9ZDhkMDJi"
            },
            {
                "type": "image",
                "createdTime": "2019-04-02 11:20:43",
                "thumbnailUrl": "aHR0cHM6Ly9zY29udGVudC1mbWwyMC0xLmNkbmluc3RhZ3JhbS5jb20vdi90NTEuMTI0NDItMTUvNTQ1MTIwMjZfMjY1NTA4MTkxMDE5MTE4XzIzMzI2MDk4Njg1NTA1OTk0ODhfbi5qcGc/c3RwPWRzdC1qcGdfZTM1Jl9uY19odD1zY29udGVudC1mbWwyMC0xLmNkbmluc3RhZ3JhbS5jb20mX25jX2NhdD0xMDYmX25jX29oYz1hNjV3RGRHcTl4QUFYX09rTVIwJmVkbT1BSGxmWkh3QkFBQUEmY2NiPTctNSZvaD0wMF9BZkJIMFh0Zno4SWxJTjZ5WkZjaHZldS1RRnUtU3JjcVlJLUpxcGtCS291cVlBJm9lPTY1MDVBNTIwJl9uY19zaWQ9ZDhkMDJi"
            },
            {
                "type": "image",
                "createdTime": "2019-03-28 12:53:20",
                "thumbnailUrl": "aHR0cHM6Ly9zY29udGVudC1mbWwyMC0xLmNkbmluc3RhZ3JhbS5jb20vdi90NTEuMTI0NDItMTUvNTM2NDE2MDlfMTU4MDk5NzcxODY3NDA5XzgzNTkxNjYwNjIzMjkzNDE0NDFfbi5qcGc/c3RwPWRzdC1qcGdfZTM1Jl9uY19odD1zY29udGVudC1mbWwyMC0xLmNkbmluc3RhZ3JhbS5jb20mX25jX2NhdD0xMDkmX25jX29oYz1QOEpUQWZZc2lkc0FYX3M5blcxJmVkbT1BSGxmWkh3QkFBQUEmY2NiPTctNSZvaD0wMF9BZkFxQmdFa3VjRjRUZmVrTDZZS3p2TDdJZ21pbVQ0Q25JbVVleXR1RE1ta2dBJm9lPTY1MDU5NkNDJl9uY19zaWQ9ZDhkMDJi"
            },
            {
                "type": "image",
                "createdTime": "2019-03-17 12:18:50",
                "thumbnailUrl": "aHR0cHM6Ly9zY29udGVudC1mbWwyMC0xLmNkbmluc3RhZ3JhbS5jb20vdi90NTEuMTI0NDItMTUvNTM1NzI4MzZfMjI2OTU1NDc3MzMxNTMyOF82NjEyNjQwNjEyOTY0ODEyNDU4X24uanBnP3N0cD1kc3QtanBnX2UzNSZfbmNfaHQ9c2NvbnRlbnQtZm1sMjAtMS5jZG5pbnN0YWdyYW0uY29tJl9uY19jYXQ9MTAwJl9uY19vaGM9anJsaVZnS2FJWTBBWDk0cmtZUiZlZG09QUhsZlpId0JBQUFBJmNjYj03LTUmb2g9MDBfQWZCRnFpbnoyc1hwRDVjNUR5VzZhcHZyZ21SQUVUUHU5ZVFrdWZRelUyMVI1QSZvZT02NTA2NjE1NCZfbmNfc2lkPWQ4ZDAyYg=="
            },
            {
                "type": "image",
                "createdTime": "2019-03-16 21:34:46",
                "thumbnailUrl": "aHR0cHM6Ly9zY29udGVudC1mbWwyMC0xLmNkbmluc3RhZ3JhbS5jb20vdi90NTEuMTI0NDItMTUvNTQyNDc5OTRfMjA0NjkwNzE3MTU4MzE0XzM0MDk2OTA4MTYwNDA4OTc1NDhfbi5qcGc/c3RwPWRzdC1qcGdfZTM1Jl9uY19odD1zY29udGVudC1mbWwyMC0xLmNkbmluc3RhZ3JhbS5jb20mX25jX2NhdD0xMTAmX25jX29oYz05TXB6akdnU1NiZ0FYOHpmZC1yJmVkbT1BSGxmWkh3QkFBQUEmY2NiPTctNSZvaD0wMF9BZkRFX3FrWU56bGlwcWYybHVMMHd6THloaWtSd0JCYk5iQWl6aXVfeDhWLVRBJm9lPTY1MDVCOTc3Jl9uY19zaWQ9ZDhkMDJi"
            },
            {
                "type": "image",
                "createdTime": "2019-03-14 17:11:01",
                "thumbnailUrl": "aHR0cHM6Ly9zY29udGVudC1mbWwyMC0xLmNkbmluc3RhZ3JhbS5jb20vdi90NTEuMTI0NDItMTUvNTQyMjI0NTBfMTUzMDQyNjE5MDQwNzA0Xzg0NDIzOTcyMjk3MjA2MTk2Mzdfbi5qcGc/c3RwPWRzdC1qcGdfZTM1Jl9uY19odD1zY29udGVudC1mbWwyMC0xLmNkbmluc3RhZ3JhbS5jb20mX25jX2NhdD0xMDQmX25jX29oYz1rb3R4WkV2aFVmNEFYOU5yTXBFJmVkbT1BSGxmWkh3QkFBQUEmY2NiPTctNSZvaD0wMF9BZkJ4UjB0OXhzaVRDLXdyY0RXSUE1aEpLZTdRT3Q4UTF1Tjh4V3NLV0wyQzh3Jm9lPTY1MDcwMjExJl9uY19zaWQ9ZDhkMDJi"
            },
            {
                "type": "image",
                "createdTime": "2019-03-11 18:29:32",
                "thumbnailUrl": "aHR0cHM6Ly9zY29udGVudC1mbWwyMC0xLmNkbmluc3RhZ3JhbS5jb20vdi90NTEuMTI0NDItMTUvNTM3NDc1ODhfODYxNTEzNTg3NTMxNDAyXzE3MzEwMTQyMTY2MzEyNzYxNDlfbi5qcGc/c3RwPWRzdC1qcGdfZTM1Jl9uY19odD1zY29udGVudC1mbWwyMC0xLmNkbmluc3RhZ3JhbS5jb20mX25jX2NhdD0xMDImX25jX29oYz1INlFoTnF2bUl3OEFYOTVjeXFDJmVkbT1BSGxmWkh3QkFBQUEmY2NiPTctNSZvaD0wMF9BZkFaQ21WWlB1ejVhTExaOHF4ZUxnTUFSaVFNczJfTFp4MHZNNWlZRi1GelNBJm9lPTY1MDZGNjI3Jl9uY19zaWQ9ZDhkMDJi"
            },
            {
                "type": "image",
                "createdTime": "2019-03-06 12:58:59",
                "thumbnailUrl": "aHR0cHM6Ly9zY29udGVudC1mbWwyMC0xLmNkbmluc3RhZ3JhbS5jb20vdi90NTEuMTI0NDItMTUvNTI4NjkwNDNfMzMzNTI2MzMzOTQ5ODA2XzQ5MjgyMjA0ODg1NzUyNDI0OTBfbi5qcGc/c3RwPWRzdC1qcGdfZTM1Jl9uY19odD1zY29udGVudC1mbWwyMC0xLmNkbmluc3RhZ3JhbS5jb20mX25jX2NhdD0xMTAmX25jX29oYz1PR0F2ZDFrXzZXb0FYOUpDUVRCJmVkbT1BSGxmWkh3QkFBQUEmY2NiPTctNSZvaD0wMF9BZkNoLTI2eHpKakFNRU10b0hKVlB4VFdlNy1VckYtMFkyWFVsTVFxQWJvQ1hnJm9lPTY1MDVBQThEJl9uY19zaWQ9ZDhkMDJi"
            },
            {
                "type": "image",
                "createdTime": "2019-02-26 21:08:27",
                "thumbnailUrl": "aHR0cHM6Ly9zY29udGVudC1mbWwyMC0xLmNkbmluc3RhZ3JhbS5jb20vdi90NTEuMTI0NDItMTUvNTE1MzUyNDFfNTkxOTkyMjUxMjgzNTc4XzQxNjIwNTIxMDg3Mjc5Njc0Nzhfbi5qcGc/c3RwPWRzdC1qcGdfZTM1Jl9uY19odD1zY29udGVudC1mbWwyMC0xLmNkbmluc3RhZ3JhbS5jb20mX25jX2NhdD0xMTAmX25jX29oYz15WWZLQWFyNVBYMEFYOS1FY2pyJmVkbT1BSGxmWkh3QkFBQUEmY2NiPTctNSZvaD0wMF9BZkNaZDhRTm5GNWRkOFJDMmRDdVlpUDFuTG9BamF3anZmV1FPVXRxNjBkZlZnJm9lPTY1MDVDMThBJl9uY19zaWQ9ZDhkMDJi"
            },
            {
                "type": "image",
                "createdTime": "2019-02-18 13:10:00",
                "thumbnailUrl": "aHR0cHM6Ly9zY29udGVudC1mbWwyMC0xLmNkbmluc3RhZ3JhbS5jb20vdi90NTEuMTI0NDItMTUvNTA4MTM3NTdfMTM2NTcwNTc1NjkwMjQ0Nl83ODI3NDIyNzk0ODg2NzAwNzUwX24uanBnP3N0cD1kc3QtanBnX2UzNSZfbmNfaHQ9c2NvbnRlbnQtZm1sMjAtMS5jZG5pbnN0YWdyYW0uY29tJl9uY19jYXQ9MTEwJl9uY19vaGM9Qm1FTV83ZUVwY3NBWDg3dk9zayZlZG09QUhsZlpId0JBQUFBJmNjYj03LTUmb2g9MDBfQWZDSFNoMGdESEp5YVdRanB5WmlSa05vTVlyRHY1cmhWbGpzQWJRazVXZ0ZQdyZvZT02NTA2Q0JFMCZfbmNfc2lkPWQ4ZDAyYg=="
            },
            {
                "type": "image",
                "createdTime": "2019-01-30 09:34:48",
                "thumbnailUrl": "aHR0cHM6Ly9zY29udGVudC1mbWwyMC0xLmNkbmluc3RhZ3JhbS5jb20vdi90NTEuMTI0NDItMTUvNDk4NTgzMThfMjQxODYzNjc4NDg3NzE5NV82OTE1NDk4MDM2ODYxMzQyNTIwX24uanBnP3N0cD1kc3QtanBnX2UzNSZfbmNfaHQ9c2NvbnRlbnQtZm1sMjAtMS5jZG5pbnN0YWdyYW0uY29tJl9uY19jYXQ9MSZfbmNfb2hjPXM3T0NyRTRvNXo4QVg4OVhLbjgmZWRtPUFIbGZaSHdCQUFBQSZjY2I9Ny01Jm9oPTAwX0FmQ0NUbEQtWTR3ZUI5VjJFNVdWY3VyZWhlWVBkYmMxNHRITzNRTEFMT2VnclEmb2U9NjUwNUE3MDcmX25jX3NpZD1kOGQwMmI="
            }
        ]', true);
        return response()->json($data, 200);
    }
}
