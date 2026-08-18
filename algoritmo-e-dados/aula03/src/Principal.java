public class Principal {
    public static void main(String[] args) {
        Lista objLista = new Lista();

        objLista.listar();
        System.out.println("====");
        objLista.inserir(1);
        objLista.inserir(2);
        objLista.inserir(3);
        objLista.inserir(4);
        objLista.inserir(5);
        objLista.listar();
        System.out.println("====");
        objLista.remover(1);
        objLista.remover(3);
        objLista.remover(5);
        objLista.remover(10);
        objLista.listar();
        System.out.println("====");

        // Segundo teste
        for (int i =0 ; i < 1000000 ; i++) {
            objLista.inserir(i);
            System.out.println(i);
        }
    }
}
