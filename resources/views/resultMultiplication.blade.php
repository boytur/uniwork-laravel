<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>piyawat | result multiplication</title>
</head>

<body class="bg-dark text-white">
    <div class="container-xl" style="height: 100vh">
        @component('components.navbar')
        @endcomponent
        <div class="container d-flex flex-column align-items-center justify-content-center">
            <div>
                <h1>ตารางสูตรคูณแม่ {{$inputMul}}</h1>
            </div>
            <div style="height: calc(100vh - 8rem)" class=" overflow-auto">
                <div class="d-flex align-items-center justify-content-center fs-3 mx-5">
                    <?php
                        for ($i = 1; $i <= 24; $i++) {
                            echo $i . " x " . $inputMul . " = " . ($i*$inputMul) . "<br/>";
                        }
                ?>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>
