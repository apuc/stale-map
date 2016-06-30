<?php

namespace common\models\db;

use Yii;

/**
 * This is the model class for table "contact_page".
 *
 * @property integer $id
 * @property string $title
 * @property string $meta_description
 * @property string $meta_keywords
 * @property string $address
 * @property string $whats_app
 * @property string $email
 * @property string $link_vk
 * @property string $link_fb
 * @property string $link_inst
 */
class ContactPage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contact_page';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'meta_description', 'meta_keywords', 'address', 'whats_app', 'email', 'link_vk', 'link_fb', 'link_inst'], 'required'],
            [['title', 'meta_description', 'meta_keywords', 'address', 'whats_app', 'email', 'link_vk', 'link_fb', 'link_inst'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'meta_description' => 'Meta Description',
            'meta_keywords' => 'Meta Keywords',
            'address' => 'Address',
            'whats_app' => 'Whats App',
            'email' => 'Email',
            'link_vk' => 'Link Vk',
            'link_fb' => 'Link Fb',
            'link_inst' => 'Link Inst',
        ];
    }
}
