@extends('layouts.app')
@section('title', 'Home')

@section('css')
@endsection

@section('content')



    <!-- Banner -->
    <section class="inner-book">
        <div class="container">
            <h1>Contact Us</h1>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-card">
                        <h2 class="contact-title">Get In Touch</h2>
                        <form id="inquiryForm" action="{{ route('inquiry.store') }}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="fname" placeholder="First Name *"
                                        required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="lname" placeholder="Last Name *" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" placeholder="Email *" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="tel" class="form-control" name="phone" placeholder="Phone *" required>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control" rows="5" name="notes" placeholder="Your Message *"
                                        required></textarea>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-custom w-100">Send Message</button>
                                </div>
                            </div>
                        </form>
                        <div id="formLoader" style="display:none; text-align:center; margin-top:10px;">
                            <img src="{{ asset('asset/images/loader.gif') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection

@section('js')
    <script>
        document.getElementById('inquiryForm').addEventListener('submit', function (e) {
            e.preventDefault();

            let form = this;
            let formData = new FormData(form);

            let loader = $('#formLoader');
            let submitBtn = $(form).find('button[type="submit"]');

            loader.show();
            submitBtn.prop('disabled', true);

            fetch(form.action, {
                method: "POST",
                body: formData,
                headers: {
                    "X-Requested-With": "XMLHttpRequest"
                }
            }).then(async res => {
                let data;
                try {
                    data = await res.json();
                } catch {
                    throw new Error("JSON Error");
                }
                return data;
            }).then(data => {
                if (data.status === "success") {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success!',
                        text: data.message,
                        showConfirmButton: false,
                        timer: 1000
                    });
                    form.reset();
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: data.message
                    });
                }
            }).catch(err => {
                Swal.fire({
                    icon: 'error',
                    title: 'Server Error',
                    text: err.message
                });
            }).finally(() => {
                loader.hide();
                submitBtn.prop('disabled', false);
            });
        });
    </script>
@endsection