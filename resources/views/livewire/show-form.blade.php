<div class="col-md-7">

    <label for="user-email" class="form-control-label">What Immigration Services are you contacting us for today?*</label>
    <div class="form-check">
        <input class="form-check-input" wire:click="$set('sponsorship', false)" type="radio" name="service" value="Study Permit" id="flexRadioDefault1" checked>
        <label class="form-check-label" for="flexRadioDefault1">
            Study Permit
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" wire:click="$set('sponsorship', false)" type="radio" name="service" value="Work Permit" id="flexRadioDefault2">
        <label class="form-check-label" for="flexRadioDefault2">
            Work Permit
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" wire:click="$set('sponsorship', false)" type="radio" name="service" value="Visitor Visa (TRV)" id="flexRadioDefault3">
        <label class="form-check-label" for="flexRadioDefault3">
            Visitor Visa (TRV)
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" wire:click="$set('sponsorship', false)" type="radio" name="service" value="Permanent Resisdence" id="flexRadioDefault4">
        <label class="form-check-label" for="flexRadioDefault4">
            Permanent Resisdence
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" wire:click="$set('sponsorship', false)" type="radio" name="service" value=" Citizenship" id="flexRadioDefault5">
        <label class="form-check-label" for="flexRadioDefault5">
            Citizenship
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" wire:click="$set('sponsorship', true)" type="radio" name="service" value="Sponsorship" id="flexRadioDefault6">
        <label class="form-check-label" for="flexRadioDefault6">
            Sponsorship
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" wire:click="$set('sponsorship', false)" type="radio" name="service" value="Business Investor" id="flexRadioDefault7">
        <label class="form-check-label" for="flexRadioDefault7">
            Business Investor
        </label>
    </div>
    @error('service')
    <p class="text-danger text-xs mt-2">{{ $message }}</p>
    @enderror

    <!-- @if($sponsorship == true)
    <div class="col-md-4">
        <div class="form-group">
            <label for="user-email" class="form-control-label">What type of sponsorship?: </label>
            <div class="form-check">
                <input class="form-check-input" type="radio" wire:click="$set('dcs', true)" name="sponsor" id="flexRadioDefault11">
                <label class="form-check-label" for="flexRadioDefault11">
                    Spousal/Dependent Child(ren) Sponsorship
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" wire:click="$set('pgs', true)" name="sponsor" id="flexRadioDefault21">
                <label class="form-check-label" for="flexRadioDefault21">
                    Parents/Grandparents Sponsorship
                </label>
            </div>
            @error('sponsor')
            <p class="text-danger text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
    </div>

    @endif

    @if ($dcs && $sponsorship== true)
    <div class="col-md-3">
        <div class="form-group">
            <label for="user-email" class="form-control-label">Marital Status: </label>
            <div class="form-check">
                <input class="form-check-input" type="radio" wire:click="$set('dc', true) " name="ms1" id="ms1">
                <label class="form-check-label" for="ms1">
                    Married
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" wire:click="$set('dc', true)" name="ms1" id="ms2">
                <label class="form-check-label" for="ms2">
                    Common Law
                </label>
            </div>
            @error('ms1')
            <p class="text-danger text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="nodc" class="form-control-label">How many Dependant Children do you have ?:</label>
            <div class="form-check">
                <select class="custom-select custom-select-lg mb-3" name="nodc">
                    <option selected>Select</option>
                    <option value="0">None</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                    <option value="4">Four</option>
                    <option value="5">Five</option>
                    <option value="6">Six</option>
                    <option value="7">Seven</option>
                </select>
            </div>
            @error('nodc')
            <p class="text-danger text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
    </div>

    @endif
    @if ($pgs && $sponsorship== true)
    <div class="col-md-3">
        <div class="form-group">
            <label for="user-email" class="form-control-label">Marital Status: </label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="ms2" id="ms21">
                <label class="form-check-label" for="ms21">
                    Single/Never Married
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="ms2" id="ms22">
                <label class="form-check-label" for="ms22">
                    Married
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="ms2" id="ms23">
                <label class="form-check-label" for="ms23">
                    Common Law
                </label>
            </div>
            @error('ms2')
            <p class="text-danger text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>
    </div>
    @endif -->



</div>