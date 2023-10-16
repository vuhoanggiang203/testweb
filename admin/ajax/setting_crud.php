<?php

    require('../inc/db_config.php');

    require('../inc/essential.php');

    if(isset($_POST['get_general'])) 
    {
        $q = "SELECT * FROM `db_settings` WHERE `sr_no`=?";
        $values = [1];
        $res = select($q, $values, "i");
        $data = mysqli_fetch_assoc($res);
        $json_data = json_encode($data);
        echo $json_data;
    }

    if(isset($_POST['upd_general']))
    {
        $frm_data = filter($_POST);

        $q = "UPDATE `db_settings` SET `site_title`=?, `site_message`=? WHERE `sr_no`=?";
        $values = [$frm_data['site_title'],$frm_data['site_message'],1];
        $res = update($q,$values,'ssi');
        echo $res;
    }

    if(isset($_POST['get_contacts'])) 
    {
        $q = "SELECT * FROM `contact_details` WHERE `sr_no`=?";
        $values = [1];
        $res = select($q, $values, "i");
        $data = mysqli_fetch_assoc($res);
        $json_data = json_encode($data);
        echo $json_data;
    }

    if(isset($_POST['upd_contacts']))
    {
        $frm_data = filter($_POST);

        $q = "UPDATE `contact_details` SET `address`=?,`gmaps`=?,`pn1`=?,`pn2`=?,`meta`=?,`ins`=?,`github`=?,`linkedin`=?,`iframe`=? WHERE `sr_no`=?";
        $values = [$frm_data['address'],$frm_data['gmaps'],$frm_data['pn1'],$frm_data['pn2'],$frm_data['meta'],$frm_data['ins'],$frm_data['github'],$frm_data['linkedin'],$frm_data['iframe'],1];
        $res = update($q,$values,'sssssssssi');
        echo $res;
    }
?>