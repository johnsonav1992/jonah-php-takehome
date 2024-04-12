<?php

function sanitize_input($input, $is_email = false)
{
    $sanitized = filter_input(
        INPUT_POST,
        $input,
        $is_email
            ? FILTER_SANITIZE_EMAIL
            : FILTER_SANITIZE_FULL_SPECIAL_CHARS
    );

    return $sanitized;
}
