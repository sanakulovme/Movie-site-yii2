<?php

use yii\db\Migration;

/**
 * Class m240330_105535_init_rbac
 */
class m240330_105535_init_rbac extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $auth = Yii::$app->authManager;

        // add "createCustomer" permission
        $createCustomer = $auth->createPermission('createCustomer');
        $createCustomer->description = 'Create a Customer';
        $auth->add($createCustomer);

        // add "UpdateCustomer" permission
        $updateCustomer = $auth->createPermission('UpdateCustomer');
        $updateCustomer->description = 'Update a Customer';
        $auth->add($updateCustomer);

        // add "DeleteCustomer" permission
        $deleteCustomer = $auth->createPermission('DeleteCustomer');
        $deleteCustomer->description = 'Delete a Customer';
        $auth->add($deleteCustomer);

        // add "ListCustomer" permission
        $listCustomer = $auth->createPermission('ListCustomer');
        $listCustomer->description = 'List a Customer';
        $auth->add($listCustomer);

        // add "ViewCustomer" permission
        $viewCustomer = $auth->createPermission('ViewCustomer');
        $viewCustomer->description = 'View a Customer';
        $auth->add($viewCustomer);

        // add "moderator" role and give this role the "createPost" permission
        $moderator = $auth->createRole('moderator');
        $auth->add($moderator);
        $auth->addChild($moderator, $viewCustomer);
        $auth->addChild($moderator, $listCustomer);


          // add "admin" role and give this role the "createPost" permission
        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->addChild($admin, $viewCustomer);
        $auth->addChild($admin, $listCustomer);
        $auth->addChild($admin, $updateCustomer);
        $auth->addChild($admin, $deleteCustomer);
        $auth->addChild($admin, $createCustomer);


        // Assign roles to users. 1 and 2 are IDs returned by IdentityInterface::getId()
        // usually implemented in your User model.
        $auth->assign($admin, 1);
        $auth->assign($moderator, 4);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $auth = Yii::$app->authManager;

        $auth->removeAll();
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240330_105535_init_rbac cannot be reverted.\n";

        return false;
    }
    */
}
