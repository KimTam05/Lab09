<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KNT - Sửa thông tin sinh viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
    <section class="container my-3">
        <form action="" method="POST">
            @csrf
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-5">
                    <h1>Sửa thông tin sinh viên</h1>
                    <div class="form-group">
                        <label for="id">
                            Mã SV
                        </label>
                        <input class="form-control" type="text" name="KNTMaSV" value="{{$KNTSinhvien->KNTMaSV}}" readonly>
                        @error('KNTMaSV')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="sub-name">
                            Họ SV
                        </label>
                        <input class="form-control" type="text" name="KNTHoSV" value="{{$KNTSinhvien->KNTHoSV}}">
                        @error('KNTHoSV')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="name">
                            Tên SV
                        </label>
                        <input class="form-control" type="text" name="KNTTenSV" value="{{$KNTSinhvien->KNTTenSV}}">
                        @error('KNTTenSV')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="gender">
                            Phái
                        </label>
                        <input type="radio" name="KNTPhai" value=1  {{$KNTSinhvien->KNTPhai == 1 ? "checked":" "}}> Nam
                        <input type="radio" name="KNTPhai" value=0 {{$KNTSinhvien->KNTPhai == 0 ? "checked":" "}}> Nữ
                        @error('KNTPhai')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">
                            Ngày sinh
                        </label>
                        <input class="form-control" type="date" name="KNTNgaysinh" value="{{$KNTSinhvien->KNTNgaysinh}}">
                        @error('KNTNgaysinh')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">
                            Nơi sinh
                        </label>
                        <input class="form-control" type="text" name="KNTNoisinh" value="{{$KNTSinhvien->KNTNoisinh}}">
                        @error('KNTNoisinh')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">
                            Mã KH
                        </label>
                        <select class="form-control" name="KNTMaKH">
                            @foreach ($KNTKhoa as $item)
                                <option value="{{ $item->KNTMaKH }}" {{$KNTSinhvien->KNTMaKH === $item->KNTMaKH ? "selected":" "}}>{{ $item->KNTTenKH }}</option>
                            @endforeach
                        </select>
                        @error('KNTMaKH')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">
                            Học bổng
                        </label>
                        <input class="form-control" type="text" name="KNTHocbong" value="{{$KNTSinhvien->KNTHocbong}}">
                        @error('KNTHọcbong')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">
                            Điểm TB
                        </label>
                        <input class="form-control" type="text" name="KNTDiemTB" value="{{$KNTSinhvien->KNTDiemTB}}">
                        @error('KNTDiemTB')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    
                    <div class="mt-3">
                        <input type="submit" class="btn btn-primary" name="btnSubmit" value="Sửa">
                        <a href="\sinhvien" class="btn btn-secondary">Trở lại</a>
                    </div>
                </div>
                <div class="col-sm-4"></div>
            </div>
        </form>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous" ></script>
</body>
</html>