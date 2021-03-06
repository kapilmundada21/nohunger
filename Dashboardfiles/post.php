<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/post.css">
    <title>Post</title>
</head>
<body>

<?php include 'dashboard_header.php'; ?>
<?php include 'dashboard_sidebar.php'; ?>
    
    <div class="main_containor" align="center">
        <div class="post_type" id="post_type">
            <button type="button" class="active" id="image">Images</button>
            <button type="button" class="" id="text">Text</button>
        </div>
        <div class="post_input_image" id="post_input_image">
            <input type="file" name="post_image" id="post_image" accept="image/*">
            <button type="button" name="post_image_button" id="post_image_button">Select Image</button>
            <button type="submit" class="post_button" name="submit" id="submit">Post</button>
            <div class="post">
                <div id="img_preview"></div>
                <textarea name="caption" id="caption" cols="30" rows="10" placeholder="caption"></textarea>
            </div>
        </div>
        <div class="post_input_text" id="post_input_text">
                <textarea name="post_text" id="post_text" cols="30" rows="10" placeholder="text"></textarea>
            <button type="submit" class="post_button" name="submit" id="submit">Post</button>
        </div>
    </div>

    <script>
        // post type active css
        let image = document.getElementById('image');
        let text = document.getElementById('text');
        image.addEventListener('click' , function() {
            image.className = "active";
            text.className = "";
            document.getElementById('post_input_image').style.display = "block";
            document.getElementById('post_input_text').style.display = "none";
        });
        text.addEventListener('click' , function() {
            text.className = "active";
            image.className = "";
            document.getElementById('post_input_text').style.display = "flex";
            document.getElementById('post_input_image').style.display = "none";
        });
        
        // image input styling
        document.getElementById("post_image_button").addEventListener('click',function(){
            document.getElementById("post_image").click();  
        });
        const chooseFile = document.getElementById("post_image");
        const imgPreview = document.getElementById("img_preview");
        const caption = document.getElementById("caption");
        chooseFile.addEventListener("change", function () {
            getImgData();
        });
        function getImgData() {
            const files = chooseFile.files[0];
            if (files) {
                const fileReader = new FileReader();
                fileReader.readAsDataURL(files);
                fileReader.addEventListener("load", function () {
                imgPreview.style.display = "block";
                caption.style.display = "block";
                imgPreview.innerHTML = '<img src="' + this.result + '" class="image"/>';
                });    
            }
        }
    </script>
    
</body>
</html>

<?php include 'dashboard_footer.php'; ?>