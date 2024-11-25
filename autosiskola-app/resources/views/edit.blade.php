<!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Profile</h1>

    <!-- Show success message if the profile is updated -->
    @if(session('status') == 'profile-updated')
        <div class="alert alert-success">
            Your profile has been updated successfully.
        </div>
    @endif

    <!-- Profile update form -->
    <form method="PUT" action="{{ route('profile.update') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="{{'name'}}">
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="{{ 'email'}}">
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">New Password (Leave blank to keep the current password)</label>
            <input type="password" name="password" id="password" class="form-control">
            @error('password')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm New Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Save Changes</button>
    </form>
</div>
@endsection


