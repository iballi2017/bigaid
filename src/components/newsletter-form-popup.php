<div class="newsletter-form-popup |">
    <div class="form-card relative">
        <div class="">
            <div class="grid grid-cols-12 bg-white p-2 gap-4 items-center">

                <div class="col-span-12 md:col-span-6">
                    <img src="./assets/images/close-up-doctor-showing-approval.jpg" alt="">
                </div>

                <div class="col-span-12 md:col-span-6">
                    <div class="p-4">
                        <div class="mb-8">
                            <h1 class="uppercase fw-bold fs-250">Subscribe to our newsletter</h1>
                            <p>Join our newsletter today to receive important info.</p>
                        </div>
                        <form action="">
                            <div class="form-group mb-4">
                                <input type="text" id="Name" placeholder="Name" class="block w-full">
                            </div>
                            <div class="form-group mb-4">
                                <input type="text" id="Email" placeholder="Email Address" class="block w-full">
                            </div>

                            <div>
                                <button type="button" class="py-2 px-6 bg-primary text-white rounded-none" id="submit_newsletter_btn">Submit</button>
                            </div>
                        </form>
                        <small>Trust us, we won't spam you.</small>

                        <button class="close-btn" id="close_newsletter_popup_widget_btn">
                            <span class="sr-only">Close</span>
                            <svg class="close h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function handleNewsletterFormPopup() {
        const newsletter_form_popup = document.querySelector(".newsletter-form-popup");
        const close_newsletter_popup_widget_btn = document.getElementById("close_newsletter_popup_widget_btn");
        var is_created;

        /**Popup data */
        const date = new Date();
        const storage_prop_name = "newsletter_popup";

        const data = {
            created: "0",
            expiry_time: date.setTime(date.getTime() + (60 * 60 * 60))
            // expiry_time: date.setTime(date.getTime() + (60 * 60 * 60 * 10))
        };

        var stored_expiry_time;
        var stored_popup_data = localStorage.getItem(storage_prop_name);

        function removePopupTiming() {
            setTimeout(() => {
                handleEffect();
            }, 5000);

            function handleEffect() {
                if (stored_popup_data && stored_popup_data != 'null') {
                    stored_expiry_time = JSON.parse(stored_popup_data).expiry_time;
                    is_created = JSON.parse(stored_popup_data).created;
                    secret_key = "bigaid-6735440-secret-044";

                    // Get the current date
                    const currentDate = new Date();
                    const currentTime = currentDate.getTime()

                    console.log("stored_expiry_time: ", stored_expiry_time)
                    console.log("new Date(stored_expiry_time): ", new Date(stored_expiry_time))
                    console.warn("currentTime: ", currentTime)
                    console.warn("new Date(currentTime): ", new Date(currentTime));

                    console.log("is_created=>: ", is_created);

                    if (is_created != secret_key) {
                        if (stored_expiry_time < currentTime) {
                            console.log('The given time is in the past.', currentDate.getTime());
                            newsletter_form_popup.classList.add("show");
                        } else {
                            console.log('The given time is not in the past.', currentDate.getTime());
                            return;
                        }
                    }
                } else {
                    // console.log("It is null");
                    newsletter_form_popup.classList.add("show")
                    return;
                }
            }
        }
        removePopupTiming();
        document.addEventListener("scroll", () => removePopupTiming())



        function setPopupTiming() {
            close_newsletter_popup_widget_btn.addEventListener("click", () => {
                localStorage.setItem(storage_prop_name, JSON.stringify(data));
                newsletter_form_popup.classList.contains("show") ? newsletter_form_popup.classList.remove("show") : null;
            })
        }
        setPopupTiming();



        /**Function to call after form is submitted */
        function handle_newsletter_request() {
            console.log("submit form!!!");
            const data = {
                created: secret_key,
                expiry_time: null
            }
            localStorage.setItem(storage_prop_name, JSON.stringify(data));
            newsletter_form_popup.classList.contains("show") ? newsletter_form_popup.classList.remove("show") : null;
        }

        /**Testing form submission */
        submit_newsletter_btn.addEventListener("click", () => handle_newsletter_request())
    }

    handleNewsletterFormPopup();
</script>