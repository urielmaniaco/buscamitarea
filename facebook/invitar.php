<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="title" content="BuscaMiTarea.com" />
<meta name="description" content="Deja que busque la tarea por ti!." />
<link rel="image_src" href="../images/fb.png" />
<link rel="icon" type="image/x-icon" href="../images/favicon.png" />
<title>BuscaMiTarea.com | Busqueda en formato imprimible.</title>

</head>

<body>

<?php 

         $app_id = "145798605488392";

         $canvas_page = "http://apps.facebook.com/buscamitarea/";

         $message = "Would you like to join me in this great app?";

         $requests_url = "http://www.facebook.com/dialog/apprequests?app_id=" 
                . $app_id . "&redirect_uri=" . urlencode($canvas_page)
                . "&message=" . $message;

         if (empty($_REQUEST["request_ids"])) {
            echo("<script> top.location.href='" . $requests_url . "'</script>");
         } else {
            echo "Request Ids: ";
            print_r($_REQUEST["request_ids"]);
         }
?>

</body>
</html>
