import java.util.Random;
import java.util.Scanner;

public class PasswordGenerator {
    static final String UPPER = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    static final String LOWER = "abcdefghijklmnopqrstuvwxyz";
    static final String DIGITS = "0123456789";
    static final String SYMBOLS = "!@#$%&*()-_=+[]{}";
    
    @SuppressWarnings("ConvertToTryWithResources")
    public static void main(String[] args) {
        Random random = new Random();
        try (Scanner scanner = new Scanner(System.in)) {

            System.out.println("=== Gerador de Senhas Seguras ===");

            System.out.print("Comprimento da senha: ");
            int length = scanner.nextInt();

            System.out.print("Incluir letras maiúsculas? (s/n): ");
            boolean useUpper = scanner.next().equalsIgnoreCase("s");

            System.out.print("Incluir letras minúsculas? (s/n): ");
            boolean useLower = scanner.next().equalsIgnoreCase("s");

            System.out.print("Incluir números? (s/n): ");
            boolean useDigits = scanner.next().equalsIgnoreCase("s");

            System.out.print("Incluir símbolos? (s/n): ");
            boolean useSymbols = scanner.next().equalsIgnoreCase("s");

            String charPool = "";
            if (useUpper) charPool += UPPER;
            if (useLower) charPool += LOWER;
            if (useDigits) charPool += DIGITS;
            if (useSymbols) charPool += SYMBOLS;

            if (charPool.isEmpty()) {
                System.out.println("Erro: selecione pelo menos um tipo de caractere.");
                return;
            }

            StringBuilder password = new StringBuilder();
            for (int i = 0; i < length; i++) {
                int index = random.nextInt(charPool.length());
                password.append(charPool.charAt(index));
            }

            System.out.println("Senha gerada: " + password);
        }
    }
}
