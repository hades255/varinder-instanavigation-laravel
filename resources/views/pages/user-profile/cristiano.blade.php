@extends('layouts.app')

@section('title', 'cristiano | Watch Instagram stories anonymously | Posts | Comments | User profile statistics')

@push('style')
    <link rel="stylesheet" href="{{ asset('assets/css/socialstory.css?v1') }}">
    <link rel="stylesheet" href="{{ asset('releases/v5.2.0/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('OwlCarousel2/2.3.4/assets/owl.carousel.min.css') }}"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous">
@endpush

@section('content')

    <div class="container">
        <div class="row justify-content-center text-center mb-2 mt-4">

            <!-- Yandex.RTB R-A-1261276-5 -->
            <div id="yandex_rtb_R-A-1261276-5"></div>
            <script>
                window.yaContextCb.push(() => {
                    Ya.Context.AdvManager.render({
                        "blockId": "R-A-1261276-5",
                        "renderTo": "yandex_rtb_R-A-1261276-5"
                    })
                })
            </script>
        </div>
    </div>
    <div class="container profile">
        <div class="row justify-content-center text-center"></div>

        <div id="storytime"></div>
        <profile-page
            v-bind:user-info-prop='{"id":173560420,"username":"cristiano","fullName":"Cristiano Ronaldo","profilePicUrl":"aHR0cHM6Ly9zY29udGVudC1saHI4LTIuY2RuaW5zdGFncmFtLmNvbS92L3Q1MS4yODg1LTE5LzI3ODkzMTI2OV8zNjAxMjQ4OTk0OTg5NjlfOTAwNjk3ODg0NjEwMzQxNzA4OF9uLmpwZz9zdHA9ZHN0LWpwZ19zMzIweDMyMCZfbmNfaHQ9c2NvbnRlbnQtbGhyOC0yLmNkbmluc3RhZ3JhbS5jb20mX25jX2NhdD0xJl9uY19vaGM9RVBQVTRQenlkdzRBWDlaVWprMCZlZG09QU9RMWMwd0JBQUFBJmNjYj03LTUmb2g9MDBfQWZDME9yUy1WemhyU2oxYlhMb2JON3ZlRjBxOFQxVUs3ZUdOUGc5QkpkVTM3USZvZT02NTA1QTNDRSZfbmNfc2lkPThiMzU0Ng==","biography":"Join my NFT journey on @Binance. Click the link below to get started.","followsCount":568,"followedByCount":604793600,"mediaCount":3553,"isPrivate":false}'
            v-bind:highlights-prop="[]"
            v-bind:last-stories-prop='[{"createdTime":"09:47:36","type":"image","thumbnailUrl":"aHR0cHM6Ly9zY29udGVudC1taWEzLTEuY2RuaW5zdGFncmFtLmNvbS92L3Q1MS4yODg1LTE1LzM3Njc4NDY4Nl82NDgyMTQzMzA0MjExMTRfMjkyMDUyNDM5ODM1NzEwODI3N19uLmpwZz9zdHA9ZHN0LWpwZ19lMzVfcDEwODB4MTA4MCZfbmNfaHQ9c2NvbnRlbnQtbWlhMy0xLmNkbmluc3RhZ3JhbS5jb20mX25jX2NhdD0xJl9uY19vaGM9WFpyU3hVandNMzBBWC13NUlOMSZlZG09QUhsZlpId0JBQUFBJmNjYj03LTUmb2g9MDBfQWZDSG9NYUxOdzFEQTlSXzZsbS0xTHc1dTRJM2R6QzRmdC1wZG8xUFNFUVpOdyZvZT02NTAyQTA4MSZfbmNfc2lkPWQ4ZDAyYg=="}]'
            v-bind:posts-prop='[{"id":"Cw8jA6Ntbk8","type":"sidecar","isVideo":false,"caption":"Vit\u00f3ria muito importante num jogo dif\u00edcil! Seguimos invenc\u00edveis!\ud83d\udc4f\ud83c\udffc\nVamos @portugal \ud83d\udcaa\ud83c\udffc\ud83c\uddf5\ud83c\uddf9\n#vesteabandeira","likesCount":7088628,"commentsCount":39522,"createdTime":"08 September 2023 21:32:47","thumbnailUrl":"aHR0cHM6Ly9zY29udGVudC1saHI4LTIuY2RuaW5zdGFncmFtLmNvbS92L3QzOS4zMDgwOC02LzM3Njc0NzIyN18xODUwMjA5Nzg2OTA1NjQyMV8xMjc4MzMwMDEyNjk1NjQ0NDAyX24uanBnP3N0cD1jMjQwLjAuOTYwLjk2MGFfZHN0LWpwZ19lMTVfczY0MHg2NDAmX25jX2h0PXNjb250ZW50LWxocjgtMi5jZG5pbnN0YWdyYW0uY29tJl9uY19jYXQ9MSZfbmNfb2hjPWladGhLWTRzQl9ZQVg4TFNvRkQmZWRtPUFPUTFjMHdBQUFBQSZjY2I9Ny01Jm9oPTAwX0FmQ205S1VVQ0ZuTTRqUjlLS1JfRThoX0tjM1RPUkZDRUhCSWtZQV8xampmc0Emb2U9NjUwNjEzNTYmX25jX3NpZD04YjM1NDY=","sidecarItems":[{"is_video":false,"display_url":"aHR0cHM6Ly9zY29udGVudC1saHI4LTIuY2RuaW5zdGFncmFtLmNvbS92L3QzOS4zMDgwOC02LzM3Njc0NzIyN18xODUwMjA5Nzg2OTA1NjQyMV8xMjc4MzMwMDEyNjk1NjQ0NDAyX24uanBnP3N0cD1kc3QtanBnX2UzNV9zMTA4MHgxMDgwX3NoMC4wOCZfbmNfaHQ9c2NvbnRlbnQtbGhyOC0yLmNkbmluc3RhZ3JhbS5jb20mX25jX2NhdD0xJl9uY19vaGM9aVp0aEtZNHNCX1lBWDhMU29GRCZlZG09QU9RMWMwd0FBQUFBJmNjYj03LTUmb2g9MDBfQWZBanZzbHU5cU8yeXJ4S1R0LU9GSlZVLXhvRjdZYXpTVWlzODhSU3BYMVVVdyZvZT02NTA2MTM1NiZfbmNfc2lkPThiMzU0Ng=="},{"is_video":false,"display_url":"aHR0cHM6Ly9zY29udGVudC1saHI4LTIuY2RuaW5zdGFncmFtLmNvbS92L3QzOS4zMDgwOC02LzM3Njc0MjA1Nl8xODUwMjA5Nzg4NzA1NjQyMV81ODg1MDIyNTgxNjMyMTA2MzgyX24uanBnP3N0cD1kc3QtanBnX2UzNV9zMTA4MHgxMDgwX3NoMC4wOCZfbmNfaHQ9c2NvbnRlbnQtbGhyOC0yLmNkbmluc3RhZ3JhbS5jb20mX25jX2NhdD0xJl9uY19vaGM9cFFwZ3VlZkQweklBWC1mbG5zdCZlZG09QU9RMWMwd0FBQUFBJmNjYj03LTUmb2g9MDBfQWZCaDdRdnZ0NjRsLVpHNjJscXVaV1dnOHRCb1BIQ0JidGtZQVg4MXNqcGZQdyZvZT02NTA1NDIyMSZfbmNfc2lkPThiMzU0Ng=="},{"is_video":false,"display_url":"aHR0cHM6Ly9zY29udGVudC1saHI4LTIuY2RuaW5zdGFncmFtLmNvbS92L3QzOS4zMDgwOC02LzM3NjY4ODMxNF8xODUwMjA5Nzg3ODA1NjQyMV83ODQ3MDQ2MjMxMzgzNjYzNzczX24uanBnP3N0cD1kc3QtanBnX2UzNV9zMTA4MHgxMDgwX3NoMC4wOCZfbmNfaHQ9c2NvbnRlbnQtbGhyOC0yLmNkbmluc3RhZ3JhbS5jb20mX25jX2NhdD0xJl9uY19vaGM9VzZFbjFxb29LbXNBWDgzRFVLRSZlZG09QU9RMWMwd0FBQUFBJmNjYj03LTUmb2g9MDBfQWZCa1Exc1VlVFN4Ymgxc1A0VktCNDYydkdaVzVaUE1XS0hsazF6RHpUc0NEZyZvZT02NTA1RTBEMCZfbmNfc2lkPThiMzU0Ng=="}]},{"id":"Cw0YBQ4tJqp","type":"sidecar","isVideo":false,"caption":"\u2604\ufe0f\ud83d\udc40\ud83d\ude1c","likesCount":6361733,"commentsCount":48084,"createdTime":"05 September 2023 17:22:47","thumbnailUrl":"aHR0cHM6Ly9zY29udGVudC1saHI4LTIuY2RuaW5zdGFncmFtLmNvbS92L3QzOS4zMDgwOC02LzM3NTc1MjE1Nl8xODUwMTQ5MzE4OTA1NjQyMV81ODkyMTEyNTgzMzMxODM4MDM1X24uanBnP3N0cD1jMjQwLjAuOTYwLjk2MGFfZHN0LWpwZ19lMTVfczY0MHg2NDAmX25jX2h0PXNjb250ZW50LWxocjgtMi5jZG5pbnN0YWdyYW0uY29tJl9uY19jYXQ9MSZfbmNfb2hjPUpmbjJteklYNFFFQVg4M0FXYWUmZWRtPUFPUTFjMHdBQUFBQSZjY2I9Ny01Jm9oPTAwX0FmRFoxd05NTmlxRGxuMGtZb0pXazRNRzE3dnVwcjVSOWZvbXRFOXZKdG9xVEEmb2U9NjUwNEU2NjQmX25jX3NpZD04YjM1NDY=","sidecarItems":[{"is_video":false,"display_url":"aHR0cHM6Ly9zY29udGVudC1saHI4LTIuY2RuaW5zdGFncmFtLmNvbS92L3QzOS4zMDgwOC02LzM3NTc1MjE1Nl8xODUwMTQ5MzE4OTA1NjQyMV81ODkyMTEyNTgzMzMxODM4MDM1X24uanBnP3N0cD1kc3QtanBnX2UzNV9zMTA4MHgxMDgwX3NoMC4wOCZfbmNfaHQ9c2NvbnRlbnQtbGhyOC0yLmNkbmluc3RhZ3JhbS5jb20mX25jX2NhdD0xJl9uY19vaGM9SmZuMm16SVg0UUVBWDgzQVdhZSZlZG09QU9RMWMwd0FBQUFBJmNjYj03LTUmb2g9MDBfQWZDbko3WVZqcVQ3NlZQc0VRbkt4Mm5fOW5vakJydndKdDhhN2RlMHJQeWttZyZvZT02NTA0RTY2NCZfbmNfc2lkPThiMzU0Ng=="},{"is_video":false,"display_url":"aHR0cHM6Ly9zY29udGVudC1saHI4LTIuY2RuaW5zdGFncmFtLmNvbS92L3QzOS4zMDgwOC02LzM3NTc1MDc5Nl8xODUwMTQ5MzE5ODA1NjQyMV83ODMxNDU3MDY5MTMxMzI2Nzk0X24uanBnP3N0cD1kc3QtanBnX2UzNV9zMTA4MHgxMDgwX3NoMC4wOCZfbmNfaHQ9c2NvbnRlbnQtbGhyOC0yLmNkbmluc3RhZ3JhbS5jb20mX25jX2NhdD0xJl9uY19vaGM9MDZZbmJKWWxFTXdBWC1id3lhYiZlZG09QU9RMWMwd0FBQUFBJmNjYj03LTUmb2g9MDBfQWZES25KUm94UkJBcXVSeFlud0NUbnQ5M20tS1o0dzZVZFlJS1VUbVFMNVUwQSZvZT02NTA1NTVDNyZfbmNfc2lkPThiMzU0Ng=="}]},{"id":"CwyElM7tUuN","type":"image","isVideo":false,"caption":"Bom estar de volta a casa!\ud83c\uddf5\ud83c\uddf9\ud83d\ude4c\ud83c\udffc\nMotiva\u00e7\u00e3o maxima e foco total para encarar estes 2 pr\u00f3ximos jogos nesta nossa caminhada rumo ao Euro2024!\ud83d\udcaa\ud83c\udffc\ud83c\uddf5\ud83c\uddf9\n#vesteabandeira","likesCount":5982364,"commentsCount":45813,"createdTime":"04 September 2023 19:54:27","thumbnailUrl":"aHR0cHM6Ly9zY29udGVudC1saHI4LTIuY2RuaW5zdGFncmFtLmNvbS92L3QzOS4zMDgwOC02LzM3NTc0ODQzNF8xODUwMTMzNTQxNjA1NjQyMV8yNDc3OTY5MzczMTE3Nzk3ODI5X24uanBnP3N0cD1kc3QtanBnX2UzNV9zNjQweDY0MF9zaDAuMDgmX25jX2h0PXNjb250ZW50LWxocjgtMi5jZG5pbnN0YWdyYW0uY29tJl9uY19jYXQ9MSZfbmNfb2hjPVV5cHpTcXRxamhvQVg5ZFowTncmZWRtPUFPUTFjMHdBQUFBQSZjY2I9Ny01Jm9oPTAwX0FmQzRxbXB3UHRkcF9zYmlTR3QyaGVnTDZPRkppYnE2SlItOGJyVVRYbU13WUEmb2U9NjUwNTI0RjEmX25jX3NpZD04YjM1NDY=","sidecarItems":[]},{"id":"CwxNpntx1Lc","type":"video","isVideo":true,"caption":"Cristiano Ronaldo vs the lie detector is now live!\n\nFind the link in our stories or head to the Binance Youtube channel. \n\nMake sure you watch until the end.","likesCount":1517942,"commentsCount":10209,"createdTime":"04 September 2023 12:00:06","thumbnailUrl":"aHR0cHM6Ly9zY29udGVudC1saHI4LTIuY2RuaW5zdGFncmFtLmNvbS92L3Q1MS4yODg1LTE1LzM3NDI3MzAxM182NTY1ODk2MjMwOTY1OTJfMTUzNTY4MjYxMzgzMzA3NTIzMF9uLmpwZz9zdHA9YzAuNDIwLjEwODAuMTA4MGFfZHN0LWpwZ19lMzVfczY0MHg2NDBfc2gwLjA4Jl9uY19odD1zY29udGVudC1saHI4LTIuY2RuaW5zdGFncmFtLmNvbSZfbmNfY2F0PTEmX25jX29oYz1fT1BzckdVVGJrd0FYX0lvbkJhJmVkbT1BT1ExYzB3QkFBQUEmY2NiPTctNSZvaD0wMF9BZkNreGt5SXpUYmx4dUNaZ1JIbU5jUjVqN09HT1hUMU1STWc0cXphZ0V0Wk5BJm9lPTY1MDIwNEIzJl9uY19zaWQ9OGIzNTQ2","sidecarItems":[],"videoUrl":"aHR0cHM6Ly9zY29udGVudC1saHI4LTEuY2RuaW5zdGFncmFtLmNvbS92L3Q2Ni4zMDEwMC0xNi8zMTg4MjM1ODNfODExNjE1NjQwNjYwNTYyXzM5NzQ1MTI2NDUxMTY1Nzg2Njlfbi5tcDQ\/X25jX2h0PXNjb250ZW50LWxocjgtMS5jZG5pbnN0YWdyYW0uY29tJl9uY19jYXQ9MTA2Jl9uY19vaGM9QXNhT0l4YXB6Z0lBWC12RWlUZSZlZG09QU9RMWMwd0JBQUFBJmNjYj03LTUmb2g9MDBfQWZDRkYwQ0Rzd1V6cHBEcm12NFJZcFk3MnNJTDU5QVBDYnNUSkRwb2xxSGpZdyZvZT02NTAxQzhCQyZfbmNfc2lkPThiMzU0Ng=="},{"id":"CwtHpWSN0QI","type":"sidecar","isVideo":false,"caption":"Another great team performance!\nWe keep improving. \nLet\u2019s go @alnassr \ud83d\udc9b\ud83d\udc99\n850 career goals and still counting!\ud83d\ude09\ud83d\udcaa\ud83c\udffc","likesCount":7215923,"commentsCount":42986,"createdTime":"02 September 2023 21:45:01","thumbnailUrl":"aHR0cHM6Ly9zY29udGVudC1saHI4LTIuY2RuaW5zdGFncmFtLmNvbS92L3QzOS4zMDgwOC02LzM3NTE2NDU4M18xODUwMDk2NDg1NjA1NjQyMV8yNTE3MTE1MDgzNTE3NTA3ODE4X24uanBnP3N0cD1jMTAzLjAuMTIzMy4xMjMzYV9kc3QtanBnX2UzNV9zNjQweDY0MF9zaDAuMDgmX25jX2h0PXNjb250ZW50LWxocjgtMi5jZG5pbnN0YWdyYW0uY29tJl9uY19jYXQ9MSZfbmNfb2hjPXNHdERYckpiNEg0QVg4TE1SZnImZWRtPUFPUTFjMHdBQUFBQSZjY2I9Ny01Jm9oPTAwX0FmQ1Rzajd2dm91NVprWmZwUFI4bmZnTkhSUUpGTm9BUXNFRVk1NGFfanBQX3cmb2U9NjUwNjJCNzkmX25jX3NpZD04YjM1NDY=","sidecarItems":[{"is_video":false,"display_url":"aHR0cHM6Ly9zY29udGVudC1saHI4LTIuY2RuaW5zdGFncmFtLmNvbS92L3QzOS4zMDgwOC02LzM3NTE2NDU4M18xODUwMDk2NDg1NjA1NjQyMV8yNTE3MTE1MDgzNTE3NTA3ODE4X24uanBnP3N0cD1kc3QtanBnX2UzNV9zMTA4MHgxMDgwX3NoMC4wOCZfbmNfaHQ9c2NvbnRlbnQtbGhyOC0yLmNkbmluc3RhZ3JhbS5jb20mX25jX2NhdD0xJl9uY19vaGM9c0d0RFhySmI0SDRBWDhMTVJmciZlZG09QU9RMWMwd0FBQUFBJmNjYj03LTUmb2g9MDBfQWZBSU5QWGxmNUFzalNyWGc3UDZXUHVKUDJlSHNXdDFUdUcxVkNCNDBCMURuZyZvZT02NTA2MkI3OSZfbmNfc2lkPThiMzU0Ng=="},{"is_video":false,"display_url":"aHR0cHM6Ly9zY29udGVudC1saHI4LTIuY2RuaW5zdGFncmFtLmNvbS92L3QzOS4zMDgwOC02LzM3NTA0MzEzN18xODUwMDk2NDg2NTA1NjQyMV84MzM1MTU4Nzg5NjQxMDY4NTQyX24uanBnP3N0cD1kc3QtanBnX2UzNV9zMTA4MHgxMDgwX3NoMC4wOCZfbmNfaHQ9c2NvbnRlbnQtbGhyOC0yLmNkbmluc3RhZ3JhbS5jb20mX25jX2NhdD0xJl9uY19vaGM9N1U1YzdMTzJKNzhBWF8xS0stQSZlZG09QU9RMWMwd0FBQUFBJmNjYj03LTUmb2g9MDBfQWZER0RoUG1BeDVfa3NmTmxsdmN1SkxBZGQ4NDVIRHlROThwd1NoVElwTzYwUSZvZT02NTA1MEU2QyZfbmNfc2lkPThiMzU0Ng=="},{"is_video":false,"display_url":"aHR0cHM6Ly9zY29udGVudC1saHI4LTIuY2RuaW5zdGFncmFtLmNvbS92L3QzOS4zMDgwOC02LzM3NTA0OTk0MF8xODUwMDk2NDg3NDA1NjQyMV84OTk5NjUxNTk5NTgwNzE1NDQ2X24uanBnP3N0cD1kc3QtanBnX2UzNV9zMTA4MHgxMDgwX3NoMC4wOCZfbmNfaHQ9c2NvbnRlbnQtbGhyOC0yLmNkbmluc3RhZ3JhbS5jb20mX25jX2NhdD0xMDEmX25jX29oYz1FT2VhVkdacnhTb0FYOU5EV1pvJmVkbT1BT1ExYzB3QUFBQUEmY2NiPTctNSZvaD0wMF9BZkRkN0t0NUpwTHhjeC1BR3dHUDlleFhuTFlSN1BjcmhmcjRBWG9TcE9DSnJRJm9lPTY1MDRFRjg2Jl9uY19zaWQ9OGIzNTQ2"},{"is_video":false,"display_url":"aHR0cHM6Ly9zY29udGVudC1saHI4LTIuY2RuaW5zdGFncmFtLmNvbS92L3QzOS4zMDgwOC02LzM3NDc2NzE2MV8xODUwMDk2NDg4MzA1NjQyMV83NTEzNjQyNDgyNzEwNTg0MjUzX24uanBnP3N0cD1kc3QtanBnX2UzNV9zMTA4MHgxMDgwX3NoMC4wOCZfbmNfaHQ9c2NvbnRlbnQtbGhyOC0yLmNkbmluc3RhZ3JhbS5jb20mX25jX2NhdD0xMDEmX25jX29oYz05TVlSWDhMN3Mtb0FYLTczUnlMJmVkbT1BT1ExYzB3QUFBQUEmY2NiPTctNSZvaD0wMF9BZkJXQUVhUTVqMzRLT0stTmxGYldiQzRfakpNa1BZM1dMVGtCVlNCNjVILU5RJm9lPTY1MDRGQjRBJl9uY19zaWQ9OGIzNTQ2"}]},{"id":"Cwp6OuGM2Bb","type":"video","isVideo":true,"caption":"More fun with @kickoffbyzuju ! \ud83d\ude02 Want to win the shirt I\u2019m wearing? Follow the steps below \ud83d\udc47\n\n\ud83d\udcf2 Download and sign up for an account on the Kickoff by Zuju app\n\n\u26bd\ufe0f Play the new Live Match Contest game\n\n\u2b50\ufe0f Receive an entry with every new level you reach (existing users will have their current number of levels applied)\n\n\ud83c\udf81 Win the shirt I wore at our recent filming day!\n\nTap the link in Kickoff by Zuju\u2019s bio and my story to enter. \ud83d\udcaa\n\n#PlayEveryMoment","likesCount":1942048,"commentsCount":16077,"createdTime":"01 September 2023 16:00:06","thumbnailUrl":"aHR0cHM6Ly9zY29udGVudC1saHI4LTIuY2RuaW5zdGFncmFtLmNvbS92L3Q1MS4yODg1LTE1LzM3MjkyOTgwN18xNDQyMTE4MjUzMTg4OTgwXzcxMDI3OTM2ODY2MzAzMDc4MjZfbi5qcGc\/c3RwPWMwLjI4MC43MjAuNzIwYV9kc3QtanBnX2UxNV9zNjQweDY0MCZfbmNfaHQ9c2NvbnRlbnQtbGhyOC0yLmNkbmluc3RhZ3JhbS5jb20mX25jX2NhdD0xJl9uY19vaGM9YlFzckV3YUNPWlVBWDlJREVsdCZlZG09QU9RMWMwd0JBQUFBJmNjYj03LTUmb2g9MDBfQWZBMXgzeUdjS1VSdDM3RlozWVQxT2pSUFMxdzY1emFTTTRtQjV6SWlBVm5jUSZvZT02NTAyMkVBNSZfbmNfc2lkPThiMzU0Ng==","sidecarItems":[],"videoUrl":"aHR0cHM6Ly9zY29udGVudC1saHI4LTEuY2RuaW5zdGFncmFtLmNvbS92L3Q2Ni4zMDEwMC0xNi8zMzU3OTEyNjhfMjIwNjg4NjY0Mjg0MzA5NV84NDY3NzQ2OTA2MjA4OTE4MDRfbi5tcDQ\/X25jX2h0PXNjb250ZW50LWxocjgtMS5jZG5pbnN0YWdyYW0uY29tJl9uY19jYXQ9MTA3Jl9uY19vaGM9UlA4MnJVelUtU0lBWDk5RzcyRCZlZG09QU9RMWMwd0JBQUFBJmNjYj03LTUmb2g9MDBfQWZEaG16ZnhmcjIySHNHal9ZVjNScWFVSTRjVWJ0emNMLW5YWG5EVGdSZG1FUSZvZT02NTAxRDlGRiZfbmNfc2lkPThiMzU0Ng=="},{"id":"CwncFNtM1Rp","type":"video","isVideo":true,"caption":"Herbalife24 #CR7Drive is built different. Specifically formulated to drive me to perform at my best in every stadium around the world #Herbalife","likesCount":1816698,"commentsCount":12736,"createdTime":"31 August 2023 17:00:20","thumbnailUrl":"aHR0cHM6Ly9zY29udGVudC1saHI4LTIuY2RuaW5zdGFncmFtLmNvbS92L3Q1MS4yODg1LTE1LzM3MjExMDMzNl83NzY5NjM1MzQyMjk2NzhfNDU0OTU5MjY0NTc5NzE3ODcwOF9uLmpwZz9zdHA9YzAuMjM2LjYwOC42MDhhX2RzdC1qcGdfZTE1Jl9uY19odD1zY29udGVudC1saHI4LTIuY2RuaW5zdGFncmFtLmNvbSZfbmNfY2F0PTEmX25jX29oYz1ZTFVkbjFQcTJrWUFYLWdiS2xkJmVkbT1BT1ExYzB3QkFBQUEmY2NiPTctNSZvaD0wMF9BZkRwLWNKLVhFdkRiRnYxNGFUNEg5ZzFQbjk3WjktRUlRTDZYTlJybU1pYXBnJm9lPTY1MDFDOTZCJl9uY19zaWQ9OGIzNTQ2","sidecarItems":[],"videoUrl":"aHR0cHM6Ly9zY29udGVudC1saHI4LTEuY2RuaW5zdGFncmFtLmNvbS92L3Q1MC4yODg2LTE2LzM3MzMwNjE5M18xNzE3MTY0NjE1NDY1ODAzXzIwNzg1Mjk0NjE1NTYxNzYzNTVfbi5tcDQ\/X25jX2h0PXNjb250ZW50LWxocjgtMS5jZG5pbnN0YWdyYW0uY29tJl9uY19jYXQ9MTExJl9uY19vaGM9d0hnSExHeXdTSElBWDhWVy1pTyZlZG09QU9RMWMwd0JBQUFBJmNjYj03LTUmb2g9MDBfQWZBOVF1U3ZCWDFqTlRmT1NrQ0pfZDdMbFpCY255OHFGSjlfRjlMYnVlUEdCZyZvZT02NTAxREUzMCZfbmNfc2lkPThiMzU0Ng=="},{"id":"CwkyGhmsTVw","type":"image","isVideo":false,"caption":"Designed for comfort and attitude. \n\n#CR7\u00a0#CR7UNDERWEAR #UNDERWEAR #DEARYSIN7S","likesCount":5505295,"commentsCount":40748,"createdTime":"30 August 2023 16:02:51","thumbnailUrl":"aHR0cHM6Ly9zY29udGVudC1saHI4LTIuY2RuaW5zdGFncmFtLmNvbS92L3QzOS4zMDgwOC02LzM3MDM2MzY1MF8xODUwMDMxNjQzOTA1NjQyMV8xODUwNjk2NTY5NjMxNTU4MDM4X24uanBnP3N0cD1jMC4xODAuMTQ0MC4xNDQwYV9kc3QtanBnX2UzNV9zNjQweDY0MF9zaDAuMDgmX25jX2h0PXNjb250ZW50LWxocjgtMi5jZG5pbnN0YWdyYW0uY29tJl9uY19jYXQ9MSZfbmNfb2hjPWV3Q3V3UEQxMXlVQVhfTDZMQnImZWRtPUFPUTFjMHdBQUFBQSZjY2I9Ny01Jm9oPTAwX0FmQWFzRWJyc1RyNTFZcWgyT0dTRlR6VU9RMmZmX2ZtdTVZZ3lhYXJ1bHpjVGcmb2U9NjUwNEU1NjQmX25jX3NpZD04YjM1NDY=","sidecarItems":[]},{"id":"Cwiw_VyNC2_","type":"sidecar","isVideo":false,"caption":"What an amazing atmosphere in our stadium! \nVery happy to celebrate this win with our fans!\ud83d\udc9b\ud83d\udc99\nFantastic performance from the Team!\ud83d\udc4f\ud83c\udffc\ud83d\udcaa\ud83c\udffc\nVamooos @alnassr \u26bd\ufe0f\u26bd\ufe0f","likesCount":12081088,"commentsCount":87961,"createdTime":"29 August 2023 21:14:39","thumbnailUrl":"aHR0cHM6Ly9zY29udGVudC1saHI4LTIuY2RuaW5zdGFncmFtLmNvbS92L3QzOS4zMDgwOC02LzM3MjkyMjcwMF8xODUwMDE2ODEyODA1NjQyMV82NzM2NTc0NDU2MTYzODA1MTU1X24uanBnP3N0cD1jMjYuMC4xMzg3LjEzODdhX2RzdC1qcGdfZTM1X3M2NDB4NjQwX3NoMC4wOCZfbmNfaHQ9c2NvbnRlbnQtbGhyOC0yLmNkbmluc3RhZ3JhbS5jb20mX25jX2NhdD0xJl9uY19vaGM9OEZES3c1WV8yUkVBWDhXOWVlMiZlZG09QU9RMWMwd0FBQUFBJmNjYj03LTUmb2g9MDBfQWZEX2lMcnR6cGJWQzdGeVdxdGZVdVpnb1p1NXIxMnRISl9zVFlZYlluOVh3USZvZT02NTA0NkE3NCZfbmNfc2lkPThiMzU0Ng==","sidecarItems":[{"is_video":false,"display_url":"aHR0cHM6Ly9zY29udGVudC1saHI4LTIuY2RuaW5zdGFncmFtLmNvbS92L3QzOS4zMDgwOC02LzM3MjkyMjcwMF8xODUwMDE2ODEyODA1NjQyMV82NzM2NTc0NDU2MTYzODA1MTU1X24uanBnP3N0cD1kc3QtanBnX2UzNV9zMTA4MHgxMDgwX3NoMC4wOCZfbmNfaHQ9c2NvbnRlbnQtbGhyOC0yLmNkbmluc3RhZ3JhbS5jb20mX25jX2NhdD0xJl9uY19vaGM9OEZES3c1WV8yUkVBWDhXOWVlMiZlZG09QU9RMWMwd0FBQUFBJmNjYj03LTUmb2g9MDBfQWZBNlYwUWljZktLUjVDRHVmczlnaEZIVUVUbV91OWE0Ull0dTVjTVZ6MTduUSZvZT02NTA0NkE3NCZfbmNfc2lkPThiMzU0Ng=="},{"is_video":false,"display_url":"aHR0cHM6Ly9zY29udGVudC1saHI4LTIuY2RuaW5zdGFncmFtLmNvbS92L3QzOS4zMDgwOC02LzM3MjkwMzM0Ml8xODUwMDE2ODEzNzA1NjQyMV84NzEyNjQ0NDUxMDI5NzgyMTg4X24uanBnP3N0cD1kc3QtanBnX2UzNV9zMTA4MHgxMDgwX3NoMC4wOCZfbmNfaHQ9c2NvbnRlbnQtbGhyOC0yLmNkbmluc3RhZ3JhbS5jb20mX25jX2NhdD0xJl9uY19vaGM9cXZUT291bjFBQTRBWDhENFNNNCZlZG09QU9RMWMwd0FBQUFBJmNjYj03LTUmb2g9MDBfQWZDa1VmR2R0X1hZTFQ0ZjlYS1o0c2FwWWZmWkxJRy1ldzJNeXFNWGp0U0xOdyZvZT02NTA1RTg5MyZfbmNfc2lkPThiMzU0Ng=="},{"is_video":false,"display_url":"aHR0cHM6Ly9zY29udGVudC1saHI4LTIuY2RuaW5zdGFncmFtLmNvbS92L3QzOS4zMDgwOC02LzM3Mjg5ODY2NV8xODUwMDE2ODE0OTA1NjQyMV8xOTQxNTM3Nzc5ODExNDg3NjBfbi5qcGc\/c3RwPWRzdC1qcGdfZTM1X3MxMDgweDEwODBfc2gwLjA4Jl9uY19odD1zY29udGVudC1saHI4LTIuY2RuaW5zdGFncmFtLmNvbSZfbmNfY2F0PTEmX25jX29oYz1Nd0ZselhKckdkc0FYOGFGMWZUJmVkbT1BT1ExYzB3QUFBQUEmY2NiPTctNSZvaD0wMF9BZkRBOEMwa2FuZXhLV3dGVmFtVEE4b1lkVDR2SURmUk1hNWdnZ19Qd2FrMGNRJm9lPTY1MDQ3MDE5Jl9uY19zaWQ9OGIzNTQ2"},{"is_video":false,"display_url":"aHR0cHM6Ly9zY29udGVudC1saHI4LTIuY2RuaW5zdGFncmFtLmNvbS92L3QzOS4zMDgwOC02LzM3MjkyNDE1M18xODUwMDE2ODE1ODA1NjQyMV8zNzg2NTg0NjY3NTI1NTIzMDIyX24uanBnP3N0cD1kc3QtanBnX2UzNV9zMTA4MHgxMDgwX3NoMC4wOCZfbmNfaHQ9c2NvbnRlbnQtbGhyOC0yLmNkbmluc3RhZ3JhbS5jb20mX25jX2NhdD0xJl9uY19vaGM9empaMGh2WDR2cEFBWF9EdUx4RiZlZG09QU9RMWMwd0FBQUFBJmNjYj03LTUmb2g9MDBfQWZDVkVPM1E0TEdIR3Vjbm1QZFBhOVVheVFUMWw4d21rTjlsWU5vaXdrM29kdyZvZT02NTA2MzAyRSZfbmNfc2lkPThiMzU0Ng=="},{"is_video":false,"display_url":"aHR0cHM6Ly9zY29udGVudC1saHI4LTIuY2RuaW5zdGFncmFtLmNvbS92L3QzOS4zMDgwOC02LzM3Mjg1MTkxNl8xODUwMDE2ODE3MDA1NjQyMV8zNjIxMDUyMDA5OTI4NjgzMTUwX24uanBnP3N0cD1kc3QtanBnX2UzNV9zMTA4MHgxMDgwX3NoMC4wOCZfbmNfaHQ9c2NvbnRlbnQtbGhyOC0yLmNkbmluc3RhZ3JhbS5jb20mX25jX2NhdD0xMDEmX25jX29oYz1qUEJjYVRydzlId0FYOHdrUFdSJmVkbT1BT1ExYzB3QUFBQUEmY2NiPTctNSZvaD0wMF9BZkFSbmpTVms1UFhIN2tQVTFwS2tFOEtaZTVxTUxuZDZ3Qld0bFRwRkRfYzZnJm9lPTY1MDUxMEFGJl9uY19zaWQ9OGIzNTQ2"},{"is_video":false,"display_url":"aHR0cHM6Ly9zY29udGVudC1saHI4LTIuY2RuaW5zdGFncmFtLmNvbS92L3QzOS4zMDgwOC02LzM3MjkwNzEzMF8xODUwMDE2ODE3OTA1NjQyMV8zMzQyMjY5NTYzOTEyOTg2Mzk2X24uanBnP3N0cD1kc3QtanBnX2UzNV9zMTA4MHgxMDgwX3NoMC4wOCZfbmNfaHQ9c2NvbnRlbnQtbGhyOC0yLmNkbmluc3RhZ3JhbS5jb20mX25jX2NhdD0xMDEmX25jX29oYz1adnF0WlF5NnZ0WUFYOGJOOGRpJmVkbT1BT1ExYzB3QUFBQUEmY2NiPTctNSZvaD0wMF9BZkEzRXVsWkJYTzZEcHRRZHREd3FiS2ZzZ3FWZG00MVMwc21ZUExfdmpBYWxRJm9lPTY1MDUxMUU3Jl9uY19zaWQ9OGIzNTQ2"},{"is_video":false,"display_url":"aHR0cHM6Ly9zY29udGVudC1saHI4LTIuY2RuaW5zdGFncmFtLmNvbS92L3QzOS4zMDgwOC02LzM3Mjg1MDU5M18xODUwMDE2ODE4ODA1NjQyMV82OTgyNDcxNDU0ODc5MzQzMDMyX24uanBnP3N0cD1kc3QtanBnX2UzNV9zMTA4MHgxMDgwX3NoMC4wOCZfbmNfaHQ9c2NvbnRlbnQtbGhyOC0yLmNkbmluc3RhZ3JhbS5jb20mX25jX2NhdD0xMDEmX25jX29oYz1QWUJMbTVfREpNQUFYOUtQRTl3JmVkbT1BT1ExYzB3QUFBQUEmY2NiPTctNSZvaD0wMF9BZkI2TWlXZXZGd25Dd29vOVpSaENkdDNfeXpLZ2l6enFFV0hpeEtUZTBrM3BnJm9lPTY1MDVBMjg3Jl9uY19zaWQ9OGIzNTQ2"},{"is_video":false,"display_url":"aHR0cHM6Ly9zY29udGVudC1saHI4LTIuY2RuaW5zdGFncmFtLmNvbS92L3QzOS4zMDgwOC02LzM3MjkyMDMyOV8xODUwMDE2ODE5NzA1NjQyMV80MzA5Nzk1NjczNzEyNDc2MjIwX24uanBnP3N0cD1kc3QtanBnX2UzNV9zMTA4MHgxMDgwX3NoMC4wOCZfbmNfaHQ9c2NvbnRlbnQtbGhyOC0yLmNkbmluc3RhZ3JhbS5jb20mX25jX2NhdD0xMDEmX25jX29oYz1waGNlSFpQdzBJb0FYLW1CTjRJJmVkbT1BT1ExYzB3QUFBQUEmY2NiPTctNSZvaD0wMF9BZkRLODBlZFVjek1MMU9yS2FXbDNjNTdSVGk1Z3pnQy14cWhpRXVfSzNRX2JBJm9lPTY1MDU5RTlCJl9uY19zaWQ9OGIzNTQ2"}]},{"id":"Cwcnog4tXf6","type":"video","isVideo":true,"caption":"@Binance gave me one of my hardest challenges yet - facing the lie detector. \n\nFull video coming soon, stay tuned.","likesCount":3062976,"commentsCount":21907,"createdTime":"27 August 2023 12:00:06","thumbnailUrl":"aHR0cHM6Ly9zY29udGVudC1saHI4LTIuY2RuaW5zdGFncmFtLmNvbS92L3Q1MS4yODg1LTE1LzM3MTM1NjI3NF8yNDg5MzE1OTE0MzIzMTBfMjU2Mzk0Mzg2MDc2NDAwNDA1Nl9uLmpwZz9zdHA9YzAuNDIwLjEwODAuMTA4MGFfZHN0LWpwZ19lMzVfczY0MHg2NDBfc2gwLjA4Jl9uY19odD1zY29udGVudC1saHI4LTIuY2RuaW5zdGFncmFtLmNvbSZfbmNfY2F0PTEmX25jX29oYz1kNmsxd1JBM2VqMEFYX3hBTDZTJmVkbT1BT1ExYzB3QkFBQUEmY2NiPTctNSZvaD0wMF9BZkJIYlFoTlFMY1JLak9DYjI4alhMT1I5VmtSQVVPWC0yTkQtek15WmItM3JRJm9lPTY1MDFEQUQ0Jl9uY19zaWQ9OGIzNTQ2","sidecarItems":[],"videoUrl":"aHR0cHM6Ly9zY29udGVudC1saHI4LTIuY2RuaW5zdGFncmFtLmNvbS92L3Q2Ni4zMDEwMC0xNi8zMTY2MjU5MDFfMzA1NzI4NjIyMTExNzk3XzYzOTEwNDQxMDAzOTAzNTY4Mzdfbi5tcDQ\/X25jX2h0PXNjb250ZW50LWxocjgtMi5jZG5pbnN0YWdyYW0uY29tJl9uY19jYXQ9MTAxJl9uY19vaGM9aGlJa0xNWnZ4aXdBWC1EMGZGNyZlZG09QU9RMWMwd0JBQUFBJmNjYj03LTUmb2g9MDBfQWZEcXpySDdsTHpiX012Wi0yeXZwaHlTeTZmZnJBRUVPbW4xdmp1Z2o1ZEFPUSZvZT02NTAxREM1RiZfbmNfc2lkPThiMzU0Ng=="},{"id":"CwYdIfztkRv","type":"sidecar","isVideo":false,"caption":"Another incredible team effort - let\u2019s go @alnassr \ud83d\udc99\ud83d\udc9b","likesCount":6574431,"commentsCount":56807,"createdTime":"25 August 2023 21:08:44","thumbnailUrl":"aHR0cHM6Ly9zY29udGVudC1saHI4LTIuY2RuaW5zdGFncmFtLmNvbS92L3QzOS4zMDgwOC02LzM3MDU1NDUwNl8xODQ5OTQxOTg5ODA1NjQyMV8zMjAyMjQxNjg4NDU4MTAyMDIzX24uanBnP3N0cD1jMjQwLjAuOTYwLjk2MGFfZHN0LWpwZ19lMTVfczY0MHg2NDAmX25jX2h0PXNjb250ZW50LWxocjgtMi5jZG5pbnN0YWdyYW0uY29tJl9uY19jYXQ9MSZfbmNfb2hjPXNWVzdUTXp3bFV3QVhfYUY3ZjYmZWRtPUFPUTFjMHdBQUFBQSZjY2I9Ny01Jm9oPTAwX0FmQ0EtR2tWc2g0MHRaQXg4V1RLLXVyXzh0blY2RFhNM0hSM205MlpEZENHU3cmb2U9NjUwNUU5QUEmX25jX3NpZD04YjM1NDY=","sidecarItems":[{"is_video":false,"display_url":"aHR0cHM6Ly9zY29udGVudC1saHI4LTIuY2RuaW5zdGFncmFtLmNvbS92L3QzOS4zMDgwOC02LzM3MDU1NDUwNl8xODQ5OTQxOTg5ODA1NjQyMV8zMjAyMjQxNjg4NDU4MTAyMDIzX24uanBnP3N0cD1kc3QtanBnX2UzNV9zMTA4MHgxMDgwX3NoMC4wOCZfbmNfaHQ9c2NvbnRlbnQtbGhyOC0yLmNkbmluc3RhZ3JhbS5jb20mX25jX2NhdD0xJl9uY19vaGM9c1ZXN1RNendsVXdBWF9hRjdmNiZlZG09QU9RMWMwd0FBQUFBJmNjYj03LTUmb2g9MDBfQWZCU1dpb1psZjZzdTVIV1NnSjM0Y0lHSnhQeUh1OXZQRzlGWVVQeTVKWS1pUSZvZT02NTA1RTlBQSZfbmNfc2lkPThiMzU0Ng=="},{"is_video":false,"display_url":"aHR0cHM6Ly9zY29udGVudC1saHI4LTIuY2RuaW5zdGFncmFtLmNvbS92L3QzOS4zMDgwOC02LzM3MDk1NTE5NV8xODQ5OTQxOTkwNzA1NjQyMV85MTA2MjE3OTQxOTEwNzg0Mzk0X24uanBnP3N0cD1kc3QtanBnX2UzNV9zMTA4MHgxMDgwX3NoMC4wOCZfbmNfaHQ9c2NvbnRlbnQtbGhyOC0yLmNkbmluc3RhZ3JhbS5jb20mX25jX2NhdD0xMDEmX25jX29oYz1vZk4zSFFsanpxSUFYODRJdUZ1JmVkbT1BT1ExYzB3QUFBQUEmY2NiPTctNSZvaD0wMF9BZkJSb2F3VzNuT1psRU9sSFVtaFlFOS1lRlBISTRzYUFTTGpnaWlwSG9tS3RRJm9lPTY1MDYxODk3Jl9uY19zaWQ9OGIzNTQ2"},{"is_video":false,"display_url":"aHR0cHM6Ly9zY29udGVudC1saHI4LTIuY2RuaW5zdGFncmFtLmNvbS92L3QzOS4zMDgwOC02LzM3MDU0NjU0MV8xODQ5OTQxOTkxNjA1NjQyMV84NDI5NTE3MDIxNjY2NTUzNDkwX24uanBnP3N0cD1kc3QtanBnX2UzNV9zMTA4MHgxMDgwX3NoMC4wOCZfbmNfaHQ9c2NvbnRlbnQtbGhyOC0yLmNkbmluc3RhZ3JhbS5jb20mX25jX2NhdD0xMDEmX25jX29oYz1QdEZFZHFhVndtVUFYOTBKU1RBJmVkbT1BT1ExYzB3QUFBQUEmY2NiPTctNSZvaD0wMF9BZkFGMFc5R0VtekVuVlgweWRZb0Z6NFkwbkZKVi1iTGxlT3V3TThYV2JOUGlnJm9lPTY1MDVGQTE3Jl9uY19zaWQ9OGIzNTQ2"},{"is_video":false,"display_url":"aHR0cHM6Ly9zY29udGVudC1saHI4LTIuY2RuaW5zdGFncmFtLmNvbS92L3QzOS4zMDgwOC02LzM3MDU2MzAwNl8xODQ5OTQxOTkyNTA1NjQyMV80ODQ1NTg4MDc2NjA4ODY4NDQ3X24uanBnP3N0cD1kc3QtanBnX2UzNV9zMTA4MHgxMDgwX3NoMC4wOCZfbmNfaHQ9c2NvbnRlbnQtbGhyOC0yLmNkbmluc3RhZ3JhbS5jb20mX25jX2NhdD0xMDEmX25jX29oYz1vVHF1MFlMVEE3Z0FYOW50akdaJmVkbT1BT1ExYzB3QUFBQUEmY2NiPTctNSZvaD0wMF9BZkNDZmlNSUhQM096Z1c0NTNrM2hWM1dibm1scnVqWGZUdWNuTlBscVNJM2NnJm9lPTY1MDYwMjFEJl9uY19zaWQ9OGIzNTQ2"},{"is_video":false,"display_url":"aHR0cHM6Ly9zY29udGVudC1saHI4LTIuY2RuaW5zdGFncmFtLmNvbS92L3QzOS4zMDgwOC02LzM3MDU0ODA0NV8xODQ5OTQxOTkzNDA1NjQyMV8xMzU1NTU0NzQ1MjQzNDA1NzIzX24uanBnP3N0cD1kc3QtanBnX2UzNV9zMTA4MHgxMDgwX3NoMC4wOCZfbmNfaHQ9c2NvbnRlbnQtbGhyOC0yLmNkbmluc3RhZ3JhbS5jb20mX25jX2NhdD0xMDEmX25jX29oYz01ZHVBNFRETDJMRUFYLWNKRnB5JmVkbT1BT1ExYzB3QUFBQUEmY2NiPTctNSZvaD0wMF9BZkRhbjNWbnpSdmlmZkduTVJhWHdnY2ljMlJFcEdVSlRCS3o2MjEyVVRXcC13Jm9lPTY1MDU0OTc1Jl9uY19zaWQ9OGIzNTQ2"}]},{"id":"CwSh3GZBmC1","type":"video","isVideo":true,"caption":"Gracias a la dedicaci\u00f3n y el trabajo de nuestros equipos,  continuamos con la expansi\u00f3n internacional de Insparya!\nInsparya abre su 4\u00aa cl\u00ednica en Espa\u00f1a y 11\u00aa del Grupo, en Bilbao. La nueva cl\u00ednica del Grupo Insparya, de 600 m2, cuenta con 6 salas dedicadas al trasplante capilar con la exclusiva tecnolog\u00eda  BotHair\u00ae UltraPlus  y 2 salas de tratamiento para atender a todas las personas que sufren alopecia y quieren recuperar su salud capilar. Estamos orgullosos de formar parte del proyecto que lidera la nueva era en el cuidado de la salud capilar y los trasplantes de cabello. Estamos agradecidos a nuestros m\u00e1s de 50.000 pacientes que han confiado en nosotros.\nM\u00e1s informaci\u00f3n en @insparya_es \n\n#Insparya #InsparyaHairClinic #InsparyaBilbao #hairgroup #hairclinic\n\nThanks to our teams\u2019 dedication and work, we\u2019re continuing Insparya\u2019s international expansion!\nInsparya is opening its 4th clinic in Spain and 11th in the Group, in Bilbao. The new Insparya Group clinic, covering 600 m2, has 6 rooms dedicated to hair transplants with the exclusive BotHair\u00ae UltraPlus technology and 2 treatment rooms to serve everyone who is suffering from alopecia and wants to get their hair health back. We are proud to be part of the project leading the new era in hair health care and hair transplants. We`re thankful to our over 50,000 patients who trusted us.\nMore info at @insparya_es \n\n#Insparya #InsparyaHairClinic #InsparyaBilbao #hairgroup #hairclinic","likesCount":4349263,"commentsCount":30585,"createdTime":"23 August 2023 13:56:44","thumbnailUrl":"aHR0cHM6Ly9zY29udGVudC1saHI4LTIuY2RuaW5zdGFncmFtLmNvbS92L3Q1MS4yODg1LTE1LzM2OTQ5MTA4M182NDc5NzE0MjE1NDE1NTQ2XzY0Njg5NTE2MDkyODA4MjExMTVfbi5qcGc\/c3RwPWM0MjAuMC4xMDgwLjEwODBhX2RzdC1qcGdfZTM1X3M2NDB4NjQwX3NoMC4wOCZfbmNfaHQ9c2NvbnRlbnQtbGhyOC0yLmNkbmluc3RhZ3JhbS5jb20mX25jX2NhdD0xJl9uY19vaGM9UGRiRndlSWZYT2tBWDlHdDEwSCZlZG09QU9RMWMwd0JBQUFBJmNjYj03LTUmb2g9MDBfQWZEOVdETGFJczh5MjFKZEdPZ2dzeThNT2Mya212Y280Z0ZJRi1wdmU0WExSUSZvZT02NTAyMUE0MCZfbmNfc2lkPThiMzU0Ng==","sidecarItems":[],"videoUrl":"aHR0cHM6Ly9zY29udGVudC1saHI4LTIuY2RuaW5zdGFncmFtLmNvbS92L3Q2Ni4zMDEwMC0xNi8xMDAwMDAwMF8zMTQ5Mzg1OTc4NzU5MTdfODk4MjA4Nzg4NTM4NDg4ODg4M19uLm1wND9fbmNfaHQ9c2NvbnRlbnQtbGhyOC0yLmNkbmluc3RhZ3JhbS5jb20mX25jX2NhdD0xMDUmX25jX29oYz1KaXdEZVZHeWFtVUFYOUpFQWlpJmVkbT1BT1ExYzB3QkFBQUEmY2NiPTctNSZvaD0wMF9BZkF2Z2RkaC02SnRESGVTakNLXzNEUHk5RDZTUW1zd3N4RldnVTM3ZktYNTRBJm9lPTY1MDIyMDYyJl9uY19zaWQ9OGIzNTQ2"}]'
            v-bind:posts-statistics-prop='{"averageCountOfLikes":5291532,"averageCountOfComments":37786,"averageTimeBetweenPosts":"1 day(s) 08 hour(s)","commentsCount":453435,"likesCount":63498389,"percentOfFollowersWhoComments":0.07,"percentOfFollowersWhoLikes":10.5}'
            is-private-prop="" user-found-prop="1" need-to-parse-user-info-prop="" need-to-parse-user-last-stories-prop=""
            user-name-prop="cristiano" need-to-parse-highlights-prop="" user-info-posts-lang="Posts"
            user-info-followers-lang="Followers" user-info-following-lang="Following"
            user-info-preloader-lang="Loading info about user" errors-user-was-not-found-lang="cristiano was not found!"
            errors-account-is-private-lang="Account is private"
            errors-user-loading-lang="Profile was not found. Try refreshing the page!" tabs-stories-lang="Stories"
            tabs-posts-lang="Posts" tabs-highlights-lang="Highlights" tabs-statistics-lang="Statistics"
            need-to-show-statistics-tab-prop="1" stories-preloader-lang="Loading stories"
            stories-empty-last-stories-lang="There are no stories for 24 hours" popup-download-lang="Download"
            popup-close-lang="Close" popup-next-lang="Next" popup-prev-lang="Prev"
            highlights-preloader-lang="Loading stories" highlights-empty-lang="There are no highlights"
            show-post-comments-lang="Show comments" no-post-comments-lang="No comments" is-mobile-prop=""
            show-more-posts-lang="Show more" anon-user-view-lang="Anonymous view" is-user-from-ru-prop="1"
            locale-prop="en"></profile-page>

        <div class="row justify-content-center text-center"></div>
    </div>

    <div class="container">
        <div class="row justify-content-center text-center mb-2 mt-1">
            <div class="col-11">
                <!-- Yandex.RTB R-A-1261276-6 -->
                <div id="yandex_rtb_R-A-1261276-6"></div>
            </div>
        </div>

        <div class="card mt-5 bg-dark text-white-50">
            <div class="card-body mb-3 p-5">
                <div class="row mt-2">
                    <h3>Profile overview for user cristiano</h3>
                    <p class="mt-2">
                        The Instagram profile @cristiano belongs to the renowned
                        Portuguese professional footballer Cristiano Ronaldo. The
                        profile boasts a staggering 261 million followers and acts as a
                        platform for Cristiano to share updates on his personal and
                        professional life. The bio of the Instagram page invites
                        followers to join Cristiano's NFT journey on @Binance, an online
                        marketplace where users can buy, sell, and trade non-fungible
                        tokens (NFTs). The profile encourages followers to click on the
                        link below to get started on their own NFT journey. The feed of
                        the page features a diverse range of content, including photos
                        and videos of Cristiano's football games and training sessions,
                        his personal life and family, endorsements, promotional
                        campaigns, and sponsored content. The Instagram page also
                        highlights Cristiano's philanthropic work, including his
                        charitable foundation's initiatives and events. Furthermore, the
                        profile shares motivational quotes, behind-the-scenes glimpses,
                        and messages of gratitude to fans and followers. Overall, the
                        @cristiano Instagram profile offers fans and followers an
                        exclusive peek into the life of one of the greatest football
                        players of all time and serves as a hub for Cristiano's ongoing
                        blockchain and NFT ventures.
                    </p>
                </div>
                <hr />

                <div class="row mt-5">
                    <h3>Suggested hashtags for user cristiano</h3>
                    <p class="mt-2">
                        #CristianoRonaldo #NFT #Binance #cryptocurrency #digitalart
                        #blockchain #investment #crypto #cryptoart #cryptoassets
                        #cryptoinvesting #digitalcurrency #tokenization
                        #digitalcollectibles #cryptoportfolio #digitalinvestment
                        #digitalassets #cryptoenthusiast #NFTcommunity #NFTinvestor
                        #NFTcollector #NFTmarketplace
                    </p>
                </div>
                <hr />
            </div>
        </div>
    </div>

    <div class="container" id="statistics">
        <div class="row justify-content-center text-center mb-2 mt-1">
            <div class="card mt-4 bg-dark text-white-50">
                <div class="card-body mb-3 p-4">
                    <h3 class="mt-5 mb-4">
                        Dynamics of changing followers number for the last days
                    </h3>
                    <followers-statistics-chart
                        :labels='["2023-08-25", "2023-08-26", "2023-08-27", "2023-08-28", "2023-08-29", "2023-08-30",
                            "2023-08-31", "2023-09-01", "2023-09-02", "2023-09-03", "2023-09-04", "2023-09-05",
                            "2023-09-06", "2023-09-07", "2023-09-08", "2023-09-09", "2023-09-10", "2023-09-11",
                            "2023-09-12", "2023-09-13"
                        ]'
                        :statistics='[{
                            "label": "Followers",
                            "data": [602061670, 602061670, 602211986, 602343579, 602495724,
                                602495724, 603502345, 603685345, 603685345, 603839492, 603055069, 604140311,
                                604140311, 603282929, 603400598, 603536655, 603536655, 604645921, 604793600,
                                604793600
                            ],
                            "type": "line",
                            "backgroundColor": "rgba(60, 186, 159, 0.2)",
                            "borderColor": "#3cba9f"
                        }]'>
                    </followers-statistics-chart>

                    <h3 class="mt-5 mb-4">
                        Dynamics of changing followings number for the last days
                    </h3>
                    <following-statistics-chart
                        :labels='["2023-08-25", "2023-08-26", "2023-08-27", "2023-08-28", "2023-08-29", "2023-08-30",
                            "2023-08-31", "2023-09-01", "2023-09-02", "2023-09-03", "2023-09-04", "2023-09-05",
                            "2023-09-06", "2023-09-07", "2023-09-08", "2023-09-09", "2023-09-10", "2023-09-11",
                            "2023-09-12", "2023-09-13"
                        ]'
                        :statistics='[{
                            "label": "Following",
                            "data": [566, 566, 566, 566, 566, 566, 566, 566, 566, 567, 567, 567,
                                567, 567, 567, 568, 568, 568, 568, 568
                            ],
                            "type": "line",
                            "backgroundColor": "rgba(142, 94, 162, 0.2)",
                            "borderColor": "#8e5ea2"
                        }]'>
                    </following-statistics-chart>
                    <hr />

                    <h3 class="mt-5 mb-4">
                        Dynamics of changing posts number for the last days
                    </h3>
                    <posts-statistics-chart
                        :labels='["2023-08-25", "2023-08-26", "2023-08-27", "2023-08-28", "2023-08-29", "2023-08-30",
                            "2023-08-31", "2023-09-01", "2023-09-02", "2023-09-03", "2023-09-04", "2023-09-05",
                            "2023-09-06", "2023-09-07", "2023-09-08", "2023-09-09", "2023-09-10", "2023-09-11",
                            "2023-09-12", "2023-09-13"
                        ]'
                        :statistics='[{
                            "label": "Medias",
                            "data": [3542, 3542, 3543, 3544, 3544, 3544, 3546, 3548, 3548, 3549, 3549,
                                3552, 3552, 3552, 3552, 3553, 3553, 3553, 3553, 3553
                            ],
                            "type": "line",
                            "backgroundColor": "rgba(62, 149, 205, 0.2)",
                            "borderColor": "#3e95cd"
                        }]'>
                    </posts-statistics-chart>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row">
            <div class="col-lx-12 faq-wrapper mt-5">
                <div class="card bg-dark text-white-50">
                    <div class="card-body">
                        <div class="row justify-content-center mt-4">
                            <div class="col-xl-5 col-lg-8">
                                <div class="text-center">
                                    <h3>Frequently Asked Questions?</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center mt-4 mb-4">
                            <div class="col-9">
                                <ul class="nav nav-tabs nav-tabs-custom nav-justified justify-content-center faq-tab-box"
                                    id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-genarel-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-genarel" type="button" role="tab"
                                            aria-controls="pills-genarel" aria-selected="true">
                                            <span class="font-size-16">General Questions</span>
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-features-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-features" type="button" role="tab"
                                            aria-controls="pills-features" aria-selected="false">
                                            <span class="font-size-16">Features</span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-9">
                                <div class="tab-content pt-3" id="pills-tabContent">
                                    <div class="tab-pane fade active show" id="pills-genarel" role="tabpanel"
                                        aria-labelledby="pills-genarel-tab">
                                        <div class="row g-4 mt-2">
                                            <div class="col-lg-6">
                                                <h5>
                                                    Is it necessary to have an Instagram account to
                                                    view other profiles?
                                                </h5>
                                                <p class="lg-base">
                                                    You do not need to have an account or create one
                                                    to view other profiles, simply enter the correct
                                                    username of the desired account. Keep in mind that
                                                    even a single incorrectly typed character could
                                                    lead you to the wrong profile.
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <h5>
                                                    Which devices are compatible with your service?
                                                </h5>
                                                <p class="lg-base">
                                                    Our resource is accessible on any device with a
                                                    web browser and internet connection. Regardless of
                                                    whether you are using a personal computer, phone,
                                                    or tablet, you will be able to view the desired
                                                    profile.
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <h5>What is the cost of using your service?</h5>
                                                <p class="lg-base">
                                                    Our service is completely free and does not
                                                    require any form of verification, making it
                                                    convenient and easy to use. Simply visit the
                                                    website, enter the desired username and view the
                                                    information.
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <h5>
                                                    What is the usage policy for materials downloaded
                                                    from Instagram?
                                                </h5>
                                                <p class="lg-base">
                                                    It is not recommended to use other people's
                                                    photos, videos, or stories as they are protected
                                                    by copyright. The materials can only be downloaded
                                                    for personal use and informational purposes. This
                                                    policy does not apply to materials that are
                                                    publicly available on the internet as they do not
                                                    have any intellectual property rights associated
                                                    with them.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-features" role="tabpanel"
                                        aria-labelledby="pills-features-tab">
                                        <div class="row g-4 mt-2">
                                            <div class="col-lg-6">
                                                <h5>
                                                    What can I access or download using your online
                                                    resource?
                                                </h5>
                                                <p class="lg-base">
                                                    Users of our service have the ability to view or
                                                    save stories, highlights, and posts from public
                                                    Instagram accounts.
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <h5>
                                                    Is it possible to download desired content
                                                    anonymously without leaving any trace?
                                                </h5>
                                                <p class="lg-base">
                                                    Users of InstaNavigation can easily download
                                                    stories, videos, photos, and more from public
                                                    Instagram profiles. It's important to confirm the
                                                    profile is public before downloading.
                                                </p>
                                            </div>
                                            <div class="col-lg-6">
                                                <h5>
                                                    What are the available download formats on
                                                    InstaNavigation?
                                                </h5>
                                                <p class="lg-base">
                                                    All videos, including stories, are available for
                                                    download in MP4 format. Photos and photo stories
                                                    can be downloaded in JPEG format. The quality of
                                                    the downloaded materials is identical to the
                                                    original, so you don't have to worry about any
                                                    loss of quality. Our service guarantees fast
                                                    downloads with no errors during file saving.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section mb-5">
        <div class="container mb-5">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="heading-section mb-5">Featured posts</h2>
                </div>
                <div class="col-md-12">
                    <div class="featured-carousel owl-carousel">
                        <div class="item">
                            <div class="work">
                                <div class="img d-flex align-items-end justify-content-center"
                                    style="
                      background-image: url({{ asset('images/blog/blogger/main.jpg') }});
                    ">
                                    <div class="text w-100">
                                        <span class="cat">Tips</span>
                                        <h3>
                                            <a href="{{ route('blog.tips.id', ['id' => 'where-you-can-find-bloggers-for-account-promotion']) }}"
                                                target="_blank">Where you can find bloggers for account
                                                promotion</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="work">
                                <div class="img d-flex align-items-end justify-content-center"
                                    style="
                      background-image: url({{ asset('images/blog/content-plan/main.jpg') }});
                    ">
                                    <div class="text w-100">
                                        <span class="cat">Interesting</span>
                                        <h3>
                                            <a href="{{ route('blog.interesting.id', ['id' => 'what-is-a-content-plan-of-stories-and-why-do-you-need-it']) }}"
                                                target="_blank">What is a content plan of stories and why do you
                                                need it</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="work">
                                <div class="img d-flex align-items-end justify-content-center"
                                    style="
                      background-image: url({{ asset('images/blog/page-promotion/main.jpg') }});
                    ">
                                    <div class="text w-100">
                                        <span class="cat">Tips</span>
                                        <h3>
                                            <a href="{{ route('blog.tips.id', ['id' => 'promotion-of-the-page-from-scratch']) }}"
                                                target="_blank">Promotion of the page from scratch</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="work">
                                <div class="img d-flex align-items-end justify-content-center"
                                    style="
                      background-image: url({{ asset('images/blog/steps-to-start-blog/main.jpg') }});
                    ">
                                    <div class="text w-100">
                                        <span class="cat">Tips</span>
                                        <h3>
                                            <a href="{{ route('blog.tips.id', ['id' => 'how-do-i-start-blogging-on-instagram']) }}"
                                                target="_blank">How Do I Start Blogging on Instagram?</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="work">
                                <div class="img d-flex align-items-end justify-content-center"
                                    style="
                      background-image: url({{ asset('images/blog/processing-photo/main.jpg') }});
                    ">
                                    <div class="text w-100">
                                        <span class="cat">Interesting</span>
                                        <h3>
                                            <a href="{{ route('blog.interesting.id', ['id' => 'apps-and-services-for-processing-instagram-photos']) }}"
                                                target="_blank">Apps and Services for Processing Instagram
                                                Photos</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="work">
                                <div class="img d-flex align-items-end justify-content-center"
                                    style="
                      background-image: url({{ asset('images/blog/how-to-make-pretty-profile-page/main.jpg') }});
                    ">
                                    <div class="text w-100">
                                        <span class="cat">Tips</span>
                                        <h3>
                                            <a href="{{ route('blog.tips.id', ['id' => 'how-to-beautifully-design-your-instagram-page']) }}"
                                                target="_blank">How to Beautifully Design Your Instagram Page?</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="{{ asset('npm/bootstrap.bundle.min.js') }}"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="{{ asset('OwlCarousel2/2.3.4/owl.carousel.min.js') }}"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/app.js?id=7e77ef9b8dd7a34695e0') }}"></script>
    <script src="{{ asset('assets/js/socialstory.js?v53') }}"></script>
    <script src="{{ asset('downloadjs/1.4.8/download.min.js') }}"
        integrity="sha512-WiGQZv8WpmQVRUFXZywo7pHIO0G/o3RyiAJZj8YXNN4AV7ReR1RYWVmZJ6y3H06blPcjJmG/sBpOVZjTSFFlzQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        const profileStories = document.querySelector(".profile-stories"),
            profilePublications = document.querySelector(".profile-publications"),
            profileHighlights = document.querySelector(".profile-highlights"),
            profileStoriesBtn = document.querySelector(".profile-stories__btn"),
            profileHighlightsBtn = document.querySelector(
                ".profile-highlights__btn"
            ),
            profilePublicationsBtn = document.querySelector(
                ".profile-publications__btn"
            );

        profileStoriesBtn.addEventListener("click", () => {
            profileStoriesBtn.classList.add("active_btn");
            profilePublicationsBtn.classList.remove("active_btn");
            profileHighlightsBtn.classList.remove("active_btn");
            profileStories.classList.remove("d-none");
            profilePublications.classList.add("d-none");
            profileHighlights.classList.add("d-none");
        });

        profilePublicationsBtn.addEventListener("click", () => {
            profileStoriesBtn.classList.remove("active_btn");
            profileHighlightsBtn.classList.remove("active_btn");
            profilePublicationsBtn.classList.add("active_btn");
            profileStories.classList.add("d-none");
            profileHighlights.classList.add("d-none");
            profilePublications.classList.remove("d-none");
        });

        profileHighlightsBtn.addEventListener("click", () => {
            profileHighlightsBtn.classList.add("active_btn");
            profileHighlights.classList.remove("d-none");

            profileStoriesBtn.classList.remove("active_btn");
            profileStories.classList.add("d-none");

            profilePublicationsBtn.classList.remove("active_btn");
            profilePublications.classList.add("d-none");
        });
    </script>

    <script>
        window.yaContextCb.push(() => {
            Ya.Context.AdvManager.render({
                blockId: "R-A-1261276-6",
                renderTo: "yandex_rtb_R-A-1261276-6",
            });
        });
    </script>

    <script>
        var carousel = function() {
            $(".featured-carousel").owlCarousel({
                loop: true,
                autoplay: true,
                margin: 30,
                animateOut: "fadeOut",
                animateIn: "fadeIn",
                nav: true,
                dots: true,
                autoplayHoverPause: false,
                items: 1,
                navText: [
                    "<span class='ion-ios-arrow-back'></span>",
                    "<span class='ion-ios-arrow-forward'></span>",
                ],
                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 2,
                    },
                    1000: {
                        items: 3,
                    },
                },
            });
        };
        carousel();
    </script>
@endpush
