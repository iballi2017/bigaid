    <h3 class="fs-250 fw-bold">SIGN UP AS A PARTNER</h3>
    <form action="" class="my-4">
        <fieldset>
            <!-- <legend class="fs-200 fw-bold">Personal Information</legend> -->
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 md:col-span-4">
                    <label for="NameOfInstitution" class="block mb-2 cursor-pointer required">Name of Institution</label>
                    <input type="text" class="form-control block w-full rounded" id="NameOfInstitution">
                </div>
                <div class="col-span-12 md:col-span-4">
                    <label for="InstitutionType" class="block mb-2 cursor-pointer required">Institution Type</label>
                    <input type="text" class="form-control block w-full rounded" id="InstitutionType">
                </div>
                <div class="col-span-12 md:col-span-4">
                    <label for="AreaOfSpecialization" class="block mb-2 cursor-pointer required">Area of Specialization</label>
                    <input type="text" class="form-control block w-full rounded" id="AreaOfSpecialization">
                </div>
                <div class="col-span-12 md:col-span-4">
                    <label for="Ownership" class="block mb-2 cursor-pointer required">Ownership</label>
                    <select name="Ownership" id="Ownership" class="form-control block w-full rounded">
                        <option value="" selected>--Select Ownership--</option>
                        <option value="Public">Public</option>
                        <option value="Private">Private</option>
                        <option value="NGO">NGO</option>
                        <option value="GovernmentOwned">Government Owned</option>
                    </select>
                </div>
                <div class="col-span-12 md:col-span-4">
                    <label for="Email" class="block mb-2 cursor-pointer required">Email Address</label>
                    <input type="text" class="form-control block w-full rounded" id="Email">
                </div>
                <div class="col-span-12 md:col-span-4">
                    <label for="Website" class="block mb-2 cursor-pointer">Website</label>
                    <input type="text" class="form-control block w-full rounded" id="Website">
                </div>
                <div class="col-span-12 md:col-span-6">
                    <label for="socialMediaLink" class="block mb-2 cursor-pointer">Social media link <small>e.g LinkedIn, Facebook e.t.c</small></label>
                    <input type="text" class="form-control block w-full rounded" id="socialMediaLink">
                </div>
                <div class="col-span-12 md:col-span-6">
                    <label for="socialMediaName" class="block mb-2 cursor-pointer">Social media name</label>
                    <input type="text" class="form-control block w-full rounded" id="socialMediaName">
                </div>
                <div class="col-span-12">
                    <label for="TypeOfMedicalProfession" class="block mb-2 cursor-pointer">Type Of Medical Profession</label>
                    <input list="TypeOfMedicalProfessions" id="TypeOfMedicalProfession" class="form-control block w-full rounded">
                    <datalist name="TypeOfMedicalProfession" id="TypeOfMedicalProfessions">
                        <!-- <option value="" selected>--Select Medical Profession--</option> -->
                        <option value="Health professional" />
                        <option value="Pharmacist" />
                        <option value="Physician Associate" />
                        <option value="Dentist" />
                    </datalist>
                </div>
                <div class="col-span-12 md:col-span-6">
                    <label for="NumberOfBranches" class="block mb-2 cursor-pointer">Number of Branches</label>
                    <input type="number" class="form-control block w-full rounded" id="NumberOfBranches">
                </div>
                <div class="col-span-12 md:col-span-6">
                    <label for="ListLocations" class="block mb-2 cursor-pointer required">List Locations <small>Separated by commas</small></label>
                    <input type="text" class="form-control block w-full rounded" id="ListLocations" required>
                </div>
                <div class="col-span-12 md:col-span-6">
                    <label for="NumberOfFacilities" class="block mb-2 cursor-pointer">Number of Facilities</label>
                    <input type="number" class="form-control block w-full rounded" id="NumberOfFacilities">
                </div>
                <div class="col-span-12 md:col-span-6">
                    <label for="NumberOfMedicalProfessionals" class="block mb-2 cursor-pointer">Number of Medical Professionals</label>
                    <input type="number" class="form-control block w-full rounded" id="NumberOfMedicalProfessionals">
                </div>
                <div class="col-span-12 md:col-span-6">
                    <label for="NumberOfMedicalSpecialists" class="block mb-2 cursor-pointer">Number of Medical Specialists</label>
                    <input type="number" class="form-control block w-full rounded" id="NumberOfMedicalSpecialists">
                </div>
                <div class="col-span-12 md:col-span-6">
                    <label for="NameOfMedicalDirector" class="block mb-2 cursor-pointer">Name of Medical Director</label>
                    <input type="text" class="form-control block w-full rounded" id="NameOfMedicalDirector">
                </div>
            </div>
        </fieldset>
        <hr class="my-8" />
        <fieldset>
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12">
                    <legend for="are-you-an-independent-medical-professional" class="block mb-2 cursor-pointer">Are you an are you an independent Medical Professional?</legend>
                    <ul class="flex">
                        <li>
                            <input type="radio" name="are-you-an-independent-medical-professional" class="" id="are-you-an-independent-medical-professional-Yes">
                            <label for="are-you-an-independent-medical-professional-Yes" class="cursor-pointer">Yes</label>
                        </li>
                        <li class="mx-2"></li>
                        <li>
                            <input type="radio" name="are-you-an-independent-medical-professional" class="" id="are-you-an-independent-medical-professional-No">
                            <label for="are-you-an-independent-medical-professional-No" class="cursor-pointer">No</label>
                        </li>
                    </ul>
                </div>
                <div class="col-span-12">
                    <label for="idYesSTateHow" class="block mb-2 cursor-pointer">If Yes, State Clearly How </label>
                    <input type="text" class="form-control block w-full rounded" id="idYesSTateHow">
                </div>
            </div>
        </fieldset>

        <hr class="my-8" />

        <fieldset>
            <legend class="fs-200 fw-bold">Address of institution</legend>
            <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 md:col-span-12">
                    <label for="Address" class="block mb-2 cursor-pointer">Address</label>
                    <input type="text" class="form-control block w-full rounded" id="Address">
                </div>
                <div class="col-span-12 md:col-span-3">
                    <label for="City" class="block mb-2 cursor-pointer">City</label>
                    <input type="text" class="form-control block w-full rounded" id="City">
                </div>
                <div class="col-span-12 md:col-span-3">
                    <label for="State" class="block mb-2 cursor-pointer">State</label>
                    <input type="text" class="form-control block w-full rounded" id="State">
                </div>
                <div class="col-span-12 md:col-span-3">
                    <label for="PostalCode" class="block mb-2 cursor-pointer">Postal Code</label>
                    <input type="text" class="form-control block w-full rounded" id="PostalCode">
                </div>
                <div class="col-span-12 md:col-span-3">
                    <label for="Country" class="block mb-2 cursor-pointer">Country</label>
                    <input type="text" class="form-control block w-full rounded" id="Country">
                </div>
            </div>
        </fieldset>

        <hr class="my-8" />
        <fieldset>
            <legend class="fs-200 fw-bold">Purpose</legend>
            <label for="why-would-you-want-to-volunteer-with-BIGAiD" class="block mb-2 cursor-pointer">Why Would You Want To Volunteer With BIGAiD?</label>
            <input type="text" class="form-control block w-full rounded" id="why-would-you-want-to-volunteer-with-BIGAiD">
        </fieldset>
        <hr class="my-8" />

        <div>
            <input type="checkbox" name="terms-and-condition" id="terms-and-condition" class="mr-2">
            <label for="terms-and-condition">I have read and agree the <a href="#" class="text-secondary fw-bold">terms and conditions</a>
                and <a href="#" class="text-secondary fw-bold">content policy</a>.</label>
        </div>


        <div class="my-4">
            <button class="primary-button">Submit</button>
        </div>

    </form>