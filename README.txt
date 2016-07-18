Part 1, Image to Code:
----------------------
App Architecture:
HTML5, SASS, CSS, Ractive.js & Gulp 

- Ractive.js: Use of this Framework to iterate the different elements of our list (in our case, only 3), but thinking of scalable content (N items).
Even though jQuery could have been another option to load the data, I am always striving to use the latest technologies to keep me updated.
- SASS: As the CSS file becomes a bit long, I rather use preprocessor SASS which enhance the performance and allow me to use
global variables and nested classes/attributes, and hence, more control.
- Gulp: To automate processes. Conversion sass file to css file and then minify and rename output file.

Part 3, PHP:
------------
Instead of WAMP, I have used nmp-server-2.1, lighter and portable to simulate a server on a PHP environment.
Included styles in the php file. After several tries, not able to load external files.   