#ifndef CLASSF_H
#define CLASSF_H

class Classf
{
public:
    double operator()(double x);
    double marcha (double x);
    double f(double x);
    double raiz(double *f, double a, double b, double epsilon);
    double soma(Classf f, int n, int m);
    double soma2(Classf f, int n, int m);
    double soma3(Classf f, int n, int m);
};

#endif // CLASSF_H
