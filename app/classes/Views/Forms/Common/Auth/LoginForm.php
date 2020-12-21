<?php

namespace App\Views\Forms\Common\Auth;

use Core\Views\Form;

class LoginForm extends Form
{
public function __construct()
{
    parent::__construct([
        'fields' => [
            'email' => [
                'label' => 'Email',
                'type' => 'email',
                'validators' => [
                    'validate_field_not_empty',
                    'validate_email',
                    'validate_user_doesnt_exists'
                ],
                'extra' => [
                    'attr' => [
                        'placeholder' => 'Enter your email',
                        'class' => 'field-input'
                    ],
                ],
            ],
            'password' => [
                'label' => 'Password',
                'type' => 'password',
                'validators' => [
                    'validate_field_not_empty',
                    'validate_correct_password'
                ],
                'extra' => [
                    'attr' => [
                        'placeholder' => 'Enter your password',
                        'class' => 'field-input'
                    ],
                ],
            ],
        ],
        'buttons' => [
            'login' => [
                'title' => 'Login',
            ],
        ],
        'validators' => [
            'validate_login' => [
                'email',
                'password',
            ]
        ]
    ]);
}
}