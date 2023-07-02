<button id="myBtn" title="Go to top">Back To Top</button>
<section>
    <div class="max-w-full mx-auto px-5 pt-10 relative">
        <div class="grid grid-cols-2 gap-3">
            <div class="">
                <img srcset="images/web_images/logo.png 2x" class="pb-5" alt="" />
                <span class="">
                    Thời trang hàng hiệu cao cấp, chất lượng giá cả hàng đầu~
                </span>
                <div class="flex space-x-10 pt-5">
                    <img src="images/web_images/facebook.svg" alt="" />
                    <img src="images/web_images/twitter.svg" alt="" />
                    <img src="images/web_images/linkedin.svg" alt="" />
                    <img src="images/web_images/dribbble.svg" alt="" />
                </div>
            </div>
            <div class="grid grid-cols-3 gap-14">
                <div>
                    <h2 class="uppercase text-[16px] font-medium pb-6">CATALOG</h2>
                    <p>Necklaces</p>
                    <p>Hoodies</p>
                    <p>Jewelry Box</p>
                    <p>t-shirt</p>
                    <p>jacket</p>
                </div>
                <div>
                    <h2 class="uppercase text-[16px] font-medium pb-6">ABOUT US</h2>
                    <p>Our Producers</p>
                    <p>Sitemaps</p>
                    <p>FAQ</p>
                    <p>About Us</p>
                    <p>Terms & Conditions</p>
                </div>
                <div>
                    <h2 class="uppercase text-[16px] font-medium pb-6">
                        CUSTOMER SERVICES
                    </h2>
                    <p>Contact Us</p>
                    <p>Track Your Order</p>
                    <p>Product Care & Repair</p>
                    <p>Book an Appointment</p>
                    <p>Shipping & Returns</p>
                </div>
            </div>
        </div>
</section>
<section>
    <div class="bg-[#1E2832] max-w-full mt-10">
        <div class="max-w-7xl mx-auto  flex justify-between py-4 px-5">
            <span class="text-[14px] text-white leading-normal">congvcph28670</span>
            <img src="images/web_images/icons_payment 1.svg" alt="">

        </div>
    </div>
</section>
</body>
<script>
    const imgPosition = document.querySelectorAll(".aspect-ratio-169 img")
    const imgContainer = document.querySelector('.aspect-ratio-169')
    const dotItem = document.querySelectorAll(".dot")
    const rightSlider = document.querySelector('.right_slider')
    const leftSlider = document.querySelector('.left_slider')
    let imgNumber = imgPosition.length
    let index = 0
    // console.log(imgPosition)
    imgPosition.forEach(function(image, index) {
        image.style.left = index * 100 + "%"
        dotItem[index].addEventListener("click", function() {
            slider(index)
        })
    })

    function imgSlide() {
        index++;
        console.log(index)
        if (index >= imgNumber) {
            index = 0
        }
        slider(index)
    }
    rightSlider.addEventListener("click", function() {
        index++;
        console.log(index)
        if (index >= imgNumber) {
            index = 0
        }
        slider(index)
    })
    leftSlider.addEventListener("click", function() {
        index--;
        console.log(index)
        if (index >= imgNumber || index < 0) {
            index = 4
        }
        slider(index)
    })

    function slider(index) {
        imgContainer.style.left = "-" + index * 100 + "%"
        const dotActive = document.querySelector('.active')
        dotActive.classList.remove("active");
        dotItem[index].classList.add("active");
    }
    setInterval(imgSlide, 5000)




    //Khi người dùng cuộn chuột thì gọi hàm scrollFunction
    window.onscroll = function() {
        scrollFunction()
    };
    // khai báo hàm scrollFunction
    function scrollFunction() {
        // Kiểm tra vị trí hiện tại của con trỏ so với nội dung trang
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            //nếu lớn hơn 20px thì hiện button
            document.getElementById("myBtn").style.display = "block";
        } else {
            //nếu nhỏ hơn 20px thì ẩn button
            document.getElementById("myBtn").style.display = "none";
        }
    }
    //gán sự kiện click cho button
    document.getElementById('myBtn').addEventListener("click", function() {
        //Nếu button được click thì nhảy về đầu trang
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    });
</script>

</html>