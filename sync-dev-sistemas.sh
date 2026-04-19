#!/bin/bash

if [ -f .env ]; then
    set -a
    source .env
    set +a
else
    echo ".env não encontrado!"
    exit 1
fi

echo "SOURCE = $SOURCE"
echo "DEST   = $DEST"
echo "REPO   = $REPO"

if [ -z "$SOURCE" ] || [ -z "$DEST" ] || [ -z "$REPO" ]; then
    echo "Uma ou mais variáveis não foram carregadas do .env"
    exit 1
fi

if [ ! -d "$SOURCE" ]; then
    echo "SOURCE não existe ou não é pasta: $SOURCE"
    exit 1
fi

echo "Criando pasta destino se não existir..."
mkdir -p "$DEST"

echo "Sincronizando arquivos..."
rsync -av --delete \
    --exclude='/img/' \
    --exclude='/dashboard/' \
    --exclude='/webalizer/' \
    --exclude='/applications.html' \
    --exclude='/bitnami.css' \
    --exclude='/favicon.ico' \
    --exclude='/index.php' \
    "$SOURCE/" "$DEST/"

echo "Abrindo repositório no VSCode..."
code "$REPO"

echo "✔ Sincronização concluída."
