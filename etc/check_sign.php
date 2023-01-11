<?php
    session_start();
    if(isset($_SESSION['userid'])){
        $user_id = $_SESSION['userid'];
        $user_idx = $_SESSION['useridx'];
        $user_lvl = $_SESSION['userlvl'];
        // echo json_encode(array("userid" => $_SESSION['userid'], "user_idx" => $_SESSION['useridx']));
    }else{
        $user_id = "guest";
        $user_idx = -1;
        // echo json_encode(array("userid" => "guest"));
    }

    if(isset($_SESSION['cart'])){
        $cart_count = count($_SESSION['cart']); // 세션으로 저장된 카트 개수
    } else {
        $cart_count = 0;
    }

    echo json_encode(array("userid" => $user_id, "user_idx" => $user_idx, "cart_count" => $cart_count, "user_lvl" => $user_lvl));
?>