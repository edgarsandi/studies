#include <iostream>
#include "classf.h"


double Classf::marcha (double x) {
    return 2 * x;
}

double soma3(Classf f, int n, int m) {
    double result = 0;
    for (int i = n; i <= m; i++) {
        result += f.marcha(i);
    }
    return result;
}
