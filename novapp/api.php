<?php
    $localhost = "localhost";
    $user = "root";
    $pass = "";

    $db = "test_api";
    $conn = mysqli_connect($localhost, $user, $pass, $db);

    if(!$conn){
        die("Server Error".mysqli_connect());
        exit();
    }
    
    $result = [];
    $pageId = [];
    $select_Parent = "SELECT * FROM cms_pages";
    $query_Parent = mysqli_query($conn, $select_Parent);
    while($run_Parent = mysqli_fetch_array($query_Parent)){
        $ParentPageId = $run_Parent['page_ID']; 

        // Select Page Text
        $select_child = "SELECT * FROM cms_pages WHERE flag=$ParentPageId";
        $query_child = mysqli_query($conn, $select_child);
        echo(mysqli_num_rows($query_child)."<br>");
        while ($run_child = mysqli_fetch_array($query_child)){

            echo $childPageId = $run_child['page_ID'];

            $sel_childText = "select * from cms_text  where page_ID=$childPageId";
            $query_childText = mysqli_query($conn, $sel_childText);
            while($run_childText = mysqli_fetch_array($query_childText)){
                
                $result[$ParentPageId][$run_childText['page_ID']]["parentID"] = $ParentPageId;
                // $result[$run_childText['page_ID']]["ParentId"] = $ParentPageId;
                // ["text_type" => $run_childText['text_type'], "text_" => $run_childText['text']]);
                // array_push();
            } 
        //    array_push($pageId, $ParentPageId);
        }
    }
    
// print_r($result);
// echo json_encode($result);
?>