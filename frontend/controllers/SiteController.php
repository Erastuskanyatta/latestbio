<?php
namespace frontend\controllers;

use frontend\models\ResendVerificationEmailForm;
use frontend\models\VerifyEmailForm;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use frontend\models\User;

use frontend\views\site\contact;
/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $this->layout='main';
        return $this->render('index');
    }


    public function actionPortal()
    {
        $this->layout='mainportal';
        return $this->render('portalview');
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            $user= User::find()->where(['username'=>$model->username])->one(); 
            if ($user->superadmin ==1) {
                return $this->redirect(['/site/portal']);
            }
                else{
                    return $this ->goHome();
                }
            }
        
         else {
            $model->password = '';
         
            $this->layout='main';
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
         $contact= new \frontend\models\Contact();

        
        if ($model->load(Yii::$app->request->post())) {
            
            //var_dump(Yii::$app->request->post()); exit;
            $contact->name = $model['name'];
            $contact->email = $model['email'];
           // $model->phone=$model['phone'];
            $contact->subject = $model['subject'];
            $contact->body = $model['body'];
            $contact->save(true);
             if ($contact->save(false)) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting Erastus. He will respond to you as soon as possible.');
            } else {
                return $this->refresh();
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

           
            return $this->refresh();
          
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }
    
    public function beforeAction($action) 
{ 
    $this->enableCsrfValidation = false; 
    return parent::beforeAction($action); 
}

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

      /**
     * Displays mail page.
     *
     * @return mixed
     */
    public function actionMailbox()
    {
       $this->layout='mainportal';
        return $this->render('mailbox');
    }


      /**
     * Displays admincontact page.
     *
     * @return mixed
     */
    public function actionAdmincontact()
    {
       $this->layout='mainportal';
        return $this->render('admincontact');
    }

    /**
     * Displays followers page.
     *
     * @return mixed
     */
    public function actionFollowers()
    {
       $this->layout='mainportal';
        return $this->render('followers');
    }

    /**
     * Dispaly admin home page
     * 
     * @return mixed
     */
    public function actionAdminhome()
     {
         $this->layout='mainportal';
         return $this->render('adminhome');

    }

    /**
     * Dispaly myprofile page
     * 
     * @return mixed
     */
    public function actionMyprofile()
     {
         $this->layout='main';
         return $this->render('myprofile');

    }

    

    /**
     * Dispaly Twish profile page
     * 
     * @return mixed
     */
    public function actionTwishprofile()
     {
         $this->layout='mainportal';
         return $this->render('twishprofile');

    }

    /**
     * Displays eras profile.
     *
     * @return mixed
     */
    public function actionErasprofile()
    {
        $this->layout='mainportal';
        return $this->render('erasprofile');
    }

    /**
     * Displays mwangi profile.
     *
     * @return mixed
     */
    public function actionJeffmwangiprofile()
    {
        $this->layout='mainportal';
        return $this->render('jeffmwangiprofile');
    }

    /**
     * Displays mungai profile.
     *
     * @return mixed
     */
    public function actionJeffmugaiprofile()
    {
        $this->layout='mainportal';
        return $this->render('jeffmugaiprofile');
    }

    /**
     * Displays gachoki profile.
     *
     * @return mixed
     */
    public function actionGachokiprofile()
    {
        $this->layout='mainportal';
        return $this->render('gachokiprofile');
    }


     /**
     * Displays projects page.
     *
     * @return mixed
     */
    public function actionProjects()
    {
        return $this->render('projects');
    }

    /**
     * Displays coffee page.
     *
     * @return mixed
     */
    public function actionCoffee()
    {
        $this->layout='mainportal';
        return $this->render('coffee');
    }

    /**
     * Displays thanks page.
     *
     * @return mixed
     */
    public function actionThanksnote()
    {
        $this->layout='main';
        return $this->render('thanksnote');
    }


    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post()) && $model->signup()) {
            Yii::$app->session->setFlash('success', 'Thank you for registration. Please check your inbox for verification email.');
            return $this->redirect(['/myprofile/create']);
            // return $this->goHome();
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) 
        {
          // var_dump(Yii::$app->request->post()); 'exit';
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->redirect(['/site/resetPassword']);
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        //echo 'here'; exit;
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            var_dump(Yii::$app->request->post()); exit;
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }

    /**
     * Verify email address
     *
     * @param string $token
     * @throws BadRequestHttpException
     * @return yii\web\Response
     */
    public function actionVerifyEmail($token)
    {
        try {
            $model = new VerifyEmailForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        if ($user = $model->verifyEmail()) {
            if (Yii::$app->user->login($user)) {
                Yii::$app->session->setFlash('success', 'Your email has been confirmed!');
                return $this->goHome();
            }
        }

        Yii::$app->session->setFlash('error', 'Sorry, we are unable to verify your account with provided token.');
        return $this->goHome();
    }

    /**
     * Resend verification email
     *
     * @return mixed
     */
    public function actionResendVerificationEmail()
    {
        $model = new ResendVerificationEmailForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');
                return $this->goHome();
            }
            Yii::$app->session->setFlash('error', 'Sorry, we are unable to resend verification email for the provided email address.');
        }

        return $this->render('resendVerificationEmail', [
            'model' => $model
        ]);
    }
}
