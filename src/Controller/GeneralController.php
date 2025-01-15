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
        $leaves = $this->getLeaves();
        $this->set(compact('leaves'));
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

    public function getLeaves()
    {
        $leaves = $this->fetchTable('leaves');
        $query = $leaves->find();
        return $this->paginate($query);
    }

    static function dateDiffInDays($date1, $date2) {

        // Calculating the difference in timestamps
        $diff = strtotime($date2) - strtotime($date1);

        // 1 day = 24 hours
        // 24 * 60 * 60 = 86400 seconds
        return abs(round($diff / 86400));
    }
}
