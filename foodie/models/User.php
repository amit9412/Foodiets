<?php

namespace app\models;
use Yii;
use yii\base\NotSupportedException;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use yii\rbac\DbManager;

$addressStatus = 1;

/**
 * This is the model class for table "ai_user".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $mobile
 * @property string $password_hash
 * @property string|null $reset_token
 * @property string|null $updated_at
 * @property string $created_at
 * @property int $status
 *
 */
class User extends ActiveRecord implements IdentityInterface
{
    public $password;
    public $c_password;

    public $old_password;
    public $new_password;
    public $confirm_new_password;
    
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            
            [['name', 'mobile', 'email', 'password_hash', 'created_at', 'c_password', 'password'], 'required', 'on' => 'userCreate'], 

            [['name', 'mobile', 'email', 'password_hash', 'created_at', 'password'], 'required', 'on' => 'adminCreate'],  
            [['name', 'mobile', 'email'], 'required', 'on' => 'adminUpdate'],

            [['old_password', 'new_password', 'confirm_new_password'], 'required', 'on' => 'updatePassword'],


            [['password'], 'string', 'min'=>6, 'max'=>64],
            [['c_password'], 'string', 'min'=>6, 'max'=>64],

            [['old_password', 'new_password', 'confirm_new_password'], 'string', 'min'=>6, 'max'=>64],

            // ['old_password', 'match', 'pattern' => '/^.*(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/', 'message' => "Old Password must contain at least one lower and upper case character and a digit."],
            // ['new_password', 'match', 'pattern' => '/^.*(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/', 'message' => "New Password must contain at least one lower and upper case character and a digit."],
            // ['confirm_new_password', 'match', 'pattern' => '/^.*(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/', 'message' => "Confirm New Password must contain at least one lower and upper case character and a digit."],
            // ['confirm_new_password', 'compare', 'compareAttribute'=>'new_password'],

            // ['password', 'match', 'pattern' => '/^.*(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/', 'message' => "Password must contain at least one lower and upper case character and a digit."],
            // ['c_password', 'match', 'pattern' => '/^.*(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/', 'message' => "Confirm Password must contain at least one lower and upper case character and a digit."],
            ['c_password', 'compare', 'compareAttribute'=>'password'],
            ['name', 'string', 'max' => 60],
            [['password_hash'], 'string'],
            [['updated_at', 'created_at', 'is_deleted'], 'safe'],
            [['status'], 'integer'],
            [['name', 'email'], 'string', 'max' => 100],
            [['mobile'], 'number', 'min' => 10],
            [['auth_key', 'password_reset_token'], 'string'],
        ];
    }

    public function checkPassword($passData)
    {
        if(preg_match("/^\w*(?=\w*\d)(?=\w*[A-Z])(?=\w*[^0-9A-Za-z])(?=\w*[a-z])\w*$/", $passData))
            return true;
        else
            return false;
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'email' => Yii::t('app', 'Email'),
            'mobile' => Yii::t('app', 'Mobile'),
            'password_hash' => Yii::t('app', 'Password Hash'),
            'c_password' => Yii::t('app', 'Confirm Password'),
            'auth_key' => 'Auth Key',
            'password_reset_token' => 'Password Reset Token',
            'updated_at' => Yii::t('app', 'Updated At'),
            'created_at' => Yii::t('app', 'Created At'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

    public static function findIdentity($id)
    {
        return self::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type=null)
    {
        return self::findOne(['accessToken' => $token]);
    }

    /**
     * Finds user by email
     *
     * @param string $email
     * @return static|null
     */
    public static function findByEmail($email)
    {
        return self::findOne(['email' => $email]);
    }

    /**
     * Finds user by mobile
     *
     * @param string $mobile
     * @return static|null
     */
    public static function findByMobile($mobile)
    {
        return self::findOne(['mobile' => $mobile]);
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
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->auth_key === $authKey;
    }

    /**
     * {@inheritdoc}
     */
    public function getPasswordResetToken()
    {
        return $this->password_reset_token;
    }

    /**
     * {@inheritdoc}
     */
    public function setPassword($password) {

		$this->password_hash = Yii::$app->security->generatePasswordHash ( $password );

	}

    public function getPasswordHash($password) {
		return Yii::$app->security->generatePasswordHash ( $password );
	}

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return password_verify($password, $this->password_hash);
    }

    public function saveUser($model){

  
        $model->setPassword($model->password);
        $model->generateAuthKey();
                
        $model->created_at = date('Y-m-d h:i:s');
        // $model->user_role = 'user';
        if(!empty($model->password)){

            $model->password_hash = password_hash($model->password, PASSWORD_DEFAULT);

        }

        $auth = new DbManager;
        $auth->init();
        $role = $auth->getRole('customer');
        $model->user_role = $role->name;
        $model->status = 1;
    
        if($model->save()){
            
            $auth->assign($role, $model->getId());

            return $model;
        }else{
            return false;
        }
        
    }

    public function updateUser($model){

           
        $model->updated_at = date('Y-m-d h:i:s');
        
        if(!empty($model->password)){
            $model->setPassword($model->password);
            //$model->password_hash = password_hash($model->password, PASSWORD_DEFAULT);

        }
    
        if($model->save()){
            return $model;
        }else{
            return false;
        }
        
    }
}
