<?php
// ===== Edit your details here =====
$name         = "Dorothy Joy Palamine";
$nickname     = "Dorothy";
$introduction = "Hello! I'm glad you're here. This is a short introduction about me.";
$details      = [
    "Age"    => "21 years old",
    "School" => "USTP CDO Campus",
    "Course" => "BSIT 3rd Year",
    "Hobby"  => "Listening to Music"
];
$email = "palamine.dorothyjoy18@gmail.com";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hi, I'm <?php echo $nickname; ?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background: linear-gradient(135deg, #ffe4ec, #e9e4ff);
            font-family: Arial, sans-serif;
            color: #333;
        }

        .intro {
            width: 100%;
            max-width: 460px;
            padding: 40px 30px;
            text-align: center;
            background-color: #fff;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .avatar {
            width: 90px;
            height: 90px;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 40px;
            font-weight: bold;
            color: #fff;
            background: linear-gradient(135deg, #f472b6, #a78bfa);
            border-radius: 50%;
        }

        .greeting {
            color: #888;
            font-size: 14px;
        }

        h1 {
            margin: 8px 0 15px;
            font-size: 28px;
            color: #7c3aed;
        }

        .bio {
            line-height: 1.6;
            margin-bottom: 25px;
        }

        .details {
            list-style: none;
            margin-bottom: 25px;
            text-align: left;
        }

        .details li {
            display: flex;
            align-items: flex-start;
            gap: 20px;
            padding: 10px 0;
            border-bottom: 1px solid #eee;
        }

        .label {
            flex: 0 0 70px;
            font-weight: bold;
            color: #a78bfa;
        }

        .value {
            flex: 1;
            text-align: right;
        }

        .email {
            font-size: 14px;
            color: #888;
        }
    </style>
</head>
<body>

    <main class="intro">
        <div class="avatar"><?php echo strtoupper($nickname[0]); ?></div>

        <p class="greeting">Hello, my name is</p>
        <h1><?php echo $name; ?></h1>
        <p class="bio"><?php echo $introduction; ?></p>

        <ul class="details">
            <?php foreach ($details as $label => $value) { ?>
                <li>
                    <span class="label"><?php echo $label; ?></span>
                    <span class="value"><?php echo $value; ?></span>
                </li>
            <?php } ?>
        </ul>

        <p class="email"><?php echo $email; ?></p>
    </main>

</body>
</html>