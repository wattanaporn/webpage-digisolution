<?php

namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'DigisoWeb');

// Project repository
//set('repository', 'git@github.com:chaiyr/cmu-smartgate.git'); //
set('repository', 'https://github.com/wattanaporn/webpage-digisolution.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', false);
set('ssh_multiplexing', false);

// Shared files/dirs between deploys
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server
add('writable_dirs', []);
set('allow_anonymous_stats', false);
set('default_timeout', 3000);


// Hosts

host('prod')
    ->hostName('103.82.248.102')
    ->user('digisolut')
    ->set('branch', 'develop')
//    ->identityFile('~/.ssh/play2pay.pem') //key server
    ->set('deploy_path', '/home/digisolut');

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.
before('deploy:symlink', 'artisan:migrate');

//desc('Execute artisan config:clear');
//task('artisan:config:clear', function () {
//    run('{{bin/php}} {{release_path}}/artisan config:clear');
//});


after("deploy", "reloadfpm");
task('reloadfpm', function () {
    run('sudo systemctl reload php73-php-fpm');
})->onHosts('prod');

after("deploy", "reloadsupervisor");
task('reloadsupervisor', function () {
    run('sudo supervisorctl reload');
});
