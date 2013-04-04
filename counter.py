#!/usr/bin/python

from ordinals import ordinal

with open('count.txt', 'r+') as f:
    try:
        count = 1 + int(f.readline())
    except ValueError:
        count = 1 # initialize count if no file exists

    f.seek(0)
    f.write(str(count))
    print ordinal(count)