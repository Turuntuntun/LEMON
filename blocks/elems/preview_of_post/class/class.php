<?
if (empty($_GET)) {

    $query = "SELECT * FROM banner WHERE image IS NOT NULL and  active = 1";

    $result = mysqli_query($link,$query) or die (mysqli_error());
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

    $resultSlider = [];
    if ($data) {
        $resultPreview['NAME_BLOCK'] = 'preview';
        foreach ($data as $key => $value) {
            $resultPreview['ITEMS'][$key]['path'] =  $data[$key]['image'];
            $resultPreview['ITEMS'][$key]['title'] = $data[$key]['title'];
            $resultPreview['ITEMS'][$key]['prewiew_text'] = $data[$key]['text'];
            $resultPreview['ITEMS'][$key]['href'] = $data[$key]['href'];
        }
        require_once('/elems/elems/preview_of_post/layouts/layout.php');
    } else {
        require_once('/elems/elems/preview_of_post/layouts/not_found.php');
    }
    $resultSlider = [];
}

