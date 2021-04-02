$OSArcitecture = Get-WmiObject | Select-Object OSArchitecture -ErrorAction SilentlyContinue

if ($OSArcitecture -match "64") {
    $HWID = (Get-CimInstance -Class Win64_ComputerSystemProduct).UUID
    Write-Host -BackgroundColor Green -ForegroundColor Red ("$HWID est votre HWID inserez l'eux dans le site internet maintenant.")
} elseif ($OSArcitecture -match "32") {
    $HWID = (Get-CimInstance -Class Win32_ComputerSystemProduct).UUID
    Write-Host -BackgroundColor Green -ForegroundColor Red ("$HWID est votre HWID inserez l'eux dans le site internet maintenant.")
} else {
    Clear-Host
    Write-Host  -BackgroundColor Green -ForegroundColor Red ("Votre système d'exploiration n'est pas compatible.")
}
