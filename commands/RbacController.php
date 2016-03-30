<?php
namespace app\commands;
 
use Yii;
use yii\console\Controller;
use \app\rbac\UserGroupRule;
 
class RbacController extends Controller
{
    public function actionInit()
    {
        $authManager = \Yii::$app->authManager;
 
        
         // add "createPost" permission
        $create = $authManager->createPermission('create');
        $update = $authManager->createPermission('update');
        $view = $authManager->createPermission('view');
        $delete = $authManager->createPermission('delete');
        $authManager->add($create);
        $authManager->add($update);
        $authManager->add($view);
        $authManager->add($delete);

        // Create roles
        $admin = $authManager->createRole('admin');
        $authManager->add($admin);
        
        $authManager->addChild($admin, $create);
        $authManager->addChild($admin, $update);
        $authManager->addChild($admin, $view);
        $authManager->addChild($admin, $delete);

        $authManager->assign($admin, 102);

    }
}