```commandline
rasa test nlu --config configs/config-light.yml --cross-validation --runs 1 --folds 5 --out gridresults/config-light
```

```commandline
rasa test nlu --config configs/config-bert.yml --cross-validation --runs 1 --folds 5 --out gridresults/config-bert
```

```commandline
rasa test nlu --config configs/config-roberta.yml --cross-validation --runs 1 --folds 5 --out gridresults/config-roberta
```