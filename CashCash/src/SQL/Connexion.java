package SQL;
import java.sql.*;

import javax.swing.JOptionPane;
public class Connexion {

	public static void main(String[] args) throws SQLException {
		
		try {
			//chargement du driver mysql
			Class.forName("com.mysql.jdbc.Driver");
			//Connexion
			Connection connexion = DriverManager.getConnection("jdbc:mysql://localhost/cashcash", "root" , "");
			JOptionPane.showMessageDialog (null, "Connexion Ok");
			//Création d'un etat de connexion
			Statement st = connexion.createStatement() ; 
			//Création d'une requete 
			ResultSet res = st.executeQuery("Select * from technicien ");
			//parcours des données 
			while(res.next()) {
				System.out.println("NomTechnicien : " + res.getString(2));
			}
		} catch (ClassNotFoundException e) {
			// Exception declenchee si la classe n'est pas chargee par forName
			 JOptionPane.showMessageDialog(null, "Classe introuvable " +
			e.getMessage ());
		}
		
		catch (SQLException ex)
		 {
		 // Exception declenchee en cas de probleme avec le SGBD
		 JOptionPane.showMessageDialog(null, "Connexion impossible : " +
		ex.getMessage ());
		 }


	}
	
}
