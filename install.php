<?php

$redir = ' 1>&2';
$fixer = $baseDir = __DIR__.'/php-cs-fixer.pre-commit.php';
$git = getcwd().'/.git/hooks';
$precommit = $git.'/pre-commit';

if (!file_exists($git)) {
    passthru('echo Git is not initialized'.$redir);
    die;
}

if (file_exists($precommit)) {
    // pre commit already in place, skipping
    die;
}

passthru('echo '.$redir);
passthru('echo Installing PSR-Police pre-commit hook'.$redir);
passthru('echo '.$redir);
passthru('ln -s '.escapeshellarg($fixer).' '.escapeshellarg($precommit).$redir);
