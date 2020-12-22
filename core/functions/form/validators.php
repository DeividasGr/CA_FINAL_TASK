<?php

/**
 * Check if field is not empty
 *
 * @param string $field_value
 * @param array $field
 * @return bool
 */
function validate_field_not_empty(string $field_value, array &$field): bool
{
    if ($field_value == '') {
        $field['error'] = 'Field must be filled';
        return false;
    }

    return true;
}


/**
 * Check if input is numeric
 *
 * @param string $field_value
 * @param array $field
 * @return bool
 */
function validate_numeric(string $field_value, array &$field): bool
{
    if (!is_numeric($field_value) && strlen($field_value) > 0) {
        $field['error'] = 'Field input must be numeric';
        return false;
    };
    return true;
}


/**
 * Check if provided email is in correct format
 *
 * @param string $field_value
 * @param array $field
 * @return bool
 */
function validate_email(string $field_value, array &$field): bool
{
    if (!preg_match('/[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}/', $field_value)) {
        $field['error'] = 'There is something wrong with your email format';

        return false;
    }

    return true;
}


function validate_no_symbols_numbers(string $field_value, array &$field)
{
    if (!preg_match('/^[_A-z]*((-|\s)*[_A-z])*$/', $field_value)) {
        $field['error'] = 'Your first or last name cannot contain numbers or symbols';
        return false;
    }
    return true;

}

function validate_name_length(string $field_value, array &$field)
{
    if (strlen($field_value) > 40) {
        $field['error'] = 'Too many symbols - use up to 40';

        return false;
    }

    return true;

}

function validate_textarea_length(string $field_value, array &$field)
{
    if (strlen($field_value) > 500) {
        $field['error'] = 'Too many symbols - use up to 500';

        return false;
    }

    return true;

}
