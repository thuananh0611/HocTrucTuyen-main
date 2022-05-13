@extends('student._layout')
@section('content')

<header>
    <title>Khảo sát, đánh giá - 3CESCHOOL</title>
</header>

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="widget widget-remaining-time">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/student/home">Trang chủ</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <a href="/student/evaluate">Khảo sát, đánh giá</a>
                        </li>
                    </ul>
                    <div class="widget-remaining-time__block">
                        <script>
                            var myVar = setInterval(function () { myTimer() }, 1000);
                            function myTimer() {
                            var d = new Date();
                            var t = d.toLocaleTimeString();
                            document.getElementById("h").innerHTML = t;
                            }
                        </script>
                        <script type="text/javascript">
                            n = new Date();
                            if (n.getTimezoneOffset() == 0) t = n.getTime() + (7 * 60 * 60 * 1000);
                            else t = n.getTime();
                            n.setTime(t);
                            var dn = new Array("Chủ nhật", "Thứ 2", "Thứ 3", "Thứ 4", "Thứ 5", "Thứ 6", "Thứ 7");
                            d = n.getDay();
                            m = n.getMonth() + 1;
                            y = n.getFullYear()
                            document.write(dn[d] + ", " + (n.getDate() < 10 ? "0" : "") + n.getDate() + "/" + (m < 10 ? "0" :
                            "") + m + "/" + y + "&nbsp;&nbsp;|&nbsp;&nbsp;")
                        </script>
                        <span id="h"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 col-md-3 col-sm-6 form-group">
                <select name="namhoc" id="namhoc" class="form-control">
                    <option value="">--Chọn năm học--</option>
                    <option value="">1</option>
                </select>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-6 form-group">
                <select name="hocky" id="hocky" class="form-control">
                    <option value="">--Chọn học kỳ--</option>
                    <option value="I">I</option>
                    <option value="II">II</option>
                </select>
            </div>
            <div class="col-lg-8 col-md-6 col-sm-12 form-group">
                <select name="hocky" id="hocky" class="form-control">
                    <option value="">--Chọn môn học--</option>
                    <option value="I">1</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2><span class="ua-icon-helpdesk-newsroom"></span>&nbsp;Bảng hỏi khảo sát các môn học dành cho
                            học sinh
                        </h2>
                        <p>Phiếu đánh giá này nhằm thu thập thông tin và ý kiến của bạn về môn học để nâng cao chất
                            lượng đào tạo và hiệu quả giảng dạy tại Trường. Các bạn vui lòng điền đầy đủ thông tin với
                            nhận định thẳng thắn nhất.</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped table-condensed"
                                cellspacing="0" rules="all" border="1" id="ks"
                                style="width:100%;border-collapse:collapse;">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Nội dung đánh giá</th>
                                        <th colspan="4" scope="col">Ý kiến của sinh viên</th>
                                    </tr>
                                </thead>
                                <tbody style="font-size: 12px;">
                                    <tr>
                                        <td colspan="6" style="padding-left:20px">
                                            <h6><b>Nội dung đánh giá</b></h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="6" style="padding-left:60px">
                                            <h6><b>Thông tin môn học, tài liệu học và chuẩn bị giảng dạy của GV</b></h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center;vertical-align:middle">1</td>
                                        <td style="text-align:left;vertical-align:middle;" datacauhoi="1" datatype="3">
                                            Tài liệu môn học được công bố công khai, giúp bạn dễ dàng tiếp cận.</td>
                                        <td class="td-3" style="background-color:#ec7e78">
                                            Rất không đồng ý <input id="1_1" class="radioBT_1" type="radio" name="yk1"
                                                datacb="0" datasss="1" dataid="1_1" datacell="rdoChon" dataidcheck="1_1"
                                                datadem="1">
                                        </td>
                                        <td class="td-3" style="background-color:#f6bfbc">
                                            Không đồng ý <input id="1_2" class="radioBT_1" type="radio" name="yk1"
                                                datacb="0" datasss="1" dataid="1_2" datacell="rdoChon" dataidcheck="1_2"
                                                datadem="1">
                                        </td>
                                        <td class="td-3" style="background-color:#bcf6bf">
                                            Đồng ý <input id="1_3" class="radioBT_1" type="radio" name="yk1" datacb="0"
                                                datasss="1" dataid="1_3" datacell="rdoChon" dataidcheck="1_3"
                                                datadem="1">
                                        </td>
                                        <td class="td-3" style="background-color:#23a206">
                                            Rất đồng ý <input id="1_4" class="radioBT_1" type="radio" name="yk1"
                                                datacb="0" datasss="1" dataid="1_4" datacell="rdoChon" dataidcheck="1_4"
                                                datadem="1">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center;vertical-align:middle">2</td>
                                        <td style="text-align:left;vertical-align:middle" datacauhoi="2" datatype="3">
                                            Bạn đã nhận được thông tin cần thiết về mục tiêu, chuẩn đầu ra, lịch trình
                                            môn học, phương pháp học tập, và kiểm tra, đánh giá kết quả học tập khi bắt
                                            đầu môm học.</td>
                                        <td class="td-3" style="background-color:#ec7e78">
                                            Rất không đồng ý <input id="2_1" class="radioBT_2" type="radio" name="yk2"
                                                datacb="0" datasss="1" dataid="2_1" datacell="rdoChon" dataidcheck="2_1"
                                                datadem="2">
                                        </td>
                                        <td class="td-3" style="background-color:#f6bfbc">
                                            Không đồng ý <input id="2_2" class="radioBT_2" type="radio" name="yk2"
                                                datacb="0" datasss="1" dataid="2_2" datacell="rdoChon" dataidcheck="2_2"
                                                datadem="2">
                                        </td>
                                        <td class="td-3" style="background-color:#bcf6bf">
                                            Đồng ý <input id="2_3" class="radioBT_2" type="radio" name="yk2" datacb="0"
                                                datasss="1" dataid="2_3" datacell="rdoChon" dataidcheck="2_3"
                                                datadem="2">
                                        </td>
                                        <td class="td-3" style="background-color:#23a206">
                                            Rất đồng ý <input id="2_4" class="radioBT_2" type="radio" name="yk2"
                                                datacb="0" datasss="1" dataid="2_4" datacell="rdoChon" dataidcheck="2_4"
                                                datadem="2">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center;vertical-align:middle">3</td>
                                        <td style="text-align:left;vertical-align:middle" datacauhoi="3" datatype="3">
                                            Tài liệu do giáo viên cung cấp hoặc giới thiệu mang tính cập nhật, đáp ứng
                                            nhu cầu học tập môn học của bạn.
                                        </td>
                                        <td class="td-3" style="background-color:#ec7e78">
                                            Rất không đồng ý <input id="3_1" class="radioBT_3" type="radio" name="yk3"
                                                datacb="0" datasss="1" dataid="3_1" datacell="rdoChon" dataidcheck="3_1"
                                                datadem="3">
                                        </td>
                                        <td class="td-3" style="background-color:#f6bfbc">
                                            Không đồng ý <input id="3_2" class="radioBT_3" type="radio" name="yk3"
                                                datacb="0" datasss="1" dataid="3_2" datacell="rdoChon" dataidcheck="3_2"
                                                datadem="3">
                                        </td>
                                        <td class="td-3" style="background-color:#bcf6bf">
                                            Đồng ý <input id="3_3" class="radioBT_3" type="radio" name="yk3" datacb="0"
                                                datasss="1" dataid="3_3" datacell="rdoChon" dataidcheck="3_3"
                                                datadem="3">
                                        </td>
                                        <td class="td-3" style="background-color:#23a206">
                                            Rất đồng ý <input id="3_4" class="radioBT_3" type="radio" name="yk3"
                                                datacb="0" datasss="1" dataid="3_4" datacell="rdoChon" dataidcheck="3_4"
                                                datadem="3">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center;vertical-align:middle">4</td>
                                        <td style="text-align:left;vertical-align:middle" datacauhoi="4" datatype="3">
                                            Giáo viên luôn chuẩn bị tốt bài giảng trước khi lên lớp.</td>
                                        <td class="td-3" style="background-color:#ec7e78">
                                            Rất không đồng ý <input id="4_1" class="radioBT_4" type="radio" name="yk4"
                                                datacb="0" datasss="1" dataid="4_1" datacell="rdoChon" dataidcheck="4_1"
                                                datadem="4">
                                        </td>
                                        <td class="td-3" style="background-color:#f6bfbc">
                                            Không đồng ý <input id="4_2" class="radioBT_4" type="radio" name="yk4"
                                                datacb="0" datasss="1" dataid="4_2" datacell="rdoChon" dataidcheck="4_2"
                                                datadem="4">
                                        </td>
                                        <td class="td-3" style="background-color:#bcf6bf">
                                            Đồng ý <input id="4_3" class="radioBT_4" type="radio" name="yk4" datacb="0"
                                                datasss="1" dataid="4_3" datacell="rdoChon" dataidcheck="4_3"
                                                datadem="4">
                                        </td>
                                        <td class="td-3" style="background-color:#23a206">
                                            Rất đồng ý <input id="4_4" class="radioBT_4" type="radio" name="yk4"
                                                datacb="0" datasss="1" dataid="4_4" datacell="rdoChon" dataidcheck="4_4"
                                                datadem="4">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="6" style="padding-left:60px">
                                            <h6><b>Hoạt động giảng dạy của GV</b></h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center;vertical-align:middle">5</td>
                                        <td style="text-align:left;vertical-align:middle" datacauhoi="5" datatype="3">
                                            Nội dung môn học thiết thực, hữu ích và vừa sức đối với bạn.</td>
                                        <td class="td-3" style="background-color:#ec7e78">
                                            Rất không đồng ý <input id="5_1" class="radioBT_5" type="radio" name="yk5"
                                                datacb="0" datasss="1" dataid="5_1" datacell="rdoChon" dataidcheck="5_1"
                                                datadem="5">
                                        </td>
                                        <td class="td-3" style="background-color:#f6bfbc">
                                            Không đồng ý <input id="5_2" class="radioBT_5" type="radio" name="yk5"
                                                datacb="0" datasss="1" dataid="5_2" datacell="rdoChon" dataidcheck="5_2"
                                                datadem="5">
                                        </td>
                                        <td class="td-3" style="background-color:#bcf6bf">
                                            Đồng ý <input id="5_3" class="radioBT_5" type="radio" name="yk5" datacb="0"
                                                datasss="1" dataid="5_3" datacell="rdoChon" dataidcheck="5_3"
                                                datadem="5">
                                        </td>
                                        <td class="td-3" style="background-color:#23a206">
                                            Rất đồng ý <input id="5_4" class="radioBT_5" type="radio" name="yk5"
                                                datacb="0" datasss="1" dataid="5_4" datacell="rdoChon" dataidcheck="5_4"
                                                datadem="5">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center;vertical-align:middle">6</td>
                                        <td style="text-align:left;vertical-align:middle" datacauhoi="6" datatype="3">
                                            Giáo viên nắm vững kiến thức môn học, kiến thức thực tiễn và kiến thức các
                                            môn học liên quan.
                                        </td>
                                        <td class="td-3" style="background-color:#ec7e78">
                                            Rất không đồng ý <input id="6_1" class="radioBT_6" type="radio" name="yk6"
                                                datacb="0" datasss="1" dataid="6_1" datacell="rdoChon" dataidcheck="6_1"
                                                datadem="6">
                                        </td>
                                        <td class="td-3" style="background-color:#f6bfbc">
                                            Không đồng ý <input id="6_2" class="radioBT_6" type="radio" name="yk6"
                                                datacb="0" datasss="1" dataid="6_2" datacell="rdoChon" dataidcheck="6_2"
                                                datadem="6">

                                        </td>
                                        <td class="td-3" style="background-color:#bcf6bf">
                                            Đồng ý <input id="6_3" class="radioBT_6" type="radio" name="yk6" datacb="0"
                                                datasss="1" dataid="6_3" datacell="rdoChon" dataidcheck="6_3"
                                                datadem="6">
                                        </td>
                                        <td class="td-3" style="background-color:#23a206">
                                            Rất đồng ý <input id="6_4" class="radioBT_6" type="radio" name="yk6"
                                                datacb="0" datasss="1" dataid="6_4" datacell="rdoChon" dataidcheck="6_4"
                                                datadem="6">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center;vertical-align:middle">7</td>
                                        <td style="text-align:left;vertical-align:middle" datacauhoi="7" datatype="3">
                                            Giáo viên có phương pháp truyền đạt rõ ràng, dễ hiểu và giải đáp thỏa đáng
                                            những thắc mắc của học sinh liên quan đến môn học.</td>
                                        <td class="td-3" style="background-color:#ec7e78">
                                            Rất không đồng ý <input id="7_1" class="radioBT_7" type="radio" name="yk7"
                                                datacb="0" datasss="1" dataid="7_1" datacell="rdoChon" dataidcheck="7_1"
                                                datadem="7">
                                        </td>
                                        <td class="td-3" style="background-color:#f6bfbc">
                                            Không đồng ý <input id="7_2" class="radioBT_7" type="radio" name="yk7"
                                                datacb="0" datasss="1" dataid="7_2" datacell="rdoChon" dataidcheck="7_2"
                                                datadem="7">
                                        </td>
                                        <td class="td-3" style="background-color:#bcf6bf">
                                            Đồng ý <input id="7_3" class="radioBT_7" type="radio" name="yk7" datacb="0"
                                                datasss="1" dataid="7_3" datacell="rdoChon" dataidcheck="7_3"
                                                datadem="7">
                                        </td>
                                        <td class="td-3" style="background-color:#23a206">
                                            Rất đồng ý <input id="7_4" class="radioBT_7" type="radio" name="yk7"
                                                datacb="0" datasss="1" dataid="7_4" datacell="rdoChon" dataidcheck="7_4"
                                                datadem="7">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center;vertical-align:middle">8</td>
                                        <td style="text-align:left;vertical-align:middle" datacauhoi="8" datatype="3">
                                            Giáo viên đã hướng dẫn phương pháp học tập sao cho đạt hiệu quả và thúc đẩy
                                            việc tự học của bạn.</td>
                                        <td class="td-3" style="background-color:#ec7e78">
                                            Rất không đồng ý <input id="8_1" class="radioBT_8" type="radio" name="yk8"
                                                datacb="0" datasss="1" dataid="8_1" datacell="rdoChon" dataidcheck="8_1"
                                                datadem="8">
                                        </td>
                                        <td class="td-3" style="background-color:#f6bfbc">
                                            Không đồng ý <input id="8_2" class="radioBT_8" type="radio" name="yk8"
                                                datacb="0" datasss="1" dataid="8_2" datacell="rdoChon" dataidcheck="8_2"
                                                datadem="8">
                                        </td>
                                        <td class="td-3" style="background-color:#bcf6bf">
                                            Đồng ý <input id="8_3" class="radioBT_8" type="radio" name="yk8" datacb="0"
                                                datasss="1" dataid="8_3" datacell="rdoChon" dataidcheck="8_3"
                                                datadem="8">
                                        </td>
                                        <td class="td-3" style="background-color:#23a206">
                                            Rất đồng ý <input id="8_4" class="radioBT_8" type="radio" name="yk8"
                                                datacb="0" datasss="1" dataid="8_4" datacell="rdoChon" dataidcheck="8_4"
                                                datadem="8">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center;vertical-align:middle">9</td>
                                        <td style="text-align:left;vertical-align:middle" datacauhoi="9" datatype="3">
                                            Giáo viên đã hướng dẫn bạn thực hiện tốt các bài tập, tiểu luận, thực hành,
                                            thí nghiệm,… của môn học này.</td>
                                        <td class="td-3" style="background-color:#ec7e78">
                                            Rất không đồng ý <input id="9_1" class="radioBT_9" type="radio" name="yk9"
                                                datacb="0" datasss="1" dataid="9_1" datacell="rdoChon" dataidcheck="9_1"
                                                datadem="9">
                                        </td>
                                        <td class="td-3" style="background-color:#f6bfbc">
                                            Không đồng ý <input id="9_2" class="radioBT_9" type="radio" name="yk9"
                                                datacb="0" datasss="1" dataid="9_2" datacell="rdoChon" dataidcheck="9_2"
                                                datadem="9">
                                        </td>
                                        <td class="td-3" style="background-color:#bcf6bf">
                                            Đồng ý <input id="9_3" class="radioBT_9" type="radio" name="yk9" datacb="0"
                                                datasss="1" dataid="9_3" datacell="rdoChon" dataidcheck="9_3"
                                                datadem="9">
                                        </td>
                                        <td class="td-3" style="background-color:#23a206">
                                            Rất đồng ý <input id="9_4" class="radioBT_9" type="radio" name="yk9"
                                                datacb="0" datasss="1" dataid="9_4" datacell="rdoChon" dataidcheck="9_4"
                                                datadem="9">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center;vertical-align:middle">10</td>
                                        <td style="text-align:left;vertical-align:middle" datacauhoi="10" datatype="3">
                                            Bạn cảm thấy hứng thú khi học tập môn này.</td>
                                        <td class="td-3" style="background-color:#ec7e78">
                                            Rất không đồng ý <input id="10_1" class="radioBT_10" type="radio"
                                                name="yk10" datacb="0" datasss="1" dataid="10_1" datacell="rdoChon"
                                                dataidcheck="10_1" datadem="10">
                                        </td>
                                        <td class="td-3" style="background-color:#f6bfbc">
                                            Không đồng ý <input id="10_2" class="radioBT_10" type="radio" name="yk10"
                                                datacb="0" datasss="1" dataid="10_2" datacell="rdoChon"
                                                dataidcheck="10_2" datadem="10">
                                        </td>
                                        <td class="td-3" style="background-color:#bcf6bf">
                                            Đồng ý <input id="10_3" class="radioBT_10" type="radio" name="yk10"
                                                datacb="0" datasss="1" dataid="10_3" datacell="rdoChon"
                                                dataidcheck="10_3" datadem="10">
                                        </td>
                                        <td class="td-3" style="background-color:#23a206">
                                            Rất đồng ý <input id="10_4" class="radioBT_10" type="radio" name="yk10"
                                                datacb="0" datasss="1" dataid="10_4" datacell="rdoChon"
                                                dataidcheck="10_4" datadem="10">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center;vertical-align:middle">11</td>
                                        <td style="text-align:left;vertical-align:middle" datacauhoi="11" datatype="3">
                                            Việc đánh giá kết quả học tập phù hợp với đặc thù môn học và đảm bảo tính
                                            khách quan, công bằng, phản ánh đúng năng lực của học sinh.</td>
                                        <td class="td-3" style="background-color:#ec7e78">
                                            Rất không đồng ý <input id="11_1" class="radioBT_11" type="radio"
                                                name="yk11" datacb="0" datasss="1" dataid="11_1" datacell="rdoChon"
                                                dataidcheck="11_1" datadem="11">
                                        </td>
                                        <td class="td-3" style="background-color:#f6bfbc">
                                            Không đồng ý <input id="11_2" class="radioBT_11" type="radio" name="yk11"
                                                datacb="0" datasss="1" dataid="11_2" datacell="rdoChon"
                                                dataidcheck="11_2" datadem="11">
                                        </td>
                                        <td class="td-3" style="background-color:#bcf6bf">
                                            Đồng ý <input id="11_3" class="radioBT_11" type="radio" name="yk11"
                                                datacb="0" datasss="1" dataid="11_3" datacell="rdoChon"
                                                dataidcheck="11_3" datadem="11">
                                        </td>
                                        <td class="td-3" style="background-color:#23a206">
                                            Rất đồng ý <input id="11_4" class="radioBT_11" type="radio" name="yk11"
                                                datacb="0" datasss="1" dataid="11_4" datacell="rdoChon"
                                                dataidcheck="11_4" datadem="11">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center;vertical-align:middle">12</td>
                                        <td style="text-align:left;vertical-align:middle" datacauhoi="12" datatype="3">
                                            Kết quả đánh giá được phản hồi kịp thời để học sinh cải thiện việc học tập.
                                        </td>
                                        <td class="td-3" style="background-color:#ec7e78">
                                            Rất không đồng ý <input id="12_1" class="radioBT_12" type="radio"
                                                name="yk12" datacb="0" datasss="1" dataid="12_1" datacell="rdoChon"
                                                dataidcheck="12_1" datadem="12">
                                        </td>
                                        <td class="td-3" style="background-color:#f6bfbc">
                                            Không đồng ý <input id="12_2" class="radioBT_12" type="radio" name="yk12"
                                                datacb="0" datasss="1" dataid="12_2" datacell="rdoChon"
                                                dataidcheck="12_2" datadem="12">
                                        </td>
                                        <td class="td-3" style="background-color:#bcf6bf">
                                            Đồng ý <input id="12_3" class="radioBT_12" type="radio" name="yk12"
                                                datacb="0" datasss="1" dataid="12_3" datacell="rdoChon"
                                                dataidcheck="12_3" datadem="12">
                                        </td>
                                        <td class="td-3" style="background-color:#23a206">
                                            Rất đồng ý <input id="12_4" class="radioBT_12" type="radio" name="yk12"
                                                datacb="0" datasss="1" dataid="12_4" datacell="rdoChon"
                                                dataidcheck="12_4" datadem="12">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center;vertical-align:middle">13</td>
                                        <td style="text-align:left;vertical-align:middle" datacauhoi="13" datatype="3">
                                            Giáo viên thường xuyên lên lớp đúng giờ, dạy đủ thời lượng và đảm bảo thực
                                            hiện đúng thời khóa biểu.</td>
                                        <td class="td-3" style="background-color:#ec7e78">
                                            Rất không đồng ý <input id="13_1" class="radioBT_13" type="radio"
                                                name="yk13" datacb="0" datasss="1" dataid="13_1" datacell="rdoChon"
                                                dataidcheck="13_1" datadem="13">
                                        </td>
                                        <td class="td-3" style="background-color:#f6bfbc">
                                            Không đồng ý <input id="13_2" class="radioBT_13" type="radio" name="yk13"
                                                datacb="0" datasss="1" dataid="13_2" datacell="rdoChon"
                                                dataidcheck="13_2" datadem="13">
                                        </td>
                                        <td class="td-3" style="background-color:#bcf6bf">
                                            Đồng ý <input id="13_3" class="radioBT_13" type="radio" name="yk13"
                                                datacb="0" datasss="1" dataid="13_3" datacell="rdoChon"
                                                dataidcheck="13_3" datadem="13">
                                        </td>
                                        <td class="td-3" style="background-color:#23a206">
                                            Rất đồng ý <input id="13_4" class="radioBT_13" type="radio" name="yk13"
                                                datacb="0" datasss="1" dataid="13_4" datacell="rdoChon"
                                                dataidcheck="13_4" datadem="13">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center;vertical-align:middle">14</td>
                                        <td style="text-align:left;vertical-align:middle" datacauhoi="14" datatype="3">
                                            Giáo viên luôn thể hiện rõ sự nhiệt tình và tinh thần trách nhiệm cao trong
                                            giảng dạy.</td>
                                        <td class="td-3" style="background-color:#ec7e78">
                                            Rất không đồng ý <input id="14_1" class="radioBT_14" type="radio"
                                                name="yk14" datacb="0" datasss="1" dataid="14_1" datacell="rdoChon"
                                                dataidcheck="14_1" datadem="14">
                                        </td>
                                        <td class="td-3" style="background-color:#f6bfbc">
                                            Không đồng ý <input id="14_2" class="radioBT_14" type="radio" name="yk14"
                                                datacb="0" datasss="1" dataid="14_2" datacell="rdoChon"
                                                dataidcheck="14_2" datadem="14">
                                        </td>
                                        <td class="td-3" style="background-color:#bcf6bf">
                                            Đồng ý <input id="14_3" class="radioBT_14" type="radio" name="yk14"
                                                datacb="0" datasss="1" dataid="14_3" datacell="rdoChon"
                                                dataidcheck="14_3" datadem="14">
                                        </td>
                                        <td class="td-3" style="background-color:#23a206">
                                            Rất đồng ý <input id="14_4" class="radioBT_14" type="radio" name="yk14"
                                                datacb="0" datasss="1" dataid="14_4" datacell="rdoChon"
                                                dataidcheck="14_4" datadem="14">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center;vertical-align:middle">15</td>
                                        <td style="text-align:left;vertical-align:middle" datacauhoi="15" datatype="3">
                                            Giáo viên có tác phong sư phạm chuẩn mực và ứng xử đúng mực với học sinh.
                                        </td>
                                        <td class="td-3" style="background-color:#ec7e78">
                                            Rất không đồng ý <input id="15_1" class="radioBT_15" type="radio"
                                                name="yk15" datacb="0" datasss="1" dataid="15_1" datacell="rdoChon"
                                                dataidcheck="15_1" datadem="15">
                                        </td>
                                        <td class="td-3" style="background-color:#f6bfbc">
                                            Không đồng ý <input id="15_2" class="radioBT_15" type="radio" name="yk15"
                                                datacb="0" datasss="1" dataid="15_2" datacell="rdoChon"
                                                dataidcheck="15_2" datadem="15">
                                        </td>
                                        <td class="td-3" style="background-color:#bcf6bf">
                                            Đồng ý <input id="15_3" class="radioBT_15" type="radio" name="yk15"
                                                datacb="0" datasss="1" dataid="15_3" datacell="rdoChon"
                                                dataidcheck="15_3" datadem="15">
                                        </td>
                                        <td class="td-3" style="background-color:#23a206">
                                            Rất đồng ý <input id="15_4" class="radioBT_15" type="radio" name="yk15"
                                                datacb="0" datasss="1" dataid="15_4" datacell="rdoChon"
                                                dataidcheck="15_4" datadem="15">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center;vertical-align:middle">16</td>
                                        <td style="text-align:left;vertical-align:middle" datacauhoi="16" datatype="3">
                                            Giáo viên quan tâm đến giáo dục đạo đức, nhân cách, ý thức tổ chức kỉ luật
                                            cho học sinh.
                                        </td>
                                        <td class="td-3" style="background-color:#ec7e78">
                                            Rất không đồng ý <input id="16_1" class="radioBT_16" type="radio"
                                                name="yk16" datacb="0" datasss="1" dataid="16_1" datacell="rdoChon"
                                                dataidcheck="16_1" datadem="16">
                                        </td>
                                        <td class="td-3" style="background-color:#f6bfbc">
                                            Không đồng ý <input id="16_2" class="radioBT_16" type="radio" name="yk16"
                                                datacb="0" datasss="1" dataid="16_2" datacell="rdoChon"
                                                dataidcheck="16_2" datadem="16">
                                        </td>
                                        <td class="td-3" style="background-color:#bcf6bf">
                                            Đồng ý <input id="16_3" class="radioBT_16" type="radio" name="yk16"
                                                datacb="0" datasss="1" dataid="16_3" datacell="rdoChon"
                                                dataidcheck="16_3" datadem="16">
                                        </td>
                                        <td class="td-3" style="background-color:#23a206">
                                            Rất đồng ý <input id="16_4" class="radioBT_16" type="radio" name="yk16"
                                                datacb="0" datasss="1" dataid="16_4" datacell="rdoChon"
                                                dataidcheck="16_4" datadem="16">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center;vertical-align:middle">17</td>
                                        <td style="text-align:left;vertical-align:middle" datacauhoi="17" datatype="3">
                                            Nhìn chung, sĩ số của lớp tham gia môn học này hầu như rất đầy đủ.</td>
                                        <td class="td-3" style="background-color:#ec7e78">
                                            Rất không đồng ý <input id="17_1" class="radioBT_17" type="radio"
                                                name="yk17" datacb="0" datasss="1" dataid="17_1" datacell="rdoChon"
                                                dataidcheck="17_1" datadem="17">
                                        </td>
                                        <td class="td-3" style="background-color:#f6bfbc">
                                            Không đồng ý <input id="17_2" class="radioBT_17" type="radio" name="yk17"
                                                datacb="0" datasss="1" dataid="17_2" datacell="rdoChon"
                                                dataidcheck="17_2" datadem="17">
                                        </td>
                                        <td class="td-3" style="background-color:#bcf6bf">
                                            Đồng ý <input id="17_3" class="radioBT_17" type="radio" name="yk17"
                                                datacb="0" datasss="1" dataid="17_3" datacell="rdoChon"
                                                dataidcheck="17_3" datadem="17">
                                        </td>
                                        <td class="td-3" style="background-color:#23a206">
                                            Rất đồng ý <input id="17_4" class="radioBT_17" type="radio" name="yk17"
                                                datacb="0" datasss="1" dataid="17_4" datacell="rdoChon"
                                                dataidcheck="17_4" datadem="17">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center;vertical-align:middle">18</td>
                                        <td style="text-align:left;vertical-align:middle" datacauhoi="18" datatype="3">
                                            Bạn đã lĩnh hội được những kiến thức cơ bản của môn học và đạt được các kĩ
                                            năng thực hành có thể cần thiết cho tương lai.</td>
                                        <td class="td-3" style="background-color:#ec7e78">
                                            Rất không đồng ý <input id="18_1" class="radioBT_18" type="radio"
                                                name="yk18" datacb="0" datasss="1" dataid="18_1" datacell="rdoChon"
                                                dataidcheck="18_1" datadem="18">
                                        </td>
                                        <td class="td-3" style="background-color:#f6bfbc">
                                            Không đồng ý <input id="18_2" class="radioBT_18" type="radio" name="yk18"
                                                datacb="0" datasss="1" dataid="18_2" datacell="rdoChon"
                                                dataidcheck="18_2" datadem="18">
                                        </td>
                                        <td class="td-3" style="background-color:#bcf6bf">
                                            Đồng ý <input id="18_3" class="radioBT_18" type="radio" name="yk18"
                                                datacb="0" datasss="1" dataid="18_3" datacell="rdoChon"
                                                dataidcheck="18_3" datadem="18">
                                        </td>
                                        <td class="td-3" style="background-color:#23a206">
                                            Rất đồng ý <input id="18_4" class="radioBT_18" type="radio" name="yk18"
                                                datacb="0" datasss="1" dataid="18_4" datacell="rdoChon"
                                                dataidcheck="18_4" datadem="18">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="6" style="padding-left:60px">
                                            <h6><b>Đánh giá chung</b></h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center;vertical-align:middle">19</td>
                                        <td style="text-align:left;vertical-align:middle" datacauhoi="19" datatype="3">
                                            Nhìn chung bạn hài lòng với môn học này.</td>
                                        <td class="td-3" style="background-color:#ec7e78">
                                            Rất không đồng ý <input id="19_1" class="radioBT_19" type="radio"
                                                name="yk19" datacb="0" datasss="1" dataid="19_1" datacell="rdoChon"
                                                dataidcheck="19_1" datadem="19">
                                        </td>
                                        <td class="td-3" style="background-color:#f6bfbc">
                                            Không đồng ý <input id="19_2" class="radioBT_19" type="radio" name="yk19"
                                                datacb="0" datasss="1" dataid="19_2" datacell="rdoChon"
                                                dataidcheck="19_2" datadem="19">
                                        </td>
                                        <td class="td-3" style="background-color:#bcf6bf">
                                            Đồng ý <input id="19_3" class="radioBT_19" type="radio" name="yk19"
                                                datacb="0" datasss="1" dataid="19_3" datacell="rdoChon"
                                                dataidcheck="19_3" datadem="19">
                                        </td>
                                        <td class="td-3" style="background-color:#23a206">
                                            Rất đồng ý <input id="19_4" class="radioBT_19" type="radio" name="yk19"
                                                datacb="0" datasss="1" dataid="19_4" datacell="rdoChon"
                                                dataidcheck="19_4" datadem="19">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="6" style="padding-left:60px">
                                            <h6><b>Nhận xét riêng của bạn</b></h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align:center;vertical-align:middle">20</td>
                                        <td style="text-align:left;vertical-align:middle" datacauhoi="20" datatype="5">
                                            Bạn hãy viết bất kì nhận xét gì mà bạn cảm thấy giúp cho việc giảng dạy và
                                            học tập môn học này tốt hơn.</td>
                                        <td colspan="4">
                                            <textarea name="" rows="2" cols="20" id="20" class="form-control"
                                                datacell="txtChon" dataid="20" style="height:50px;"></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5"></td>
                                        <td style="text-align:center;vertical-align:middle"><a class="btn btn-danger"
                                                style="cursor:pointer" href="#"><i class="fa fa-save"></i>&nbsp;Lưu
                                                lại</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop