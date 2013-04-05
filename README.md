website
=======

PHP-based webpage

index.php is the only webpage so far.  It takes advantage of some Python scripts, viz.:

The script counter.py takes care of tracking and updating the number of hits on index.php.  Each hit, it reads the last number from the file 'count.txt', increments it, returns the new count, and updates the file to reflect this.  The script ordinals.py is a helper module for this, turning positive integers into their ordinal representation (eg. 1 -> 1st, 2 -> 2nd).

The script present_time.py gives a formatted string displaying the time and date the page was accessed.