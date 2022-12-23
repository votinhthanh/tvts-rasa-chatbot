## 1. Run Chatbot step-by-step:
Move to folder tvts-rasa-chatbot
```commandline
cd tvts-rasa-chatbot
```
#### 1.1 Start your docker containers (Terminal 1):
```commandline
docker-compose up
```
#### 1.2 Run migration + import data (Terminal 2):
```commandline
docker exec -it rasa-apache bash
```
```commandline
composer install
```
```commandline
php artisan migrate:fresh --seed
```
#### 1.3. Docker for run RASA server API (Terminal 3):
```commandline
docker exec -it rasa-app bash
```
```commandline
rasa run -m models/20221212-163817-tomato-trough.tar.gz --enable-api --cors "*"
```
#### 1.4. Docker for run RASA Action Server to call API (Terminal 4):
```commandline
docker exec -it rasa-app bash
```
```commandline
rasa run actions
```

## 2. Train chatbot:
Start your docker containers (Terminal 1):
```commandline
docker-compose up
```
Access into the container (Terminal 2):
```commandline
docker exec -it rasa-app bash
```
Validate Data
```commandline
rasa data validate
```
### 2.1. Run train:
Access into the container and choose a config to run:
```commandline
rasa train --config configs/config-light.yml
```
```commandline
rasa train --config configs/config-gpt2.yml
```
```commandline
rasa train --config configs/config-bert.yml
```

### 2.2. Run test:
```commandline
rasa test nlu --config configs/config-light.yml --cross-validation --runs 1 --folds 5 --out gridresults/config-light
```
```commandline
rasa test nlu --config configs/config-gpt2.yml --cross-validation --runs 1 --folds 5 --out gridresults/config-gpt-2
```
```commandline
rasa test nlu --config configs/config-bert.yml --cross-validation --runs 1 --folds 5 --out gridresults/config-bert
```
