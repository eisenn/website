website
=======

PHP-based webpage

index.php is the only webpage at this site so far.  It takes advantage of some Python scripts, viz.:

- The script counter.py takes care of tracking and updating the number of hits on index.php.  Each hit, it reads the last number from the file 'count.txt', increments it, returns the new count, and updates the file to reflect this.  The script ordinals.py is a helper module for this, turning positive integers into their ordinal representation (eg. 1 -> 1st, 2 -> 2nd).

- The script hit_times.py logs a timestamp each time the webpages is accessed.  It calls the script present_time.py, which gives a formatted string displaying the time and date the page was accessed.  This information is pickled to a file, which paves the way for future extension of the logging to other parameters and other data structures.