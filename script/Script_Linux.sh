#!/bin/sh
    clear

    echo "Coucou :p | This is for get HWID eZ."
    echo ""
    echo ""
    echo ""
    hwid= sudo dmidecode | grep -i uuid 
    echo ""
    echo ""
    echo ""
    echo "Votre HWID étant le UUID: <Valeur> / inserez l'eux dans le site internet maintenant."

    