### 1.1. Docker for dev and run test:
Uncomment this line in `docker-compose.yml` to keep the container run when you're in developing:
```commandline
entrypoint: ["tail", "-f", "/dev/null"]
```
Start your docker containers:
```commandline
docker-compose up -d
```
Access to the container:
```commandline
docker exec -it rasa-app bash
```

### 1.2. Docker for run RASA server API:
Uncomment this line in `docker-compose.yml` to run the RASA server API:
```commandline
docker-compose up -d
```
Open 2 terminal windows by command:
```commandline
docker exec -it rasa-app bash
```
[1] Run NLU server:
```commandline
rasa run -m models/20221212-163817-tomato-trough.tar.gz --enable-api --cors "*"
```
[2] Run action server:
```commandline
rasa run actions
```

## 2. Test data:
Access into the container and choose a config to run:

```commandline
rasa data validate
```

## 3. Run train:
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

## 4. Run fold test:
Access into the container and choose a config to run:

```commandline
rasa test nlu --config configs/config-light.yml --cross-validation --runs 1 --folds 5 --out gridresults/config-light
```

```commandline
rasa test nlu --config configs/config-gpt2.yml --cross-validation --runs 1 --folds 5 --out gridresults/config-gpt-2
```

```commandline
rasa test nlu --config configs/config-bert.yml --cross-validation --runs 1 --folds 5 --out gridresults/config-bert
```
