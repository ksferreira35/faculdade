public class ListaDupla {
    // Propriedades da classe
    private No cabeca = null;

    // Métodos da classe
    public void inserir(int numero) {
        // Caso fácil:
        // Referência nova (esquerda) e referência velha (direita).
        cabeca = new No(numero, null, cabeca);
        if (cabeca.getProximo() != null) {
            cabeca.getProximo().setAnterior(cabeca);
        }
    }

    public void remover(int numero) {
        // Caso MUITO fácil: lista vazia
        if (cabeca == null) {
            return;
        }

        // Caso fácil: excluir o primeiro nó da lista
        if (cabeca.getNumero() == numero) {
            cabeca = cabeca.getProximo();

            if (cabeca != null) {
                cabeca.setAnterior(null);
            }

            return;
        }

        // Procura do número a ser excluído
        No ponteiro = cabeca;
        while (ponteiro != null && ponteiro.getNumero() != numero) {
            ponteiro = ponteiro.getProximo();
        }

        // Caso difícil: o número não foi encontrado
        if (ponteiro == null) {
            return;
        }

        // Caso MUITO difícil: o número foi encontrado
        ponteiro.getAnterior().setProximo(ponteiro.getProximo());
        if (ponteiro.getProximo() != null) {
            ponteiro.getProximo().setAnterior(ponteiro.getAnterior());
        }
    }

    public void imprimir() {
        No ponteiro = cabeca;
        while (ponteiro != null) {
            System.out.println(ponteiro.getNumero());
            ponteiro = ponteiro.getProximo();
        }
    }
}
