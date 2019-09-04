<?php if (isset($errors) && !empty($errors)) {
    echo '<div style="color:red">';
    echo '<span>Error:</span>';
    echo '<ul>';
    foreach ($errors as $k => $v) {
        echo '<li>';
        echo $v;
        echo '</li>';
    }
    echo '</ul>';
    echo '</div>';
} ?>