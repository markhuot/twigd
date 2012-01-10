* **Twig** is a modern template engine for PHP.
* **twig** is a command line watcher for Twig that converts a directory of Twig files into rendered HTML files.

It is invoked like so:
    
    $ php twig /path/to/twig/base/dir

twig will then go and find any *.twig files and convert them into their corrosponding *.html files. With the support of the entire Twig parser you can use variables, filters, includes, extends, etc…

Ignoring Files
--------------
To have Twig ignore a file simply preface the filename with an underscore (_). So, _base.twig would not be converted. This is useful if you have oage templates, like index.twig, that extend or include sub templates, such as _base.twig.