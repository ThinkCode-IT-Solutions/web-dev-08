<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marks Dash</title>
</head>

<body>

    <h1>Welcome to the Marks Dash</h1>
    <p>Fill out the form to display your grades</p>

    <hr>

    <form action="backend/handler.php" method="GET">
        <section id="marksform">
            <div>
                <label for="fname"> First Name </label>
                <input type="text" id="fname" name="fname">
            </div>
            <div>
                <label for="lname"> Last Name </label>
                <input type="text" id="lname" name="lname">
            </div>
            <div>
                <label for="total_marks"> Total Marks </label>
                <input type="text" id="total_marks" name="total_marks">
            </div>
            <div>
                <label for="obtained_marks"> Obtained Marks</label>
                <input type="text" id="obtained_marks" name="obtained_marks">
            </div>
            <div>
                <input type="submit" name="submit_button" value="Check Grades">
            </div>
        </section>
    </form>

</body>

</html>

<!-- /**
    Five types of HTTP request
    get
    post
    delete
    put
    patch

*/ -->