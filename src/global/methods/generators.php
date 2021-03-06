<?php
function btn($route, $title) {
    $html = "
    <div class=\"col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-4 col-md-offset-0 col-xl-3 col-xl-offset-0\">
        <a href=\"$route\" class=\"button full-width\"> $title </a>
    </div>
    ";
    echo $html;
}

function button($button_url = null, $button_text, $classList = null, $styles = null) {
    if (isset($button_url)) {
        $btn_html = "
        <a href=\"$button_url\" class=\"no-menu\">
            <button type=\"button\" class=\"services $classList\" style=\"$styles\">
                $button_text
            </button>
        </a>
        ";
    }

    return $btn_html;
}

function li($html_content) {
    if (isset($html_content)) {
        $li_html = "
        <li>
            $html_content
        </li>
        ";
    }

    return $li_html;
}

function div_c($div_content, $class = null) {
    if (isset($class)) {
        $div_html = "
        <div class='$class'>
            $div_content
        </div>
        ";
    }

    return $div_html;
}
