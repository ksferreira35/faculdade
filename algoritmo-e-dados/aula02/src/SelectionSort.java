import java.util.Scanner;

public class SelectionSort {
    public static void main(String[] args) {
        // Declaração de variáveis
        Scanner leitor = new Scanner(System.in);
        int[] vetor = new int[7];

        // Entrada de dados
        for (int i = 0; i < vetor.length; i++) {
            System.out.print("Digite um valor: ");
            vetor[i] = leitor.nextInt();
        }

        leitor.close();

        // Processamento
        // Primeiro ao penultimo
        for (int i = 0; i < (vetor.length - 1); i++) {
            for (int j = (i + 1); j < vetor.length; j++) {
                if (vetor[i] > vetor[j]) {
                    int temp = vetor[i];
                    vetor[i] = vetor[j];
                    vetor[j] = temp;
                }
            }
        }

        // Saída de dados
        for (int n : vetor) {
            System.out.print(n + " ");
        }
    }
}
