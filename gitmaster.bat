
@echo off
echo type "m = MASTER" or "w = WIP"

:P
set ACTION=
set /P ACTION=RAMA: %=%

if "%ACTION%"=="m" (

@echo off
echo type "s = Subir a github" or "b = bajar de github"
cd "C:\Users\asaiz\Documents\GitHub\bolsadetrabajo"

set GIT_PATH="C:\Program Files\Git\bin\git.exe"
set BRANCH = "master"

:P
set ACTION=
set /P ACTION=Action: %=%
if "%ACTION%"=="s" (
git checkout master
%GIT_PATH% init
  %GIT_PATH% add .
	%GIT_PATH% commit -am "Auto-committed on %date%"
	%GIT_PATH% push origin %BRANCH%
)
if "%ACTION%"=="b" (
git checkout master
%GIT_PATH% init
	%GIT_PATH% pull %BRANCH%
)
if "%ACTION%"=="exit" exit /b
goto P
)

if "%ACTION%"=="w" (

@echo off
echo type "s = Subir a github" or "b = bajar de github"
cd "C:\Users\asaiz\Documents\GitHub\bolsadetrabajo"

set GIT_PATH="C:\Program Files\Git\bin\git.exe"
set BRANCH = "WIP"

:P
set ACTION=
set /P ACTION=Action: %=%
if "%ACTION%"=="s" (
git checkout WIP
%GIT_PATH% init
  %GIT_PATH% add .
	%GIT_PATH% commit -am "Auto-committed on %date%"
	%GIT_PATH% push origin %BRANCH%
)
if "%ACTION%"=="b" (
git checkout WIP
%GIT_PATH% init
	%GIT_PATH% pull %BRANCH%
)
if "%ACTION%"=="exit" exit /b
goto P
)

if "%ACTION%"=="exit" exit /b
goto P