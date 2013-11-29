#include <iostream>
#include "math.h"
#include "classf.h"

using namespace std;

int main() {
    Classf cf;

    cout << soma(f, 1, 5) << '\n';
    cout << soma(sin, 3, 7) << '\n';
    cout << raiz(f, 10, 20, 5) << '\n';

    cout << soma2(cf, 2, 5) << '\n';

    cout << soma3(Classf(), 2, 5) << '\n';
}
