@echo off
setlocal
set PHP_PATH=%~dp0..\php\php.exe
if not exist "%PHP_PATH%" set PHP_PATH=php
"%PHP_PATH%" "%~dp0phpunit-11.5.43.phar" %*
endlocal