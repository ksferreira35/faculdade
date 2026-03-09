#!/bin/bash

if [ -f .env ]; then
    export $(grep -v '^#' .env | xargs)
else
    echo ".env não encontrado!"
    exit 1
fi

echo "Criando pasta destino se não existir..."
mkdir -p "$DEST"

echo "Sincronizando arquivos..."
rsync -av --delete "$SOURCE" "$DEST"

echo "Abrindo repositório no VSCode..."
code "$REPO"

echo "✔ Sincronização concluída."
