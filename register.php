<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css"
        integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous">
    </script>

    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px;
        background: linear-gradient(135deg, #71b7e6, #9b59b6);
    }

    .container {
        max-width: 700px;
        width: 100%;
        background-color: #fff;
        padding: 25px 30px;
        border-radius: 5px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
    }

    .container .title {
        font-size: 25px;
        font-weight: 500;
        position: relative;
    }

    .container .title::before {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        height: 3px;
        width: 30px;
        border-radius: 5px;
        background: linear-gradient(135deg, #71b7e6, #9b59b6);
    }

    .content form .user-details {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin: 20px 0 12px 0;
    }

    form .user-details .input-box {
        margin-bottom: 15px;
        width: calc(100% / 2 - 20px);
    }

    form .input-box span.details {
        display: block;
        font-weight: 500;
        margin-bottom: 5px;
    }

    .user-details .input-box input {
        height: 45px;
        width: 100%;
        outline: none;
        font-size: 16px;
        border-radius: 5px;
        padding-left: 15px;
        border: 1px solid #ccc;
        border-bottom-width: 2px;
        transition: all 0.3s ease;
    }

    .user-details .input-box input:focus,
    .user-details .input-box input:valid {
        border-color: #9b59b6;
    }

    form .gender-details .gender-title {
        font-size: 20px;
        font-weight: 500;
    }

    form .category {
        display: flex;
        width: 80%;
        margin: 14px 0;
        justify-content: space-between;
    }

    form .category label {
        display: flex;
        align-items: center;
        cursor: pointer;
    }

    form .category label .dot {
        height: 18px;
        width: 18px;
        border-radius: 50%;
        margin-right: 10px;
        background: #d9d9d9;
        border: 5px solid transparent;
        transition: all 0.3s ease;
    }

    #dot-1:checked~.category label .one,
    #dot-2:checked~.category label .two,
    #dot-3:checked~.category label .three {
        background: #9b59b6;
        border-color: #d9d9d9;
    }

    form input[type="radio"] {
        display: none;
    }

    form .button {
        height: 45px;
        margin: 35px 0
    }

    form .button input {
        height: 100%;
        width: 100%;
        border-radius: 5px;
        border: none;
        color: #fff;
        font-size: 18px;
        font-weight: 500;
        letter-spacing: 1px;
        cursor: pointer;
        transition: all 0.3s ease;
        background: linear-gradient(135deg, #71b7e6, #9b59b6);
    }

    form .button input:hover {
        /* transform: scale(0.99); */
        background: linear-gradient(-135deg, #71b7e6, #9b59b6);
    }

    @media(max-width: 584px) {
        .container {
            max-width: 100%;
        }

        form .user-details .input-box {
            margin-bottom: 15px;
            width: 100%;
        }

        form .category {
            width: 100%;
        }

        .content form .user-details {
            max-height: 300px;
            overflow-y: scroll;
        }

        .user-details::-webkit-scrollbar {
            width: 5px;
        }
    }

    @media(max-width: 459px) {
        .container .content .category {
            flex-direction: column;
        }
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="title">Registration</div>
        <div class="content">
            <form action="admin/functions/add_distributor.php " method="POST">
                <div class="user-details">
                    <div class="input-box">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name"
                            name="dist_name">
                    </div>
                    <div class="input-box">
                        <label for="exampleInputEmail3">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email"
                            name="dist_email">
                    </div>

                    <div class="input-box">
                        <label>File upload</label>
                        <div class="">
                            <input type="file" name="dist_photo" class="form-control file-upload-info"
                                placeholder="Upload Image">
                            <span class="input-group-append">
                                <!-- <button class=" btn btn-sm" type="button">Upload</button> -->
                            </span>
                        </div>
                    </div>
                    <div class="input-box">
                        <label for="exampleInputCity1">phone</label>
                        <input type="text" pattern="[7-9]{1}[0-9]{9}" class="form-control" id="exampleInputCity1"
                            placeholder="phone" name="dist_phone">
                    </div>
                    <div class="input-box">
                        <label for="exampleTextarea1">address</label>
                        <textarea class="form-control" id="exampleTextarea1" name="dist_address" rows="4"></textarea>
                    </div>

                </div>




                <div class="button">
                    <input type="submit" value="Register">
                </div>
            </form>
        </div>
    </div>

</body>

</html>