# PHPBench Tutorial

To run the benchmark:
```shell
./vendor/bin/phpbench run tests/Benchmark --report=default
```

By increasing the Iterations the output would generate lines according to the number of iterations. To reduce this the following command can be used:
```shell
php vendor/bin/phpbench run tests/Benchmark --report=aggregate
```

After adding the configuration for the path and the report we now can run the phpbench command with just the additional of the specific report as parameter. The specification is done by using the key of the element in the `report.generators` config. For example like this:
```shell
php vendor/bin/phpbench run --report=consumption_of_time
```
