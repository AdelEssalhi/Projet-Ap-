package classCashCash;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;

import appli.ContratMaintenance;

public class Client {
	
	private String numclient; 
	private String raisonSociale;
	private String siren ; 
	private String codeApe;
	private String adresse; 
	private String telClient;
	private String email;
	
	private int dureeDeplacement; 
	private int distanceKm;
	
	private  ArrayList <Materiel> listeMateriel; 
	private ContratMaintenance leContrat;
	
	public Client(String numclient , String raisonSociale , String siren , String codeApe , String adresse , String telClient, String email , int dureeDeplacement , int distanceKm , ArrayList <Materiel> listeMateriel ,ContratMaintenance leContrat) {
		this.numclient = numclient ;
		this.raisonSociale = raisonSociale;
		this.siren = siren ; 
		this.codeApe = codeApe ; 
		this.adresse = adresse; 
		this.telClient = telClient ; 
		this.email = email; 
		this.dureeDeplacement= dureeDeplacement ; 
		this.distanceKm = distanceKm;
		this.listeMateriel = new ArrayList <Materiel>();
		this.leContrat = leContrat;
	}
	
	
	public ArrayList<Materiel> getMateriels() {
		return listeMateriel;
	}
	public ArrayList<Materiel> getMaterielsSousContrat() throws SQLException {
		
		Connection connexion = DriverManager.getConnection("jdbc:mysql://localhost/cashcash", "root" , "");
		Statement st = connexion.createStatement() ; 
		
		ResultSet res = st.executeQuery("Select * from materiel");
		Materiel materiel = new Materiel();
		while(res.next()) {
			
		}
		ArrayList<Materiel> listeMaterielsSousContrats = new ArrayList<Materiel>();
		
			
		    
		return listeMaterielsSousContrats;
		
	}
	
}
