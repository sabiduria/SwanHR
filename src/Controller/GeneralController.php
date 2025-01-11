<?php

namespace App\Controller;

use Cake\Datasource\ConnectionManager;
use Cake\ORM\TableRegistry;

class GeneralController extends AppController
{
    /**
     * @return void
     */
    public function dashboard(): void
    {
        $this->viewBuilder()->setLayout('dashboard');
    }

    public static function getNameOf($id, $tableName): ?string
    {
        $table = TableRegistry::getTableLocator()->get($tableName)
            ->find()
            ->select(['name'])
            ->where(['id' => $id])
            ->first();

        return $table ? $table->name : null;
    }

    public static function getUserNameOf($id): ?string
    {
        $table = TableRegistry::getTableLocator()->get('Users');

        $user = $table->find()
            ->select([
                'name' => $table->query()->newExpr()->add([
                    'CONCAT(firstname, " ", secondname, " ", lastname)'
                ])
            ])
            ->where(['id' => $id])
            ->first();

        return $user ? $user->name : null;
    }
}
