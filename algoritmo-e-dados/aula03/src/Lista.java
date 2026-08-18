public class Lista {
    // Propriedades da classe
    private No cabeca = null;

    // Métodos da classe
    public void inserir(int numero) {
        // Caso fácil: lista vazia
        if (cabeca == null) {
            cabeca = new No(numero, null);
            return;
        }

        // Caso difícil: lista NÃO vazia
        No ultimo = cabeca;
        while (ultimo.getProximo() != null) {
            ultimo = ultimo.getProximo();
        }
        ultimo.setProximo(new No(numero, null));
    }

    public void remover(int numero) {
        // Caso muito fácil: lista vazia
        if (cabeca == null) {
            return;
        }

        // Caso fácil: so um item na lista para excluir
        if (cabeca.getNumero() == numero) {
            cabeca = cabeca.getProximo();
            return;
        }

        // Caso difícil: excluir algum nó no meio da lista
        No anterior = cabeca;
        while ( (anterior.getProximo() != null) &&
                (anterior.getProximo().getNumero() != numero) ) {
            anterior = anterior.getProximo();
        }


        // Caso fácil: not found 404
        if (anterior.getProximo() == null) {
            // Caso em que foi tentada a exclusão de um número que não existe
            return;
        }

        // Caso da exclusão propriamente dita ou no meio, ou no fim
        anterior.setProximo(anterior.getProximo().getProximo());
    }

    public void listar() {
        No ponteiro = cabeca;
        while (ponteiro != null) {
            System.out.println(ponteiro.getNumero());
            ponteiro = ponteiro.getProximo();
        }
    }
}