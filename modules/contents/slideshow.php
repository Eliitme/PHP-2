<style>
    /* Slideshow container */
    .slideshow {
        width: 100%;
        height: 350px;
        position: relative;
        margin: auto;
    }

    /* Ẩn các slider */
    .mySlides {
        display: none;
    }

    /* định dạng các chấm chuyển đổi các slide */
    .dot-box {
        position: absolute;
        bottom: 10px;
        left: 10px;
    }

    .dot {
        cursor: pointer;
        height: 13px;
        width: 13px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 1s ease;
    }

    /* khi được hover, active đổi màu nền */
    .active,
    .dot:hover {
        background-color: red;
    }
</style>

<div class="slideshow">
    <?php
    $sql = "select * from gallery order by id_anh desc limit 4";
    $rs = mysqli_query($conn, $sql);

    while ($each = mysqli_fetch_array($rs)) { ?>
        <div class="mySlides">
            <img src="/PHP 2/admincp/modules/gallery/<?php echo $each['url'] ?>" style="height:350px; width: 100%;">
        </div>
    <?php } ?>
    <div style="text-align:center" class="dot-box">
        <?php for ($i = 0; $i < mysqli_num_rows($rs); $i++) { ?>
            <span class="dot" onclick="currentSlide(<?php echo $i ?>)"></span>
        <?php } ?>
    </div>

</div>

<script>
    //khai báo biến slideIndex đại diện cho slide hiện tại
    var slideIndex;
    // KHai bào hàm hiển thị slide
    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }

        slides[slideIndex].style.display = "block";
        dots[slideIndex].className += " active";
        //chuyển đến slide tiếp theo
        slideIndex++;
        //nếu đang ở slide cuối cùng thì chuyển về slide đầu
        if (slideIndex > slides.length - 1) {
            slideIndex = 0
        }
        //tự động chuyển đổi slide sau 5s
        setTimeout(showSlides, 5000);
    }
    //mặc định hiển thị slide đầu tiên 
    showSlides(slideIndex = 0);


    function currentSlide(n) {
        showSlides(slideIndex = n);
    }
</script>