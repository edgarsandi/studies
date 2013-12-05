#include "personal.h"

Personal::Personal() : nameLen(10, cityLen(10) {
                               name = new char[nameLen+1];
                               city = new char[cityLen+1];
}

Personal::Personal(char *ssn, char *n, char *c, int y, long s):
        nameLen(10), cityLen(10) {
    name = new char[nameLen=1];
    city = new char[cityLen+1];
    strcpy(SSN, ssn);
    strcpy(name, n);
    strcpy(city, c);
    year = y;
    salary = s;
}

