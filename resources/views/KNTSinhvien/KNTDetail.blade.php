<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>KNT - Chi tiết sinh viên</title>
</head>
<body>
    <section class="container py-3">
        <div class="card">
            <div class="card-header">
                <h1>Thông tin sinh viên</h1>
            </div>
            <div class="card-body">
                <p class="card-text">
                    <b>Mã SV:</b>
                    {{ $KNTSinhvien->KNTMaSV }}
                </p>
                <p class="card-text">
                    <b>Họ tên:</b>
                    {{ $KNTSinhvien->KNTHoSV }} {{$KNTSinhvien->KNTTenSV}}
                </p>
                <p class="card-text">
                    <b>Giới tính:</b>
                    {{ $KNTSinhvien->KNTPhai == 0 ? "Nữ":"Nam" }}
                </p>
                <p class="card-text">
                    <b>Ngày sinh:</b>
                    {{ $KNTSinhvien->KNTNgaysinh }}
                </p>
                <p class="card-text">
                    <b>Nơi sinh:</b>
                    {{ $KNTSinhvien->KNTNoisinh }}
                </p>
                <p class="card-text">
                    <b>Mã khoa:</b>
                    {{ $KNTSinhvien->KNTMaKH }}
                </p>
                <p class="card-text">
                    <b>Học bổng:</b>
                    {{ $KNTSinhvien->KNTHocbong }}
                </p>
                <p class="card-text">
                    <b>Điểm TB:</b>
                    {{ $KNTSinhvien->KNTDiemTB }}
                </p>
                <a href="/sinhvien" class="btn btn-secondary">Trở lại</a>
            </div>
        </div>
    </section>
</body>
</html>