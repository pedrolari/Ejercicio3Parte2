# Installation

## For Mac
brew install make

## For Linux
- sudo apt install make
- ls /usr/bin/make
- sudo apt install build-essential

### Perform the following steps to install the project:

- make make-init ENVS="ENV=prod TAG=latest"
- make dev-init
- make docker-build
- make docker-up
- make setup

## POSTMAN
- POST: http://localhost/api/registerAndNotify
- Body raw JSON: {
  "email": "nombre.usuario@gmail.com",
  "name": "Usuario de prueba"
  }
