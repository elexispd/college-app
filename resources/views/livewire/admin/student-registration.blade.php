<div>

    <form wire:submit="process" class="needs-validation" novalidate>
        <div class="mb-3">
            <label for="validationCustom01" class="form-label">Full name</label>
            <input type="text" class="form-control" id="validationCustom01" wire:model="name"  required />
            @error('name')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror



        </div>

        <div class="mb-3">
            <label for="validationCustom04" class="form-label">Student Category</label>
            <select class="form-control" id="" wire:model="category">
                <option value=""></option>
                <option value="general">General</option>
                <option value="special">Special</option>
                <option value="civilian ">Civilian</option>
            </select>
            @error('category')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror

        </div>

        <div class="mb-3">
            <label for="validationCustom02" class="form-label">AP/F Number (Username)</label>
            <input type="" class="form-control" id="validationCustom02" wire:model="ap_number" />
            @error('ap_number')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="validationCustom04" class="form-label">Gender</label>
            <select class="form-control" id="" wire:model="gender">
                <option value=""></option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            @error('gender')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>



        <div class="mb-3">
            <label for="validationCustom04" class="form-label">State</label>
            <select class="form-control" id="validationCustom04" wire:model="state" required>
                <option value="" disabled>Select State</option>
                <option value="Abia">Abia</option>
                <option value="Adamawa">Adamawa</option>
                <option value="Akwa Ibom">Akwa Ibom</option>
                <option value="Anambra">Anambra</option>
                <option value="Bauchi">Bauchi</option>
                <option value="Bayelsa">Bayelsa</option>
                <option value="Benue">Benue</option>
                <option value="Borno">Borno</option>
                <option value="Cross River">Cross River</option>
                <option value="Delta">Delta</option>
                <option value="Ebonyi">Ebonyi</option>
                <option value="Edo">Edo</option>
                <option value="Ekiti">Ekiti</option>
                <option value="Enugu">Enugu</option>
                <option value="Gombe">Gombe</option>
                <option value="Imo">Imo</option>
                <option value="Jigawa">Jigawa</option>
                <option value="Kaduna">Kaduna</option>
                <option value="Kano">Kano</option>
                <option value="Katsina">Katsina</option>
                <option value="Kebbi">Kebbi</option>
                <option value="Kogi">Kogi</option>
                <option value="Kwara">Kwara</option>
                <option value="Lagos">Lagos</option>
                <option value="Nasarawa">Nasarawa</option>
                <option value="Niger">Niger</option>
                <option value="Ogun">Ogun</option>
                <option value="Ondo">Ondo</option>
                <option value="Osun">Osun</option>
                <option value="Oyo">Oyo</option>
                <option value="Plateau">Plateau</option>
                <option value="Rivers">Rivers</option>
                <option value="Sokoto">Sokoto</option>
                <option value="Taraba">Taraba</option>
                <option value="Yobe">Yobe</option>
                <option value="Zamfara">Zamfara</option>
                <option value="FCT">Federal Capital Territory (FCT)</option>
            </select>

            @error('state')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="validationCustom04" class="form-label">Qualification</label>
            <input type="text" class="form-control" id="validationCustom04" wire:model="qualification" required />
            @error('qualification')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="validationCustom04" class="form-label">Command</label>
            <input type="text" class="form-control" id="validationCustom04" wire:model="command" />
            @error('command')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="validationCustom04" class="form-label">Birth Year</label>
            <input type="text" class="form-control" id="validationCustom04" wire:model="birth_year" required />
            @error('birth_year')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="validationCustom04" class="form-label">Email</label>
            <input type="email" class="form-control" id="validationCustom04" wire:model="email"  />
            @error('email')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="validationCustom04" class="form-label">Date Of Enlistment</label>
            <input type="date" class="form-control" id="validationCustom04" wire:model="enlistment_date"  />
            @error('enlistment_date')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="validationCustom04" class="form-label">Date Last Promoted</label>
            <input type="date" class="form-control" id="validationCustom04" wire:model="promoted_date"  />
            @error('promoted_date')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <x-button loadingText="Processing..." x-data x-on:click="$dispatch('show-alert')">
            Register
        </x-button>

    </form>
</div>


