<?
if (empty($_GET)) {

    $query = "SELECT * FROM banner WHERE image IS NOT NULL and  active = 1";

    $result = mysqli_query($link,$query) or die (mysqli_error());
    for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

    if ($data) {
        $resultArray['NAME_BLOCK'] = 'preview';
        foreach ($data as $key => $value) {
            $resultArray['ITEMS'][$key]['path'] =  $data[$key]['image'];
            $resultArray['ITEMS'][$key]['title'] = $data[$key]['title'];
            $resultArray['ITEMS'][$key]['prewiew_text'] = $data[$key]['text'];
            $resultArray['ITEMS'][$key]['href'] = $data[$key]['href'];
        }
        require_once('/blocks/elems/preview_of_post/layouts/layout.php');
    } else {
        require_once('/blocks/elems/preview_of_post/layouts/not_found.php');
    }

}

