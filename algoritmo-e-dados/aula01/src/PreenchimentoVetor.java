package aula01;

import java.util.Scanner;

public class PreenchimentoVetor {
    public static void main(String[] args) {
        Scanner leitor = new Scanner(System.in);
        int[] vetor = new int[5];

        for(int i = 0; i < vetor.length; i++){
            System.out.print("Digite um valor da posição " + i + ": ");
            vetor[i] = leitor.nextInt();
        }
        leitor.close();

        for (int i = 0; i < vetor.length; i++) {
            System.out.println("vetor[" + i + "] = " + vetor[i] + " ");
        }
    }
}
