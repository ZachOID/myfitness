<x-dashboard.main-layout>

    <div class="card-body">
        <form class="my-3" action="{{ route('admins.admins.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="name">{{ __('Name') }}</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="{{ __('Name') }}"
                    required value="{{ old('name') }}">
                @error('name')
                    <span class="form-error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">{{ __('Email') }}</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email"
                    placeholder="{{ __('Email') }}" required value="{{ old('email') }}">
                @error('email')
                    <span class="form-error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">{{ __('Password') }}</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password"
                    placeholder="{{ __('Password') }}" required value="{{ old('password') }}">
                @error('password')
                    <span class="form-error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password_confirmation">{{ __('Confirm Password') }}</label>
                <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror"
                    id="password_confirmation" placeholder="{{ __('Confirm Password') }}" required
                    value="{{ old('password_confirmation') }}">
                @error('password_confirmation')
                    <span class="form-error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="email_verified" class="">{{ __('Email Verified') }}</label>
                <select name="email_verified" class="form-control @error('email_verified') is-invalid @enderror" id="email_verified" required>
                    <option value="1" @selected(old('email_verified') == true)>{{ __('Yes') }}</option>
                    <option value="0" @selected(old('email_verified') == false)>{{ __('No') }}</option>
                </select>
                @error('email_verified')
                    <span class="form-error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="role">{{ __('Country Code') }}</label>
                <input type="text" name="country_code" class="form-control @error('country_code') is-invalid @enderror" id="country_code"
                    placeholder="{{ __('Country Code') }}" required value="{{ old('country_code') }}">
                @error('country_code')
                    <span class="form-error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="role">{{ __('Phone') }}</label>
                <input type="text" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror" id="phone"
                    placeholder="{{ __('Phone') }}" required value="{{ old('phone') }}">
                @error('phone_number')
                    <span class="form-error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="phone_verified" class="">{{ __('Phone Verified') }}</label>
                <select name="phone_verified" class="form-control @error('phone_verified') is-invalid @enderror" id="phone_verified" required>
                    <option value="1" @selected(old('phone_verified') == true)>{{ __('Yes') }}</option>
                    <option value="0" @selected(old('phone_verified') == false)>{{ __('No') }}</option>
                </select>
                @error('phone_verified')
                    <span class="form-error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="status">{{ __('Status') }}</label>
                <select name="status" class="form-control @error('status') is-invalid @enderror" id="status" required>
                    <option value="active" @selected(old('status') == 'active')>{{ __('Active') }}</option>
                    <option value="inactive" @selected(old('status') == 'inactive')>{{ __('Banned') }}</option>
                </select>
                @error('status')
                    <span class="form-error-message">{{ $message }}</span>
                @enderror
            </div>
            @php
                $permissions_tr = [];
                foreach ($permissions as $value) {
                    $permissions_tr[] = [
                        'id' => $value->id,
                        'name' => __(ucfirst($value->name)),
                    ];
                }
            @endphp

            <div class="form-group">
                <label for="permission">{{ __('Permissions') }}</label>
                <select name="permissions[]" class="form-control select2 @error('permissions') is-invalid @enderror" id="permissions" required multiple >
                    @foreach ($permissions_tr as $permission)
                        <option dir="rtl" value="{{ $permission['id'] }}" @selected(in_array($permission['id'], old('permissions', [])))>
                            {{ $permission['name'] }}
                        </option>
                    @endforeach
                </select>
                @error('permissions')
                    <span class="form-error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="image" class="for">{{ __('Image') }}</label>
                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image"
                    placeholder="{{ __('Image') }}">
                @error('image')
                    <span class="form-error-message">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-success btn-block mb_40">{{ __('Create') }}</button>
        </form>

    </div>

    @if (app()->getLocale() == 'ar')
        <style>
            .select2-results__option--selectable{
                display: flex
            }
        </style>
    @endif
</x-dashboard.main-layout>
