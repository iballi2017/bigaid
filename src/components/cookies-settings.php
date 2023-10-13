<div class="card overlay-content form-message" id="cookiesSettings">
    <div class="card-body py-4">
        <div class="fw-bolder fs-200 mb-4 text-center">Cookies setting</div>
        <p>We use cookies on our website to improve your user experience. You can accept them all or manage your cookie preferences below to control your privacy. Find out more in our <a href="#" class="text-secondary fw-bold">Cookie Policy</a>.</p>

        <div>
            <form action="/">
                <ul class="cookies-setting-options mt-4">
                    <li class="cookies-setting-option mb-2">
                        <input type="checkbox" id="marketing" name="cookies-settings" value="option one" />
                        <label for="marketing">Marketing cookies</label>
                    </li>
                    <li class="cookies-setting-option mb-2">
                        <input type="checkbox" id="analytics" name="cookies-settings" value="option two" />
                        <label for="analytics">Analytics cookies</label>
                    </li>
                    <li class="cookies-setting-option mb-2">
                        <input type="checkbox" id="functional" name="cookies-settings" value="option two" checked onclick="return false;"/>
                        <label for="functional">Functional cookies</label>
                    </li>
                    <li class="cookies-setting-option mb-2">
                        <input type="checkbox" id="security" name="cookies-settings" value="option two" />
                        <label for="security">Security cookies</label>
                    </li>
                    <li class="cookies-setting-option">
                        <input type="checkbox" id="all" name="cookies-settings" value="all" />
                        <label for="all">Select All</label>
                    </li>
                </ul>
            </form>
            <button class="btn fs-100 block mt-4 bg-secondary text-white">Continue</button>
        </div>

        <button class="cancel-btn cancel-notification p-2">
            <svg class="close h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
</div>