package cybersecurity.criptografia;

import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.util.Base64;
import javax.crypto.Cipher;
import javax.crypto.SecretKey;
import javax.crypto.spec.SecretKeySpec;

public class DES3 {
	private static String encriptar(String texto, String chave) throws Exception {
		
		Cipher objCifra = Cipher.getInstance("DESede"); // instancia da cifra
		SecretKey objChave = new SecretKeySpec(chave.getBytes("UTF-8"), "DESede");
		objCifra.init(Cipher.ENCRYPT_MODE, objChave);
		byte[] cifra = objCifra.doFinal(texto.getBytes("UTF-8"));
		return Base64.getEncoder().encodeToString(cifra);
	}
	
	
	private static String decriptar(String cifra, String chave) throws Exception {
		
		Cipher objCifra = Cipher.getInstance("DESede"); // instancia da cifra
		SecretKey objChave = new SecretKeySpec(chave.getBytes("UTF-8"), "DESede");
		objCifra.init(Cipher.DECRYPT_MODE, objChave);
		byte[] texto = objCifra.doFinal(Base64.getDecoder().decode(cifra));
		return new String(texto, "UTF-8");
	}
	public static void main(String[] args) {
		BufferedReader leitor = new BufferedReader(
								new InputStreamReader(System.in));
		try {
			System.out.print("Digite um texto: ");
			String texto = leitor.readLine();
			
			System.out.print("Digite a chave: ");
			String chave = leitor.readLine();
			
			String cifra = encriptar(texto, chave);
			System.out.println(cifra);
			System.out.println(decriptar(cifra, chave));
			
		} catch (Exception e) {
			System.out.println(e);
		}
	}
	
}
