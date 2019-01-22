# normaldistribution
A script to generate normally distributed pseudorandom values in PHP without needing to install any extensions

Call this script to generate an array of normally distributed random numbers, which does not need any additional PHP extensions installed.

Parameters you can use are:

$mean (default = 0) - The mean of the normally distributed numbers you want to generate

$sd (default = 1) - The standard distribution of the normally distributed numbers you want to generate

$values (default = 100) - The number of values to generate.

The numbers generated are not truly random as they use the mr_rand function as opposed to a truly random number generator.

Generating more values may be slower (both for generation and for further processing) but may generate sets which are more reflective of the mean and standard deviation specified.

Distribution is output in the $distribution array.
