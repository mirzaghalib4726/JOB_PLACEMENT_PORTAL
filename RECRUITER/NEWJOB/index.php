<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="button.css">
    <title>POST A JOB</title>
</head>
<body>
    <div class="Signin-box">
        <form action="process.php" method="POST">
            <table style="margin-left: auto; margin-right: auto; font-size: 20px;">
                <tr>
                    <th style="color: white;">
                        Job Title
                    </th>

                    <td>
                        <input type="text" required name="Title" style="font-size: 20px;">
                    </td>
                </tr>

                <tr>
                    <th style="color: white;">
                        Description
                    </th>

                    <td>
                        <textarea name="Desc" rows="10" cols="50" required  style="font-size: 20px;">

                        </textarea>
                    </td>
                </tr>
                <tr>
                    <th colspan="2">
                        <a>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <button> Post</button>
                        </a>
                    </th>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
