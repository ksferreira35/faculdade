import java.util.Scanner;

public class BubbleSort {
    public static void main(String[] args) {
        // Entrada de variáveis
        Scanner leitor = new Scanner(System.in);
        int[] vetor = new int[7];

        // Entrada de Dados
        for (int i = 0; i < vetor.length; i++) {
            System.out.print("Digite um valor: ");
            vetor[i] = leitor.nextInt();
        }

        leitor.close();

        // Processamento
        boolean continuar = false;
        do {
            continuar = false;
            for (int i = 0; i < vetor.length - 1; i++) {
                if (vetor[i] > vetor[i + 1]) {
                    int tmp = vetor[i];
                    vetor[i] = vetor[i + 1];
                    vetor[i + 1] = tmp;
                    continuar = true;
                }
            }

        } while (continuar);

        // Saída de dados
        for (int n : vetor) {
            System.out.print(n + " ");
        }
    }
}
