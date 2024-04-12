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

function validate_form()
{
    $errors = [];

    foreach ($_POST as $field => $value) {
        if (empty($value)) {
            $errors[$field] = convert_case($field) . " is required";
        }
    }

    return $errors;
}

function convert_case($text)
{
    $words = explode('_', $text);

    $capitalizedWords = array_map(function ($word) {
        return ucfirst($word);
    }, $words);

    $result = implode(' ', $capitalizedWords);

    return $result;
}
