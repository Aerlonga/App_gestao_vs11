#!/bin/bash
# docker-compose up -d       # Isso vai iniciar os serviços do Docker em segundo plano (detached mode).
docker-compose exec app bash  # Isso vai abrir uma sessão Bash dentro do contêiner "app".