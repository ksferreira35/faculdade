import java.util.Scanner;

public class Principal {
    public static void main(String[] args) {
        // Declaração de variáveis
        Scanner leitor = new Scanner(System.in);
        ListaDupla objLista = new ListaDupla();
        int opcao = 0;

        // Processamento
        while (opcao != 5) {
            System.out.println("+================+");
            System.out.println("| Menu de Opções |");
            System.out.println("+================+");
            System.out.println("| 1 - Inserir    |");
            System.out.println("| 2 - Excluir    |");
            System.out.println("| 3 - Imprimir   |");
            System.out.println("| 4 - Um milhão  |");
            System.out.println("| 5 - Sair       |");
            System.out.println("+================+");
            System.out.print("Digite a sua opção: ");
            opcao = leitor.nextInt();

            if (opcao == 1) {
                System.out.print("Digite um número para inserir: ");
                objLista.inserir(leitor.nextInt());
            } else if (opcao == 2) {
                System.out.print("Digite um número para excluir: ");
                objLista.remover(leitor.nextInt());
            } else if (opcao == 3) {
                objLista.imprimir();
            } else if (opcao == 4) {
                for (int i = 0 ; i < 1000000 ; i++) {
                    objLista.inserir(i);
                }
            }
        }
        leitor.close();
    }
}
