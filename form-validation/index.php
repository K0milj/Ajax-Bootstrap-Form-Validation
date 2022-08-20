<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Form Validation</title>
</head>

<body>
    <form id="form" class="bg-light p-3 rounded shadow">
        <!-- messages container -->
        <div class="text-danger" id="messages">
        </div>
        <div class="row">
            <div class="col-6">
                <input class="form-control" type="text" name="name" id="name" required placeholder="Name" onkeyup="lettersonly(this)">
            </div>
            <div class="col-6">
                <input class="form-control" type="text" name="lname" id="lname" required required placeholder="Last name" onkeyup="lettersonly(this)">
            </div>
        </div>

        <input class="form-control" type="number" name="age" id="age" required placeholder="Age">

        <select class="form-select" name="city" id="city">
            <option value="Belgrade" selected>Belgrade</option>
            <option value="Subotica">Subotica</option>
            <option value="Novi Sad">Novi Sad</option>
            <option value="Nis">Nis</option>
        </select>

        <input class="form-control" type="text" name="address" id="address" required required placeholder="Address">

        <div class="gender">
            <label for="gender" class="form-label">Gender</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="Male" value="male" checked>
                <label class="form-check-label" for="male">
                    Male
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" value="Female" id="female">
                <label class="form-check-label" for="female">
                    Female
                </label>
            </div>
        </div>

        <label for="about" class="form-label">About You</label>
        <textarea class="form-control" style="height: 150px;" name="about" id="about" required></textarea>
        <input class="btn btn-outline-primary" type="submit" value="Submit" id="submit">
    </form>

    <!--information container-->
    <div class="container bg-light shadow rounded p-4 my-5" style="display: none;" id="info"></div>

    <script src="regex.js"></script>
    <script src="process.js">

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>