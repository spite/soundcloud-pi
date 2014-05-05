soundcloud-pi
=============

Solution to souncloud challenge  
https://developers.soundcloud.com/blog/buzzwords-contest

>Your challenge is to write an algorithm that finds the 10 sequences that most closely approximate the reference image. Each result should include the sequence and its position (after the decimal point) in π. [...] You should run your algorithm against the following data set (approximately 1 GB), which contains the first 1,000,000,000 (billion) digits of π.

Solution
-------

I decided to use the GPU to accelerate the calculations.

There's a PHP script to server pieces of the dataset according to a size and an offset.

Those values are downloaded via xmlHttpRequest and the resulting Uint8Array is used to create an RGBA data texture that is used in a fragment shader. The results are then read back with JavaScript (ugh, I know) and then the best results stored. When it's all done, the results are sorted and the 10 first are shown on the console.

All this is performed using JavaScript, with three.js to handle WebGL.

**You need to download the file pi-billion.txt from the soundcloud article**

Results
-------

The results are interesting. Even though it's not remotely the fastest or most optimized of solutions (and I'm not even sure the results are actually right, but it's looks like they are), I'm getting pretty decent times.

Regardless of texture size, it processes the whole set very quickly: 

512x512 texture: 7851.902ms  
1024x1024 texture: 6452.450ms  
2048x2048 texture: 6172.722ms

License
-------

MIT licensed

Copyright (C) 2014 Jaume Sanchez Elias http://twitter.com/thespite

http://www.clicktorelease.com