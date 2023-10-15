<div class="card overlay-content form-message show" id="cookiesSettings">
    <div class="card-body py-4">
        <div class="fw-bolder fs-200 mb-4 text-center">Cookies setting</div>
        <p>We use cookies on our website to improve your user experience. You can accept them all or manage your cookie preferences below to control your privacy. Find out more in our <a href="../pages/cookies-policy.php" class="text-secondary fw-bold">Cookie Policy</a>.</p>

        <div>
            <form action="/">
                <h6 class="mt-4 fw-bold">Manage Consent Preferences</h6>

                <ul class="cookies-setting-options mt-4">
                    <li class="cookies-setting-option mb-2">
                        <div class="check-toggler">
                            <input type="checkbox" id="functional" name="cookies-settings" value="option one" checked onclick="return false;" />
                            <label for="functional">
                                <span class="label">Functional cookies <small class="text-primary fw-bold">(Always Active)</small></span>
                                <span class="fake-toggler">
                                    <span class="dot"></span>
                                </span>
                            </label>
                        </div>
                    </li>
                    <li class="cookies-setting-option mb-2">
                        <div class="check-toggler">
                            <input type="checkbox" id="marketing" name="cookies-settings" value="option one" />
                            <label for="marketing">
                                <span class="label">Marketing cookies</span>
                                <span class="fake-toggler">
                                    <span class="dot"></span>
                                </span>
                            </label>
                        </div>
                    </li>
                    <li class="cookies-setting-option mb-2">
                        <div class="check-toggler">
                            <input type="checkbox" id="analytics" name="cookies-settings" value="option one" />
                            <label for="analytics">
                                <span class="label">Analytics cookies</span>
                                <span class="fake-toggler">
                                    <span class="dot"></span>
                                </span>
                            </label>
                        </div>
                    </li>
                    <li class="cookies-setting-option mb-2">
                        <div class="check-toggler">
                            <input type="checkbox" id="security" name="cookies-settings" value="option one" />
                            <label for="security">
                                <span class="label">Security cookies</span>
                                <span class="fake-toggler">
                                    <span class="dot"></span>
                                </span>
                            </label>
                        </div>
                    </li>
                    <li class="cookies-setting-option mb-2">
                        <div class="check-toggler">
                            <input type="checkbox" id="all" name="cookies-settings" value="option one" />
                            <label for="all">
                                <span class="label">Select All</span>
                                <span class="fake-toggler">
                                    <span class="dot"></span>
                                </span>
                            </label>
                        </div>
                    </li>
                </ul>
            </form>
            <button class="btn fs-100 block mt-4 bg-secondary text-white">
                Save Settings
            </button>
        </div>

        <button class="cancel-btn cancel-notification p-2">
            <svg class="close h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>
</div>