<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Hello, world!</title>
</head>
<style>
    .bg1 {
        background-color: red;
    }

    .bg2 {
        background-color: green;
    }

    .bg3 {
        background-color: gray;
        width: 200px;
        height: 1270px;
        float: left;
    }

    .bg4 {
        background-color: gray;
        text-align: center;
        width: 80%
    }
</style>

<body>
    <div class="container">
        <img src="https://my.kapook.com/imagescontent/fb_img/996/s_112660_6459.jpg"
            class="img-fluid" alt="..." width="100%">
        <div class="container">
            <div class="col-12 bg3">พื้นที่โฆษณา</div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSxLlvV_HgHl1I5i4F0TKG1_6VGal7uAuudQ&usqp=CAU"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">ท่องเที่ยวที่เกาะล้าน 2วัน2คืนในราคาสบายๆเพี่ยงแค่1000บาทเท่านั้น</p>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div class="card" style="width: 18rem;">
                    <img src="https://cms.dmpcdn.com/travel/2021/03/10/29e1cc90-8151-11eb-809e-cb42afe7ddd1_original.jpg"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">เกาะไผ่ เป็นเกาะที่ใหญ่ที่สุดในหมู่เกาะไผ่ กลุ่มเกาะขนาดเล็กที่ไม่มีคนอาศัยอยู่ในชายฝั่งภาคตะวันออกของประเทศไทย ตั้งอยู่ห่างจากพัทยาไปทางฝั่งตะวันตกประมาณ 21 กิโลเมตร
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-4">
               <div class="card" style="width: 18rem;">
                   <img src="https://f.tpkcdn.com/review-source/791740c5-fd79-395a-8293-5926eda63f05.jpg"
                       class="card-img-top" alt="...">
                   <div class="card-body">
                       <p class="card-text">เกาะพีพี เป็นสถานที่ท่องเที่ยวหลัก มีลักษณะเป็นเวิ้ง หรือ อ่าวใหญ่ ที่ภายในมีหาดทรายขาวสะอาด น่าเล่นน้ำและดูปะการัง และเกาะพีพีดอน เคย ติดอันดับ 1 ใน 10 อันดับเกาะที่สวยงามที่สุดในโลก
                       </p>
                   </div>
               </div>
           </div>

           <div class="col-4">
               <div class="card" style="width: 18rem;">
                   <img src="https://forumb.biz/wp-content/uploads/2020/09/kohsamui11-e1600605617766.jpg"
                       class="card-img-top" alt="...">
                   <div class="card-body">
                       <p class="card-text">เกาะสมุย เป็นเกาะที่มีขนาดใหญ่เป็นอันดับ 2 ของประเทศไทย รองจากเกาะภูเก็ต ตั้งอยู่ในอ่าวไทย และเป็นหนึ่งในเกาะที่มีชื่อเสียงมากที่สุดของจังหวัดสุราษฎร์ธานี
                       </p>
                   </div>
               </div>
           </div>

            <div class="col-9">
                <button id="btnBack"> back </button>

                <div id="main">
                    <table  class="table table-success table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Author</th>
                            </tr>
                        </thead>
                        <tbody id="tblPost">
                        </tbody>
                    </table>
                </div>

                <div id="detail">
                    <table class="table table-success table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>UserID</th>
                            </tr>
                        </thead>
                        <tbody id="tblDetails">
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
        <div class="row">
            <div class="col-12 bg4">
                <p>63104269</p>
                <p>นายธนาคาร สุวรรณทา</p>
            </div>
        </div>
    </div>
</body>
<script>
    function showDetails(id) {
        $("#main").hide();
        $("#detail").show();

        // console.log(id);
        var url = "https://jsonplaceholder.typicode.com/posts/" + id

        $.getJSON(url)
            .done((data) => {
                console.log(data);
                var line = "<tr id='detailROW'";
                line += "><td>" + data.id + "</td>"
                line += "<td><b>" + data.title + "</b><br/>"
                line += data.body + "</td>"
                line += "<td>" + data.userId + "</td>"
                line += "</tr>";
                $("#tblDetails").append(line);
            })
            .fail((xhr, err, status) => {

            })


    }

    function LoadPosts() {
        var url = "https://jsonplaceholder.typicode.com/posts"
        var i = 0;
        $.getJSON(url)
            .done((data) => {
                $.each(data, (k, item) => {
                    // console.log(item);
                    i++;
                    var line = "<tr>";
                    line += "<td>" + item.id + "</td>"
                    line += "<td><b>" + item.title + "</b><br/>"
                    line += item.body + "</td>"
                    line += "<td><button onClick='showDetails(" + item.id + ");'>Link</button></td>"
                    line += "</tr>";
                    $("#tblPost").append(line);
                    if (i == 10) {
                        loadPost().stop();
                    };
                });
                $("#main").show();
            })
            .fail((xhr, err, status) => {

            })
    }

    $(() => {
        LoadPosts();
        $("#detail").hide();
        $("#btnBack").click(() => {
            $("#main").show();
            $("#detail").hide();
            $("#detailROW").remove();
        });
    })
</script>

</html>
