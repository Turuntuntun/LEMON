<?
if (isset($_GET['post'])) {
    $id = intval($_GET['post']);
    $query = "SELECT * FROM post 
              LEFT JOIN prewiewImages ON post.images = prewiewImages.idprew 
              WHERE post.id = $id";

    $result = mysqli_query($link,$query) or die (mysqli_error());
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

    $resultPreview = [];
    if($data){
        foreach ($data as $value) {
            $resultPreview['path'][] = 'url('.$value['image'].')';
        }

        $resultPreview['title'] = $data[0]['title'];
        $resultPreview['prewiew_text'] = $data[0]['prewiew_text'];
        require_once('/elems/elems/preview_of_post/layouts/layout.php');
    }else{
        require_once('/elems/elems/preview_of_post/layouts/not_found.php');
    }

}

