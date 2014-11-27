#include <stdio.h>
#include <string.h>

int main() {
	int idade_entrada = 0;
	int idade = 0;
	int mulheres = 0;
	int homens = 0;
	int jovens = 0;
	char sexo[1];

	for (int i = 1; i <= 3; i++) {
		printf("Entre com a idade: ");
		scanf("%d", &idade_entrada);
		idade = idade_entrada;
		
		printf("Entre com o sexo: ");
		scanf("%s", &sexo);

		if ( idade >= 0 && idade <= 80 ) {
			if (idade <= 21) {
				jovens = jovens + 1;
			}

			if (idade >= 40 && (strncasecmp("M", sexo) == 0) ) {
				homens = homens + 1;
			}

			if ( strncasecmp("F", sexo) == 0 ) {
				mulheres = mulheres + 1;
			}
		}
	}

	printf("Quantidade de Mulheres: %d \n", mulheres);
	printf("Quantidade de Homens: %d \n", homens);
	printf("Quantidade de Jovens: %d \n", jovens);

	return 0;
}