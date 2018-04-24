<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'DIT');

set('ssh_type', 'native');

set('ssh_multiplexing', true);

set('default_stage', 'staging');

set('keep_releases',1);

// Project repository
set('repository', 'git@bitbucket.org:frameworkteams/dit.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true); 
set('writable_mode', 'chmod');
set('writable_chmod_mode', '0777');


// Shared files/dirs between deploys 
add('shared_files', []);
add('shared_dirs', ['storage','public/tmp','public/uploads']);

// Writable dirs by web server 
add('writable_dirs', ['storage', 'vendor','public/tmp','public/uploads']);

// Hosts

host('139.59.33.166')
    ->stage('staging')
    ->forwardAgent(false)
    ->user('root')
    ->set('branch','master')
    ->set('deploy_path', '/var/www/dit');

// Tasks


/**
 * Upload .env.production file as .env
 */
task('environment', function () {
  upload('.env.{{stage}}', '{{release_path}}/.env');
})->desc('Environment setup');

task('generatekey', function() {
  run('php {{release_path}}/artisan key:generate');
})->desc('Artisan migrations');

task("seed", function(){
	run('php {{release_path}}/artisan db:seed');
});

task('build', function () {
    run('cd {{release_path}} && build');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

before('deploy:vendors', "environment");

// Migrate database before symlink new release.

// before('deploy:symlink', 'artisan:migrate');

// before('deploy:symlink', 'seed');

	

