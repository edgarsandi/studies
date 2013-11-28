#include <iostream>

using namespace std;

class Classe1 {
public:
    virtual void f() {
        cout << "funcao f() na classe1" << endl;
    }
    void g() {
        cout << "funcao g() na classe1" << endl;
    }
};

class Classe2 {
public:
    virtual void f() {
        cout << "funcao f() na classe2" << endl;
    }
    void g() {
        cout << "funcao g() na classe2" << endl;
    }
};

class Classe3 {
public:
    virtual void h() {
        cout << "funcao h() na classe3" << endl;
    }
};

int main() {
    Classe1 objeto1, *p;
    Classe2 objeto2;
    Classe3 objeto3;
    p = &objeto1;
    p->f();
    p->g();
    p = (Classe1*) &objeto2;
    p->f();
    p->g();
    p = (Classe1*) &objeto3;
    p->f();
    p->g();
    //p->h();
}
