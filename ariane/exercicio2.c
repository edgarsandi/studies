#include <stdio.h>

int main() {
	int n = 0;
	int menor;
	int maior = 0;
	float numero = 0.0;
	float media = 0.0;

	printf("Entre com o numero de vezes: ");
	scanf("%d", &n);

	for (int i = 1; i <= n; i++) {
		printf("Entre com o %do numero: ", i);
		scanf("%f", &numero);

		media = media + numero;

		if (numero < menor) {
			menor = numero;
		}
		if (numero > maior) {
			maior = numero;
		}
	}

	printf("A media eh: %.2f \n", (media / n));
	printf("O menor numero eh: %i \n", menor);
	printf("O maior numero eh: %i \n", maior);

	return 0;
}