<?php

namespace common\models;

//use Yii;
use yii\base\Model;
use common\models\User;

class registerForm extends Model {

    public $username;
    public $email;
    public $password;
    public $repassword;
    public $agree = false;

    public function rules() {
        return [
            [
            ['username', 'password', 'email','repassword','agree'], 'required'],
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'User already registered'],
            ['username', 'string', 'min' => 2, 'max' => 10],
            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'email'],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Email alredy used'],
            [['password'], 'compare', 'compareAttribute'=> 'repassword'],
            ['password', 'string', 'min' => 6, 'max' => 32],
            ['agree', 'boolean']];
    }
    
    public function register() {
        if ($this->validate()) {
            $user = new User;
            $user->username =  $this->username;
            $user->email = $this->email;
            $user->setPassword($this->password);
            $user->generateAuthKey();
            if ($user->save()) {
                return $user;
            }
            
        }else{
            return false;
        }
    }

}
