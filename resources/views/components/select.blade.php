<div x-data="{ selectedInterests: [] }">
    <div class="mb-6">
        <label for="selectedInterests" class="col-sm-4 col-form-label text-md-right">Selected Interests:</label>
        <input class="border border-gray-400 p-2 w-full" type="text" id="selectedInterests" x-model="selectedInterests.join(', ')" readonly>
    </div>

    <div class="mb-6">
        <label for="interests" class="col-sm-4 col-form-label text-md-right">Select their interests...</label>
        <div class="border-gray-400 p-2 w-full">
            <select class="border border-gray-400 p-2 w-full form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="interests[]" id="interests" x-model="selectedInterests" multiple>
                @foreach($interests as $interest)
                    <option value="{{ $interest->interest_name }}">{{ $interest->interest_name }}</option>
                @endforeach
            </select>

            @if ($errors->has('interests[]'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('interests[]') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>