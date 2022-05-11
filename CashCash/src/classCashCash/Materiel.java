package classCashCash;

import java.util.Date;

public class Materiel {
	private int numSerie ;
	private Date dateVente ;
	private float prixVente ;
	private String emplacement ;
	private TypeMateriel leType ;
	public int getNumSerie() {
		return numSerie;
	}
	public void setNumSerie(int numSerie) {
		this.numSerie = numSerie;
	}
	public Date getDateVente() {
		return dateVente;
	}
	public void setDateVente(Date dateVente) {
		this.dateVente = dateVente;
	}
	public float getPrixVente() {
		return prixVente;
	}
	public void setPrixVente(float prixVente) {
		this.prixVente = prixVente;
	}
	public String getEmplacement() {
		return emplacement;
	}
	public void setEmplacement(String emplacement) {
		this.emplacement = emplacement;
	}
	public TypeMateriel getLeType() {
		return leType;
	}
	public void setLeType(TypeMateriel leType) {
		this.leType = leType;
	} 
}
