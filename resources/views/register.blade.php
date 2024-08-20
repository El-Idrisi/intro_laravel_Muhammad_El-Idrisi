<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <form action="/welcome" method="GET">
        @csrf
        <div class="">
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" placeholder="First Name" required>
        </div>

        <div class="">
            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" placeholder="Last Name" required>
        </div>

        <div>
            <p>Gender:</p>
            <input type="radio" name="gender" id="male"> <label for="male">Male</label> <br>
            <input type="radio" name="gender" id="female"> <label for="female">Female</label> <br>
            <input type="radio" name="gender" id="other"> <label for="other">Other</label> <br>
        </div>

        <div>
            <label for="national">Nationality: </label>
            <br>
            <select name="national" id="national">
                <option value="Indonesia">Indonesia</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Singapure">Singapure</option>
            </select>
        </div>

        <div>
            <label for="bio">Bio:</label>
            <br>
            <textarea name="bio" id="bio" rows="10"></textarea>
        </div>
        <button type="submit">Register</button>
    </form>
</body>
</html>