#include <iostream>

using namespace std;

int strlen2(char *string) {
    int i = 0;
    while(*(string + i++));
    return i;
}

int main()
{
    cout << strlen2("Hello World!") << endl;
    int i = 10;
    int *p;
    int *q;

    cout << "a)  &i   : " << &i    << endl;  // a)  &i:   0x7fffb3bf48fc
    cout << "b)  *&i  : " << *&i   << endl;  // b)  *&i:  10
//  cout << "c)  &*i  : " << &*i   << endl;  // error: invalid type argument of unary '*' (have 'int')
    cout << "d)  *&*p : " << *&*p  << endl;  // d)  *&*p: 611092808
    cout << "e)  *&p  : " << *&p   << endl;  // e)  *&p:  0x400cd0
    cout << "f)  &*p  : " << &*p   << endl;  // f)  &*p:  0x400cd0
    cout << "g)  &*&i : " << &*&i  << endl;  // g)  &*&i: 0x7fffb3bf48fc
    cout << "h)  *&*p : " << *&*p  << endl;  // h)  *&*p: 611092808
    cout << "i)  **&p : " << **&p  << endl;  // i)  **&p: 611092808
    cout << "j)  *&p  : " << *&p   << endl;  // j)  *&p:  0x400cd0
    cout << "k)  &*p  : " << &*p   << endl;  // k)  &*p:  0x400cd0


//    p = &i;   // i: 10 p: 0x7fffddc0c24c q: 0x400900
//    p = *&i;  // error: invalid conversion from 'int' to 'int*' [-fpermissive]
//    p = &*i;  // error: invalid type argument of unary '*' (have 'int')
//    i = *&*p; // i: 1 p: 0x7fff3ec8fba0 q: 0
//    i = *&p;  // error: invalid conversion from 'int*' to 'int' [-fpermissive]
//    i = &*p;  // error: invalid conversion from 'int*' to 'int' [-fpermissive]
//    p = &*&i; // i: 10 p: 0x7fff698ae7ac q: 0x400900
//    q = *&*p; // error: invalid conversion from 'int' to 'int*' [-fpermissive]
//    q = **&p; // error: invalid conversion from 'int' to 'int*' [-fpermissive]
//    q = *&p;  // i: 10 p: 0x400b30 q: 0x400b30
//    q = &*p;  // i: 10 p: 0x7fff238d3e90 q: 0x7fff238d3e90

    cout << " i: " << i << " p: " << p << " q: " << q << endl;

    return 0;
}

