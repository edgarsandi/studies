#include <iostream>
#include <math.h>
#include "classf.h"

using namespace std;

double f(double x) {
    return 2 * x;
}

double soma(double (*f)(double), int n, int m) {
    double resultado = 0;
    for (int i = n; i <= m; i++) {
        resultado += f(i);
    }
    return resultado;
}

double soma2(Classf f, int n, int m) {
    double result = 0;
    for (int i = n; i <= m; i++) {
        result += f(i);
    }
    return result;
}

double raiz(double (*f)(double), double a, double b, double epsilon) {
    double metade = (a + b) / 2;
    while (f(metade) != 0 && fabs(b -a) > epsilon) {
        if (f(a) * f(metade) < 0) {// se f(a) e f(metade) têm sinais opostos
            b = metade;
        } else {
            a = metade;
        }
        metade = (a + b) / 2;
    }
    return metade;
}

Classf::Classf()
{
    cout << soma(f, 1, 5) << endl;
    cout << soma(sin, 3, 7) << endl;
    cout << raiz(f, 10, 20, 5) << endl;


    Classf cf;
    cout << soma2(cf, 2, 5) << endl;
}

