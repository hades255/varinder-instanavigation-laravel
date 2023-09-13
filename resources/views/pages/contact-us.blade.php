@extends('layouts.app')

@section('title', 'Contact us - service InstaNavigation')

@push('style')
    <style>
        .form-control, .form-control:focus{
            color: white
        }
    </style>
@endpush
@section('content')

    <div class="container">
        <div class="card mt-5 mb-3 bg-dark text-white">
            <div class="card-header">
                <h1 class="contact-us-header">Contact Us</h1>
            </div>
            <div class="card-body">
                <p class="mt-2">
                    Please use this contact form if you have any questions about our
                    site, and we will be happy to help you with your questions.
                </p>
                <p>
                    Our email:
                    <a href="cdn-cgi/l/email-protection.html" class="__cf_email__"
                        data-cfemail="ee87808881ae87809d9a8f808f9887898f9a878180c08d8183">[email&#160;protected]</a>
                </p>

                <form class="mt-4 mb-3" method="post">
                    <input type="hidden" name="_token" value="AyzOPEGNhue2pZMyX8ouAwHckyG48QMrSmAJeUW6" />
                    <div class="form-group mb-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control bg-transparent" required="" id="name" name="name"
                            value="" placeholder="Enter name" />
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control bg-transparent" required="" id="email" name="email"
                            value="" placeholder="Enter email" />
                    </div>
                    <div class="form-group mb-3">
                        <label for="message">Message</label>
                        <textarea class="form-control bg-transparent" name="message" required="" id="message" rows="3" placeholder="Enter message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-secondary submit-contact-us-form">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
