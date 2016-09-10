<?php

namespace Installer\Helpers;

use Installer\Helpers\DatabaseManager;
use Doctrine\DBAL\Driver\PDOConnection;

class RequirementsChecker
{

    /**
     * Check for the server requirements.
     *
     * @param array $requirements
     * @return array
     */
    public function check(array $requirements, DatabaseManager $dataBaseHelper)
    {
        $results = [];

        foreach($requirements as $requirement)
        {
            $results['requirements'][$requirement]['result'] = true;
            if(!extension_loaded($requirement))
            {
                $results['requirements'][$requirement]['result'] = false;
                $results['requirements'][$requirement]['error'] = "Extension not loaded!";
                $results['errors'] = true;
            }

        }

        // Testing Mysql connection (Is XAMPP with mysql installed or is it turned on...)
        $results['requirements']['Mysql']['result'] = true;

        $testConnection = $dataBaseHelper->newPDO();
        if(!$testConnection instanceof PDOConnection) {

            $results['requirements']['Mysql']['result'] = false;
            $results['requirements']['Mysql']['error'] = is_array($testConnection) && isset($testConnection['message']) ? $testConnection['message'] : '';
            $results['errors'] = true;
        }
        return $results;
    }
}