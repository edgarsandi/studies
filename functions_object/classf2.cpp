#include <iostream>
#include "classf2.h"

using namespace std;

double marcha (double x) {
    return 2 * x;
}

double soma3(Classf2 f, int n, int m) {
    double result = 0;
    for (int i = n; i <= m; i++) {
        result += f.marcha(i);
    }
    return result;
}

Classf2::Classf2()
{
    cout << soma3(Classf2(), 2, 5) << endl;
}
