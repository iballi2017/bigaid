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

                        <button class="close-btn mt-2 mr-2" id="close_newsletter_popup_widget_btn">
                            <span class="sr-only">Close</span>
                            <svg class="close h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <div class="p-4 text-center relative overflow-hidden hidden">
                        <div class="absolute top-0 z-0 max-h-fit">
                            <img class="" src="./assets/images/falling-ribbons.gif" alt="falling ribbons image">
                        </div>
                        <h6 class="uppercase fw-bold fs-200 relative z-2">Thank You</h6>
                        <p class="mb-4">You have successfully subscribed to our newsletter</p>
                        <button type="button" class="btn border relative z-2" id="end_news_letter_reminder_btn">Close</button>
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
        var stored_key;
        const secret_key = "bigaid-6735440-secret-044";
        const storage_prop_name = "newsletter_popup";
        var stored_expiry_time;
        var stored_popup_data = localStorage.getItem(storage_prop_name);
        const end_news_letter_reminder = document.getElementById("end_news_letter_reminder")


        /**Popup data */
        function removePopupTiming() {
            // setTimeout(() => {
            handleEffect();
            // }, 5000);

            function handleEffect() {
                if (stored_popup_data && stored_popup_data != 'null') {

                    stored_expiry_time = JSON.parse(stored_popup_data).expiry_time;
                    stored_key = JSON.parse(stored_popup_data).created;

                    // Get the current date
                    const currentDate = new Date();
                    const currentTime = currentDate.getTime()

                    console.log("stored_expiry_time: ", stored_expiry_time)
                    console.log("new Date(stored_expiry_time): ", new Date(stored_expiry_time))
                    console.warn("currentTime: ", currentTime)
                    console.warn("new Date(currentTime): ", new Date(currentTime));

                    console.log("stored_key=>: ", stored_key);

                    if (stored_key != secret_key) {
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

            let date = new Date();
            let data = {
                created: "0",
                expiry_time: date.setTime(date.getTime() + (60 * 60 * 60))
                // expiry_time: date.setTime(date.getTime() + (60 * 60 * 60 * 10));
            };


            close_newsletter_popup_widget_btn.addEventListener("click", () => {
                console.log("setting new data");
                localStorage.setItem(storage_prop_name, JSON.stringify(data));
                newsletter_form_popup.classList.contains("show") ? newsletter_form_popup.classList.remove("show") : null;
            })
        }
        setPopupTiming();



        /**Function to call after form is submitted */
        // function handle_popup_after_form_submission() {
        //     console.log("submit form!!!");
        //     const data = {
        //         created: secret_key,
        //         expiry_time: null
        //     }
        //     localStorage.setItem(storage_prop_name, JSON.stringify(data));
        //     newsletter_form_popup.classList.contains("show") ? newsletter_form_popup.classList.remove("show") : null;
        // }


        function handle_end_news_letter_reminder() {
            end_news_letter_reminder_btn.addEventListener("click", () => {
                let data = {
                    created: secret_key,
                    expiry_time: null
                }
                localStorage.setItem(storage_prop_name, JSON.stringify(data));
                newsletter_form_popup.classList.contains("show") ? newsletter_form_popup.classList.remove("show") : null;

            })
        }
        handle_end_news_letter_reminder();

        // /**Testing form submission: call handle_popup_after_form_submission() if form is successfully submitted */
        // submit_newsletter_btn.addEventListener("click", () => handle_popup_after_form_submission())
    }

    handleNewsletterFormPopup();
</script>