#include <iostream>
#include "math.h"
#include "classf.h"

using namespace std;

int main() {
    cout << Classf::soma(Classf::f, 1, 5) << endl;
    cout << Classf::soma(sin, 3, 7) << endl;
    cout << Classf::raiz(Classf::f, 10, 20, 5) << endl;

    Classf cf;
    cout << Classf::soma2(cf, 2, 5) << endl;

    cout << Classf::soma3(Classf(), 2, 5) << endl;
}

