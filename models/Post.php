<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property int $category_id
 * @property string $title
 * @property string $excerpt
 * @property string $content
 * @property string|null $img
 * @property string $created_at
 * @property string|null $keywords
 * @property string|null $description
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'title', 'excerpt', 'content', 'created_at'], 'required'],
            [['category_id'], 'integer'],
            [['content'], 'string'],
            [['created_at'], 'safe'],
            [['title', 'excerpt', 'img', 'keywords', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'title' => 'Title',
            'excerpt' => 'Excerpt',
            'content' => 'Content',
            'img' => 'Img',
            'created_at' => 'Created At',
            'keywords' => 'Keywords',
            'description' => 'Description',
        ];
    }
	
    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }
}
