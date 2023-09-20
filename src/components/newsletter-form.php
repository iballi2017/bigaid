<form action="">
    <div class="form-group mb-4 md:mb-8">
        <input type="text" id="Name" placeholder="Name" class="init-control block w-full">
    </div>
    <div class="form-group mb-4 md:mb-8">
        <input type="text" id="Email" placeholder="Email Address" class="init-control block w-full">
    </div>

    <div>
        <button class="call-to-action">Submit</button>
    </div>
</form>
<!-- <div class="overlay show">
    <div class="card my-8">
        <div class="card-body text-center py-4">
            <div class="fw-bolder fs-200 mb-4">Thank You for Subscribing to our Newsletter!</div>
            <p>A confirmation mail has been sent to your registered email</p>
        </div>
    </div>
</div> -->

<!-- SUCCESS MESSAGE -->
<div class="overlay">
    <?php include_once("./components/newsletter-success-message.php"); ?>
</div>