<?php

$term_list = get_the_term_list(get_the_ID(), 'região', 'Região: ', ', ');

if (!empty($term_list)) {
    echo '<p>' . $term_list . '</p>';
}
?>
