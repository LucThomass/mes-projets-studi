@echo off

:: Récupère le chemin du dossier où se trouve ce script
set SCRIPT_DIR=%~dp0

:: Se déplace dans ce dossier
cd /d %SCRIPT_DIR%

:: Lance le navigateur par défaut à l'adresse du serveur
start http://localhost:3500

:: Lance le serveur PHP sur le port 3500, accessible en local et sur le réseau
php -S 0.0.0.0:3500

pause
:: Fin du script