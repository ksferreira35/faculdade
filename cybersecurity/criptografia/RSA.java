package cybersecurity.criptografia;

import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.security.KeyPair;
import java.security.KeyPairGenerator;
import java.security.MessageDigest;
import java.util.Base64;
import javax.crypto.Cipher;
import javax.crypto.SecretKey;
import javax.crypto.spec.IvParameterSpec;
import javax.crypto.spec.SecretKeySpec;

public class RSA {
	private static KeyPair gerarParDeChavesAssimetricas() throws Exception {
		KeyPairGenerator objGerador = KeyPairGenerator.getInstance("RSA");
		objGerador.initialize(8192);
		return objGerador.generateKeyPair();
	}
	
	private static String EncriptarRSA(byte[] chave, KeyPair parDeChaves) throws Exception {
		Cipher objCifra = Cipher.getInstance("RSA");
		objCifra.init(Cipher.ENCRYPT_MODE, parDeChaves.getPublic());
		byte[] cifra = objCifra.doFinal(chave);
		return Base64.getEncoder().encodeToString(cifra);
	}
	
	private static byte[] decriptarRSA(String cifra, KeyPair parDeChaves) throws Exception {
		Cipher objCifra = Cipher.getInstance("RSA");
		objCifra.init(Cipher.DECRYPT_MODE, parDeChaves.getPrivate());
		return objCifra.doFinal(Base64.getDecoder().decode(cifra));
	}
	
	private static String encriptarAES(String texto, byte[] chave) throws Exception {
		Cipher objCifra = Cipher.getInstance("AES/CBC/PKCS5Padding");
		SecretKey objChave = new SecretKeySpec(chave, "AES");
		IvParameterSpec objIv = new IvParameterSpec("0123456789101112".getBytes());
		objCifra.init(Cipher.ENCRYPT_MODE, objChave, objIv);
		byte[] cifra = objCifra.doFinal(texto.getBytes("UTF-8"));
		return Base64.getEncoder().encodeToString(cifra);
	}
	
	private static String decriptarAES(String cifra, byte[] chave) throws Exception {
		Cipher objCifra = Cipher.getInstance("AES/CBC/PKCS5Padding");
		SecretKey objChave = new SecretKeySpec(chave, "AES");
		IvParameterSpec objIv = new IvParameterSpec("0123456789101112".getBytes());
		objCifra.init(Cipher.DECRYPT_MODE, objChave, objIv);
		byte[] texto = objCifra.doFinal(Base64.getDecoder().decode(cifra));
		return new String(texto, "UTF-8");
	}
	
	private static byte[] calcularSHA256(byte[] chave) throws Exception {
		return MessageDigest.getInstance("SHA-256").digest(chave);
	}
	
	private static byte[] randomizarChaveSimatrica() throws Exception {
		byte[] chave = new byte[100];
		for (int i = 0; i < chave.length; i++) {
			chave[i] = (byte) (256 * Math.random());
		}
		return chave;
		
	}
	
	public static void main(String[] args) {
		BufferedReader leitor = new BufferedReader(
								new InputStreamReader(System.in));
		
		try {
			KeyPair parDeChaveAssimetricas = gerarParDeChavesAssimetricas();
			byte[] chaveSimetrica = randomizarChaveSimatrica();
			
			System.out.print("Digite um texto: ");
			String texto = leitor.readLine();
			
			String cifraChave = EncriptarRSA(chaveSimetrica, parDeChaveAssimetricas);
			String cifraTexto = encriptarAES(texto, calcularSHA256(chaveSimetrica));
			
			System.out.println(cifraChave);
			System.out.println(cifraTexto);
			
			System.out.println(decriptarAES(cifraTexto, calcularSHA256(
							   decriptarRSA(cifraChave, parDeChaveAssimetricas))));
		} catch (Exception e) {
			System.out.println("Erro aqui: " + e);
		}
	}
}
