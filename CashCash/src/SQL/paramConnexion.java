package SQL;

public class paramConnexion {
	private String nomUtilisateur;
	private String motDePasse;
	private String serveurBD;
	private String driverSGBD;
	
	public paramConnexion() {
		this.nomUtilisateur = "root";
		this.motDePasse = "";
		this.serveurBD = "MySQL";
		this.driverSGBD = "org.gjt.mm.mysql.Driver";
	}
	
	
	public String getNomUtilisateur() {
		return nomUtilisateur;
	}
	public void setNomUtilisateur(String nomUtilisateur) {
		this.nomUtilisateur = nomUtilisateur;
	}
	
	
	public String getMotDePasse() {
		return motDePasse;
	}
	public void setMotDePasse(String motDePasse) {
		this.motDePasse = motDePasse;
	}
	
	
	public String getServeurBD() {
		return serveurBD;
	}
	public void setServeurBD(String serveurBD) {
		this.serveurBD = serveurBD;
	}
	
	public String getDriverSGBD() {
		return driverSGBD;
	}
	public void setDriverSGBD(String driverSGBD) {
		this.driverSGBD = driverSGBD;
	}
	
}
