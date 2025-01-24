@echo off
:menu
echo ===================================
echo          MENU DE OPCIONES         
echo ===================================
echo 1. Apagar el equipo
echo 2. Reiniciar el equipo
echo 3. Cancelar apagado programado
echo 4. Salir
echo ===================================
set /p opcion="Selecciona una opcion: "

if "%opcion%"=="1" goto apagar
if "%opcion%"=="2" goto reiniciar
if "%opcion%"=="3" goto cancelar
if "%opcion%"=="4" exit

:apagar
set /p tiempo="Ingresa el tiempo en segundos para apagar (0 para inmediato): "
shutdown /s /t %tiempo%
echo El equipo se apagará en %tiempo% segundos.
pause
goto menu

:reiniciar
set /p tiempo="Ingresa el tiempo en segundos para reiniciar (0 para inmediato): "
shutdown /r /t %tiempo%
echo El equipo se reiniciará en %tiempo% segundos.
pause
goto menu

:cancelar
shutdown /a
echo Apagado o reinicio programado cancelado.
pause
goto menu
