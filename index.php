<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Showroom</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <div>
            <label>
                Full Name:
            </label>
            <input type="text" name = "full_name">
        </div>
        <div>
            <label>
                Phone Number:
            </label>
            <input type="number" name = "phone_number">
        </div>
        <div>
            <label>
                Email:
            </label>
            <input type="email" name = "email">
        </div>
        <div>
            <label>
                Subject:
            </label>
            <input type="text" name = "subject">
        </div>
        <div>
            <label>
                Message:
            </label>
            <textarea name = "message" ></textarea>
        </div>
        <div>
            <button type="submit" name="button">Submit</button>
        </div>
    </form>
    
</body>
</html>