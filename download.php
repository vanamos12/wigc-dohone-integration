<?php
    if (isset($_REQUEST["file"])){
        // Get parameters
        $file = $_REQUEST["file"];
        $filepath = "admin/" . urldecode($file);

        // Process download
        if (file_exists($filepath)){
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment;filename="'.basename($filepath).'"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: '.filesize($filepath));
            flush();
            readfile($filepath);
            exit;
        }
    }
    
