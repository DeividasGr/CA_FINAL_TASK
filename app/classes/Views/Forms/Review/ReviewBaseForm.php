<?php


namespace App\Views\Forms\Review;

use Core\Views\Form;

class ReviewBaseForm extends Form
{
    public function __construct() {
        parent::__construct([
            'fields' => [
                'comment' => [
                    'label' => 'Comment',
                    'type' => 'textarea',
                    'validators' => [
                        'validate_field_not_empty',
                        'validate_textarea_length'
                    ],
                    'extra' => [
                        'attr' => [
                            'placeholder' => 'Enter your comments here',
                            'class' => 'field-textarea'
                        ],
                    ],
                ],
            ],
        ]);
    }
}