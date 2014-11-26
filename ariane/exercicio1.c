#include <stdio.h>

int main() {
	int numero = 0;
	int maior = 0;

	for (int i = 1; i <= 10; i++) {
		printf("Entre com um numero: ");
		scanf("%i", &numero);

		if(numero > maior) {
			maior = numero;
		}
	}

	printf("O maior numero digitado eh: %i \n", maior);
	return 0;
}