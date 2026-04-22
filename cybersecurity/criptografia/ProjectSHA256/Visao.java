package cybersecurity.criptografia.ProjectSHA256;

import javax.swing.JButton;
import javax.swing.JFrame;
import javax.swing.JScrollPane;
import javax.swing.JTextArea;
import javax.swing.JTextField;

public class Visao extends JFrame {
	// Propriedade da classe
	private static final long serialVersionUID = 1L;
	
	private JTextArea txtTexto = new JTextArea();
	private final JScrollPane jspTexto = new JScrollPane(txtTexto);
	
	private JTextField txtResumo = new JTextField();
	
	private final JButton btnCalcular = new JButton("Calcular");
	
	// METODO PRINCIPAL DE EXECUCAO DA CLASSE
	public static void main(String[] args) {
		new Visao().setVisible(true);
	}
	
	// METODO CONSTRUTOR DA CLASSE
	
	public Visao() {
		// Configuracao da janela
		setTitle("Calcular do Resumo Unidirecional SHA-256");
		setSize(500, 400);
		setDefaultCloseOperation(EXIT_ON_CLOSE);
		setLocationRelativeTo(null);
		setLayout(null);
		
		// Configuração da area de texto
		jspTexto.setBounds(10, 10, 465, 280);
		add(jspTexto);
		txtTexto.setLineWrap(true);
		
		// Configuração da caixa de resumo
		txtResumo.setBounds(10, 300, 465, 20);
		add(txtResumo);
		
		// Configuração do botão de calcular
		btnCalcular.setBounds(190, 330, 100, 20);
		add(btnCalcular);
		
		btnCalcular.addActionListener(e -> {
			try {
				txtResumo.setText(SHA256.calcularHash(
				txtTexto.getText()));	
			} catch (Exception e2) {}
		});
	}
}
