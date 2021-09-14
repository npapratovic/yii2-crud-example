<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * Post is the model behind the post crud form.
 *
 *
 */
class Post extends Model
{
    public $post_title;
    public $post_body;
    public $post_excerpt;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // post_title, post_body, post_excerpt
            [['post_title', 'post_body', 'post_excerpt'], 'required'],
        ];
    }

}
