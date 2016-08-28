<?php

Route::group(['prefix' => 'install', 'as' => 'EJCInstaller::', 'namespace' => 'Installer\Controllers'], function()
{
    Route::group(['middleware' => 'canInstall'], function()
    {
        Route::get('/', [
            'as' => 'welcome',
            'uses' => 'WelcomeController@welcome'
        ]);

        Route::get('environment', [
            'as' => 'environment',
            'uses' => 'EnvironmentController@environment'
        ]);

        Route::post('environment/save', [
            'as' => 'environmentSave',
            'uses' => 'EnvironmentController@save'
        ]);

        Route::get('requirements', [
            'as' => 'requirements',
            'uses' => 'RequirementsController@requirements'
        ]);
        
        Route::get('permissions', [
            'as' => 'permissions',
            'uses' => 'PermissionsController@permissions'
        ]);

        Route::get('company', [
            'as' => 'company',
            'uses' => 'CompanySetupController@company'
        ]);

        Route::post('company/save', [
            'as' => 'companySave',
            'uses' => 'CompanySetupController@save'
        ]);

        Route::get('database', [
            'as' => 'database',
            'uses' => 'DatabaseController@database'
        ]);

        Route::get('final', [
            'as' => 'final',
            'uses' => 'FinalController@finish'
        ]);
    });
});