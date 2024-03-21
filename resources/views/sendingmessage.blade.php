<div class="ml-auto col-lg-5 col-md-6 col-12">
    <h2 class="mb-4 pb-2" data-aos="fade-up" data-aos-delay="200">Feel free to ask anything</h2>

    <form action="{{ route('messages') }}" method="get" class="contact-form webform" data-aos="fade-up" data-aos-delay="400" role="form">
        <input type="text" class="form-control" name="cf-name" placeholder="Name">

        <input type="email" class="form-control" name="cf-email" placeholder="Email">

        <textarea class="form-control" rows="5" name="cf-message" placeholder="Message"></textarea>

        <button type="submit" class="form-control" id="submit-button" name="submit">Send Message</button>
    </form>
</div>