        </div>
    </div>

    <script src="<?php echo base_url() . 'assets/js/jquery.min.js'; ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/bootstrap.min.js'; ?>"></script>

    <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById("myImg");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");

        Array.from(document.querySelectorAll("#myImg")).forEach(item => {
            item.addEventListener("click", event => {
                modal.style.display = "block";
                modalImg.src = event.target.src;
                captionText.innerHTML = event.target.alt;
            });
        });

        // Get the <span> element that closes the modal
        document.querySelector(".close").addEventListener("click", () => {
            modal.style.display = "none";
        });

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() { 
            modal.style.display = "none";
        }
    </script>
</body>
</html>