$appName = Read-Host "digite o nome do aplicativo(Sem espa�o ou caracteres especiais):"
robocopy "$pwd/sdk/skeleton/"* "$pwd/sdk/$appName" /e