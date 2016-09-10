<?php

namespace Installer\Helpers;

use Exception;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Doctrine\DBAL\Driver\PDOConnection;
class DatabaseManager
{

    /**
     * Migrate and seed the database.
     *
     * @return array
     */
    public function migrateAndSeed()
    {
        return $this->migrate();
    }

    public function newPDO() {
            $dbconnection = env('DB_CONNECTION');
            $dbhost = env('DB_HOST');
            $dbport = env('DB_PORT');
            $dbusername= env('DB_USERNAME');
            $dbpassword = env('DB_PASSWORD');

            $dsn = $dbconnection.':host='.$dbhost.';port='.$dbport;

            try {
                return new PDOConnection($dsn, $dbusername, $dbpassword, null);
            }
            catch (Exception $e){
                return $this->response($e->getMessage());
            }
    }
    /**
     * Run the migration and call the seeder.
     *
     * @return array
     */
    private function migrate()
    {
        try{
            $dbname = env('DB_DATABASE');
            $pdo = $this->newPDO();
            $pdo->query("CREATE DATABASE IF NOT EXISTS $dbname");

            Artisan::call('migrate');
        }
        catch(Exception $e){
            return $this->response($e->getMessage());
        }

        return $this->seed();
    }

    /**
     * Seed the database.
     *
     * @return array
     */
    private function seed()
    {
        try{
            Artisan::call('db:seed');
        }
        catch(Exception $e){
            return $this->response($e->getMessage());
        }

        return $this->response(trans('messages.final.finished'), 'success');
    }

    /**
     * Return a formatted error messages.
     *
     * @param $message
     * @param string $status
     * @return array
     */
    private function response($message, $status = 'danger')
    {
        return array(
            'status' => $status,
            'message' => utf8_encode($message)
        );
    }
}