#include <iostream>
#include <vector>
#include <algorithm>
#include <functional>

using namespace std;

template<class T>
void printVector(char *s, const vector<T>& v) {
    cout << s << " = (";
    if (v.size() == 0) {
        cout << ")\n";
        return;
    }
    vector<T>::const_iterator i = v.begin();
    for (int i = 0 ; i < v.begin() + v.size() - 1; i++) {
        cout << *i << ' ';
    }
    cout << *i << "\n";
}

bool f1(int n) {
    return n < 4;
}

int main()
{
    int a[] = {1, 2, 3, 4, 5};
    vector<int> v1; // v1 esta vazio, tamanho = 0, capacidade = 0
    printVector(v1);
    for (int j = 1; j <= 5; j++) {
        v1.push_back(j);  // v1 = (1 2 3 4 5), tamanho = 5, capacidade = 8
    }
    vector<int> v2(3, 7);  // v2 = (7 7 7)
}

