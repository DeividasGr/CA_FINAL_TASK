<?php

namespace App\Views\Forms\Common\Auth;

use Core\Views\Form;

class RegisterForm extends Form
{
    public function __construct()
    {
        parent::__construct([
                'fields' => [
                    'first_name' => [
                        'label' => 'First Name',
                        'type' => 'text',
                        'validators' => [
                            'validate_field_not_empty',
                            'validate_no_symbols_numbers',
                            'validate_name_length'
                        ],
                        'extra' => [
                            'attr' => [
                                'placeholder' => 'Enter first name',
                                'class' => 'field-input'
                            ]
                        ]
                    ],
                    'last_name' => [
                        'label' => 'Last Name',
                        'type' => 'text',
                        'validators' => [
                            'validate_field_not_empty',
                            'validate_no_symbols_numbers',
                            'validate_name_length'
                        ],
                        'extra' => [
                            'attr' => [
                                'placeholder' => 'Enter last name',
                                'class' => 'field-input'
                            ]
                        ]
                    ],
                    'email' => [
                        'label' => 'Email',
                        'type' => 'email',
                        'validators' => [
                            'validate_field_not_empty',
                            'validate_email',
                            'validate_user_unique',
                        ],
                        'extra' => [
                            'attr' => [
                                'placeholder' => 'Enter email',
                                'class' => 'field-input'
                            ]
                        ]
                    ],
                    'password' => [
                        'label' => 'Password',
                        'type' => 'password',
                        'validators' => [
                            'validate_field_not_empty',
                        ],
                        'extra' => [
                            'attr' => [
                                'placeholder' => 'Enter password',
                                'class' => 'field-input'
                            ]
                        ]
                    ],
                    'phone_number' => [
                        'label' => 'Phone Number',
                        'type' => 'text',
                        'validators' => [
                            'validate_numeric',
                        ],
                        'extra' => [
                            'attr' => [
                                'placeholder' => 'Phone Number',
                                'class' => 'field-input'
                            ]
                        ]
                    ],
                    'address' => [
                        'label' => 'Home Address',
                        'type' => 'text',
                        'extra' => [
                            'attr' => [
                                'placeholder' => 'Your address',
                                'class' => 'field-input'
                            ]
                        ]
                    ],
                ],
                'buttons' => [
                    'register' => [
                        'title' => 'Register',
                    ]
                ]
            ]
        );

    }
}