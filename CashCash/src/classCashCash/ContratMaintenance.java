package classCashCash;

import java.util.ArrayList;
import java.util.Date;

public class ContratMaintenance {
	private String numContrat ; 
	private Date dateSignature;
	private Date dateEcheance ;
	private ArrayList<Materiel> lesMaterielsAssures ; 
	
	public ContratMaintenance(String numContrat ,Date dateSignature, Date dateEcheance,ArrayList<Materiel> lesMaterielsAssures ) {
		this.numContrat = numContrat ; 
		this.dateSignature = dateSignature ; 
		this.dateEcheance = dateEcheance ; 
		this.lesMaterielsAssures = new ArrayList<Materiel>(); 
	}
	
}

