#include <stdio.h>
#include <stdlib.h>
#include <iostream>

int a = 1;
main(){
    using namespace std;
    int a = 3;
    char name[10];
    int age;

    printf("local a = %d \n", a);
    printf("global a = %d \n", ::a);

    cout << "Edgar" << endl << "Rodrigues" << endl << "Sandi \n";

    cout << "Enter your name: \n";
    cin >> name >> age;

    cout << "Your name is: " << name << " and you is " << age << " years old \n";
}
