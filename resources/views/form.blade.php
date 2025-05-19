<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="#" class="signup-form">
                <h1 class="text-center">Buat Account Baru</h1> 
                <h3 class="text-center">Sign Up Form</h3>
                <div class="mb-3">
                    <label for="first-name" class="form-label">First Name</label>
                    <input type="text" id="first-name" name="first-name" class="form-control" placeholder="First Name" required>
                </div>
                <div class="mb-3">
                    <label for="last-name" class="form-label">Last Name</label>
                    <input type="text" id="last-name" name="last-name" class="form-control" placeholder="Last Name" required>
                </div>
                <fieldset class="mb-3">
                    <legend>Gender</legend>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" value="Male" id="male">
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" value="Female" id="female">
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                </fieldset>
                <div class="mb-3">
                    <label for="nationality" class="form-label">Nationality</label>
                    <select name="nationality" id="nationality" class="form-select">
                        <option value="Indonesia">Indonesia</option>
                        <option value="Inggris">Inggris</option>
                    </select>
                </div>
                <fieldset class="mb-3">
                    <legend>Languages</legend>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="language" value="Bahasa Indonesia" id="bahasa-indonesia">
                        <label class="form-check-label" for="bahasa-indonesia">Bahasa Indonesia</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="language" value="English" id="english">
                        <label class="form-check-label" for="english">English</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="language" value="Other" id="other">
                        <label class="form-check-label" for="other">Other</label>
                    </div>
                </fieldset>
                <div class="mb-3">
                    <label for="comments" class="form-label">Comments</label>
                    <textarea rows="4" class="form-control" id="comments" placeholder="Your comments here..."></textarea>
                </div>
                <div class="text-center">
                    <a href="{{ route('welcome') }}">
                        <button type="button" class="btn btn-primary">Sign Up</button>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>