<?
if (empty($_GET)) {

    $query = "SELECT * FROM post WHERE prewiew_image IS NOT NULL and  active = 1";

    $result = mysqli_query($link,$query) or die (mysqli_error());
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

    $resultPreview = [];
    if($data){
        foreach ($data as $key => $value){
            $resultPreview[$key]['path'] = 'url('.$data[$key]['prewiew_image'].')';
            $resultPreview[$key]['title'] = $data[$key]['title'];
            $resultPreview[$key]['prewiew_text'] = $data[$key]['prewiew_text'];
        }
        require_once('/elems/elems/preview_of_post/layouts/layout.php');
    }else{
        require_once('/elems/elems/preview_of_post/layouts/not_found.php');
    }

}

