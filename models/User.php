<?php

namespace app\models;

use yii\db\ActiveRecord;

class User extends ActiveRecord implements \yii\web\IdentityInterface
{

    public static function tableName(){
        return 'users';
    }

    public function getComments(){
        return $this->hasMany(Comment::class, ['user_id' => 'id']);
    }

    /**
     * код для генерации ключа
     * аутентификации для каждого
     * пользователя и хранения его
     * в таблице user
     * @throws \yii\base\Exception
     */
    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if ($this->isNewRecord) {
                $this->auth_key = \Yii::$app->security->generateRandomString();
            }
            return true;
        }
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['access_token' => $token]);
    }

    /**
     * Поиск по логину
     *
     * @param string $username
     * @return array|\yii\db\ActiveQuery|ActiveRecord
     */
    public static function findByUsername($username)
    {
        return User::find()->where(['name' => $username])->one();
    }

    /**
     * Поиск по логину/почте
     *
     * @param string $username
     * @return array|\yii\db\ActiveQuery|ActiveRecord
     */
    public static function findByNameOrEmail($string)
    {
        return User::find()->where(['name' => $string])->orWhere(['email' => $string])->one();
    }


    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->auth_key === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === $password;
    }
}
