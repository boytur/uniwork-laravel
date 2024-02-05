<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>piyawat | home</title>
</head>

<?php
    $works = [
        [
            'image' => 'https://f005.backblazeb2.com/file/posyayee/mul.gif',
            'title' => 'Multiplication',
            'description' => 'สูตรคูณแบไดนามิก สามารถป้อนข้อมูลและทำการคูณออกมาเป็นแม่นั้นได้',
            'link' => 'multiplication'
        ],
        [
            'image' => 'https://placehold.co/600x400',
            'title' => 'AdminLTE',
            'description' => 'สร้างฟอร์ม ตามแนบให้อยู่ในรูปแบบของ AdminLTE',
            'link' => 'admin'
        ],
        [
            'image' => 'https://placehold.co/600x400',
            'title' => 'Basic CRUD',
            'description' => 'เชื่อมต่อฐานข้อมูลและทำการเพิ่ม ลบ แก้ไข ข้อมูล เบื้องต้น',
            'link' => 'admin'
        ],
    ];
?>

<body class="bg-dark text-white">
    <div class="container-xl">
        @component('components.navbar')
        @endcomponent
        <div class="d-flex justify-content-center pt-3 pb-3">
            <h1>welcome to my works</h1>
        </div>
        <div class="d-flex gap-3 justify-content-center flex-wrap">
            @foreach ($works as $work)
            <div class="card bg-secondary" style="width: 18rem;">
                <img style="height: 15rem; object-fit: cover" src="{{ $work['image'] }}" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{ $work['title'] }}</h5>
                    <p class="card-text">{{ $work['description'] }}</p>
                    <a href="{{ $work['link'] }}" target="_blank" class="btn btn-primary">ดูงานของฉัน</a>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
</html>
