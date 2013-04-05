#!/usr/bin/python

import pickle
import sys

import present_time

# In this script I use pickle, to allow for easy extension to logging other
# types of info, and storing it in other data structures.

stats_file = 'stats.txt'


def read_stats():
    """Unpickle list of access times from file and return it."""
    return pickle.load(open(stats_file, 'r'))

def write_stats(obj):
    """Pickle obj to stats file."""
    pickle.dump(obj, open(stats_file, 'w'))

def show_stats():
    """Print out the recorded access times."""
    times = read_stats()
    for time in times:
        print time


if __name__ == "__main__":

    hit_time = present_time.now()
    print hit_time

    times = read_stats() # un-pickle the stats

    times.append(hit_time) # append the latest hit time
    write_stats(times) # pickle the appended times
