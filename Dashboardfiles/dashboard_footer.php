    </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $('.nav_btn').click(function () {
                $('.mobile_nav_items').toggleClass('activate');
            });
        });
    </script>
    <script>
        var header1 = document.getElementById("btn_script1");
        var btns1 = header1.getElementsByClassName("btn");
        for (var i = 0; i < btns1.length; i++) {
            btns1[i].addEventListener("click", function() {
                var current1 = document.getElementsByClassName("active");
                current1[2].className = "btn";
                this.className += " active";
            });
        }

        var header2 = document.getElementById("btn_script2");
        var btns2 = header2.getElementsByClassName("btn");
        for (var j = 0; j < btns2.length; j++) {
            btns2[j].addEventListener("click", function() {
                var current2 = document.getElementsByClassName("active");
                current2[0].className = "btn";
                current2[1].className = "btn";
                current2[2].className = "btn";
                this.className += " active";
            });
        }
    </script>

</body>
</html>