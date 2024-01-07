<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>piyawat | multiplication</title>
</head>

<body class="bg-dark text-white">
    <div class="container-xl">
        @component('components.navbar')
        @endcomponent

        <form method="POST" action="/multiplication"
        class="d-inline-flex flex-column container justify-content-center align-items-center pt-5 gap-5">
        @csrf
            <div>
                <h1>ตารางสูตรคูณมหัศจรรย์</h1>
            </div>
            <div>
                <input type="number" name="inputMul" placeholder="กรุณาป้อนตัวเลข"
                    class="btn btn-outline-secondary text-white">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>
