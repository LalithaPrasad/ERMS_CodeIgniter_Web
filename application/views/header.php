<?php
defined('BASEPATH') or exit('No direct script access allowed');
$css_file=base_url()."assets/css/erms.css";
$favicon=base_url()."assets/images/favicon.ico";
?>
<!DOCTYPE html>
<html lang='en_US'>
    <head>
        <title>Employee Record Management System</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="<?php echo $css_file; ?>" />
        <link rel="icon" href="<?php echo $favicon; ?>" />
    </head>
    <body>
        <div class="errors">
            <?php 
                echo validation_errors();
                if($this->session->flashdata('error')){
                    echo $this->session->flashdata('error');
                }
            ?>
        </div>
        <div class="messages">
            <?php
                if($this->session->flashdata('message')){
                    echo $this->session->flashdata('message');
                }
            ?>
        </div>
