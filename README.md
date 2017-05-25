# lorem-ipsum
PHP Package for [http://www.lipsum.com](http://www.lipsum.com) generator.
Use http request to get data with custom types and length 

Usage
-----

Words
```
    $loremIpsum = new \Fancyproject\LoremIpsum\TextBuilder();
    $words = $loremIpsum->words(4);
```

Paragraphs
```
    $loremIpsum = new \Fancyproject\LoremIpsum\TextBuilder();
    $words = $loremIpsum->paragraphs(3);
```

Bytes
```
    $loremIpsum = new \Fancyproject\LoremIpsum\TextBuilder();
    $words = $loremIpsum->bytes(16);
```

Disable "Start with 'Lorem ipsum dolor sit amet...'"
```
    $loremIpsum = new \Fancyproject\LoremIpsum\TextBuilder();
    $loremIpsum->disableStartWithLorem();
    $words = $loremIpsum->lists(6);
```
