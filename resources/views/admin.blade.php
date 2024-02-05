@extends('layout.default')

@section('title', 'Login')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header container-sm">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Form</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">ชื่อ</label>
                        <input type="text" class="form-control" id="" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">นามสกุล</label>
                        <input type="text" class="form-control" id="" placeholder="Enter lastname">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">วันเดือนปีเกิด</label>
                        <input type="date" class="form-control" id="" placeholder="Enter lastname">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">เพศ</label><br>
                        <input type="checkbox" id="exampleInputEmail1">
                        <label for="">ชาย</label>
                        <input type="checkbox" id="exampleInputEmail1">
                        <label for="">หญิง</label>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">รูป</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">เลือกรูป</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">อัปโหลด</span>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-floating">
                        <label for="floatingTextarea2">ที่อยู่</label>
                        <textarea class="form-control" placeholder="กรุณาใส่ที่อยู่...." id="floatingTextarea2" style="height: 100px"></textarea>
                    </div>
                    <br>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            สีที่ชอบ
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">แดง</a></li>
                            <li><a class="dropdown-item" href="#">เขียว</a></li>
                            <li><a class="dropdown-item" href="#">เหลือง</a></li>
                        </ul>
                    </div>
                    <div class="form-group">
                        <br>
                        <label for="exampleInputEmail1">แนวเพลงที่ชอบ</label><br>
                        <input type="checkbox" id="exampleInputEmail1">
                        <label for="">เพื่อชีวิต</label>
                        <input type="checkbox" id="exampleInputEmail1">
                        <label for="">ลุกทุ่ง</label>
                        <input type="checkbox" id="exampleInputEmail1">
                        <label for="">อื่นๆ</label>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">ยินยอมให้เก็บข้อมูล</label>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class=" d-flex justify-content-between">
                    <div class="card-footer bg-white">
                        <button type="submit" class="btn btn-secondary">รีเซ็ต </button>
                    </div>
                    <div class="card-footer  bg-white">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </div>
            </form>
        </div>
    </div>

@endsection
