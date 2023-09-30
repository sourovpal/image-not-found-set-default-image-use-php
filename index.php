<?php
    function getImage($file, $size='200x200'){
        $file_headers = @get_headers($file);
        if(is_array($file_headers) && $file_headers[0] == 'HTTP/1.1 200 OK') {
            return $file;
        }
        return 'https://via.placeholder.com/'.$size;
    }
?> 

<img src="<?php echo getImage('https://img.freepik.com/_free-vectr/bird-colorful-logo-gradient-vector_343694-1365.jpg', '200x200') ; ?>" width="200" alt="Bird">
<img src="<?php echo getImage('http://localhost/ecommerce/storage/product/china-max-power-factory-direct-sale-dc-charge-ev-gbt-30kw-40547695.webp', '200x200') ; ?>" width="200" alt="Bird">
