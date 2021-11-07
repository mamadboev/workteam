<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $full_name
 */
class User extends \yii\db\ActiveRecord implements IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    public $current_password;
    public $new_password;
    public $confirm_password;

    public $authKey;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'full_name'], 'required'],
            [['username'],'unique'],
            [['new_password'],'safe'],
            [['username', 'password', 'full_name'], 'string', 'max' => 255],
            [['username', 'new_password'], 'string', 'min' => 6],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'User nomi',
            'password' => 'Parol',
            'new_password' => 'Parol',
            'full_name' => 'To‘liq nom',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosts()
    {
        return $this->hasMany(Post::className(), ['user_id' => 'id']);
    }
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        return $this->authKey;
    }

    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }

    public function validatePassword($password)
    {
        if (Yii::$app->security->validatePassword($password, $this->password)) {
            return true;
        }else{
            return false;
        }
    }
}
