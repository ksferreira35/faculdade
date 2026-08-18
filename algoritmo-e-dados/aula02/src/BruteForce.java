import java.util.Scanner;

public class BruteForce {
    public static void main(String[] args) {
        // Entrada de variáveis
        Scanner leitor = new Scanner(System.in);
        int[] vetor = new int[1000000000];
        int param = 0;

        // Construção do vetor
        for (int i = 0; i < vetor.length; i++) {
            vetor[i] = ((int)(vetor.length * Math.random()));
        }

        // Pesquisas
        do {
            System.out.print("Digite um parametro de pesquisa: ");
            param = leitor.nextInt();

            for (int i = 0; i < vetor.length; i++) {
                if (vetor[i] == param) {
                    System.out.println("OH YEAHHHHHHHHHH POSICAO: " + i);
                    break;
                }
            }
        } while (param != -1);

        leitor.close();
    }
}
