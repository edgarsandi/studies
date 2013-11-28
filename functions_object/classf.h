#ifndef CLASSF_H
#define CLASSF_H

class Classf
{
public:
    Classf();
    double operator() (double x) {
        return 2 * x;
    }
};

#endif // CLASSF_H
